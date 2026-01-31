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
$string['modulename_help'] = "Wtyczka Tutoom umożliwia tworzenie w Moodle sal z tablicami w czasie rzeczywistym do nauki na odległość.";
$string['missingidandcmid'] = "Identyfikator Tutoom jest nieprawidłowy. Przejdź do swojego kursu i wybierz aktywność, aby poprawnie wprowadzić Tutoom.";
$string['index_error_noinstances'] = "Brak wystąpień Tutoom";
$string['tutoom:joinasmoderator'] = "Dołącz jako moderator do sali Tutoom";
$string['tutoom:addinstance'] = "Dodaj nową salę/aktywność Tutoom";
$string['config_api_secret_key'] = "Klucz tajny API Tutoom";
$string['config_api_secret_key_description'] = "Klucz tajny API Twojego konta Tutoom";
$string['config_general'] = "Konfiguracja ogólna";
$string['config_general_description'] = "Te ustawienia są <b>zawsze</b> używane";
$string['config_activity_logs'] = "Zapisz dzienniki aktywności";
$string['config_activity_logs_description'] = "Ta opcja zapisuje dzienniki, gdy pokój jest tworzony, usuwany i użytkownik dołącza do pokoju.";
$string['config_recording'] = "Nagrywanie";
$string['config_recording_description'] = "Te ustawienia są specyficzne dla funkcji";
$string['config_recording_enabled'] = "Nagrywanie jest domyślnie włączone";
$string['config_recording_enabled_description'] = "Pokój może być nagrywany domyślnie. Można go edytować w ustawieniach aktywności Tuttom";
$string['config_recording_auto_start'] = "Automatyczne rozpoczęcie nagrywania";
$string['config_recording_auto_start_description'] = "Jeśli opcja jest zaznaczona, pokoje rozpoczną nagrywanie, gdy moderator wejdzie.";
$string['tutoomname'] = "Nazwa";
$string['mod_form_block_room'] = "Ustawienia aktywności/pokoju";
$string['mod_form_field_welcome'] = "Wiadomość powitalna";
$string['mod_form_field_welcome_default_message'] = "Witamy na zajęciach. Możesz zadać dowolne pytanie.";
$string['mod_form_field_record'] = "Pokój można nagrywać";
$string['mod_form_field_room_type'] = "Typ pokoju";
$string['room_type_room_with_recordings'] = "Pokój z nagraniami";
$string['room_type_room_only'] = "Tylko pokój";
$string['room_type_recording_only'] = "Tylko nagrywanie";
$string['view_conference_action_start'] = "Rozpocznij pokój";
$string['view_conference_action_join'] = "Dołącz do pokoju";
$string['view_conference_action_end'] = "Zakończ pokój";
$string['view_message_room_not_initalized'] = "Pokój nie został rozpoczęty.";
$string['view_message_room_ended'] = "Ten pokój został zakończony. Aby kontynuować, odśwież stronę";
$string['view_message_conference_in_this_room'] = "w tym pokoju";
$string['view_message_session_status_on'] = "ONLINE";
$string['view_message_session_status_off'] = "OFFLINE";
$string['view_message_session_started_at'] = "Rozpoczęto o";
$string['view_message_user'] = "użytkownik";
$string['view_message_users'] = "użytkownicy";
$string['recording_title'] = "Nagrania";
$string['recording_preview'] = "Podgląd";
$string['recording_date'] = "Data";
$string['recording_time'] = "Godzina";
$string['recording_duration'] = "Czas trwania";
$string['recording_text_empty'] = "Brak nagrań do tej pory...";
$string['recording_loading'] = "Pobieranie nagrań...";
$string['view_page_error_empty_credentials'] = "Musisz skonfigurować dane uwierzytelniające interfejsu API Tutoom, więcej informacji znajdziesz tutaj: https://tutoom.com/help/articles/native-moodle-plugin";

