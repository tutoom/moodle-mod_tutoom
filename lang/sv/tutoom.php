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
$string['modulename_help'] = "Tutoom-plugin låter dig skapa inifrån Moodle whiteboard-rum i realtid för distansutbildning.";
$string['missingidandcmid'] = "Tutoom-ID är felaktigt. Gå till din kurs och välj din aktivitet för att gå in i Tutoom korrekt.";
$string['index_error_noinstances'] = "Det finns inga instanser av Tutoom";
$string['tutoom:joinasmoderator'] = "Gå med som moderator i ett Tutoom-rum";
$string['tutoom:addinstance'] = "Lägg till ett nytt Tutoom-rum/-aktivitet";
$string['config_api_secret_key'] = "Tutoom API hemliga nyckel";
$string['config_api_secret_key_description'] = "API:s hemliga nyckel för ditt Tutoom-konto";
$string['config_general'] = "Allmän konfiguration";
$string['config_general_description'] = "Dessa inställningar används <b>alltid</b>";
$string['config_activity_logs'] = "Skriv aktivitetsloggar";
$string['config_activity_logs_description'] = "Detta alternativ sparar loggar när ett rum skapas, tas bort och användaren går med i rummet.";
$string['config_recording'] = "Inspelning";
$string['config_recording_description'] = "Dessa inställningar är funktionsspecifika";
$string['config_recording_enabled'] = "Inspelning aktiverad som standard";
$string['config_recording_enabled_description'] = "Rum kan spelas in som standard. Kan redigeras i Tuttom-aktivitetsinställningarna";
$string['config_recording_auto_start'] = "Automatisk start för inspelning";
$string['config_recording_auto_start_description'] = "Om alternativet är markerat kommer rum att börja spela in när moderator kommer in.";
$string['tutoomname'] = "Namn";
$string['mod_form_block_room'] = "Aktivitet/Rumsinställningar";
$string['mod_form_field_welcome'] = "Välkomstmeddelande";
$string['mod_form_field_welcome_default_message'] = "Välkommen till klassen. Ställ gärna vilken fråga som helst.";
$string['mod_form_field_record'] = "Rum kan spelas in";
$string['mod_form_field_room_type'] = "Rumstyp";
$string['room_type_room_with_recordings'] = "Rum med inspelningar";
$string['room_type_room_only'] = "Endast rum";
$string['room_type_recording_only'] = "Endast inspelning";
$string['view_conference_action_start'] = "Start rum";
$string['view_conference_action_join'] = "Gå med i rummet";
$string['view_conference_action_end'] = "Slutrummet";
$string['view_message_room_not_initalized'] = "Rummet har inte startat.";
$string['view_message_room_ended'] = "Detta rum har tagit slut. Ladda om sidan för att fortsätta";
$string['view_message_conference_in_this_room'] = "i det här rummet";
$string['view_message_session_status_on'] = "ONLINE";
$string['view_message_session_status_off'] = "OFF-LINE";
$string['view_message_session_started_at'] = "Började kl";
$string['view_message_user'] = "användare";
$string['view_message_users'] = "användare";
$string['recording_title'] = "Inspelningar";
$string['recording_preview'] = "Förhandsvisning";
$string['recording_date'] = "Datum";
$string['recording_time'] = "Tid";
$string['recording_duration'] = "Varaktighet";
$string['recording_text_empty'] = "Inga inspelningar än så länge...";
$string['recording_loading'] = "Hämtar inspelningar...";
$string['view_page_error_empty_credentials'] = "Du måste konfigurera Tutoom API-uppgifter, mer information här: https://tutoom.com/help/articles/native-moodle-plugin";

