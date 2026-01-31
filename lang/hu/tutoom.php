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
$string['modulename_help'] = "A Tutoom beépülő modul segítségével a Moodle valós idejű táblatermeiből hozhat létre távoktatási célokat.";
$string['missingidandcmid'] = "A Tutoom azonosító hibás. Kérjük, lépjen a kurzusára, és válassza ki a tevékenységét, hogy helyesen lépjen be a Tutoomba.";
$string['index_error_noinstances'] = "Tutoomra nincs példa";
$string['tutoom:joinasmoderator'] = "Csatlakozz moderátorként egy Tutoom szobához";
$string['tutoom:addinstance'] = "Új Tutoom szoba/tevékenység hozzáadása";
$string['config_api_secret_key'] = "Tutoom API titkos kulcs";
$string['config_api_secret_key_description'] = "A Tutoom-fiókod API titkos kulcsa";
$string['config_general'] = "Általános konfiguráció";
$string['config_general_description'] = "Ezeket a beállításokat a rendszer <b>mindig</b> használja";
$string['config_activity_logs'] = "Tevékenységi naplók írása";
$string['config_activity_logs_description'] = "Ez az opció naplókat ment el egy szoba létrehozásakor, törlésekor és a felhasználó csatlakozásakor.";
$string['config_recording'] = "Felvétel";
$string['config_recording_description'] = "Ezek a beállítások szolgáltatásspecifikusak";
$string['config_recording_enabled'] = "A rögzítés alapértelmezés szerint engedélyezve van";
$string['config_recording_enabled_description'] = "A szoba alapértelmezés szerint rögzíthető. A Tuttom tevékenység beállításaiban szerkeszthető";
$string['config_recording_auto_start'] = "Felvétel automatikus indítása";
$string['config_recording_auto_start_description'] = "Ha ez az opció be van jelölve, a szobák a moderátor belépésekor megkezdik a rögzítést.";
$string['tutoomname'] = "Név";
$string['mod_form_block_room'] = "Tevékenység/Szobabeállítások";
$string['mod_form_field_welcome'] = "Üdvözlő üzenet";
$string['mod_form_field_welcome_default_message'] = "Üdvözöljük az osztályban. Nyugodtan kérdezzen.";
$string['mod_form_field_record'] = "A szoba rögzíthető";
$string['mod_form_field_room_type'] = "Szoba típusa";
$string['room_type_room_with_recordings'] = "Szoba felvételekkel";
$string['room_type_room_only'] = "Csak szoba";
$string['room_type_recording_only'] = "Csak felvétel";
$string['view_conference_action_start'] = "Kezdő szoba";
$string['view_conference_action_join'] = "Csatlakozz a szobához";
$string['view_conference_action_end'] = "Végszoba";
$string['view_message_room_not_initalized'] = "A szoba nem indult el.";
$string['view_message_room_ended'] = "Ez a szoba véget ért. A folytatáshoz töltse be újra az oldalt";
$string['view_message_conference_in_this_room'] = "ebben a szobában";
$string['view_message_session_status_on'] = "ONLINE";
$string['view_message_session_status_off'] = "OFFLINE";
$string['view_message_session_started_at'] = "-kor kezdődött";
$string['view_message_user'] = "felhasználó";
$string['view_message_users'] = "felhasználókat";
$string['recording_title'] = "Felvételek";
$string['recording_preview'] = "Előnézet";
$string['recording_date'] = "Dátum";
$string['recording_time'] = "Idő";
$string['recording_duration'] = "Időtartam";
$string['recording_text_empty'] = "Egyelőre nincs felvétel...";
$string['recording_loading'] = "Felvételek lekérése...";
$string['view_page_error_empty_credentials'] = "Be kell állítania a Tutoom API hitelesítő adatait, további információ itt: https://tutoom.com/help/articles/native-moodle-plugin";

