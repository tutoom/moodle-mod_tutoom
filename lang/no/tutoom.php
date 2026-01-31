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
$string['modulename_help'] = "Tutoom-plugin lar deg lage fra Moodle sanntids tavlerom for fjernundervisning.";
$string['missingidandcmid'] = "Tutoom-ID er feil. Vennligst gå til kurset ditt og velg aktiviteten din for å gå inn i Tutoom riktig.";
$string['index_error_noinstances'] = "Det er ingen forekomster av Tutoom";
$string['tutoom:joinasmoderator'] = "Bli med som moderator i et Tutoom-rom";
$string['tutoom:addinstance'] = "Legg til et nytt Tutoom-rom/-aktivitet";
$string['config_api_secret_key'] = "Tutoom API hemmelig nøkkel";
$string['config_api_secret_key_description'] = "Den hemmelige API-nøkkelen til Tutoom-kontoen din";
$string['config_general'] = "Generell konfigurasjon";
$string['config_general_description'] = "Disse innstillingene brukes <b>alltid</b>";
$string['config_activity_logs'] = "Skriv aktivitetslogger";
$string['config_activity_logs_description'] = "Dette alternativet lagrer logger når et rom er opprettet, slettet og bruker blir med i rommet.";
$string['config_recording'] = "Innspilling";
$string['config_recording_description'] = "Disse innstillingene er funksjonsspesifikke";
$string['config_recording_enabled'] = "Opptak er aktivert som standard";
$string['config_recording_enabled_description'] = "Rom kan tas opp som standard. Kan redigeres i Tuttom-aktivitetsinnstillingene";
$string['config_recording_auto_start'] = "Automatisk start av opptak";
$string['config_recording_auto_start_description'] = "Hvis alternativet er merket av, vil rom starte opptaket når moderator kommer inn.";
$string['tutoomname'] = "Navn";
$string['mod_form_block_room'] = "Aktivitet/rominnstillinger";
$string['mod_form_field_welcome'] = "Velkomstmelding";
$string['mod_form_field_welcome_default_message'] = "Velkommen til klassen. Still gjerne spørsmål.";
$string['mod_form_field_record'] = "Rom kan tas opp";
$string['mod_form_field_room_type'] = "Romtype";
$string['room_type_room_with_recordings'] = "Rom med opptak";
$string['room_type_room_only'] = "Kun rom";
$string['room_type_recording_only'] = "Kun opptak";
$string['view_conference_action_start'] = "Start rom";
$string['view_conference_action_join'] = "Bli med på rommet";
$string['view_conference_action_end'] = "Sluttrom";
$string['view_message_room_not_initalized'] = "Rommet har ikke startet.";
$string['view_message_room_ended'] = "Dette rommet er avsluttet. Last inn siden på nytt for å fortsette";
$string['view_message_conference_in_this_room'] = "i dette rommet";
$string['view_message_session_status_on'] = "PÅ NETT";
$string['view_message_session_status_off'] = "OFFLINE";
$string['view_message_session_started_at'] = "Startet kl";
$string['view_message_user'] = "bruker";
$string['view_message_users'] = "brukere";
$string['recording_title'] = "Opptak";
$string['recording_preview'] = "Forhåndsvisning";
$string['recording_date'] = "Dato";
$string['recording_time'] = "Tid";
$string['recording_duration'] = "Varighet";
$string['recording_text_empty'] = "Ingen opptak så langt...";
$string['recording_loading'] = "Henter opptak...";
$string['view_page_error_empty_credentials'] = "Du må konfigurere Tutoom API-legitimasjon, mer informasjon her: https://tutoom.com/help/articles/native-moodle-plugin";

