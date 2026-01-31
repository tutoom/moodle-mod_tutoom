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
$string['modulename_help'] = "Pluginul Tutoom vă permite să creați din interiorul Moodle săli de tablă albă în timp real pentru educație la distanță.";
$string['missingidandcmid'] = "ID-ul Tutoom este incorect. Vă rugăm să mergeți la cursul dvs. și să vă selectați activitatea pentru a intra corect în Tutoom.";
$string['index_error_noinstances'] = "Nu există cazuri de Tutoom";
$string['tutoom:joinasmoderator'] = "Alăturați-vă ca moderator într-o sală Tutoom";
$string['tutoom:addinstance'] = "Adăugați o nouă sală/activitate Tutoom";
$string['config_api_secret_key'] = "Cheia secretă API Tutoom";
$string['config_api_secret_key_description'] = "Cheia secretă API a contului dvs. Tutoom";
$string['config_general'] = "Configurație generală";
$string['config_general_description'] = "Aceste setări sunt <b>întotdeauna</b> utilizate";
$string['config_activity_logs'] = "Scrieți jurnalele de activitate";
$string['config_activity_logs_description'] = "Această opțiune salvează jurnalele atunci când o cameră este creată, ștearsă și utilizatorul se alătură acesteia.";
$string['config_recording'] = "Înregistrare";
$string['config_recording_description'] = "Aceste setări sunt specifice funcției";
$string['config_recording_enabled'] = "Înregistrarea este activată implicit";
$string['config_recording_enabled_description'] = "Camera poate fi înregistrată în mod implicit. Poate fi editabil în setările de activitate Tuttom";
$string['config_recording_auto_start'] = "Înregistrare pornire automată";
$string['config_recording_auto_start_description'] = "Dacă opțiunea este bifată, sălile vor începe înregistrarea când moderatorul va intra.";
$string['tutoomname'] = "Nume";
$string['mod_form_block_room'] = "Setări activitate/cameră";
$string['mod_form_field_welcome'] = "Mesaj de bun venit";
$string['mod_form_field_welcome_default_message'] = "Bun venit la clasa. Simțiți-vă liber să puneți orice întrebare.";
$string['mod_form_field_record'] = "Camera poate fi înregistrată";
$string['mod_form_field_room_type'] = "Tipul camerei";
$string['room_type_room_with_recordings'] = "Cameră cu înregistrări";
$string['room_type_room_only'] = "Numai camera";
$string['room_type_recording_only'] = "Doar înregistrare";
$string['view_conference_action_start'] = "Camera de start";
$string['view_conference_action_join'] = "Alăturați-vă camerei";
$string['view_conference_action_end'] = "Cameră de capăt";
$string['view_message_room_not_initalized'] = "Camera nu a început.";
$string['view_message_room_ended'] = "Această cameră s-a terminat. Vă rugăm să reîncărcați pagina pentru a continua";
$string['view_message_conference_in_this_room'] = "în această cameră";
$string['view_message_session_status_on'] = "ONLINE";
$string['view_message_session_status_off'] = "OFFLINE";
$string['view_message_session_started_at'] = "A început la";
$string['view_message_user'] = "utilizator";
$string['view_message_users'] = "utilizatorilor";
$string['recording_title'] = "Înregistrări";
$string['recording_preview'] = "Previzualizare";
$string['recording_date'] = "Data";
$string['recording_time'] = "Timp";
$string['recording_duration'] = "Durată";
$string['recording_text_empty'] = "Nicio înregistrare până acum...";
$string['recording_loading'] = "Se primesc înregistrări...";
$string['view_page_error_empty_credentials'] = "Trebuie să configurați acreditările API Tutoom, mai multe informații aici: https://tutoom.com/help/articles/native-moodle-plugin";

