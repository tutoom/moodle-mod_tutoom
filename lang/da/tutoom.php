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
$string['modulename_help'] = "Tutoom plugin giver dig mulighed for at oprette inde fra Moodle realtime whiteboard-rum til fjernundervisning.";
$string['missingidandcmid'] = "Tutoom-id er forkert. Gå venligst til dit kursus og vælg din aktivitet for at komme korrekt ind i Tutoom.";
$string['index_error_noinstances'] = "Der er ingen forekomster af Tutoom";
$string['tutoom:joinasmoderator'] = "Deltag som moderator i et Tutoom-rum";
$string['tutoom:addinstance'] = "Tilføj et nyt Tutoom-rum/-aktivitet";
$string['config_api_secret_key'] = "Tutoom API hemmelig nøgle";
$string['config_api_secret_key_description'] = "Den hemmelige API-nøgle til din Tutoom-konto";
$string['config_general'] = "Generel konfiguration";
$string['config_general_description'] = "Disse indstillinger bruges <b>altid</b>";
$string['config_activity_logs'] = "Skriv aktivitetslogs";
$string['config_activity_logs_description'] = "Denne mulighed gemmer logfiler, når et rum er oprettet, slettet og brugeren tilslutter sig rummet.";
$string['config_recording'] = "Indspilning";
$string['config_recording_description'] = "Disse indstillinger er funktionsspecifikke";
$string['config_recording_enabled'] = "Optagelse aktiveret som standard";
$string['config_recording_enabled_description'] = "Rum kan optages som standard. Kan redigeres i Tuttom-aktivitetsindstillingerne";
$string['config_recording_auto_start'] = "Automatisk start af optagelse";
$string['config_recording_auto_start_description'] = "Hvis indstillingen er markeret, vil rum begynde at optage, når moderator kommer ind.";
$string['tutoomname'] = "Navn";
$string['mod_form_block_room'] = "Aktivitet/rumindstillinger";
$string['mod_form_field_welcome'] = "Velkomstbesked";
$string['mod_form_field_welcome_default_message'] = "Velkommen til klassen. Du er velkommen til at stille ethvert spørgsmål.";
$string['mod_form_field_record'] = "Rum kan optages";
$string['mod_form_field_room_type'] = "Værelsestype";
$string['room_type_room_with_recordings'] = "Rum med optagelser";
$string['room_type_room_only'] = "Kun værelse";
$string['room_type_recording_only'] = "Kun optagelse";
$string['view_conference_action_start'] = "Start værelse";
$string['view_conference_action_join'] = "Deltag i værelset";
$string['view_conference_action_end'] = "Ende værelse";
$string['view_message_room_not_initalized'] = "Rummet er ikke startet.";
$string['view_message_room_ended'] = "Dette værelse er slut. Genindlæs siden for at fortsætte";
$string['view_message_conference_in_this_room'] = "i dette rum";
$string['view_message_session_status_on'] = "ONLINE";
$string['view_message_session_status_off'] = "OFFLINE";
$string['view_message_session_started_at'] = "Startede kl";
$string['view_message_user'] = "bruger";
$string['view_message_users'] = "brugere";
$string['recording_title'] = "Optagelser";
$string['recording_preview'] = "Forhåndsvisning";
$string['recording_date'] = "Dato";
$string['recording_time'] = "Tid";
$string['recording_duration'] = "Varighed";
$string['recording_text_empty'] = "Ingen optagelser indtil videre...";
$string['recording_loading'] = "Henter optagelser...";
$string['view_page_error_empty_credentials'] = "Du skal konfigurere Tutoom API-legitimationsoplysninger, mere information her: https://tutoom.com/help/articles/native-moodle-plugin";

