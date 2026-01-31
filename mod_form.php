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
 * The main mod_tutoom configuration form.
 *
 * @package     mod_tutoom
 * @copyright 2025 onwards, Tutoom Inc.
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

require_once($CFG->dirroot . '/course/moodleform_mod.php');
use mod_tutoom\local\helpers\roles;

/**
 * Module instance settings form.
 *
 * @package   mod_tutoom
 * @copyright 2025 onwards, Tutoom Inc
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class mod_tutoom_mod_form extends moodleform_mod {
    /**
     * Defines forms elements
     */
    public function definition() {
        global $CFG, $DB;

        $config = get_config("mod_tutoom");
        $recordingenabled = (int) $config->recording_enabled;

        $course = null;
        $courseid = optional_param('course', 0, PARAM_INT);

        if ($courseid) {
            $course = get_course($courseid);
        }
        if (!$course) {
            $cm = get_coursemodule_from_id(
                'tutoom',
                optional_param('update', 0, PARAM_INT),
                0,
                false,
                MUST_EXIST
            );
            $course = $DB->get_record(
                'course',
                ['id' => $cm->course],
                '*',
                MUST_EXIST
            );
        }

        $mform = $this->_form;

        $this->tutoom_mform_add_block_profiles($mform);

        // Adding the "general" fieldset, where all the common settings are shown.
        $mform->addElement('header', 'general', get_string('general', 'form'));

        // Adding the standard "name" field.
        $mform->addElement('text', 'name', get_string('tutoomname', 'mod_tutoom'), ['size' => '64']);

        if (!empty($CFG->formatstringstriptags)) {
            $mform->setType('name', PARAM_TEXT);
        } else {
            $mform->setType('name', PARAM_CLEANHTML);
        }

        $mform->addRule('name', null, 'required', null, 'client');
        $mform->addRule('name', get_string('maximumchars', '', 255), 'maxlength', 255, 'client');

        // Adding the standard "intro" and "introformat" fields.
        if ($CFG->branch >= 29) {
            $this->standard_intro_elements();
        } else {
            moodleform_mod::standard_intro_elements();
        }

        // Adding the rest of mod_tutoom settings, spreading all them into this fieldset
        // ... or adding more fieldsets ('header' elements) if needed for better logic.
        $mform->addElement('header', 'room', get_string('mod_form_block_room', 'mod_tutoom'));
        $mform->addElement(
            'textarea',
            'welcome_message',
            get_string('mod_form_field_welcome', 'mod_tutoom'),
            'wrap="virtual" rows="5" cols="60"'
        );
        $mform->setDefault('welcome_message', get_string('mod_form_field_welcome_default_message', 'mod_tutoom'));

        $mform->addElement('checkbox', 'recording_enabled', get_string('mod_form_field_record', 'mod_tutoom'));
        $mform->setDefault("recording_enabled", $recordingenabled);

        // Get participant list for role assignment.
        $context = \context_course::instance($course->id);
        $tutoom = null;
        if (!empty($this->_instance)) {
            $tutoom = $DB->get_record('tutoom', ['id' => $this->_instance], '*');
        }
        $participantlist = roles::get_participant_list($tutoom, $context);

        // Add participant role assignment section.
        $this->tutoom_mform_add_block_user_role_mapping($mform, $participantlist, $context, $tutoom);

        // Add standard elements.
        $this->standard_coursemodule_elements();

        // Add standard buttons.
        $this->add_action_buttons();
    }

    /**
     * Function for showing the block for selecting profiles.
     *
     * @param MoodleQuickForm $mform
     * @return void
     */
    private function tutoom_mform_add_block_profiles(MoodleQuickForm &$mform): void {
        $mform->addElement(
            'select',
            'type',
            get_string('mod_form_field_room_type', 'mod_tutoom'),
            tutoom_get_name_of_room_type()
        );
        $mform->addHelpButton('type', 'mod_form_field_room_type', 'mod_tutoom');
    }

    /**
     * Function for showing the block for setting participant roles.
     *
     * @param MoodleQuickForm $mform
     * @param array $participantlist
     * @param context $context
     * @param stdClass|null $tutoom
     * @return void
     */
    private function tutoom_mform_add_block_user_role_mapping(
        \MoodleQuickForm &$mform,
        array $participantlist,
        $context,
        $tutoom = null
    ): void {
        global $OUTPUT, $PAGE;

        $participantselection = roles::get_participant_selection_data();
        $mform->addElement(
            'header',
            'permissions',
            get_string('mod_form_block_participants', 'mod_tutoom')
        );
        $mform->setExpanded('permissions');

        // Hidden field to store JSON participant rules.
        $mform->addElement('hidden', 'participants', json_encode($participantlist));
        $mform->setType('participants', PARAM_TEXT);

        // Selection type dropdown (all/role/user).
        $selectiontype = new \single_select(
            new \moodle_url(\qualified_me()),
            'tutoom_participant_selection_type',
            $participantselection['type_options'],
            $participantselection['type_selected']
        );

        // Selection dropdown (specific role or user).
        $selectionparticipants = new \single_select(
            new \moodle_url(\qualified_me()),
            'tutoom_participant_selection',
            $participantselection['options'],
            $participantselection['selected']
        );

        // Add button.
        $action = new \single_button(
            new \moodle_url(\qualified_me()),
            get_string('mod_form_field_participant_list_action_add', 'mod_tutoom'),
            'post',
            \single_button::BUTTON_SECONDARY,
            ['name' => 'tutoom_participant_selection_add']
        );

        $pformcontext = [
            'selectionType' => $selectiontype->export_for_template($OUTPUT),
            'selectionParticipant' => $selectionparticipants->export_for_template($OUTPUT),
            'action' => $action->export_for_template($OUTPUT),
        ];

        $html = $OUTPUT->render_from_template('mod_tutoom/participant_form', $pformcontext);
        $mform->addElement(
            'static',
            'static_participant_list',
            get_string('mod_form_field_participant_list', 'mod_tutoom'),
            $html
        );

        // Add participant data as hidden div for JavaScript.
        $mform->addElement('html', \html_writer::div('', 'd-none', [
            'data-participant-data' => json_encode(roles::get_participant_data($context, $tutoom)),
        ]));

        // Initialize JavaScript.
        $PAGE->requires->js_call_amd('mod_tutoom/participants', 'init', []);
    }

    /**
     * Preprocess form data before display.
     *
     * @param array $defaultvalues
     * @return void
     */
    public function data_preprocessing(&$defaultvalues) {
        parent::data_preprocessing($defaultvalues);

        // No additional preprocessing needed for participants field.
        // It's already handled in get_participant_list().
    }

    /**
     * Validate form data.
     *
     * @param array $data
     * @param array $files
     * @return array Validation errors
     */
    public function validation($data, $files) {
        $errors = parent::validation($data, $files);

        // Validate participants JSON.
        if (!empty($data['participants'])) {
            $participants = json_decode(html_entity_decode($data['participants'], ENT_QUOTES, 'UTF-8'), true);

            if (!is_array($participants)) {
                $errors['participants'] = get_string('error_invalid_participants', 'mod_tutoom');
            } else {
                foreach ($participants as $participant) {
                    if (
                        !isset($participant['selectiontype']) ||
                        !isset($participant['selectionid']) ||
                        !isset($participant['role'])
                    ) {
                        $errors['participants'] = get_string('error_invalid_participants', 'mod_tutoom');
                        break;
                    }

                    if (!in_array($participant['role'], [1, 2])) {
                        $errors['participants'] = get_string('error_invalid_role', 'mod_tutoom');
                        break;
                    }
                }
            }
        }

        return $errors;
    }
}
