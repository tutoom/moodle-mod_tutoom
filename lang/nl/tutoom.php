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
$string['modulename_help'] = "Met de Tutoom-plug-in kunt u realtime whiteboardruimtes maken voor afstandsonderwijs vanuit Moodle.";
$string['missingidandcmid'] = "Tutoom-ID is onjuist. Ga naar uw cursus en selecteer uw activiteit om Tutoom correct in te voeren.";
$string['index_error_noinstances'] = "Er zijn geen instanties van Tutoom";
$string['tutoom:joinasmoderator'] = "Word moderator van een Tutoom-ruimte";
$string['tutoom:addinstance'] = "Voeg een nieuwe Tutoom-ruimte/activiteit toe";
$string['config_api_secret_key'] = "Tutoom API-geheime sleutel";
$string['config_api_secret_key_description'] = "De geheime API-sleutel van uw Tutoom-account";
$string['config_general'] = "Algemene configuratie";
$string['config_general_description'] = "Deze instellingen worden <b>altijd</b> gebruikt";
$string['config_activity_logs'] = "Activiteitenlogboeken schrijven";
$string['config_activity_logs_description'] = "Deze optie slaat logs op wanneer een kamer wordt gemaakt, verwijderd en de gebruiker zich bij de kamer voegt.";
$string['config_recording'] = "Opnemen";
$string['config_recording_description'] = "Deze instellingen zijn functiespecifiek";
$string['config_recording_enabled'] = "Opnemen standaard ingeschakeld";
$string['config_recording_enabled_description'] = "Kamer kan standaard worden opgenomen. Kan worden bewerkt in de Tuttom-activiteiteninstellingen";
$string['config_recording_auto_start'] = "Automatische start van opname";
$string['config_recording_auto_start_description'] = "Als de optie is aangevinkt, beginnen de kamers met opnemen zodra de moderator binnenkomt.";
$string['tutoomname'] = "Naam";
$string['mod_form_block_room'] = "Activiteit/kamerinstellingen";
$string['mod_form_field_welcome'] = "Welkomstbericht";
$string['mod_form_field_welcome_default_message'] = "Welkom bij de klas. Stel gerust vragen.";
$string['mod_form_field_record'] = "Kamer kan worden opgenomen";
$string['mod_form_field_room_type'] = "Kamertype";
$string['room_type_room_with_recordings'] = "Kamer met opnamen";
$string['room_type_room_only'] = "Alleen kamer";
$string['room_type_recording_only'] = "Alleen opnemen";
$string['view_conference_action_start'] = "Start kamer";
$string['view_conference_action_join'] = "Doe mee aan kamer";
$string['view_conference_action_end'] = "Einde kamer";
$string['view_message_room_not_initalized'] = "De kamer is niet gestart.";
$string['view_message_room_ended'] = "Deze kamer is afgelopen. Laad de pagina opnieuw om door te gaan";
$string['view_message_conference_in_this_room'] = "in deze kamer";
$string['view_message_session_status_on'] = "ONLINE";
$string['view_message_session_status_off'] = "OFFLINE";
$string['view_message_session_started_at'] = "Gestart om";
$string['view_message_user'] = "gebruiker";
$string['view_message_users'] = "gebruikers";
$string['recording_title'] = "Opnames";
$string['recording_preview'] = "Preview";
$string['recording_date'] = "Datum";
$string['recording_time'] = "Tijd";
$string['recording_duration'] = "Duur";
$string['recording_text_empty'] = "Nog geen opnames...";
$string['recording_loading'] = "Opnames ophalen...";
$string['view_page_error_empty_credentials'] = "U moet Tutoom API-referenties configureren, meer informatie hier: https://tutoom.com/help/articles/native-moodle-plugin";

// Error messages and recovery suggestions.
$string['error_unauthorized'] = "Authenticatiefout: Ongeldige of ontbrekende API-referenties.";
$string['error_unauthorized_suggestion'] = "Neem contact op met uw sitebeheerder om de configuratie van de Tutoom API-sleutel te verifiëren.";
$string['error_forbidden'] = "Toegang geweigerd: U hebt geen toestemming om deze actie uit te voeren.";
$string['error_forbidden_suggestion'] = "Neem contact op met uw sitebeheerder.";
$string['error_no_subscription'] = "Geen actief Tutoom-abonnement gevonden.";
$string['error_no_subscription_suggestion'] = "Neem contact op met uw sitebeheerder om uw Tutoom-abonnement te activeren.";
$string['error_max_rooms'] = "Maximaal aantal gelijktijdige kamers bereikt voor uw abonnement.";
$string['error_max_rooms_suggestion'] = "Beëindig bestaande kamers voordat u nieuwe maakt, of neem contact op met uw beheerder om uw abonnement te upgraden.";
$string['error_subscription_inactive'] = "Uw Tutoom-abonnement is niet actief.";
$string['error_subscription_inactive_suggestion'] = "Neem contact op met uw sitebeheerder.";
$string['error_validation'] = "Ongeldige invoer verstrekt.";
$string['error_validation_suggestion'] = "Controleer uw invoer en probeer het opnieuw.";
$string['error_invalid_idempotency'] = "Ongeldig verzoekformaat.";
$string['error_invalid_idempotency_suggestion'] = "Ververs de pagina en probeer het opnieuw.";
$string['error_room_not_found'] = "Kamer niet gevonden of is verwijderd.";
$string['error_room_not_found_suggestion'] = "Ververs de pagina. De kamer is mogelijk verwijderd.";
$string['error_recording_not_found'] = "Opname niet gevonden.";
$string['error_recording_not_found_suggestion'] = "De opname is mogelijk nog niet beschikbaar of is verwijderd.";
$string['error_rate_limit'] = "Te veel verzoeken. Vertraag alstublieft.";
$string['error_rate_limit_suggestion'] = "Wacht even en probeer het opnieuw.";
$string['error_internal'] = "Serverfout opgetreden.";
$string['error_internal_suggestion'] = "Probeer het over enkele ogenblikken opnieuw. Als het probleem aanhoudt, neem contact op met uw beheerder.";
$string['error_token_failed'] = "Toegangstoken aanmaken mislukt.";
$string['error_token_failed_suggestion'] = "Probeer het opnieuw. Als het probleem aanhoudt, neem contact op met uw beheerder.";
$string['error_service_unavailable'] = "Tutoom-service is tijdelijk niet beschikbaar.";
$string['error_service_unavailable_suggestion'] = "Probeer het over enkele ogenblikken opnieuw.";
$string['error_network'] = "Netwerkfout: Kan geen verbinding maken met Tutoom-service.";
$string['error_network_suggestion'] = "Controleer uw internetverbinding en probeer het opnieuw.";
$string['error_not_found'] = "Bron niet gevonden.";
$string['error_not_found_suggestion'] = "Ververs de pagina en probeer het opnieuw.";
$string['error_server'] = "Serverfout opgetreden.";
$string['error_server_suggestion'] = "Probeer het later opnieuw.";
$string['error_unknown'] = "Er is een onverwachte fout opgetreden.";
$string['error_unknown_suggestion'] = "Probeer het opnieuw of neem contact op met uw beheerder.";
$string['error_request_id'] = '(Verzoek-ID: {$a})';

