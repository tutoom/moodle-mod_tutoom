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
 * The mod_tutoom roles helper
 *
 * @package   mod_tutoom
 * @copyright 2025 onwards, Tutoom Inc
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace mod_tutoom\local\helpers;

use context;
use stdClass;

/**
 * Utility class for all roles routines helper
 *
 * @package mod_tutoom
 * @copyright 2025 onwards, Tutoom Inc
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class roles {
    /** @var int The tutoom viewer role (maps to Tutoom API role 1) */
    public const ROLE_VIEWER = 1;

    /** @var int The tutoom moderator role (maps to Tutoom API role 2) */
    public const ROLE_MODERATOR = 2;

    /**
     * Returns user roles in a context.
     *
     * @param context $context
     * @param int $userid
     * @return array
     */
    public static function get_user_roles(context $context, int $userid): array {
        global $DB;
        $userroles = get_user_roles($context, $userid);
        if ($userroles) {
            $where = '';
            foreach ($userroles as $userrole) {
                $where .= (empty($where) ? ' WHERE' : ' OR') . ' id=' . $userrole->roleid;
            }
            $userroles = $DB->get_records_sql('SELECT * FROM {role}' . $where);
        }
        return $userroles;
    }

    /**
     * Returns guest role wrapped in an array.
     *
     * @return array
     */
    protected static function get_guest_role(): array {
        $guestrole = get_guest_role();
        return [$guestrole->id => $guestrole];
    }

    /**
     * Returns an array containing all the users in a context wrapped for html select element.
     *
     * @param context $context
     * @return array
     */
    public static function get_users_array(context $context): array {
        $users = (array) get_enrolled_users($context, '', 0, 'u.*', null, 0, 0, true);
        return array_map(
            function ($u) {
                return ['id' => $u->id, 'name' => fullname($u)];
            },
            $users
        );
    }

    /**
     * Returns an array containing all the roles in a context.
     *
     * @param context|null $context
     * @param bool|null $onlyviewableroles
     * @return array
     */
    public static function get_roles(?context $context = null, ?bool $onlyviewableroles = true): array {
        global $CFG;

        if ($onlyviewableroles == true && $CFG->branch >= 35) {
            $roles = (array) get_viewable_roles($context);
            foreach ($roles as $key => $value) {
                $roles[$key] = $value;
            }
        } else {
            $roles = (array) role_get_names($context);
            foreach ($roles as $key => $value) {
                $roles[$key] = $value->localname;
            }
        }

        return $roles;
    }

    /**
     * Returns an array containing all the roles in a context wrapped for html select element.
     *
     * @param context|null $context
     * @param bool $onlyviewableroles
     * @return array
     */
    protected static function get_roles_select(?context $context = null, bool $onlyviewableroles = true): array {
        global $CFG;

        if ($onlyviewableroles == true && $CFG->branch >= 35) {
            $roles = (array) get_viewable_roles($context);
            foreach ($roles as $key => $value) {
                $roles[$key] = ['id' => $key, 'name' => $value];
            }
        } else {
            $roles = (array) role_get_names($context);
            foreach ($roles as $key => $value) {
                $roles[$key] = ['id' => $value->id, 'name' => $value->localname];
            }
        }

        return $roles;
    }

    /**
     * Returns role that corresponds to an id.
     *
     * @param string|int $id
     * @return stdClass|null
     */
    protected static function get_role($id): ?stdClass {
        $roles = (array) role_get_names();
        if (is_numeric($id) && isset($roles[$id])) {
            return (object) $roles[$id];
        }
        foreach ($roles as $role) {
            if ($role->shortname == $id) {
                return $role;
            }
        }
        return null;
    }

    /**
     * Returns an array to populate a list of participants used in mod_form.js.
     *
     * @param context $context
     * @param stdClass|null $tutoom
     * @return array
     */
    public static function get_participant_data(context $context, ?stdClass $tutoom = null): array {
        $data = [
            'all' => [
                'name' => get_string('mod_form_field_participant_list_type_all', 'mod_tutoom'),
                'children' => [],
            ],
        ];
        $data['role'] = [
            'name' => get_string('mod_form_field_participant_list_type_role', 'mod_tutoom'),
            'children' => self::get_roles_select($context, true),
        ];
        $data['user'] = [
            'name' => get_string('mod_form_field_participant_list_type_user', 'mod_tutoom'),
            'children' => [],
        ];

        if (empty($tutoom)) {
            return $data;
        }

        $data['user']['children'] = self::get_users_array($context);

        return $data;
    }

    /**
     * Returns an array to populate a list of participants used in mod_form.php.
     *
     * @param stdClass|null $tutoom
     * @param context $context
     * @return array
     */
    public static function get_participant_list(?stdClass $tutoom, context $context): array {
        if ($tutoom == null) {
            return self::get_participant_rules_encoded(
                self::get_participant_list_default($context)
            );
        }
        if (empty($tutoom->participants)) {
            $tutoom->participants = "[]";
        }
        $rules = json_decode($tutoom->participants, true);
        if (empty($rules)) {
            $rules = self::get_participant_list_default($context);
        }
        return self::get_participant_rules_encoded($rules);
    }

    /**
     * Returns an array to populate a list of participants with default values.
     *
     * Default rules: All users are viewers, editingteacher/teacher/manager roles are moderators
     *
     * @param context $context
     * @return array
     */
    public static function get_participant_list_default(context $context): array {
        global $DB;

        $participantlist = [];

        // Rule 1: All users are viewers by default.
        $participantlist[] = [
            'selectiontype' => 'all',
            'selectionid' => 'all',
            'role' => self::ROLE_VIEWER,
        ];

        // Rule 2: editingteacher role gets moderator access.
        $editingteacherrole = $DB->get_record('role', ['shortname' => 'editingteacher']);
        if ($editingteacherrole) {
            $participantlist[] = [
                'selectiontype' => 'role',
                'selectionid' => (string) $editingteacherrole->id,
                'role' => self::ROLE_MODERATOR,
            ];
        }

        // Rule 3: teacher role gets moderator access.
        $teacherrole = $DB->get_record('role', ['shortname' => 'teacher']);
        if ($teacherrole) {
            $participantlist[] = [
                'selectiontype' => 'role',
                'selectionid' => (string) $teacherrole->id,
                'role' => self::ROLE_MODERATOR,
            ];
        }

        // Rule 4: manager role gets moderator access.
        $managerrole = $DB->get_record('role', ['shortname' => 'manager']);
        if ($managerrole) {
            $participantlist[] = [
                'selectiontype' => 'role',
                'selectionid' => (string) $managerrole->id,
                'role' => self::ROLE_MODERATOR,
            ];
        }

        return $participantlist;
    }

    /**
     * Returns an array to populate a list of participants with encoded role IDs.
     *
     * @param array $rules
     * @return array
     */
    protected static function get_participant_rules_encoded(array $rules): array {
        foreach ($rules as $key => $rule) {
            if ($rule['selectiontype'] !== 'role' || is_numeric($rule['selectionid'])) {
                continue;
            }
            $role = self::get_role($rule['selectionid']);
            if ($role == null) {
                unset($rules[$key]);
                continue;
            }
            $rule['selectionid'] = $role->id;
            $rules[$key] = $rule;
        }
        return $rules;
    }

    /**
     * Returns an array to populate participant selection dropdowns in mod_form.php.
     *
     * @return array
     */
    public static function get_participant_selection_data(): array {
        return [
            'type_options' => [
                'all' => get_string('mod_form_field_participant_list_type_all', 'mod_tutoom'),
                'role' => get_string('mod_form_field_participant_list_type_role', 'mod_tutoom'),
                'user' => get_string('mod_form_field_participant_list_type_user', 'mod_tutoom'),
            ],
            'type_selected' => 'all',
            'options' => ['all' => '---------------'],
            'selected' => 'all',
        ];
    }

    /**
     * Evaluate if a user in a context is moderator based on roles and participation rules.
     *
     * @param context $context
     * @param array $participantlist
     * @param int|null $userid
     * @return bool
     */
    public static function is_moderator(context $context, array $participantlist, ?int $userid = null): bool {
        global $USER;

        // If an admin, then also a moderator.
        if (has_capability('moodle/site:config', $context)) {
            return true;
        }

        if (!is_array($participantlist)) {
            return false;
        }

        if (empty($userid)) {
            $userid = $USER->id;
        }

        $userroles = self::get_guest_role();
        if (!isguestuser()) {
            $userroles = self::get_user_roles($context, $userid);
        }

        return self::is_moderator_validator($participantlist, $userid, $userroles);
    }

    /**
     * Iterates participant list rules to evaluate if a user is moderator.
     *
     * @param array $participantlist
     * @param int $userid
     * @param array $userroles
     * @return bool
     */
    protected static function is_moderator_validator(array $participantlist, int $userid, array $userroles): bool {
        // Iterate participant rules.
        foreach ($participantlist as $participant) {
            if (self::is_moderator_validate_rule($participant, $userid, $userroles)) {
                return true;
            }
        }
        return false;
    }

    /**
     * Evaluate if a user is moderator based on roles and a particular participation rule.
     *
     * @param array $participant
     * @param int $userid
     * @param array $userroles
     * @return bool
     */
    protected static function is_moderator_validate_rule(array $participant, int $userid, array $userroles): bool {
        if ($participant['role'] == self::ROLE_VIEWER) {
            return false;
        }

        // Validation for the 'all' rule.
        if ($participant['selectiontype'] == 'all') {
            return true;
        }

        // Validation for a 'user' rule.
        if ($participant['selectiontype'] == 'user') {
            if ($participant['selectionid'] == $userid) {
                return true;
            }
            return false;
        }

        // Validation for a 'role' rule.
        $role = self::get_role($participant['selectionid']);
        if ($role != null && array_key_exists($role->id, $userroles)) {
            return true;
        }

        return false;
    }
}
