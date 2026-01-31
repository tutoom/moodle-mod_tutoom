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
$string['modulename_help'] = "Plugin Tutoom vám umožňuje vytvářet z Moodle tabule v reálném čase pro distanční vzdělávání.";
$string['missingidandcmid'] = "Tutoom ID je nesprávné. Přejděte prosím na svůj kurz a vyberte svou aktivitu, abyste správně vstoupili do Tutoomu.";
$string['index_error_noinstances'] = "Neexistují žádné instance Tutoom";
$string['tutoom:joinasmoderator'] = "Připojte se jako moderátor do místnosti Tutoom";
$string['tutoom:addinstance'] = "Přidat novou místnost/aktivitu Tutoom";
$string['config_api_secret_key'] = "Tajný klíč API Tutoom";
$string['config_api_secret_key_description'] = "Tajný klíč API vašeho účtu Tutoom";
$string['config_general'] = "Obecná konfigurace";
$string['config_general_description'] = "Tato nastavení se používají <b>vždy</b>}";
$string['config_activity_logs'] = "Pište protokoly aktivit";
$string['config_activity_logs_description'] = "Tato možnost ukládá protokoly, když je místnost vytvořena, odstraněna a uživatel se k místnosti připojí.";
$string['config_recording'] = "Záznam";
$string['config_recording_description'] = "Tato nastavení jsou specifická pro jednotlivé funkce";
$string['config_recording_enabled'] = "Ve výchozím nastavení je nahrávání povoleno";
$string['config_recording_enabled_description'] = "Ve výchozím nastavení lze nahrávat místnost. Lze upravit v nastavení aktivity Tuttom";
$string['config_recording_auto_start'] = "Automatické spuštění nahrávání";
$string['config_recording_auto_start_description'] = "Je-li tato možnost zaškrtnuta, místnosti se začnou nahrávat, jakmile vstoupí moderátor.";
$string['tutoomname'] = "Jméno";
$string['mod_form_block_room'] = "Nastavení aktivity/místnosti";
$string['mod_form_field_welcome'] = "Uvítací zpráva";
$string['mod_form_field_welcome_default_message'] = "Vítejte ve třídě. Neváhejte se zeptat na jakoukoli otázku.";
$string['mod_form_field_record'] = "Pokoj lze nahrávat";
$string['mod_form_field_room_type'] = "Typ pokoje";
$string['room_type_room_with_recordings'] = "Místnost s nahrávkami";
$string['room_type_room_only'] = "Pouze pokoj";
$string['room_type_recording_only'] = "Pouze nahrávání";
$string['view_conference_action_start'] = "Počáteční místnost";
$string['view_conference_action_join'] = "Připojte se k místnosti";
$string['view_conference_action_end'] = "Koncová místnost";
$string['view_message_room_not_initalized'] = "Místnost se nespustila.";
$string['view_message_room_ended'] = "Tato místnost skončila. Chcete-li pokračovat, znovu načtěte stránku";
$string['view_message_conference_in_this_room'] = "v této místnosti";
$string['view_message_session_status_on'] = "ONLINE";
$string['view_message_session_status_off'] = "OFFLINE";
$string['view_message_session_started_at'] = "Začátek v";
$string['view_message_user'] = "uživatel";
$string['view_message_users'] = "uživatelů";
$string['recording_title'] = "Nahrávky";
$string['recording_preview'] = "Náhled";
$string['recording_date'] = "Datum";
$string['recording_time'] = "Čas";
$string['recording_duration'] = "Trvání";
$string['recording_text_empty'] = "Zatím žádné nahrávky...";
$string['recording_loading'] = "Načítání nahrávek...";
$string['view_page_error_empty_credentials'] = "Musíte nakonfigurovat přihlašovací údaje Tutoom API, více informací zde: https://tutoom.com/help/articles/native-moodle-plugin";