// Error messages and recovery suggestions.
$string['error_unauthorized'] = "Hitelesítési hiba: Érvénytelen vagy hiányzó API hitelesítő adatok.";
$string['error_unauthorized_suggestion'] = "Kérjük, forduljon a webhely rendszergazdájához a Tutoom API kulcs konfigurációjának ellenőrzéséhez.";
$string['error_forbidden'] = "Hozzáférés megtagadva: Nincs engedélye a művelet végrehajtásához.";
$string['error_forbidden_suggestion'] = "Kérjük, forduljon a webhely rendszergazdájához.";
$string['error_no_subscription'] = "Nem található aktív Tutoom előfizetés.";
$string['error_no_subscription_suggestion'] = "Kérjük, forduljon a webhely rendszergazdájához a Tutoom előfizetés aktiválásához.";
$string['error_max_rooms'] = "Az előfizetéshez tartozó egyidejű szobák maximális száma elérve.";
$string['error_max_rooms_suggestion'] = "Kérjük, fejezze be a meglévő szobákat, mielőtt újakat hoz létre, vagy forduljon a rendszergazdához az előfizetés frissítéséhez.";
$string['error_subscription_inactive'] = "A Tutoom előfizetése nem aktív.";
$string['error_subscription_inactive_suggestion'] = "Kérjük, forduljon a webhely rendszergazdájához.";
$string['error_validation'] = "Érvénytelen bemenet lett megadva.";
$string['error_validation_suggestion'] = "Kérjük, ellenőrizze a bemenetet és próbálja újra.";
$string['error_invalid_idempotency'] = "Érvénytelen kérésformátum.";
$string['error_invalid_idempotency_suggestion'] = "Kérjük, frissítse az oldalt és próbálja újra.";
$string['error_room_not_found'] = "A szoba nem található vagy törölve lett.";
$string['error_room_not_found_suggestion'] = "Kérjük, frissítse az oldalt. Lehet, hogy a szoba törölve lett.";
$string['error_recording_not_found'] = "A felvétel nem található.";
$string['error_recording_not_found_suggestion'] = "A felvétel még nem elérhető, vagy törölve lett.";
$string['error_rate_limit'] = "Túl sok kérés. Kérjük, lassítson.";
$string['error_rate_limit_suggestion'] = "Kérjük, várjon egy pillanatot és próbálja újra.";
$string['error_internal'] = "Szerverhiba történt.";
$string['error_internal_suggestion'] = "Kérjük, próbálja újra néhány pillanat múlva. Ha a probléma továbbra is fennáll, forduljon a rendszergazdához.";
$string['error_token_failed'] = "Nem sikerült létrehozni a hozzáférési tokent.";
$string['error_token_failed_suggestion'] = "Kérjük, próbálja újra. Ha a probléma továbbra is fennáll, forduljon a rendszergazdához.";
$string['error_service_unavailable'] = "A Tutoom szolgáltatás átmenetileg nem érhető el.";
$string['error_service_unavailable_suggestion'] = "Kérjük, próbálja újra néhány pillanat múlva.";
$string['error_network'] = "Hálózati hiba: Nem sikerült csatlakozni a Tutoom szolgáltatáshoz.";
$string['error_network_suggestion'] = "Kérjük, ellenőrizze az internetkapcsolatot és próbálja újra.";
$string['error_not_found'] = "Az erőforrás nem található.";
$string['error_not_found_suggestion'] = "Kérjük, frissítse az oldalt és próbálja újra.";
$string['error_server'] = "Szerverhiba történt.";
$string['error_server_suggestion'] = "Kérjük, próbálja újra később.";
$string['error_unknown'] = "Váratlan hiba történt.";
$string['error_unknown_suggestion'] = "Kérjük, próbálja újra, vagy forduljon a rendszergazdához.";
$string['error_request_id'] = '(Kérés azonosítója: {$a})';

// Accessibility strings.
$string['view_icon_status'] = "Állapotjelző ikon";
$string['view_icon_clock'] = "Óra ikon";
$string['view_icon_participants'] = "Résztvevők ikon";
$string['view_message_session_status'] = "Munkamenet állapotinformációi";
$string['view_icon_play'] = "Felvétel lejátszása";
$string['view_icon_empty_recordings'] = "Nincsenek elérhető felvételek";

$string['recording_pagination'] = "Felvételek lapozása";
$string['recording_previous'] = "Előző";
$string['recording_next'] = "Következő";
$string['recording_previous_page'] = "Ugrás az előző oldalra";
$string['recording_next_page'] = "Ugrás a következő oldalra";
$string['recording_page'] = "Oldal";

$string['privacy:metadata:tutoom_logs'] = "A tevékenységnaplók táblája a felhasználói szoba eseményeit tárolja.";
$string['privacy:metadata:tutoom_logs:userid'] = "Az eseményt kiváltó felhasználó azonosítója.";
$string['privacy:metadata:tutoom_logs:courseid'] = "Az a kurzusazonosító, ahol a tevékenység történt.";
$string['privacy:metadata:tutoom_logs:tutoomid'] = "A Tutoom tevékenységpéldány azonosítója.";
$string['privacy:metadata:tutoom_logs:timecreated'] = "Az az időbélyeg, amikor az esemény bekövetkezett.";
$string['privacy:metadata:tutoom_logs:roomid'] = "A Tutoom szoba UUID-je.";
$string['privacy:metadata:tutoom_logs:event_type'] = "Az esemény típusa (CREATE_ROOM, JOIN_ROOM, END_ROOM).";
$string['privacy:metadata:tutoom_logs:event_data'] = "További esemény metaadatok JSON formátumban.";

$string['privacy:metadata:tutoom'] = "A Tutoom szobák létrehozásához és azokhoz való csatlakozáshoz felhasználói adatokat kell kicserélni a szerverrel.";
$string['privacy:metadata:tutoom:fullname'] = "A Moodle-t elérő felhasználó teljes neve.";
$string['privacy:metadata:tutoom:userid'] = "A felhasználói azonosítót elküldjük a Tutoomnak a felhasználó azonosításához a szobában.";
$string['privacy:metadata:tutoom:coursename'] = "A felhasználó tanfolyam neve";
$string['privacy:metadata:tutoom:role'] = "A Moodle-t elérő felhasználó szerepe.";

// Participant management strings.
$string['mod_form_block_participants'] = 'Szerepkioszások a szobamenethez';
$string['mod_form_field_participant_list'] = 'Résztvevők';
$string['mod_form_field_participant_list_type_all'] = 'Minden felhasználó';
$string['mod_form_field_participant_list_type_role'] = 'Szerep';
$string['mod_form_field_participant_list_type_user'] = 'Felhasználó';
$string['mod_form_field_participant_list_text_as'] = 'mint';
$string['mod_form_field_participant_list_action_add'] = 'Hozzáadás';
$string['mod_form_field_participant_list_action_remove'] = 'Eltávolítás';
$string['mod_form_field_participant_role_viewer'] = 'Néző';
$string['mod_form_field_participant_role_moderator'] = 'Moderátor';
$string['error_invalid_participants'] = 'Érvénytelen résztvevői konfiguráció';
$string['error_invalid_role'] = 'Érvénytelen szerepkiosztás';
$string['room_creation_in_progress'] = 'Egy másik moderátor hozza létre a szobát. Kérjük, várjon...';
$string['room_already_ended'] = 'A szobát már befejezte egy másik moderátor.';
$string['room_deletion_in_progress'] = 'Egy másik moderátor fejezi be a szobát. Kérjük, várjon...';