// Accessibility strings.
$string['view_icon_status'] = "Statusindicatorpictogram";
$string['view_icon_clock'] = "Klokpictogram";
$string['view_icon_participants'] = "Deelnemerspictogram";
$string['view_message_session_status'] = "Sessiestatusinformatie";
$string['view_icon_play'] = "Opname afspelen";
$string['view_icon_empty_recordings'] = "Geen opnames beschikbaar";

$string['recording_pagination'] = "Opnamepaginering";
$string['recording_previous'] = "Vorige";
$string['recording_next'] = "Volgende";
$string['recording_previous_page'] = "Ga naar vorige pagina";
$string['recording_next_page'] = "Ga naar volgende pagina";
$string['recording_page'] = "Pagina";

$string['privacy:metadata:tutoom_logs'] = "De activiteitenlogtabel slaat gebruikerskamergebeurtenissen op.";
$string['privacy:metadata:tutoom_logs:userid'] = "De gebruikers-ID die de gebeurtenis heeft geactiveerd.";
$string['privacy:metadata:tutoom_logs:courseid'] = "De cursus-ID waar de activiteit plaatsvond.";
$string['privacy:metadata:tutoom_logs:tutoomid'] = "De Tutoom-activiteitinstantie-ID.";
$string['privacy:metadata:tutoom_logs:timecreated'] = "De tijdstempel wanneer de gebeurtenis plaatsvond.";
$string['privacy:metadata:tutoom_logs:roomid'] = "De UUID van de Tutoom-kamer.";
$string['privacy:metadata:tutoom_logs:event_type'] = "Het type gebeurtenis (CREATE_ROOM, JOIN_ROOM, END_ROOM).";
$string['privacy:metadata:tutoom_logs:event_data'] = "Aanvullende gebeurtenismetadata in JSON-formaat.";

$string['privacy:metadata:tutoom'] = "Om Tutoom-kamers te maken en eraan deel te nemen, moeten gebruikersgegevens worden uitgewisseld met de server.";
$string['privacy:metadata:tutoom:fullname'] = "De volledige naam van de gebruiker die toegang heeft tot Moodle.";
$string['privacy:metadata:tutoom:userid'] = "De gebruikers-ID wordt naar Tutoom verzonden om de gebruiker in de kamer te identificeren.";
$string['privacy:metadata:tutoom:coursename'] = "De cursusnaam van de gebruiker";
$string['privacy:metadata:tutoom:role'] = "De rol van de gebruiker die toegang heeft tot Moodle.";

// Participant management strings.
$string['mod_form_block_participants'] = 'Roltoewijzingen voor kamerses';
$string['mod_form_field_participant_list'] = 'Deelnemers';
$string['mod_form_field_participant_list_type_all'] = 'Alle gebruikers';
$string['mod_form_field_participant_list_type_role'] = 'Rol';
$string['mod_form_field_participant_list_type_user'] = 'Gebruiker';
$string['mod_form_field_participant_list_text_as'] = 'als';
$string['mod_form_field_participant_list_action_add'] = 'Toevoegen';
$string['mod_form_field_participant_list_action_remove'] = 'Verwijderen';
$string['mod_form_field_participant_role_viewer'] = 'Kijker';
$string['mod_form_field_participant_role_moderator'] = 'Moderator';
$string['error_invalid_participants'] = 'Ongeldige deelnemersconfiguratie';
$string['error_invalid_role'] = 'Ongeldige roltoewijzing';
$string['room_creation_in_progress'] = 'Een andere moderator maakt de kamer aan. Even geduld...';
$string['room_already_ended'] = 'De kamer is al beëindigd door een andere moderator.';
$string['room_deletion_in_progress'] = 'Een andere moderator beëindigt de kamer. Even geduld...';
