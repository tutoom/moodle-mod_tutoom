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
$string['modulename_help'] = "Mit dem Tutoom-Plugin können Sie Echtzeit-Whiteboard-Räume für Fernunterricht direkt in Moodle erstellen.";
$string['missingidandcmid'] = "Die Tutoom-ID ist falsch. Bitte öffnen Sie Ihren Kurs und wählen Sie Ihre Aktivität aus, um Tutoom korrekt zu nutzen.";
$string['index_error_noinstances'] = "Tutoom ist nicht vorhanden.";
$string['tutoom:joinasmoderator'] = "Als Moderator einem Tutoom-Raum beitreten.";
$string['tutoom:addinstance'] = "Neuen Tutoom-Raum/eine neue Tutoom-Aktivität hinzufügen.";
$string['config_api_secret_key'] = "Geheimer Tutoom-API-Schlüssel";
$string['config_api_secret_key_description'] = "Der geheime API-Schlüssel Ihres Tutoom-Kontos";
$string['config_general'] = "Allgemeine Konfiguration";
$string['config_general_description'] = "Diese Einstellungen werden <b>immer</b> verwendet.";
$string['config_activity_logs'] = "Aktivitätsprotokolle erstellen";
$string['config_activity_logs_description'] = "Diese Option speichert Protokolle, wenn ein Raum erstellt, gelöscht und ein Benutzer dem Raum beitritt.";
$string['config_recording'] = "Aufzeichnung";
$string['config_recording_description'] = "Diese Einstellungen sind funktionsspezifisch.";
$string['config_recording_enabled'] = "Aufzeichnung standardmäßig aktiviert";
$string['config_recording_enabled_description'] = "Der Raum kann standardmäßig aufgezeichnet werden. Kann in den Tuttom-Aktivitätseinstellungen bearbeitet werden.";
$string['config_recording_auto_start'] = "Automatischer Start der Aufzeichnung";
$string['config_recording_auto_start_description'] = "Ist diese Option aktiviert, beginnt die Aufzeichnung, sobald der Moderator den Raum betritt.";
$string['tutoomname'] = "Name";
$string['mod_form_block_room'] = "Aktivität/Raumeinstellungen";
$string['mod_form_field_welcome'] = "Begrüßungsnachricht";
$string['mod_form_field_welcome_default_message'] = "Willkommen im Kurs. Sie können gerne Fragen stellen.";
$string['mod_form_field_record'] = "Raum kann aufgezeichnet werden";
$string['mod_form_field_room_type'] = "Raumtyp";
$string['room_type_room_with_recordings'] = "Raum mit Aufzeichnungen";
$string['room_type_room_only'] = "Nur Raum";
$string['room_type_recording_only'] = "Nur Aufzeichnung";
$string['view_conference_action_start'] = "Raum starten";
$string['view_conference_action_join'] = "Raum betreten";
$string['view_conference_action_end'] = "Raum beenden";
$string['view_message_room_not_initalized'] = "Der Raum wurde noch nicht gestartet.";
$string['view_message_room_ended'] = "Dieser Raum wurde beendet. Bitte laden Sie die Seite neu, um fortzufahren.";
$string['view_message_conference_in_this_room'] = "in diesem Raum";
$string['view_message_session_status_on'] = "ONLINE";
$string['view_message_session_status_off'] = "OFFLINE";
$string['view_message_session_started_at'] = "Begonnen am";
$string['view_message_user'] = "Benutzer";
$string['view_message_users'] = "Benutzer";
$string['recording_title'] = "Aufnahmen";
$string['recording_preview'] = "Vorschau";
$string['recording_date'] = "Datum";
$string['recording_time'] = "Uhrzeit";
$string['recording_duration'] = "Dauer";
$string['recording_text_empty'] = "Bisher keine Aufnahmen vorhanden...";
$string['recording_loading'] = "Aufnahmen werden abgerufen...";
$string['view_page_error_empty_credentials'] = "Sie müssen die Tutoom-API-Zugangsdaten konfigurieren. Weitere Informationen finden Sie hier: https://tutoom.com/help/articles/native-moodle-plugin";

