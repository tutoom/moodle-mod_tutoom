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
$string['modulename_help'] = "Dodatak Tutoom omogućuje vam stvaranje soba za bijelu ploču u stvarnom vremenu unutar Moodlea za obrazovanje na daljinu.";
$string['missingidandcmid'] = "Tutoom ID je netočan. Molimo, idite na svoj tečaj i odaberite svoju aktivnost kako biste ispravno ušli u Tutoom.";
$string['index_error_noinstances'] = "Ne postoje primjerci Tutooma";
$string['tutoom:joinasmoderator'] = "Pridružite se kao moderator Tutoom sobe";
$string['tutoom:addinstance'] = "Dodajte novu Tutoom sobu/aktivnost";
$string['config_api_secret_key'] = "Tutoom API tajni ključ";
$string['config_api_secret_key_description'] = "API tajni ključ vašeg Tutoom računa";
$string['config_general'] = "Opća konfiguracija";
$string['config_general_description'] = "Ove se postavke <b>uvijek</b> koriste";
$string['config_activity_logs'] = "Pišite zapisnike aktivnosti";
$string['config_activity_logs_description'] = "Ova opcija sprema zapise kada se soba stvori, izbriše i kada se korisnik pridruži sobi.";
$string['config_recording'] = "Snimanje";
$string['config_recording_description'] = "Ove su postavke specifične za značajku";
$string['config_recording_enabled'] = "Snimanje je omogućeno prema zadanim postavkama";
$string['config_recording_enabled_description'] = "Soba se može snimati prema zadanim postavkama. Može se uređivati u postavkama aktivnosti Tuttom";
$string['config_recording_auto_start'] = "Automatski početak snimanja";
$string['config_recording_auto_start_description'] = "Ako je opcija označena, sobe će početi snimati kada moderator uđe.";
$string['tutoomname'] = "Ime";
$string['mod_form_block_room'] = "Postavke aktivnosti/sobe";
$string['mod_form_field_welcome'] = "Poruka dobrodošlice";
$string['mod_form_field_welcome_default_message'] = "Dobrodošli u razred. Slobodno postavite bilo koje pitanje.";
$string['mod_form_field_record'] = "Soba se može snimati";
$string['mod_form_field_room_type'] = "Tip sobe";
$string['room_type_room_with_recordings'] = "Soba sa snimcima";
$string['room_type_room_only'] = "Samo soba";
$string['room_type_recording_only'] = "Samo snimanje";
$string['view_conference_action_start'] = "Početna soba";
$string['view_conference_action_join'] = "Pridružite se sobi";
$string['view_conference_action_end'] = "Krajnja soba";
$string['view_message_room_not_initalized'] = "Soba nije počela.";
$string['view_message_room_ended'] = "Ova soba je završila. Ponovno učitajte stranicu za nastavak";
$string['view_message_conference_in_this_room'] = "u ovoj sobi";
$string['view_message_session_status_on'] = "ONLINE";
$string['view_message_session_status_off'] = "OFFLINE";
$string['view_message_session_started_at'] = "Započelo u";
$string['view_message_user'] = "korisnik";
$string['view_message_users'] = "korisnika";
$string['recording_title'] = "Snimke";
$string['recording_preview'] = "Pregled";
$string['recording_date'] = "Datum";
$string['recording_time'] = "Vrijeme";
$string['recording_duration'] = "Trajanje";
$string['recording_text_empty'] = "Za sada nema snimanja...";
$string['recording_loading'] = "Dohvaćanje snimaka...";
$string['view_page_error_empty_credentials'] = "Morate konfigurirati Tutoom API vjerodajnice, više informacija ovdje: https://tutoom.com/help/articles/native-moodle-plugin";