// Error messages and recovery suggestions.
$string['error_unauthorized'] = "Godkendelsesfejl: Ugyldige eller manglende API-legitimationsoplysninger.";
$string['error_unauthorized_suggestion'] = "Kontakt venligst din webstedsadministrator for at verificere Tutoom API-nøglekonfigurationen.";
$string['error_forbidden'] = "Adgang nægtet: Du har ikke tilladelse til at udføre denne handling.";
$string['error_forbidden_suggestion'] = "Kontakt venligst din webstedsadministrator.";
$string['error_no_subscription'] = "Intet aktivt Tutoom-abonnement fundet.";
$string['error_no_subscription_suggestion'] = "Kontakt venligst din webstedsadministrator for at aktivere dit Tutoom-abonnement.";
$string['error_max_rooms'] = "Maksimalt antal samtidige rum nået for dit abonnement.";
$string['error_max_rooms_suggestion'] = "Afslut venligst eksisterende rum før oprettelse af nye, eller kontakt din administrator for at opgradere dit abonnement.";
$string['error_subscription_inactive'] = "Dit Tutoom-abonnement er ikke aktivt.";
$string['error_subscription_inactive_suggestion'] = "Kontakt venligst din webstedsadministrator.";
$string['error_validation'] = "Ugyldigt input leveret.";
$string['error_validation_suggestion'] = "Kontroller venligst dit input og prøv igen.";
$string['error_invalid_idempotency'] = "Ugyldigt anmodningsformat.";
$string['error_invalid_idempotency_suggestion'] = "Genindlæs venligst siden og prøv igen.";
$string['error_room_not_found'] = "Rum ikke fundet eller er blevet slettet.";
$string['error_room_not_found_suggestion'] = "Genindlæs venligst siden. Rummet kan være blevet slettet.";
$string['error_recording_not_found'] = "Optagelse ikke fundet.";
$string['error_recording_not_found_suggestion'] = "Optagelsen er muligvis ikke tilgængelig endnu eller kan være blevet slettet.";
$string['error_rate_limit'] = "For mange anmodninger. Sænk venligst hastigheden.";
$string['error_rate_limit_suggestion'] = "Vent venligst et øjeblik og prøv igen.";
$string['error_internal'] = "Serverfejl opstod.";
$string['error_internal_suggestion'] = "Prøv venligst igen om et øjeblik. Hvis problemet fortsætter, kontakt din administrator.";
$string['error_token_failed'] = "Kunne ikke oprette adgangstoken.";
$string['error_token_failed_suggestion'] = "Prøv venligst igen. Hvis problemet fortsætter, kontakt din administrator.";
$string['error_service_unavailable'] = "Tutoom-tjenesten er midlertidigt utilgængelig.";
$string['error_service_unavailable_suggestion'] = "Prøv venligst igen om et øjeblik.";
$string['error_network'] = "Netværksfejl: Kunne ikke oprette forbindelse til Tutoom-tjenesten.";
$string['error_network_suggestion'] = "Kontroller venligst din internetforbindelse og prøv igen.";
$string['error_not_found'] = "Ressource ikke fundet.";
$string['error_not_found_suggestion'] = "Genindlæs venligst siden og prøv igen.";
$string['error_server'] = "Serverfejl opstod.";
$string['error_server_suggestion'] = "Prøv venligst igen senere.";
$string['error_unknown'] = "Der opstod en uventet fejl.";
$string['error_unknown_suggestion'] = "Prøv venligst igen eller kontakt din administrator.";
$string['error_request_id'] = '(Anmodnings-ID: {$a})';

// Accessibility strings.
$string['view_icon_status'] = "Statusindikatorikon";
$string['view_icon_clock'] = "Urikon";
$string['view_icon_participants'] = "Deltagerikon";
$string['view_message_session_status'] = "Information om sessionsstatus";
$string['view_icon_play'] = "Afspil optagelse";
$string['view_icon_empty_recordings'] = "Ingen optagelser tilgængelige";

$string['recording_pagination'] = "Optagelsespaginering";
$string['recording_previous'] = "Forrige";
$string['recording_next'] = "Næste";
$string['recording_previous_page'] = "Gå til forrige side";
$string['recording_next_page'] = "Gå til næste side";
$string['recording_page'] = "Side";

$string['privacy:metadata:tutoom_logs'] = "Aktivitetslogtabellen gemmer brugerrumhændelser.";
$string['privacy:metadata:tutoom_logs:userid'] = "Bruger-ID'et for den bruger, der udløste hændelsen.";
$string['privacy:metadata:tutoom_logs:courseid'] = "Kursus-ID'et hvor aktiviteten fandt sted.";
$string['privacy:metadata:tutoom_logs:tutoomid'] = "Tutoom-aktivitetsinstans-ID'et.";
$string['privacy:metadata:tutoom_logs:timecreated'] = "Tidsstemplet for hvornår hændelsen fandt sted.";
$string['privacy:metadata:tutoom_logs:roomid'] = "Tutoom-rummets UUID.";
$string['privacy:metadata:tutoom_logs:event_type'] = "Hændelsestypen (CREATE_ROOM, JOIN_ROOM, END_ROOM).";
$string['privacy:metadata:tutoom_logs:event_data'] = "Yderligere hændelsesmetadata i JSON-format.";

$string['privacy:metadata:tutoom'] = "For at oprette og deltage i Tutoom-rum skal brugerdata udveksles med serveren.";
$string['privacy:metadata:tutoom:fullname'] = "Det fulde navn på den bruger, der har adgang til Moodle.";
$string['privacy:metadata:tutoom:userid'] = "Bruger-ID'et sendes til Tutoom for at identificere brugeren i rummet.";
$string['privacy:metadata:tutoom:coursename'] = "Kursusnavnet på brugeren";
$string['privacy:metadata:tutoom:role'] = "Rollen for brugeren, der har adgang til Moodle.";

// Participant management strings.
$string['mod_form_block_participants'] = 'Rolletildelinger for rumsession';
$string['mod_form_field_participant_list'] = 'Deltagere';
$string['mod_form_field_participant_list_type_all'] = 'Alle brugere';
$string['mod_form_field_participant_list_type_role'] = 'Rolle';
$string['mod_form_field_participant_list_type_user'] = 'Bruger';
$string['mod_form_field_participant_list_text_as'] = 'som';
$string['mod_form_field_participant_list_action_add'] = 'Tilføj';
$string['mod_form_field_participant_list_action_remove'] = 'Fjern';
$string['mod_form_field_participant_role_viewer'] = 'Seer';
$string['mod_form_field_participant_role_moderator'] = 'Moderator';
$string['error_invalid_participants'] = 'Ugyldig deltagerkonfiguration';
$string['error_invalid_role'] = 'Ugyldig rolletildeling';
$string['room_creation_in_progress'] = 'En anden moderator opretter rummet. Vent venligst...';
$string['room_already_ended'] = 'Rummet er allerede blevet afsluttet af en anden moderator.';
$string['room_deletion_in_progress'] = 'En anden moderator afslutter rummet. Vent venligst...';
