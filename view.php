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
 * View for Tutoom Moodle Activity Module.
 *
 * @package   mod_tutoom
 * @copyright 2025 onwards, Tutoom Inc.
 * @license   https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

require(__DIR__ . '/../../config.php');
require_once(__DIR__ . '/lib.php');
require_once(__DIR__ . '/locallib.php');
require_once(__DIR__ . '/viewlib.php');

use mod_tutoom\local\helpers\roles;

global $USER;

// Course_module ID, or optional_param is the query param from current URL.
$id = optional_param('id', 0, PARAM_INT);

// Module instance id.
$t = optional_param('t', 0, PARAM_INT);

if ($id) {
    $cm = get_coursemodule_from_id('tutoom', $id, 0, false, MUST_EXIST);
    $course = $DB->get_record('course', ['id' => $cm->course], '*', MUST_EXIST);
    $moduleinstance = $DB->get_record('tutoom', ['id' => $cm->instance], '*', MUST_EXIST);
} else if ($t) {
    $moduleinstance = $DB->get_record('tutoom', ['id' => $t], '*', MUST_EXIST);
    $course = $DB->get_record('course', ['id' => $moduleinstance->course], '*', MUST_EXIST);
    $cm = get_coursemodule_from_instance('tutoom', $moduleinstance->id, $course->id, false, MUST_EXIST);
} else {
    throw new moodle_exception('missingidandcmid', 'mod_tutoom');
}
require_login($course, true, $cm);

$modulecontext = context_module::instance($cm->id);

$PAGE->set_url('/mod/tutoom/view.php', ['id' => $cm->id]);
$PAGE->set_title(format_string($moduleinstance->name));
$PAGE->set_heading(format_string($course->fullname));
$PAGE->set_context($modulecontext);

// Determine user role using participant rules.
$participantlist = [];
if (!empty($moduleinstance->participants)) {
    $participantlist = json_decode($moduleinstance->participants, true);
    if (!is_array($participantlist)) {
        $participantlist = [];
    }
}

// If no participant rules defined, fall back to default rules.
if (empty($participantlist)) {
    $participantlist = roles::get_participant_list_default($modulecontext);
}

$ismoderator = roles::is_moderator($modulecontext, $participantlist, $USER->id);

echo $OUTPUT->header();
echo tutoom_view_render($id, $moduleinstance, $ismoderator);

echo $OUTPUT->footer();
