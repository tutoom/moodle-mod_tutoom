<?php
// This file is part of Moodle - https://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * File to connect to Tutoom Backend.
 *
 * @package   mod_tutoom
 * @copyright 2025 onwards, Tutoom Inc.
 * @license   https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

use mod_tutoom\room;
use mod_tutoom\recording;
use mod_tutoom\local\config;
use mod_tutoom\local\helpers\roles;

require(__DIR__ . '/../../config.php');
require_once(__DIR__ . '/lib.php');

global $PAGE, $USER, $SESSION, $DB, $CFG;

$params = [];
$params['action'] = optional_param('action', '', PARAM_TEXT);
$params['id'] = required_param('id', PARAM_INT);
$params['roomId'] = optional_param('roomId', '', PARAM_TEXT);
$params['logoutUrl'] = optional_param('logoutUrl', '', PARAM_URL);
$params['page'] = optional_param('page', 1, PARAM_INT);

if (empty($params['action'])) {
    header('HTTP/1.0 400 Bad Request. Parameter [' . $params['action'] . '] was not included');
    return;
}

try {
    header('Content-Type: application/json; charset=utf-8');

    $action = strtolower($params['action']);

    $id = $params['id'];

    $cm = get_coursemodule_from_id('tutoom', $id, 0, false, MUST_EXIST);
    $course = $DB->get_record('course', ['id' => $cm->course], '*', MUST_EXIST);

    require_login($course, true, $cm);
    require_sesskey();

    $tutoomtable = $DB->get_record('tutoom', ['id' => $cm->instance], '*', MUST_EXIST);

    $modulecontext = context_module::instance($cm->id);

    // Determine user role using participant rules.
    $participantlist = [];
    if (!empty($tutoomtable->participants)) {
        $participantlist = json_decode($tutoomtable->participants, true);
        if (!is_array($participantlist)) {
            $participantlist = [];
        }
    }

    // If no participant rules defined, fall back to default rules.
    if (empty($participantlist)) {
        $participantlist = roles::get_participant_list_default($modulecontext);
    }

    $ismoderator = roles::is_moderator($modulecontext, $participantlist, $USER->id);
    $role = $ismoderator ? roles::ROLE_MODERATOR : roles::ROLE_VIEWER;

    $fullname = fullname($USER);
    $tutoomid = $tutoomtable->id;
    $roomid = $tutoomtable->roomid;
    // Hybrid groupId: siteidentifier.courseid.instanceid (unique per activity, multi-site safe).
    $groupid = sprintf('%s.%s.%s', $CFG->siteidentifier, $course->id, $tutoomtable->id);

    if ($action == 'get_room') {
        if (isset($roomid)) {
            $roominfo = room::get_room_info($roomid, $tutoomid);
            echo json_encode($roominfo);
        }

        return;
    }

    if ($action == 'start_room') {
        $roomname = $tutoomtable->name;  // Use activity name for room name.
        $welcomemessage = $tutoomtable->welcome_message;
        $logouturl = $params['logoutUrl'];
        $recordingenabled = (bool)$tutoomtable->recording_enabled;

        // Use lock to prevent race condition when multiple moderators create room simultaneously.
        $locktype = 'mod_tutoom_room_create';
        $resource = 'tutoom:' . $tutoomid;
        $locktimeout = 10; // 10 seconds - enough for typical API call.

        $lockfactory = \core\lock\lock_config::get_lock_factory($locktype);

        if ($lock = $lockfactory->get_lock($resource, $locktimeout)) {
            try {
                // CRITICAL: Re-read roomid inside lock to get fresh state from database.
                // The $roomid variable from line 83 may be stale if another moderator just created a room.
                $freshrecord = $DB->get_record('tutoom', ['id' => $tutoomid], 'roomid', MUST_EXIST);
                $currentroomid = $freshrecord->roomid;

                if (isset($currentroomid) && $currentroomid !== null) {
                    // Room already exists (created by another moderator while we were waiting for lock).
                    $roominfo = room::get_room_info($currentroomid, $tutoomid);
                    echo json_encode($roominfo);
                } else {
                    // Safe to create - we have exclusive lock.
                    $response = room::create_room($groupid, $logouturl, $roomname, $welcomemessage, $tutoomid, $recordingenabled);
                    echo json_encode($response);
                }
            } finally {
                // Always release lock, even if exception occurs.
                $lock->release();
            }
        } else {
            // Could not acquire lock within timeout - another moderator is creating the room.
            // Return 503 to indicate temporary unavailability, client should retry.
            header('HTTP/1.1 503 Service Unavailable');
            header('Retry-After: 2');
            echo json_encode([
                'error' => get_string('room_creation_in_progress', 'mod_tutoom'),
                'retry' => true,
            ]);
        }
        return;
    }

    if ($action == 'join_room') {
        if (isset($roomid) && $roomid !== null) {
            $response = room::join_room($roomid, $fullname, $role, $tutoomid);
            echo json_encode($response);
        }

        return;
    }

    if ($action == 'end_room') {
        $incomingroomid = $params['roomId'];
        $coursename = $course->fullname;
        $logouturl = $params['logoutUrl'];

        // Use lock to prevent race condition when multiple moderators end room simultaneously.
        $locktype = 'mod_tutoom_room_create';
        $resource = 'tutoom:' . $tutoomid;
        $locktimeout = 10; // 10 seconds - enough for typical API call.

        $lockfactory = \core\lock\lock_config::get_lock_factory($locktype);

        if ($lock = $lockfactory->get_lock($resource, $locktimeout)) {
            try {
                // CRITICAL: Re-read roomid inside lock to get fresh state from database.
                // The $roomid variable from line 83 may be stale if another moderator just deleted the room.
                $freshrecord = $DB->get_record('tutoom', ['id' => $tutoomid], 'roomid', MUST_EXIST);
                $currentroomid = $freshrecord->roomid;

                // Verify the incoming roomid matches what we expect.
                if ($roomid === $incomingroomid && isset($currentroomid) && $currentroomid !== null) {
                    // Room exists, proceed with deletion.
                    $response = room::end_room($incomingroomid, $tutoomid);
                    echo json_encode($response);
                } else if (!isset($currentroomid) || $currentroomid === null) {
                    // Room already deleted by another moderator - this is SUCCESS (idempotent).
                    // Return success response so second moderator doesn't see an error.
                    echo json_encode([
                        'deleted' => true,
                        'message' => get_string('room_already_ended', 'mod_tutoom'),
                    ]);
                }
            } finally {
                // Always release lock, even if exception occurs.
                $lock->release();
            }
        } else {
            // Could not acquire lock within timeout - another moderator is deleting the room.
            // Return 503 to indicate temporary unavailability, client should retry.
            header('HTTP/1.1 503 Service Unavailable');
            header('Retry-After: 2');
            echo json_encode([
                'error' => get_string('room_deletion_in_progress', 'mod_tutoom'),
                'retry' => true,
            ]);
        }

        return;
    }

    if ($action == 'get_recordings') {
        $page = $params['page'] ?? 1;

        $recordings = recording::get_recordings($groupid, $page);
        echo json_encode($recordings);

        return;
    }

    if ($action == 'join_playback') {
        $roomidplayback = $params['roomId'];

        $response = recording::join_playback($roomidplayback);
        echo json_encode($response);

        return;
    }

    header('HTTP/1.0 400 Bad request. The action ' . $action . ' doesn\'t exist');
} catch (Exception $e) {
    echo ($e);
    header('HTTP/1.0 500 Internal Server Error. ' . $e->getMessage());
}