// Error messages and recovery suggestions.
$string['error_unauthorized'] = "Greška provjere autentičnosti: Nevažeće ili nedostajuće vjerodajnice API-ja.";
$string['error_unauthorized_suggestion'] = "Obratite se administratoru web mjesta kako biste provjerili konfiguraciju API ključa Tutoom.";
$string['error_forbidden'] = "Pristup odbijen: Nemate dozvolu za izvođenje ove radnje.";
$string['error_forbidden_suggestion'] = "Obratite se administratoru web mjesta.";
$string['error_no_subscription'] = "Nije pronađena aktivna pretplata na Tutoom.";
$string['error_no_subscription_suggestion'] = "Obratite se administratoru web mjesta za aktiviranje Tutoom pretplate.";
$string['error_max_rooms'] = "Dostignut je maksimalan broj istodobnih soba za vašu pretplatu.";
$string['error_max_rooms_suggestion'] = "Zatvorite postojeće sobe prije stvaranja novih ili kontaktirajte administratora kako biste nadogradili pretplatu.";
$string['error_subscription_inactive'] = "Vaša Tutoom pretplata nije aktivna.";
$string['error_subscription_inactive_suggestion'] = "Obratite se administratoru web mjesta.";
$string['error_validation'] = "Naveden je nevažeći unos.";
$string['error_validation_suggestion'] = "Provjerite svoj unos i pokušajte ponovno.";
$string['error_invalid_idempotency'] = "Nevažeći format zahtjeva.";
$string['error_invalid_idempotency_suggestion'] = "Osvježite stranicu i pokušajte ponovno.";
$string['error_room_not_found'] = "Soba nije pronađena ili je izbrisana.";
$string['error_room_not_found_suggestion'] = "Osvježite stranicu. Soba je možda izbrisana.";
$string['error_recording_not_found'] = "Snimka nije pronađena.";
$string['error_recording_not_found_suggestion'] = "Snimka možda još nije dostupna ili je izbrisana.";
$string['error_rate_limit'] = "Previše zahtjeva. Usporite.";
$string['error_rate_limit_suggestion'] = "Pričekajte trenutak i pokušajte ponovno.";
$string['error_internal'] = "Došlo je do greške poslužitelja.";
$string['error_internal_suggestion'] = "Pokušajte ponovno za nekoliko trenutaka. Ako problem ne nestane, obratite se administratoru.";
$string['error_token_failed'] = "Nije uspjelo stvaranje pristupnog tokena.";
$string['error_token_failed_suggestion'] = "Pokušajte ponovno. Ako problem ne nestane, obratite se administratoru.";
$string['error_service_unavailable'] = "Tutoom usluga je privremeno nedostupna.";
$string['error_service_unavailable_suggestion'] = "Pokušajte ponovno za nekoliko trenutaka.";
$string['error_network'] = "Mrežna greška: Nije moguće povezati se s Tutoom uslugom.";
$string['error_network_suggestion'] = "Provjerite internetsku vezu i pokušajte ponovno.";
$string['error_not_found'] = "Resurs nije pronađen.";
$string['error_not_found_suggestion'] = "Osvježite stranicu i pokušajte ponovno.";
$string['error_server'] = "Došlo je do greške poslužitelja.";
$string['error_server_suggestion'] = "Pokušajte ponovno kasnije.";
$string['error_unknown'] = "Došlo je do neočekivane greške.";
$string['error_unknown_suggestion'] = "Pokušajte ponovno ili se obratite administratoru.";
$string['error_request_id'] = '(ID zahtjeva: {$a})';

// Accessibility strings.
$string['view_icon_status'] = "Ikona indikatora statusa";
$string['view_icon_clock'] = "Ikona sata";
$string['view_icon_participants'] = "Ikona sudionika";
$string['view_message_session_status'] = "Informacije o statusu sesije";
$string['view_icon_play'] = "Reproduciraj snimku";
$string['view_icon_empty_recordings'] = "Nema dostupnih snimaka";

$string['recording_pagination'] = "Straničenje snimaka";
$string['recording_previous'] = "Prethodno";
$string['recording_next'] = "Sljedeći";
$string['recording_previous_page'] = "Idi na prethodnu stranicu";
$string['recording_next_page'] = "Idi na sljedeću stranicu";
$string['recording_page'] = "Stranica";

$string['privacy:metadata:tutoom_logs'] = "Tablica evidencije aktivnosti pohranjuje događaje korisničkih soba.";
$string['privacy:metadata:tutoom_logs:userid'] = "ID korisnika koji je pokrenuo događaj.";
$string['privacy:metadata:tutoom_logs:courseid'] = "ID tečaja gdje se dogodila aktivnost.";
$string['privacy:metadata:tutoom_logs:tutoomid'] = "ID instance aktivnosti Tutoom.";
$string['privacy:metadata:tutoom_logs:timecreated'] = "Vremenska oznaka kada se događaj dogodio.";
$string['privacy:metadata:tutoom_logs:roomid'] = "UUID sobe Tutoom.";
$string['privacy:metadata:tutoom_logs:event_type'] = "Vrsta događaja (CREATE_ROOM, JOIN_ROOM, END_ROOM).";
$string['privacy:metadata:tutoom_logs:event_data'] = "Dodatni metapodaci događaja u JSON formatu.";

$string['privacy:metadata:tutoom'] = "Kako biste kreirali i pridružili se Tutoom sobama, potrebno je razmijeniti korisničke podatke s poslužiteljem.";
$string['privacy:metadata:tutoom:fullname'] = "Puno ime korisnika koji pristupa Moodleu.";
$string['privacy:metadata:tutoom:userid'] = "ID korisnika se šalje Tutoomu za identifikaciju korisnika u sobi.";
$string['privacy:metadata:tutoom:coursename'] = "Naziv tečaja korisnika";
$string['privacy:metadata:tutoom:role'] = "Uloga korisnika koji pristupa Moodleu.";

// Participant management strings.
$string['mod_form_block_participants'] = 'Dodjela uloga za sesiju sobe';
$string['mod_form_field_participant_list'] = 'Sudionici';
$string['mod_form_field_participant_list_type_all'] = 'Svi korisnici';
$string['mod_form_field_participant_list_type_role'] = 'Uloga';
$string['mod_form_field_participant_list_type_user'] = 'Korisnik';
$string['mod_form_field_participant_list_text_as'] = 'kao';
$string['mod_form_field_participant_list_action_add'] = 'Dodaj';
$string['mod_form_field_participant_list_action_remove'] = 'Ukloni';
$string['mod_form_field_participant_role_viewer'] = 'Gledatelj';
$string['mod_form_field_participant_role_moderator'] = 'Moderator';
$string['error_invalid_participants'] = 'Nevažeća konfiguracija sudionika';
$string['error_invalid_role'] = 'Nevažeća dodjela uloge';
$string['room_creation_in_progress'] = 'Drugi moderator stvara sobu. Molimo pričekajte...';
$string['room_already_ended'] = 'Sobu je već završio drugi moderator.';
$string['room_deletion_in_progress'] = 'Drugi moderator završava sobu. Molimo pričekajte...';