// Error messages and recovery suggestions.
$string['error_unauthorized'] = "Autentiseringsfel: Ogiltiga eller saknade API-uppgifter.";
$string['error_unauthorized_suggestion'] = "Vänligen kontakta webbplatsadministratören för att verifiera Tutoom API-nyckelkonfigurationen.";
$string['error_forbidden'] = "Åtkomst nekad: Du har inte behörighet att utföra denna åtgärd.";
$string['error_forbidden_suggestion'] = "Vänligen kontakta webbplatsadministratören.";
$string['error_no_subscription'] = "Ingen aktiv Tutoom-prenumeration hittades.";
$string['error_no_subscription_suggestion'] = "Vänligen kontakta webbplatsadministratören för att aktivera din Tutoom-prenumeration.";
$string['error_max_rooms'] = "Maximalt antal samtidiga rum för din prenumeration har nåtts.";
$string['error_max_rooms_suggestion'] = "Vänligen avsluta befintliga rum innan du skapar nya, eller kontakta administratören för att uppgradera din prenumeration.";
$string['error_subscription_inactive'] = "Din Tutoom-prenumeration är inte aktiv.";
$string['error_subscription_inactive_suggestion'] = "Vänligen kontakta webbplatsadministratören.";
$string['error_validation'] = "Ogiltig inmatning tillhandahållen.";
$string['error_validation_suggestion'] = "Vänligen kontrollera din inmatning och försök igen.";
$string['error_invalid_idempotency'] = "Ogiltigt begäransformat.";
$string['error_invalid_idempotency_suggestion'] = "Vänligen ladda om sidan och försök igen.";
$string['error_room_not_found'] = "Rummet hittades inte eller har tagits bort.";
$string['error_room_not_found_suggestion'] = "Vänligen ladda om sidan. Rummet kan ha tagits bort.";
$string['error_recording_not_found'] = "Inspelning hittades inte.";
$string['error_recording_not_found_suggestion'] = "Inspelningen kanske inte är tillgänglig än eller kan ha tagits bort.";
$string['error_rate_limit'] = "För många förfrågningar. Vänligen sakta ner.";
$string['error_rate_limit_suggestion'] = "Vänligen vänta ett ögonblick och försök igen.";
$string['error_internal'] = "Ett serverfel uppstod.";
$string['error_internal_suggestion'] = "Vänligen försök igen om ett ögonblick. Om problemet kvarstår, kontakta administratören.";
$string['error_token_failed'] = "Misslyckades med att skapa åtkomsttoken.";
$string['error_token_failed_suggestion'] = "Vänligen försök igen. Om problemet kvarstår, kontakta administratören.";
$string['error_service_unavailable'] = "Tutoom-tjänsten är tillfälligt otillgänglig.";
$string['error_service_unavailable_suggestion'] = "Vänligen försök igen om ett ögonblick.";
$string['error_network'] = "Nätverksfel: Kan inte ansluta till Tutoom-tjänsten.";
$string['error_network_suggestion'] = "Vänligen kontrollera din internetanslutning och försök igen.";
$string['error_not_found'] = "Resursen hittades inte.";
$string['error_not_found_suggestion'] = "Vänligen ladda om sidan och försök igen.";
$string['error_server'] = "Ett serverfel uppstod.";
$string['error_server_suggestion'] = "Vänligen försök igen senare.";
$string['error_unknown'] = "Ett oväntat fel uppstod.";
$string['error_unknown_suggestion'] = "Vänligen försök igen eller kontakta administratören.";
$string['error_request_id'] = '(Begär-ID: {$a})';

// Accessibility strings.
$string['view_icon_status'] = "Statusindikatorikon";
$string['view_icon_clock'] = "Klockikon";
$string['view_icon_participants'] = "Deltagarikon";
$string['view_message_session_status'] = "Information om sessionsstatus";
$string['view_icon_play'] = "Spela upp inspelning";
$string['view_icon_empty_recordings'] = "Inga inspelningar tillgängliga";

$string['recording_pagination'] = "Inspelningspaginering";
$string['recording_previous'] = "Föregående";
$string['recording_next'] = "Nästa";
$string['recording_previous_page'] = "Gå till föregående sida";
$string['recording_next_page'] = "Gå till nästa sida";
$string['recording_page'] = "Sida";

$string['privacy:metadata:tutoom_logs'] = "Aktivitetsloggtabellen lagrar användarrumshändelser.";
$string['privacy:metadata:tutoom_logs:userid'] = "ID:t för användaren som utlöste händelsen.";
$string['privacy:metadata:tutoom_logs:courseid'] = "ID:t för kursen där aktiviteten inträffade.";
$string['privacy:metadata:tutoom_logs:tutoomid'] = "ID:t för Tutoom-aktivitetsinstansen.";
$string['privacy:metadata:tutoom_logs:timecreated'] = "Tidsstämpeln när händelsen inträffade.";
$string['privacy:metadata:tutoom_logs:roomid'] = "UUID:t för Tutoom-rummet.";
$string['privacy:metadata:tutoom_logs:event_type'] = "Händelsetypen (CREATE_ROOM, JOIN_ROOM, END_ROOM).";
$string['privacy:metadata:tutoom_logs:event_data'] = "Ytterligare händelsemetadata i JSON-format.";

$string['privacy:metadata:tutoom'] = "För att skapa och gå med i Tutoom-rum måste användardata utbytas med servern.";
$string['privacy:metadata:tutoom:fullname'] = "Det fullständiga namnet på användaren som har åtkomst till Moodle.";
$string['privacy:metadata:tutoom:userid'] = "Användar-ID:t skickas till Tutoom för att identifiera användaren i rummet.";
$string['privacy:metadata:tutoom:coursename'] = "Användarens kursnamn";
$string['privacy:metadata:tutoom:role'] = "Rollen för användaren som får åtkomst till Moodle.";

// Participant management strings.
$string['mod_form_block_participants'] = 'Rolltilldelning för rumssession';
$string['mod_form_field_participant_list'] = 'Deltagare';
$string['mod_form_field_participant_list_type_all'] = 'Alla användare';
$string['mod_form_field_participant_list_type_role'] = 'Roll';
$string['mod_form_field_participant_list_type_user'] = 'Användare';
$string['mod_form_field_participant_list_text_as'] = 'som';
$string['mod_form_field_participant_list_action_add'] = 'Lägg till';
$string['mod_form_field_participant_list_action_remove'] = 'Ta bort';
$string['mod_form_field_participant_role_viewer'] = 'Visare';
$string['mod_form_field_participant_role_moderator'] = 'Moderator';
$string['error_invalid_participants'] = 'Ogiltig deltagarinställning';
$string['error_invalid_role'] = 'Ogiltig rolltilldelning';
$string['room_creation_in_progress'] = 'En annan moderator skapar rummet. Vänligen vänta...';
$string['room_already_ended'] = 'Rummet har redan avslutats av en annan moderator.';
$string['room_deletion_in_progress'] = 'En annan moderator avslutar rummet. Vänligen vänta...';