// Error messages and recovery suggestions.
$string['error_unauthorized'] = "Authentifizierungsfehler: Ungültige oder fehlende API-Zugangsdaten.";
$string['error_unauthorized_suggestion'] = "Bitte wenden Sie sich an Ihren Site-Administrator, um die Tutoom-API-Schlüsselkonfiguration zu überprüfen.";
$string['error_forbidden'] = "Zugriff verweigert: Sie haben keine Berechtigung für diese Aktion.";
$string['error_forbidden_suggestion'] = "Bitte wenden Sie sich an Ihren Site-Administrator.";
$string['error_no_subscription'] = "Kein aktives Tutoom-Abonnement gefunden.";
$string['error_no_subscription_suggestion'] = "Bitte wenden Sie sich an Ihren Site-Administrator, um Ihr Tutoom-Abonnement zu aktivieren.";
$string['error_max_rooms'] = "Maximale Anzahl gleichzeitiger Räume für Ihr Abonnement erreicht.";
$string['error_max_rooms_suggestion'] = "Bitte beenden Sie bestehende Räume, bevor Sie neue erstellen, oder wenden Sie sich an Ihren Administrator, um Ihr Abonnement zu aktualisieren.";
$string['error_subscription_inactive'] = "Ihr Tutoom-Abonnement ist nicht aktiv.";
$string['error_subscription_inactive_suggestion'] = "Bitte wenden Sie sich an Ihren Site-Administrator.";
$string['error_validation'] = "Ungültige Eingabe bereitgestellt.";
$string['error_validation_suggestion'] = "Bitte überprüfen Sie Ihre Eingabe und versuchen Sie es erneut.";
$string['error_invalid_idempotency'] = "Ungültiges Anforderungsformat.";
$string['error_invalid_idempotency_suggestion'] = "Bitte laden Sie die Seite neu und versuchen Sie es erneut.";
$string['error_room_not_found'] = "Raum nicht gefunden oder wurde gelöscht.";
$string['error_room_not_found_suggestion'] = "Bitte laden Sie die Seite neu. Der Raum wurde möglicherweise gelöscht.";
$string['error_recording_not_found'] = "Aufzeichnung nicht gefunden.";
$string['error_recording_not_found_suggestion'] = "Die Aufzeichnung ist möglicherweise noch nicht verfügbar oder wurde gelöscht.";
$string['error_rate_limit'] = "Zu viele Anfragen. Bitte verlangsamen Sie.";
$string['error_rate_limit_suggestion'] = "Bitte warten Sie einen Moment und versuchen Sie es erneut.";
$string['error_internal'] = "Serverfehler aufgetreten.";
$string['error_internal_suggestion'] = "Bitte versuchen Sie es in wenigen Momenten erneut. Wenn das Problem weiterhin besteht, wenden Sie sich an Ihren Administrator.";
$string['error_token_failed'] = "Fehler beim Erstellen des Zugriffstokens.";
$string['error_token_failed_suggestion'] = "Bitte versuchen Sie es erneut. Wenn das Problem weiterhin besteht, wenden Sie sich an Ihren Administrator.";
$string['error_service_unavailable'] = "Tutoom-Dienst ist vorübergehend nicht verfügbar.";
$string['error_service_unavailable_suggestion'] = "Bitte versuchen Sie es in wenigen Momenten erneut.";
$string['error_network'] = "Netzwerkfehler: Verbindung zum Tutoom-Dienst nicht möglich.";
$string['error_network_suggestion'] = "Bitte überprüfen Sie Ihre Internetverbindung und versuchen Sie es erneut.";
$string['error_not_found'] = "Ressource nicht gefunden.";
$string['error_not_found_suggestion'] = "Bitte laden Sie die Seite neu und versuchen Sie es erneut.";
$string['error_server'] = "Serverfehler aufgetreten.";
$string['error_server_suggestion'] = "Bitte versuchen Sie es später erneut.";
$string['error_unknown'] = "Ein unerwarteter Fehler ist aufgetreten.";
$string['error_unknown_suggestion'] = "Bitte versuchen Sie es erneut oder wenden Sie sich an Ihren Administrator.";
$string['error_request_id'] = '(Anforderungs-ID: {$a})';

