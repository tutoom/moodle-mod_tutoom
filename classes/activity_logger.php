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
 * Activity logging helper.
 *
 * @package   mod_tutoom
 * @copyright 2025 onwards, Tutoom Inc.
 * @license   https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class activity_logger {
    /**
     * Log activity event if logging is enabled.
     *
     * @param string $tutoomid Tutoom instance ID
     * @param string $roomid Room ID
     * @param string $event Event constant (e.g., TUTOOM_LOG_EVENT_CREATE_ROOM)
     * @return void
     */
    public static function log_if_enabled(string $tutoomid, string $roomid, string $event) {
        global $DB;

        $configmanager = config_manager::get_instance();
        if (!$configmanager->is_activity_logs_enabled()) {
            return;
        }

        $tutoom = $DB->get_record('tutoom', ['id' => $tutoomid]);
        if (!$tutoom) {
            return;
        }

        $data = new stdClass();
        $data->course = $tutoom->course;
        $data->id = $tutoomid;
        $data->roomid = $roomid;

        tutoom_log($data, $event);
    }
}
