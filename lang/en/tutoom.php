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
 * Plugin strings are defined here.
 *
 * @package   mod_tutoom
 * @category  string
 * @copyright 2025 onwards, Tutoom Inc.
 * @license   https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['modulename'] = "Tutoom";
$string['pluginname'] = "Tutoom";
$string['pluginadministration'] = "";
$string['modulenameplural'] = "Tutoom";
$string['modulename_help'] = "Tutoom plugin lets you create from within Moodle realtime whiteboard rooms for distance education.";
$string['missingidandcmid'] = "Tutoom ID is incorrect. Please, go to your course and select your activity to correctly enter Tutoom.";
$string['index_error_noinstances'] = "There are no instances of Tutoom";

// Capabilities.
$string['tutoom:joinasmoderator'] = "Join as moderator a Tutoom room";
$string['tutoom:addinstance'] = "Add a new Tutoom room/activity";

// Initial config.
$string['config_api_secret_key'] = "Tutoom API secret key";
$string['config_api_secret_key_description'] = "The API secret key of your Tutoom account";
$string['config_general'] = "General configuration";
$string['config_general_description'] = "These settings are <b>always</b> used";
$string['config_activity_logs'] = "Write activity logs";
$string['config_activity_logs_description'] = "This option save logs when a room is created, deleted and user join to the room.";
$string['config_recording'] = "Recording";
$string['config_recording_description'] = "These settings are feature specific";
$string['config_recording_enabled'] = "Recording enabled by default";
$string['config_recording_enabled_description'] = "Room can be recorded by default. Can be editable in the Tuttom activity settings";
$string['config_recording_auto_start'] = "Recording auto start";
$string['config_recording_auto_start_description'] = "If the option is checked, rooms will start recording when moderator get in.";

// Initial form.
$string['tutoomname'] = "Name";
$string['mod_form_block_room'] = "Activity/Room settings";
$string['mod_form_field_welcome'] = "Welcome message";
$string['mod_form_field_welcome_default_message'] = "Welcome to the class. Feel free to ask any question.";
$string['mod_form_field_record'] = "Room can be recorded";
$string['mod_form_field_room_type'] = "Room type";

$string['room_type_room_with_recordings'] = "Room with recordings";
$string['room_type_room_only'] = "Room only";
$string['room_type_recording_only'] = "Recording only";

// Room info.
$string['view_conference_action_start'] = "Start room";
$string['view_conference_action_join'] = "Join room";
$string['view_conference_action_end'] = "End room";
$string['view_message_room_not_initalized'] = "The room has not started.";
$string['view_message_room_ended'] = "This room has ended. Please reload the page to continue";
$string['view_message_conference_in_this_room'] = "in this room";
$string['view_message_session_status_on'] = "ONLINE";
$string['view_message_session_status_off'] = "OFFLINE";
$string['view_message_session_started_at'] = "Started at";
$string['view_message_user'] = "user";
$string['view_message_users'] = "users";
$string['recording_title'] = "Recordings";
$string['recording_preview'] = "Preview";
$string['recording_date'] = "Date";
$string['recording_time'] = "Time";
$string['recording_duration'] = "Duration";
$string['recording_text_empty'] = "No recordings so far...";
$string['recording_loading'] = "Getting recordings...";
$string['recording_pagination'] = "Recordings pagination";
$string['recording_previous'] = "Previous";
$string['recording_next'] = "Next";
$string['recording_previous_page'] = "Go to previous page";
$string['recording_next_page'] = "Go to next page";
$string['recording_page'] = "Page";

// Errors.
$string['view_page_error_empty_credentials'] = "You need to configure Tutoom API credentials, more information here: https://tutoom.com/help/articles/native-moodle-plugin";