// Error messages and recovery suggestions.
$string['error_unauthorized'] = "Autentiseringsfeil: Ugyldige eller manglende API-legitimasjon.";
$string['error_unauthorized_suggestion'] = "Vennligst kontakt nettstedsadministratoren for å bekrefte Tutoom API-nøkkelkonfigurasjonen.";
$string['error_forbidden'] = "Tilgang nektet: Du har ikke tillatelse til å utføre denne handlingen.";
$string['error_forbidden_suggestion'] = "Vennligst kontakt nettstedsadministratoren.";
$string['error_no_subscription'] = "Ingen aktiv Tutoom-abonnement funnet.";
$string['error_no_subscription_suggestion'] = "Vennligst kontakt nettstedsadministratoren for å aktivere ditt Tutoom-abonnement.";
$string['error_max_rooms'] = "Maksimalt antall samtidige rom for ditt abonnement er nådd.";
$string['error_max_rooms_suggestion'] = "Vennligst avslutt eksisterende rom før du oppretter nye, eller kontakt administratoren for å oppgradere abonnementet ditt.";
$string['error_subscription_inactive'] = "Ditt Tutoom-abonnement er ikke aktivt.";
$string['error_subscription_inactive_suggestion'] = "Vennligst kontakt nettstedsadministratoren.";
$string['error_validation'] = "Ugyldig inndata oppgitt.";
$string['error_validation_suggestion'] = "Vennligst sjekk inndataene dine og prøv igjen.";
$string['error_invalid_idempotency'] = "Ugyldig forespørselsformat.";
$string['error_invalid_idempotency_suggestion'] = "Vennligst last inn siden på nytt og prøv igjen.";
$string['error_room_not_found'] = "Rommet ble ikke funnet eller har blitt slettet.";
$string['error_room_not_found_suggestion'] = "Vennligst last inn siden på nytt. Rommet kan ha blitt slettet.";
$string['error_recording_not_found'] = "Opptak ikke funnet.";
$string['error_recording_not_found_suggestion'] = "Opptaket er kanskje ikke tilgjengelig ennå eller kan ha blitt slettet.";
$string['error_rate_limit'] = "For mange forespørsler. Vennligst senk hastigheten.";
$string['error_rate_limit_suggestion'] = "Vennligst vent et øyeblikk og prøv igjen.";
$string['error_internal'] = "Det oppstod en serverfeil.";
$string['error_internal_suggestion'] = "Vennligst prøv igjen om et øyeblikk. Hvis problemet vedvarer, kontakt administratoren.";
$string['error_token_failed'] = "Kunne ikke opprette tilgangstoken.";
$string['error_token_failed_suggestion'] = "Vennligst prøv igjen. Hvis problemet vedvarer, kontakt administratoren.";
$string['error_service_unavailable'] = "Tutoom-tjenesten er midlertidig utilgjengelig.";
$string['error_service_unavailable_suggestion'] = "Vennligst prøv igjen om et øyeblikk.";
$string['error_network'] = "Nettverksfeil: Kan ikke koble til Tutoom-tjenesten.";
$string['error_network_suggestion'] = "Vennligst sjekk internettforbindelsen din og prøv igjen.";
$string['error_not_found'] = "Ressurs ikke funnet.";
$string['error_not_found_suggestion'] = "Vennligst last inn siden på nytt og prøv igjen.";
$string['error_server'] = "Det oppstod en serverfeil.";
$string['error_server_suggestion'] = "Vennligst prøv igjen senere.";
$string['error_unknown'] = "En uventet feil oppstod.";
$string['error_unknown_suggestion'] = "Vennligst prøv igjen eller kontakt administratoren.";
$string['error_request_id'] = '(Forespørsels-ID: {$a})';

// Accessibility strings.
$string['view_icon_status'] = "Statusindikatorikon";
$string['view_icon_clock'] = "Klokkesymbol";
$string['view_icon_participants'] = "Deltakersymbol";
$string['view_message_session_status'] = "Informasjon om øktstatus";
$string['view_icon_play'] = "Spill av opptak";
$string['view_icon_empty_recordings'] = "Ingen opptak tilgjengelig";

$string['recording_pagination'] = "Opptakspaginering";
$string['recording_previous'] = "Forrige";
$string['recording_next'] = "Neste";
$string['recording_previous_page'] = "Gå til forrige side";
$string['recording_next_page'] = "Gå til neste side";
$string['recording_page'] = "Side";

$string['privacy:metadata:tutoom_logs'] = "Aktivitetsloggtabellen lagrer brukerromhendelser.";
$string['privacy:metadata:tutoom_logs:userid'] = "IDen til brukeren som utløste hendelsen.";
$string['privacy:metadata:tutoom_logs:courseid'] = "IDen til kurset der aktiviteten skjedde.";
$string['privacy:metadata:tutoom_logs:tutoomid'] = "IDen til Tutoom-aktivitetsinstansen.";
$string['privacy:metadata:tutoom_logs:timecreated'] = "Tidsstempelet da hendelsen skjedde.";
$string['privacy:metadata:tutoom_logs:roomid'] = "UUIDen til Tutoom-rommet.";
$string['privacy:metadata:tutoom_logs:event_type'] = "Hendelsestypen (CREATE_ROOM, JOIN_ROOM, END_ROOM).";
$string['privacy:metadata:tutoom_logs:event_data'] = "Ytterligere hendelsesmetadata i JSON-format.";

$string['privacy:metadata:tutoom'] = "For å opprette og bli med i Tutoom-rom, må brukerdata utveksles med serveren.";
$string['privacy:metadata:tutoom:fullname'] = "Fullt navn på brukeren som har tilgang til Moodle.";
$string['privacy:metadata:tutoom:userid'] = "Bruker-IDen sendes til Tutoom for å identifisere brukeren i rommet.";
$string['privacy:metadata:tutoom:coursename'] = "Kursnavnet til brukeren";
$string['privacy:metadata:tutoom:role'] = "Rollen til brukeren som har tilgang til Moodle.";

// Participant management strings.
$string['mod_form_block_participants'] = 'Rolletildeling for romøkt';
$string['mod_form_field_participant_list'] = 'Deltakere';
$string['mod_form_field_participant_list_type_all'] = 'Alle brukere';
$string['mod_form_field_participant_list_type_role'] = 'Rolle';
$string['mod_form_field_participant_list_type_user'] = 'Bruker';
$string['mod_form_field_participant_list_text_as'] = 'som';
$string['mod_form_field_participant_list_action_add'] = 'Legg til';
$string['mod_form_field_participant_list_action_remove'] = 'Fjern';
$string['mod_form_field_participant_role_viewer'] = 'Seer';
$string['mod_form_field_participant_role_moderator'] = 'Moderator';
$string['error_invalid_participants'] = 'Ugyldig deltakerinnstilling';
$string['error_invalid_role'] = 'Ugyldig rolletildeling';
$string['room_creation_in_progress'] = 'En annen moderator oppretter rommet. Vennligst vent...';
$string['room_already_ended'] = 'Rommet har allerede blitt avsluttet av en annen moderator.';
$string['room_deletion_in_progress'] = 'En annen moderator avslutter rommet. Vennligst vent...';