// Error messages and recovery suggestions.
$string['error_unauthorized'] = "Chyba ověření: Neplatné nebo chybějící přihlašovací údaje API.";
$string['error_unauthorized_suggestion'] = "Obraťte se na správce webu a ověřte konfiguraci klíče Tutoom API.";
$string['error_forbidden'] = "Přístup odepřen: Nemáte oprávnění provést tuto akci.";
$string['error_forbidden_suggestion'] = "Obraťte se na správce webu.";
$string['error_no_subscription'] = "Nenalezeno žádné aktivní předplatné Tutoom.";
$string['error_no_subscription_suggestion'] = "Obraťte se na správce webu pro aktivaci vašeho předplatného Tutoom.";
$string['error_max_rooms'] = "Dosažen maximální počet souběžných místností pro vaše předplatné.";
$string['error_max_rooms_suggestion'] = "Ukončete existující místnosti před vytvořením nových nebo se obraťte na správce pro upgrade vašeho předplatného.";
$string['error_subscription_inactive'] = "Vaše předplatné Tutoom není aktivní.";
$string['error_subscription_inactive_suggestion'] = "Obraťte se na správce webu.";
$string['error_validation'] = "Poskytnut neplatný vstup.";
$string['error_validation_suggestion'] = "Zkontrolujte svůj vstup a zkuste to znovu.";
$string['error_invalid_idempotency'] = "Neplatný formát požadavku.";
$string['error_invalid_idempotency_suggestion'] = "Obnovte stránku a zkuste to znovu.";
$string['error_room_not_found'] = "Místnost nebyla nalezena nebo byla odstraněna.";
$string['error_room_not_found_suggestion'] = "Obnovte stránku. Místnost mohla být odstraněna.";
$string['error_recording_not_found'] = "Záznam nebyl nalezen.";
$string['error_recording_not_found_suggestion'] = "Záznam ještě nemusí být dostupný nebo mohl být odstraněn.";
$string['error_rate_limit'] = "Příliš mnoho požadavků. Zpomalte prosím.";
$string['error_rate_limit_suggestion'] = "Počkejte chvíli a zkuste to znovu.";
$string['error_internal'] = "Došlo k chybě serveru.";
$string['error_internal_suggestion'] = "Zkuste to znovu za chvíli. Pokud problém přetrvává, obraťte se na správce.";
$string['error_token_failed'] = "Nepodařilo se vytvořit přístupový token.";
$string['error_token_failed_suggestion'] = "Zkuste to znovu. Pokud problém přetrvává, obraťte se na správce.";
$string['error_service_unavailable'] = "Služba Tutoom je dočasně nedostupná.";
$string['error_service_unavailable_suggestion'] = "Zkuste to znovu za chvíli.";
$string['error_network'] = "Chyba sítě: Nelze se připojit ke službě Tutoom.";
$string['error_network_suggestion'] = "Zkontrolujte své připojení k internetu a zkuste to znovu.";
$string['error_not_found'] = "Zdroj nebyl nalezen.";
$string['error_not_found_suggestion'] = "Obnovte stránku a zkuste to znovu.";
$string['error_server'] = "Došlo k chybě serveru.";
$string['error_server_suggestion'] = "Zkuste to znovu později.";
$string['error_unknown'] = "Došlo k neočekávané chybě.";
$string['error_unknown_suggestion'] = "Zkuste to znovu nebo se obraťte na správce.";
$string['error_request_id'] = '(ID požadavku: {$a})';

// Accessibility strings.
$string['view_icon_status'] = "Ikona indikátoru stavu";
$string['view_icon_clock'] = "Ikona hodin";
$string['view_icon_participants'] = "Ikona účastníků";
$string['view_message_session_status'] = "Informace o stavu relace";
$string['view_icon_play'] = "Přehrát záznam";
$string['view_icon_empty_recordings'] = "Nejsou k dispozici žádné záznamy";

$string['recording_pagination'] = "Stránkování záznamů";
$string['recording_previous'] = "Předchozí";
$string['recording_next'] = "Další";
$string['recording_previous_page'] = "Přejít na předchozí stránku";
$string['recording_next_page'] = "Přejít na další stránku";
$string['recording_page'] = "Stránka";

$string['privacy:metadata:tutoom_logs'] = "Tabulka protokolů aktivit ukládá události místností uživatelů.";
$string['privacy:metadata:tutoom_logs:userid'] = "ID uživatele, který spustil událost.";
$string['privacy:metadata:tutoom_logs:courseid'] = "ID kurzu, kde došlo k aktivitě.";
$string['privacy:metadata:tutoom_logs:tutoomid'] = "ID instance aktivity Tutoom.";
$string['privacy:metadata:tutoom_logs:timecreated'] = "Časové razítko, kdy došlo k události.";
$string['privacy:metadata:tutoom_logs:roomid'] = "UUID místnosti Tutoom.";
$string['privacy:metadata:tutoom_logs:event_type'] = "Typ události (CREATE_ROOM, JOIN_ROOM, END_ROOM).";
$string['privacy:metadata:tutoom_logs:event_data'] = "Další metadata události ve formátu JSON.";

$string['privacy:metadata:tutoom'] = "Aby bylo možné vytvořit a připojit se k místnostem Tutoom, musí být uživatelská data vyměněna se serverem.";
$string['privacy:metadata:tutoom:fullname'] = "Celé jméno uživatele přistupujícího do Moodle.";
$string['privacy:metadata:tutoom:userid'] = "ID uživatele je odesláno do Tutoom k identifikaci uživatele v místnosti.";
$string['privacy:metadata:tutoom:coursename'] = "Název kurzu uživatele";
$string['privacy:metadata:tutoom:role'] = "Role uživatele přistupujícího k Moodle.";

// Participant management strings.
$string['mod_form_block_participants'] = 'Přiřazení rolí pro relaci v místnosti';
$string['mod_form_field_participant_list'] = 'Účastníci';
$string['mod_form_field_participant_list_type_all'] = 'Všichni uživatelé';
$string['mod_form_field_participant_list_type_role'] = 'Role';
$string['mod_form_field_participant_list_type_user'] = 'Uživatel';
$string['mod_form_field_participant_list_text_as'] = 'jako';
$string['mod_form_field_participant_list_action_add'] = 'Přidat';
$string['mod_form_field_participant_list_action_remove'] = 'Odstranit';
$string['mod_form_field_participant_role_viewer'] = 'Pozorovatel';
$string['mod_form_field_participant_role_moderator'] = 'Moderátor';
$string['error_invalid_participants'] = 'Neplatná konfigurace účastníků';
$string['error_invalid_role'] = 'Neplatné přiřazení role';
$string['room_creation_in_progress'] = 'Jiný moderátor vytváří místnost. Prosím čekejte...';
$string['room_already_ended'] = 'Místnost již byla ukončena jiným moderátorem.';
$string['room_deletion_in_progress'] = 'Jiný moderátor ukončuje místnost. Prosím čekejte...';
