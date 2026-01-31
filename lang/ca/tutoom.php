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
$string['modulename_help'] = "El connector Tutoom us permet crear sales de pissarra en temps real de Moodle per a l'educació a distància.";
$string['missingidandcmid'] = "L'identificador de Tutoom és incorrecte. Si us plau, aneu al vostre curs i seleccioneu la vostra activitat per entrar correctament a Tutoom.";
$string['index_error_noinstances'] = "No hi ha casos de Tutoom";
$string['tutoom:joinasmoderator'] = "Uneix-te com a moderador a una sala Tutoom";
$string['tutoom:addinstance'] = "Afegeix una nova sala/activitat de Tutoom";
$string['config_api_secret_key'] = "Clau secreta de l'API de Tutoom";
$string['config_api_secret_key_description'] = "La clau secreta de l'API del vostre compte de Tutoom";
$string['config_general'] = "Configuració general";
$string['config_general_description'] = "Aquesta configuració s'utilitza <b>sempre</b>";
$string['config_activity_logs'] = "Escriure registres d'activitats";
$string['config_activity_logs_description'] = "Aquesta opció desa els registres quan es crea, s'elimina una sala i l'usuari s'uneix a la sala.";
$string['config_recording'] = "Gravació";
$string['config_recording_description'] = "Aquests paràmetres són específics de funció";
$string['config_recording_enabled'] = "Enregistrament activat per defecte";
$string['config_recording_enabled_description'] = "L'habitació es pot gravar de manera predeterminada. Es pot editar a la configuració d'activitats de Tuttom";
$string['config_recording_auto_start'] = "Enregistrament d'inici automàtic";
$string['config_recording_auto_start_description'] = "Si l'opció està marcada, les sales començaran a gravar-se quan el moderador entri.";
$string['tutoomname'] = "Nom";
$string['mod_form_block_room'] = "Activitat/Configuració de la sala";
$string['mod_form_field_welcome'] = "Missatge de benvinguda";
$string['mod_form_field_welcome_default_message'] = "Benvinguts a la classe. No dubteu a fer qualsevol pregunta.";
$string['mod_form_field_record'] = "L'habitació es pot gravar";
$string['mod_form_field_room_type'] = "Tipus d'habitació";
$string['room_type_room_with_recordings'] = "Sala amb enregistraments";
$string['room_type_room_only'] = "Només habitació";
$string['room_type_recording_only'] = "Només gravació";
$string['view_conference_action_start'] = "Sala d'inici";
$string['view_conference_action_join'] = "Uneix-te a l'habitació";
$string['view_conference_action_end'] = "Sala final";
$string['view_message_room_not_initalized'] = "La sala no ha començat.";
$string['view_message_room_ended'] = "Aquesta sala s'ha acabat. Torneu a carregar la pàgina per continuar";
$string['view_message_conference_in_this_room'] = "en aquesta sala";
$string['view_message_session_status_on'] = "EN LÍNIA";
$string['view_message_session_status_off'] = "OFFLINE";
$string['view_message_session_started_at'] = "Va començar a les";
$string['view_message_user'] = "usuari";
$string['view_message_users'] = "usuaris";
$string['recording_title'] = "Enregistraments";
$string['recording_preview'] = "Vista prèvia";
$string['recording_date'] = "Data";
$string['recording_time'] = "Temps";
$string['recording_duration'] = "Durada";
$string['recording_text_empty'] = "No hi ha enregistraments fins ara...";
$string['recording_loading'] = "S'estan rebent gravacions...";
$string['view_page_error_empty_credentials'] = "Heu de configurar les credencials de l'API de Tutoom, més informació aquí: https://tutoom.com/help/articles/native-moodle-plugin";

