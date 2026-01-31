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

/**
 * Class for the structure used for restore Tutoom.
 *
 * @package   mod_tutoom
 * @copyright 2025 onwards, Tutoom Inc.
 * @license   https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

/**
 * Define all the restore steps that will be used by the restore_url_activity_task.
 *
 * @package   mod_tutoom
 * @copyright 2025 onwards, Tutoom Inc.
 * @license   https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class restore_tutoom_activity_structure_step extends restore_activity_structure_step {
    /**
     * Structure step to restore one tutoom activity.
     *
     * @return array
     */
    protected function define_structure() {
        $paths = [];
        $paths[] = new restore_path_element('tutoom', '/activity/tutoom');
        $paths[] = new restore_path_element('tutoom_log', '/activity/tutoom/logs/log');
        // Return the paths wrapped into standard activity structure.
        return $this->prepare_activity_structure($paths);
    }

    /**
     * Process a tutoom restore.
     *
     * @param object $data The data in object form
     * @return void
     */
    protected function process_tutoom($data) {
        global $DB;
        $data = (object) $data;
        $data->course = $this->get_courseid();
        $data->timemodified = $this->apply_date_offset($data->timemodified);
        // Reset roomid to null - rooms are not shared across course copies.
        $data->roomid = null;
        // Insert the tutoom record first to get the new ID.
        $newitemid = $DB->insert_record('tutoom', $data);
        // Generate a new unique groupid for the restored activity.
        $groupid = tutoom_unique_classid_seed();
        $DB->set_field('tutoom', 'groupid', $groupid, ['id' => $newitemid]);
        // Immediately after inserting "activity" record, call this.
        $this->apply_activity_instance($newitemid);
    }

    /**
     * Process a tutoom log restore.
     *
     * @param object $data The data in object form
     * @return void
     */
    protected function process_tutoom_log($data) {
        global $DB;
        $data = (object) $data;
        $data->courseid = $this->get_courseid();
        $data->tutoomid = $this->get_new_parentid('tutoom');
        // Map user ID if mapping exists, otherwise keep original (same site restore).
        $newuserid = $this->get_mappingid('user', $data->userid);
        $data->userid = $newuserid ? $newuserid : $data->userid;
        $data->timecreated = $this->apply_date_offset($data->timecreated);
        // Insert the log record.
        $DB->insert_record('tutoom_logs', $data);
    }

    /**
     * Actions to be executed after the restore is completed
     *
     * @return array
     */
    protected function after_execute() {
        // Add tutoom related files, no need to match by itemname (just internally handled context).
        $this->add_related_files('mod_tutoom', 'intro', null);
    }
}