// Accessibility strings.
$string['view_icon_status'] = "Statusanzeigesymbol";
$string['view_icon_clock'] = "Uhrsymbol";
$string['view_icon_participants'] = "Teilnehmersymbol";
$string['view_message_session_status'] = "Sitzungsstatusinformationen";
$string['view_icon_play'] = "Aufzeichnung abspielen";
$string['view_icon_empty_recordings'] = "Keine Aufzeichnungen verfügbar";

$string['recording_pagination'] = "Aufzeichnungspaginierung";
$string['recording_previous'] = "Zurück";
$string['recording_next'] = "Weiter";
$string['recording_previous_page'] = "Zur vorherigen Seite gehen";
$string['recording_next_page'] = "Zur nächsten Seite gehen";
$string['recording_page'] = "Seite";

$string['privacy:metadata:tutoom_logs'] = "Die Aktivitätsprotokolltabelle speichert Benutzerraumeignisse.";
$string['privacy:metadata:tutoom_logs:userid'] = "Die Benutzer-ID, die das Ereignis ausgelöst hat.";
$string['privacy:metadata:tutoom_logs:courseid'] = "Die Kurs-ID, in der die Aktivität stattgefunden hat.";
$string['privacy:metadata:tutoom_logs:tutoomid'] = "Die Tutoom-Aktivitätsinstanz-ID.";
$string['privacy:metadata:tutoom_logs:timecreated'] = "Der Zeitstempel, wann das Ereignis stattgefunden hat.";
$string['privacy:metadata:tutoom_logs:roomid'] = "Die UUID des Tutoom-Raums.";
$string['privacy:metadata:tutoom_logs:event_type'] = "Der Ereignistyp (CREATE_ROOM, JOIN_ROOM, END_ROOM).";
$string['privacy:metadata:tutoom_logs:event_data'] = "Zusätzliche Ereignismetadaten im JSON-Format.";

$string['privacy:metadata:tutoom'] = "Um Tutoom-Räume zu erstellen und ihnen beizutreten, müssen Benutzerdaten mit dem Server ausgetauscht werden.";
$string['privacy:metadata:tutoom:fullname'] = "Der vollständige Name des Benutzers, der auf Moodle zugreift.";
$string['privacy:metadata:tutoom:userid'] = "Die Benutzer-ID wird an Tutoom gesendet, um den Benutzer im Raum zu identifizieren.";
$string['privacy:metadata:tutoom:coursename'] = "Der Kursname des Benutzers.";
$string['privacy:metadata:tutoom:role'] = "Die Rolle des Benutzers, der auf Moodle zugreift.";

// Participant management strings.
$string['mod_form_block_participants'] = 'Rollenzuweisungen für Raumsitzung';
$string['mod_form_field_participant_list'] = 'Teilnehmer';
$string['mod_form_field_participant_list_type_all'] = 'Alle Benutzer';
$string['mod_form_field_participant_list_type_role'] = 'Rolle';
$string['mod_form_field_participant_list_type_user'] = 'Benutzer';
$string['mod_form_field_participant_list_text_as'] = 'als';
$string['mod_form_field_participant_list_action_add'] = 'Hinzufügen';
$string['mod_form_field_participant_list_action_remove'] = 'Entfernen';
$string['mod_form_field_participant_role_viewer'] = 'Betrachter';
$string['mod_form_field_participant_role_moderator'] = 'Moderator';
$string['error_invalid_participants'] = 'Ungültige Teilnehmerkonfiguration';
$string['error_invalid_role'] = 'Ungültige Rollenzuweisung';
$string['room_creation_in_progress'] = 'Ein anderer Moderator erstellt den Raum. Bitte warten...';
$string['room_already_ended'] = 'Der Raum wurde bereits von einem anderen Moderator beendet.';
$string['room_deletion_in_progress'] = 'Ein anderer Moderator beendet den Raum. Bitte warten...';