// Error messages and recovery suggestions.
$string['error_unauthorized'] = "Eroare de autentificare: Acreditări API invalide sau lipsă.";
$string['error_unauthorized_suggestion'] = "Vă rugăm să contactați administratorul site-ului pentru a verifica configurarea cheii API Tutoom.";
$string['error_forbidden'] = "Acces refuzat: Nu aveți permisiunea de a efectua această acțiune.";
$string['error_forbidden_suggestion'] = "Vă rugăm să contactați administratorul site-ului.";
$string['error_no_subscription'] = "Nu s-a găsit un abonament Tutoom activ.";
$string['error_no_subscription_suggestion'] = "Vă rugăm să contactați administratorul site-ului pentru a activa abonamentul Tutoom.";
$string['error_max_rooms'] = "Numărul maxim de camere simultane pentru abonamentul dvs. a fost atins.";
$string['error_max_rooms_suggestion'] = "Vă rugăm să încheiați camerele existente înainte de a crea altele noi sau să contactați administratorul pentru a actualiza abonamentul.";
$string['error_subscription_inactive'] = "Abonamentul dvs. Tutoom nu este activ.";
$string['error_subscription_inactive_suggestion'] = "Vă rugăm să contactați administratorul site-ului.";
$string['error_validation'] = "Date de intrare nevalide furnizate.";
$string['error_validation_suggestion'] = "Vă rugăm să verificați datele introduse și să încercați din nou.";
$string['error_invalid_idempotency'] = "Format de solicitare nevalid.";
$string['error_invalid_idempotency_suggestion'] = "Vă rugăm să reîncărcați pagina și să încercați din nou.";
$string['error_room_not_found'] = "Camera nu a fost găsită sau a fost ștearsă.";
$string['error_room_not_found_suggestion'] = "Vă rugăm să reîncărcați pagina. Camera ar putea fi fost ștearsă.";
$string['error_recording_not_found'] = "Înregistrarea nu a fost găsită.";
$string['error_recording_not_found_suggestion'] = "Înregistrarea ar putea să nu fie încă disponibilă sau ar putea fi fost ștearsă.";
$string['error_rate_limit'] = "Prea multe solicitări. Vă rugăm să reduceți viteza.";
$string['error_rate_limit_suggestion'] = "Vă rugăm să așteptați un moment și să încercați din nou.";
$string['error_internal'] = "A apărut o eroare de server.";
$string['error_internal_suggestion'] = "Vă rugăm să încercați din nou în câteva momente. Dacă problema persistă, contactați administratorul.";
$string['error_token_failed'] = "Eșec la crearea token-ului de acces.";
$string['error_token_failed_suggestion'] = "Vă rugăm să încercați din nou. Dacă problema persistă, contactați administratorul.";
$string['error_service_unavailable'] = "Serviciul Tutoom este temporar indisponibil.";
$string['error_service_unavailable_suggestion'] = "Vă rugăm să încercați din nou în câteva momente.";
$string['error_network'] = "Eroare de rețea: Nu se poate conecta la serviciul Tutoom.";
$string['error_network_suggestion'] = "Vă rugăm să verificați conexiunea la internet și să încercați din nou.";
$string['error_not_found'] = "Resursa nu a fost găsită.";
$string['error_not_found_suggestion'] = "Vă rugăm să reîncărcați pagina și să încercați din nou.";
$string['error_server'] = "A apărut o eroare de server.";
$string['error_server_suggestion'] = "Vă rugăm să încercați din nou mai târziu.";
$string['error_unknown'] = "A apărut o eroare neașteptată.";
$string['error_unknown_suggestion'] = "Vă rugăm să încercați din nou sau să contactați administratorul.";
$string['error_request_id'] = '(ID solicitare: {$a})';

// Accessibility strings.
$string['view_icon_status'] = "Pictogramă indicator de stare";
$string['view_icon_clock'] = "Pictogramă ceas";
$string['view_icon_participants'] = "Pictogramă participanți";
$string['view_message_session_status'] = "Informații despre starea sesiunii";
$string['view_icon_play'] = "Redați înregistrarea";
$string['view_icon_empty_recordings'] = "Nicio înregistrare disponibilă";

$string['recording_pagination'] = "Paginare înregistrări";
$string['recording_previous'] = "Anterior";
$string['recording_next'] = "Următorul";
$string['recording_previous_page'] = "Mergi la pagina anterioară";
$string['recording_next_page'] = "Mergi la pagina următoare";
$string['recording_page'] = "Pagină";

$string['privacy:metadata:tutoom_logs'] = "Tabelul jurnalului de activitate stochează evenimentele din camerele utilizatorilor.";
$string['privacy:metadata:tutoom_logs:userid'] = "ID-ul utilizatorului care a declanșat evenimentul.";
$string['privacy:metadata:tutoom_logs:courseid'] = "ID-ul cursului în care a avut loc activitatea.";
$string['privacy:metadata:tutoom_logs:tutoomid'] = "ID-ul instanței de activitate Tutoom.";
$string['privacy:metadata:tutoom_logs:timecreated'] = "Marca temporală când a avut loc evenimentul.";
$string['privacy:metadata:tutoom_logs:roomid'] = "UUID-ul camerei Tutoom.";
$string['privacy:metadata:tutoom_logs:event_type'] = "Tipul de eveniment (CREATE_ROOM, JOIN_ROOM, END_ROOM).";
$string['privacy:metadata:tutoom_logs:event_data'] = "Metadate suplimentare despre eveniment în format JSON.";

$string['privacy:metadata:tutoom'] = "Pentru a crea și a vă alătura sălilor Tutoom, datele utilizatorilor trebuie schimbate cu serverul.";
$string['privacy:metadata:tutoom:fullname'] = "Numele complet al utilizatorului care accesează Moodle.";
$string['privacy:metadata:tutoom:userid'] = "ID-ul utilizatorului este trimis la Tutoom pentru a identifica utilizatorul în cameră.";
$string['privacy:metadata:tutoom:coursename'] = "Numele cursului al utilizatorului";
$string['privacy:metadata:tutoom:role'] = "Rolul utilizatorului care accesează Moodle.";

// Participant management strings.
$string['mod_form_block_participants'] = 'Atribuirea rolurilor pentru sesiunea de cameră';
$string['mod_form_field_participant_list'] = 'Participanți';
$string['mod_form_field_participant_list_type_all'] = 'Toți utilizatorii';
$string['mod_form_field_participant_list_type_role'] = 'Rol';
$string['mod_form_field_participant_list_type_user'] = 'Utilizator';
$string['mod_form_field_participant_list_text_as'] = 'ca';
$string['mod_form_field_participant_list_action_add'] = 'Adăugați';
$string['mod_form_field_participant_list_action_remove'] = 'Eliminați';
$string['mod_form_field_participant_role_viewer'] = 'Vizualizator';
$string['mod_form_field_participant_role_moderator'] = 'Moderator';
$string['error_invalid_participants'] = 'Configurare participanți nevalidă';
$string['error_invalid_role'] = 'Atribuire rol nevalidă';
$string['room_creation_in_progress'] = 'Un alt moderator creează camera. Vă rugăm așteptați...';
$string['room_already_ended'] = 'Camera a fost deja încheiată de un alt moderator.';
$string['room_deletion_in_progress'] = 'Un alt moderator încheie camera. Vă rugăm așteptați...';
