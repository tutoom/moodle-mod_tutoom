<?php
// This file is part of Moodle - http://moodle.org/
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
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

namespace mod_tutoom;

defined('MOODLE_INTERNAL') || die;

global $CFG;
require_once($CFG->dirroot . '/mod/tutoom/lib.php');

use stdClass;

/**
 * Class to describe Tutoom Room.
 *
 * @package   mod_tutoom
 * @copyright 2025 onwards, Tutoom Inc.
 * @license   https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class room extends api_handler_base {
    /**
     * Return room information.
     *
     * @param string $roomid
     * @param string $tutoomid
     * @return stdClass
     */
    public static function get_room_info(string $roomid, string $tutoomid): stdClass {
        global $DB;

        $client = new api_client();
        $response = $client->get("rooms/$roomid");

        return self::handle_api_response($response, function ($data, $results) use ($roomid, $tutoomid, $DB) {
            $results->roomId = $roomid;
            $results->numParticipants = $data->participantCount ?? 0;
            $results->roomStatus = $data->status ?? 'unknown';
            $results->roomDate = isset($data->createdAt)
                ? userdate(strtotime($data->createdAt), '%I:%M %p')
                : '';

            if ($data->status === 'finished') {
                $DB->set_field('tutoom', 'roomid', null, ['id' => $tutoomid]);
                $results->roomId = null;
            }
        });
    }



    /**
     * Creates a tutoom room.
     *
     * @param string $groupid Unique identifier: siteidentifier.courseid.instanceid
     * @param string $logouturl
     * @param string $roomname The name to display for the room (typically the activity name)
     * @param string $welcomemessage
     * @param string $tutoomid
     * @param bool $recordingenabled
     * @return stdClass
     */
    public static function create_room(string $groupid, string $logouturl, string $roomname, string $welcomemessage, string $tutoomid, bool $recordingenabled): stdClass {
        global $DB;

        $configmanager = config_manager::get_instance();
        $recordingautostart = $configmanager->is_recording_auto_start_enabled();

        $params = [
            'roomName' => $roomname,
            'groupId' => $groupid,
            'logoutUrl' => $logouturl,
            'isRecordingEnabled' => $recordingenabled,
            'isAutoStartEnabled' => $recordingautostart,
            'welcomeMessage' => $welcomemessage,
        ];

        $client = new api_client();
        $response = $client->post("rooms/", $params);

        return self::handle_api_response($response, function ($data, $results) use ($tutoomid, $DB) {
            $roomid = $data->id;
            $DB->set_field('tutoom', 'roomid', $roomid, ['id' => $tutoomid]);

            // Add create log.
            activity_logger::log_if_enabled($tutoomid, $roomid, TUTOOM_LOG_EVENT_CREATE_ROOM);

            $results->roomId = $data->id;
            $results->numParticipants = $data->participantCount ?? 0;
            $results->roomDate = isset($data->createdAt)
                ? userdate(strtotime($data->createdAt), '%I:%M %p')
                : '';
        });
    }


    /**
     * Generate a url to connect to a tutoom room.
     *
     * @param string $roomid
     * @param string $fullname
     * @param int $role
     * @param string $tutoomid
     * @return stdClass
     */
    public static function join_room(string $roomid, string $fullname, int $role, string $tutoomid): stdClass {
        global $USER;

        $params = [
            'userName' => $fullname,
            'externalUserId' => $USER->id,
            'userRole' => $role,
        ];

        $client = new api_client();
        $response = $client->post("rooms/$roomid/tokens", $params);

        return self::handle_api_response($response, function ($data, $results) use ($tutoomid, $roomid) {
            $results->joinurl = $data->joinUrl ?? '';

            // Add join log.
            activity_logger::log_if_enabled($tutoomid, $roomid, TUTOOM_LOG_EVENT_JOIN_ROOM);
        });
    }


    /**
     * End tutoom room.
     *
     * @param string $incomingroomid
     * @param string $tutoomid
     * @return stdClass
     */
    public static function end_room(string $incomingroomid, string $tutoomid): stdClass {
        global $DB;

        $client = new api_client();
        $response = $client->delete("rooms/$incomingroomid");

        // Validate 2XX return HTTP code (204 No Content for successful deletion).
        return self::handle_api_response($response, function ($data, $results) use ($tutoomid, $incomingroomid, $DB) {
            $DB->set_field('tutoom', 'roomid', null, ['id' => $tutoomid]);
            $results->deleted = true;

            // Add end log.
            activity_logger::log_if_enabled($tutoomid, $incomingroomid, TUTOOM_LOG_EVENT_END_ROOM);
        });
    }
}