// Error messages and recovery suggestions.
$string['error_unauthorized'] = "Error d'autenticació: Credencials d'API no vàlides o que falten.";
$string['error_unauthorized_suggestion'] = "Si us plau, contacteu amb l'administrador del lloc per verificar la configuració de la clau API de Tutoom.";
$string['error_forbidden'] = "Accés denegat: No teniu permís per realitzar aquesta acció.";
$string['error_forbidden_suggestion'] = "Si us plau, contacteu amb l'administrador del lloc.";
$string['error_no_subscription'] = "No s'ha trobat cap subscripció activa de Tutoom.";
$string['error_no_subscription_suggestion'] = "Si us plau, contacteu amb l'administrador del lloc per activar la vostra subscripció de Tutoom.";
$string['error_max_rooms'] = "S'ha assolit el nombre màxim de sales simultànies per a la vostra subscripció.";
$string['error_max_rooms_suggestion'] = "Si us plau, finalitzeu les sales existents abans de crear-ne de noves, o contacteu amb l'administrador per actualitzar la vostra subscripció.";
$string['error_subscription_inactive'] = "La vostra subscripció de Tutoom no està activa.";
$string['error_subscription_inactive_suggestion'] = "Si us plau, contacteu amb l'administrador del lloc.";
$string['error_validation'] = "Entrada no vàlida proporcionada.";
$string['error_validation_suggestion'] = "Si us plau, verifiqueu la vostra entrada i torneu-ho a provar.";
$string['error_invalid_idempotency'] = "Format de sol·licitud no vàlid.";
$string['error_invalid_idempotency_suggestion'] = "Si us plau, recarregueu la pàgina i torneu-ho a provar.";
$string['error_room_not_found'] = "Sala no trobada o ha estat eliminada.";
$string['error_room_not_found_suggestion'] = "Si us plau, recarregueu la pàgina. La sala pot haver estat eliminada.";
$string['error_recording_not_found'] = "Gravació no trobada.";
$string['error_recording_not_found_suggestion'] = "La gravació pot no estar disponible encara o pot haver estat eliminada.";
$string['error_rate_limit'] = "Massa sol·licituds. Si us plau, reduïu la velocitat.";
$string['error_rate_limit_suggestion'] = "Si us plau, espereu un moment i torneu-ho a provar.";
$string['error_internal'] = "S'ha produït un error al servidor.";
$string['error_internal_suggestion'] = "Si us plau, torneu-ho a provar en uns moments. Si el problema persisteix, contacteu amb l'administrador.";
$string['error_token_failed'] = "Error al crear el token d'accés.";
$string['error_token_failed_suggestion'] = "Si us plau, torneu-ho a provar. Si el problema persisteix, contacteu amb l'administrador.";
$string['error_service_unavailable'] = "El servei de Tutoom no està disponible temporalment.";
$string['error_service_unavailable_suggestion'] = "Si us plau, torneu-ho a provar en uns moments.";
$string['error_network'] = "Error de xarxa: No es pot connectar al servei de Tutoom.";
$string['error_network_suggestion'] = "Si us plau, comproveu la vostra connexió a internet i torneu-ho a provar.";
$string['error_not_found'] = "Recurs no trobat.";
$string['error_not_found_suggestion'] = "Si us plau, recarregueu la pàgina i torneu-ho a provar.";
$string['error_server'] = "S'ha produït un error al servidor.";
$string['error_server_suggestion'] = "Si us plau, torneu-ho a provar més tard.";
$string['error_unknown'] = "S'ha produït un error inesperat.";
$string['error_unknown_suggestion'] = "Si us plau, torneu-ho a provar o contacteu amb l'administrador.";
$string['error_request_id'] = '(ID de sol·licitud: {$a})';

// Accessibility strings.
$string['view_icon_status'] = "Icona d'indicador d'estat";
$string['view_icon_clock'] = "Icona de rellotge";
$string['view_icon_participants'] = "Icona de participants";
$string['view_message_session_status'] = "Informació d'estat de sessió";
$string['view_icon_play'] = "Reproduir gravació";
$string['view_icon_empty_recordings'] = "No hi ha gravacions disponibles";

$string['recording_pagination'] = "Paginació de gravacions";
$string['recording_previous'] = "Anterior";
$string['recording_next'] = "Següent";
$string['recording_previous_page'] = "Anar a la pàgina anterior";
$string['recording_next_page'] = "Anar a la pàgina següent";
$string['recording_page'] = "Pàgina";

$string['privacy:metadata:tutoom_logs'] = "La taula de registres d'activitat emmagatzema esdeveniments de sala d'usuaris.";
$string['privacy:metadata:tutoom_logs:userid'] = "L'ID de l'usuari que va activar l'esdeveniment.";
$string['privacy:metadata:tutoom_logs:courseid'] = "L'ID del curs on va ocórrer l'activitat.";
$string['privacy:metadata:tutoom_logs:tutoomid'] = "L'ID de la instància d'activitat Tutoom.";
$string['privacy:metadata:tutoom_logs:timecreated'] = "La marca de temps quan va ocórrer l'esdeveniment.";
$string['privacy:metadata:tutoom_logs:roomid'] = "L'UUID de la sala Tutoom.";
$string['privacy:metadata:tutoom_logs:event_type'] = "El tipus d'esdeveniment (CREATE_ROOM, JOIN_ROOM, END_ROOM).";
$string['privacy:metadata:tutoom_logs:event_data'] = "Metadades d'esdeveniment addicionals en format JSON.";

$string['privacy:metadata:tutoom'] = "Per crear i unir-se a sales de Tutoom, les dades dels usuaris s'han d'intercanviar amb el servidor.";
$string['privacy:metadata:tutoom:fullname'] = "El nom complet de l'usuari que accedeix a Moodle.";
$string['privacy:metadata:tutoom:userid'] = "L'ID d'usuari s'envia a Tutoom per identificar l'usuari a la sala.";
$string['privacy:metadata:tutoom:coursename'] = "El nom del curs de l'usuari";
$string['privacy:metadata:tutoom:role'] = "El rol de l'usuari que accedeix a Moodle.";

// Participant management strings.
$string['mod_form_block_participants'] = 'Assignació de rols per a la sessió de sala';
$string['mod_form_field_participant_list'] = 'Participants';
$string['mod_form_field_participant_list_type_all'] = 'Tots els usuaris';
$string['mod_form_field_participant_list_type_role'] = 'Rol';
$string['mod_form_field_participant_list_type_user'] = 'Usuari';
$string['mod_form_field_participant_list_text_as'] = 'com';
$string['mod_form_field_participant_list_action_add'] = 'Afegir';
$string['mod_form_field_participant_list_action_remove'] = 'Eliminar';
$string['mod_form_field_participant_role_viewer'] = 'Visualitzador';
$string['mod_form_field_participant_role_moderator'] = 'Moderador';
$string['error_invalid_participants'] = 'Configuració de participants no vàlida';
$string['error_invalid_role'] = 'Assignació de rol no vàlida';
$string['room_creation_in_progress'] = 'Un altre moderador està creant la sala. Si us plau, espereu...';
$string['room_already_ended'] = 'La sala ja ha estat finalitzada per un altre moderador.';
$string['room_deletion_in_progress'] = 'Un altre moderador està finalitzant la sala. Si us plau, espereu...';