// Error messages and recovery suggestions.
$string['error_unauthorized'] = "Authentication failed: Invalid or missing API credentials.";
$string['error_unauthorized_suggestion'] = "Please contact your site administrator to verify the Tutoom API key configuration.";
$string['error_forbidden'] = "Access denied: You don't have permission to perform this action.";
$string['error_forbidden_suggestion'] = "Please contact your site administrator.";
$string['error_no_subscription'] = "No active Tutoom subscription found.";
$string['error_no_subscription_suggestion'] = "Please contact your site administrator to activate your Tutoom subscription.";
$string['error_max_rooms'] = "Maximum number of concurrent rooms reached for your subscription.";
$string['error_max_rooms_suggestion'] = "Please end existing rooms before creating new ones, or contact your administrator to upgrade your subscription.";
$string['error_subscription_inactive'] = "Your Tutoom subscription is not active.";
$string['error_subscription_inactive_suggestion'] = "Please contact your site administrator.";
$string['error_validation'] = "Invalid input provided.";
$string['error_validation_suggestion'] = "Please check your input and try again.";
$string['error_invalid_idempotency'] = "Invalid request format.";
$string['error_invalid_idempotency_suggestion'] = "Please refresh the page and try again.";
$string['error_room_not_found'] = "Room not found or has been deleted.";
$string['error_room_not_found_suggestion'] = "Please refresh the page. The room may have been deleted.";
$string['error_recording_not_found'] = "Recording not found.";
$string['error_recording_not_found_suggestion'] = "The recording may not be available yet or may have been deleted.";
$string['error_rate_limit'] = "Too many requests. Please slow down.";
$string['error_rate_limit_suggestion'] = "Please wait a moment and try again.";
$string['error_internal'] = "Server error occurred.";
$string['error_internal_suggestion'] = "Please try again in a few moments. If the problem persists, contact your administrator.";
$string['error_token_failed'] = "Failed to create access token.";
$string['error_token_failed_suggestion'] = "Please try again. If the problem persists, contact your administrator.";
$string['error_service_unavailable'] = "Tutoom service is temporarily unavailable.";
$string['error_service_unavailable_suggestion'] = "Please try again in a few moments.";
$string['error_network'] = "Network error: Unable to connect to Tutoom service.";
$string['error_network_suggestion'] = "Please check your internet connection and try again.";
$string['error_not_found'] = "Resource not found.";
$string['error_not_found_suggestion'] = "Please refresh the page and try again.";
$string['error_server'] = "Server error occurred.";
$string['error_server_suggestion'] = "Please try again later.";
$string['error_unknown'] = "An unexpected error occurred.";
$string['error_unknown_suggestion'] = "Please try again or contact your administrator.";
$string['error_request_id'] = '(Request ID: {$a})';

// Accessibility strings.
$string['view_icon_status'] = "Status indicator icon";
$string['view_icon_clock'] = "Clock icon";
$string['view_icon_participants'] = "Participants icon";
$string['view_message_session_status'] = "Session status information";
$string['view_icon_play'] = "Play recording";
$string['view_icon_empty_recordings'] = "No recordings available";

$string['privacy:metadata:tutoom_logs'] = "Activity logs table stores user room events.";
$string['privacy:metadata:tutoom_logs:userid'] = "The user ID who triggered the event.";
$string['privacy:metadata:tutoom_logs:courseid'] = "The course ID where the activity occurred.";
$string['privacy:metadata:tutoom_logs:tutoomid'] = "The Tutoom activity instance ID.";
$string['privacy:metadata:tutoom_logs:timecreated'] = "The timestamp when the event occurred.";
$string['privacy:metadata:tutoom_logs:roomid'] = "The Tutoom room UUID.";
$string['privacy:metadata:tutoom_logs:event_type'] = "The type of event (CREATE_ROOM, JOIN_ROOM, END_ROOM).";
$string['privacy:metadata:tutoom_logs:event_data'] = "Additional event metadata in JSON format.";

$string['privacy:metadata:tutoom'] = "In order to create and join Tutoom rooms, user data needs to be exchanged with the server.";
$string['privacy:metadata:tutoom:fullname'] = "The fullname of the user accessing to Moodle.";
$string['privacy:metadata:tutoom:userid'] = "The user ID is sent to Tutoom to identify the user in the room.";
$string['privacy:metadata:tutoom:coursename'] = "The course name of the user";
$string['privacy:metadata:tutoom:role'] = "The role of the user accessing to Moodle.";

// Participant management strings.
$string['mod_form_block_participants'] = 'Role assignments for room session';
$string['mod_form_field_participant_list'] = 'Participants';
$string['mod_form_field_participant_list_type_all'] = 'All users';
$string['mod_form_field_participant_list_type_role'] = 'Role';
$string['mod_form_field_participant_list_type_user'] = 'User';
$string['mod_form_field_participant_list_text_as'] = 'as';
$string['mod_form_field_participant_list_action_add'] = 'Add';
$string['mod_form_field_participant_list_action_remove'] = 'Remove';
$string['mod_form_field_participant_role_viewer'] = 'Viewer';
$string['mod_form_field_participant_role_moderator'] = 'Moderator';
$string['error_invalid_participants'] = 'Invalid participant configuration';
$string['error_invalid_role'] = 'Invalid role assignment';
$string['room_creation_in_progress'] = 'Another moderator is creating the room. Please wait...';
$string['room_already_ended'] = 'The room has already been ended by another moderator.';
$string['room_deletion_in_progress'] = 'Another moderator is ending the room. Please wait...';