// Error messages and recovery suggestions.
$string['error_unauthorized'] = "Błąd uwierzytelniania: Nieprawidłowe lub brakujące dane uwierzytelniające API.";
$string['error_unauthorized_suggestion'] = "Skontaktuj się z administratorem witryny, aby zweryfikować konfigurację klucza API Tutoom.";
$string['error_forbidden'] = "Odmowa dostępu: Nie masz uprawnień do wykonania tej czynności.";
$string['error_forbidden_suggestion'] = "Skontaktuj się z administratorem witryny.";
$string['error_no_subscription'] = "Nie znaleziono aktywnej subskrypcji Tutoom.";
$string['error_no_subscription_suggestion'] = "Skontaktuj się z administratorem witryny, aby aktywować subskrypcję Tutoom.";
$string['error_max_rooms'] = "Osiągnięto maksymalną liczbę równoczesnych pokoi dla Twojej subskrypcji.";
$string['error_max_rooms_suggestion'] = "Zakończ istniejące pokoje przed utworzeniem nowych lub skontaktuj się z administratorem, aby uaktualnić subskrypcję.";
$string['error_subscription_inactive'] = "Twoja subskrypcja Tutoom nie jest aktywna.";
$string['error_subscription_inactive_suggestion'] = "Skontaktuj się z administratorem witryny.";
$string['error_validation'] = "Podano nieprawidłowe dane wejściowe.";
$string['error_validation_suggestion'] = "Sprawdź swoje dane wejściowe i spróbuj ponownie.";
$string['error_invalid_idempotency'] = "Nieprawidłowy format żądania.";
$string['error_invalid_idempotency_suggestion'] = "Przeładuj stronę i spróbuj ponownie.";
$string['error_room_not_found'] = "Pokój nie został znaleziony lub został usunięty.";
$string['error_room_not_found_suggestion'] = "Przeładuj stronę. Pokój mógł zostać usunięty.";
$string['error_recording_not_found'] = "Nagranie nie zostało znalezione.";
$string['error_recording_not_found_suggestion'] = "Nagranie może nie być jeszcze dostępne lub mogło zostać usunięte.";
$string['error_rate_limit'] = "Zbyt wiele próśb. Proszę zwolnić.";
$string['error_rate_limit_suggestion'] = "Poczekaj chwilę i spróbuj ponownie.";
$string['error_internal'] = "Wystąpił błąd serwera.";
$string['error_internal_suggestion'] = "Spróbuj ponownie za chwilę. Jeśli problem będzie się powtarzał, skontaktuj się z administratorem.";
$string['error_token_failed'] = "Nie udało się utworzyć tokenu dostępu.";
$string['error_token_failed_suggestion'] = "Spróbuj ponownie. Jeśli problem będzie się powtarzał, skontaktuj się z administratorem.";
$string['error_service_unavailable'] = "Usługa Tutoom jest tymczasowo niedostępna.";
$string['error_service_unavailable_suggestion'] = "Spróbuj ponownie za chwilę.";
$string['error_network'] = "Błąd sieci: Nie można połączyć się z usługą Tutoom.";
$string['error_network_suggestion'] = "Sprawdź połączenie internetowe i spróbuj ponownie.";
$string['error_not_found'] = "Zasób nie został znaleziony.";
$string['error_not_found_suggestion'] = "Przeładuj stronę i spróbuj ponownie.";
$string['error_server'] = "Wystąpił błąd serwera.";
$string['error_server_suggestion'] = "Spróbuj ponownie później.";
$string['error_unknown'] = "Wystąpił nieoczekiwany błąd.";
$string['error_unknown_suggestion'] = "Spróbuj ponownie lub skontaktuj się z administratorem.";
$string['error_request_id'] = '(ID żądania: {$a})';

// Accessibility strings.
$string['view_icon_status'] = "Ikona wskaźnika stanu";
$string['view_icon_clock'] = "Ikona zegara";
$string['view_icon_participants'] = "Ikona uczestników";
$string['view_message_session_status'] = "Informacje o stanie sesji";
$string['view_icon_play'] = "Odtwórz nagranie";
$string['view_icon_empty_recordings'] = "Brak dostępnych nagrań";

$string['recording_pagination'] = "Paginacja nagrań";
$string['recording_previous'] = "Poprzedni";
$string['recording_next'] = "Następny";
$string['recording_previous_page'] = "Przejdź do poprzedniej strony";
$string['recording_next_page'] = "Przejdź do następnej strony";
$string['recording_page'] = "Strona";

$string['privacy:metadata:tutoom_logs'] = "Tabela dziennika aktywności przechowuje zdarzenia pokoju użytkownika.";
$string['privacy:metadata:tutoom_logs:userid'] = "Identyfikator użytkownika, który wywołał zdarzenie.";
$string['privacy:metadata:tutoom_logs:courseid'] = "Identyfikator kursu, w którym wystąpiła aktywność.";
$string['privacy:metadata:tutoom_logs:tutoomid'] = "Identyfikator instancji aktywności Tutoom.";
$string['privacy:metadata:tutoom_logs:timecreated'] = "Znacznik czasu wystąpienia zdarzenia.";
$string['privacy:metadata:tutoom_logs:roomid'] = "UUID pokoju Tutoom.";
$string['privacy:metadata:tutoom_logs:event_type'] = "Typ zdarzenia (CREATE_ROOM, JOIN_ROOM, END_ROOM).";
$string['privacy:metadata:tutoom_logs:event_data'] = "Dodatkowe metadane zdarzenia w formacie JSON.";

$string['privacy:metadata:tutoom'] = "Aby tworzyć i dołączać do pokoi Tutoom, dane użytkownika muszą zostać wymienione z serwerem.";
$string['privacy:metadata:tutoom:fullname'] = "Pełna nazwa użytkownika uzyskującego dostęp do Moodle.";
$string['privacy:metadata:tutoom:userid'] = "Identyfikator użytkownika jest wysyłany do Tutoom w celu identyfikacji użytkownika w pokoju.";
$string['privacy:metadata:tutoom:coursename'] = "Nazwa kursu użytkownika";
$string['privacy:metadata:tutoom:role'] = "Rola użytkownika uzyskującego dostęp do Moodle.";

// Participant management strings.
$string['mod_form_block_participants'] = 'Przypisanie ról dla sesji pokoju';
$string['mod_form_field_participant_list'] = 'Uczestnicy';
$string['mod_form_field_participant_list_type_all'] = 'Wszyscy użytkownicy';
$string['mod_form_field_participant_list_type_role'] = 'Rola';
$string['mod_form_field_participant_list_type_user'] = 'Użytkownik';
$string['mod_form_field_participant_list_text_as'] = 'jako';
$string['mod_form_field_participant_list_action_add'] = 'Dodaj';
$string['mod_form_field_participant_list_action_remove'] = 'Usuń';
$string['mod_form_field_participant_role_viewer'] = 'Widz';
$string['mod_form_field_participant_role_moderator'] = 'Moderator';
$string['error_invalid_participants'] = 'Nieprawidłowe ustawienie uczestników';
$string['error_invalid_role'] = 'Nieprawidłowe przypisanie roli';
$string['room_creation_in_progress'] = 'Inny moderator tworzy pokój. Proszę czekać...';
$string['room_already_ended'] = 'Pokój został już zakończony przez innego moderatora.';
$string['room_deletion_in_progress'] = 'Inny moderator kończy pokój. Proszę czekać...';
