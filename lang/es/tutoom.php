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
$string['modulename_help'] = "El plugin Tutoom te permite crear salas de pizarra en tiempo real desde Moodle para educación a distancia.";
$string['missingidandcmid'] = "El ID de Tutoom es incorrecto. Ve a tu curso y selecciona tu actividad para acceder correctamente a Tutoom.";
$string['index_error_noinstances'] = "No hay instancias de Tutoom.";
$string['tutoom:joinasmoderator'] = "Únete como moderador a una sala de Tutoom.";
$string['tutoom:addinstance'] = "Añadir una nueva sala/actividad de Tutoom.";
$string['config_api_secret_key'] = "Clave secreta de la API de Tutoom.";
$string['config_api_secret_key_description'] = "La clave secreta de la API de tu cuenta de Tutoom";
$string['config_general'] = "Configuración general";
$string['config_general_description'] = "Estas configuraciones se usan <b>siempre</b>";
$string['config_activity_logs'] = "Escribir registros de actividad";
$string['config_activity_logs_description'] = "Esta opción guarda registros cuando se crea o elimina una sala, y cuando un usuario se une a ella.";
$string['config_recording'] = "Grabación";
$string['config_recording_description'] = "Estas configuraciones son específicas de cada función.";
$string['config_recording_enabled'] = "Grabación habilitada por defecto.";
$string['config_recording_enabled_description'] = "La sala se puede grabar por defecto. Se puede editar en la configuración de actividad de Tutoom.";
$string['config_recording_auto_start'] = "Inicio automático de grabación";
$string['config_recording_auto_start_description'] = "Si la opción está marcada, las salas comenzarán a grabar cuando el moderador entre.";
$string['tutoomname'] = "Nombre";
$string['mod_form_block_room'] = "Configuración de la actividad/sala";
$string['mod_form_field_welcome'] = "Mensaje de bienvenida";
$string['mod_form_field_welcome_default_message'] = "Bienvenido a la clase. No dudes en hacer cualquier pregunta.";
$string['mod_form_field_record'] = "La sala se puede grabar.";
$string['mod_form_field_room_type'] = "Tipo de sala";
$string['room_type_room_with_recordings'] = "Sala con grabaciones";
$string['room_type_room_only'] = "Solo sala";
$string['room_type_recording_only'] = "Solo grabación";
$string['view_conference_action_start'] = "Iniciar sala";
$string['view_conference_action_join'] = "Unirse a la sala";
$string['view_conference_action_end'] = "Finalizar sala";
$string['view_message_room_not_initalized'] = "La sala no ha comenzado.";
$string['view_message_room_ended'] = "Esta sala ha finalizado. Por favor, recarga la página para continuar.";
$string['view_message_conference_in_this_room'] = "en esta sala";
$string['view_message_session_status_on'] = "EN LÍNEA";
$string['view_message_session_status_off'] = "DESCONECTADO";
$string['view_message_session_started_at'] = "Comenzó a las";
$string['view_message_user'] = "usuario";
$string['view_message_users'] = "usuarios";
$string['recording_title'] = "Grabaciones";
$string['recording_preview'] = "Vista previa";
$string['recording_date'] = "Fecha";
$string['recording_time'] = "Hora";
$string['recording_duration'] = "Duración";
$string['recording_text_empty'] = "No hay grabaciones hasta ahora...";
$string['recording_loading'] = "Obteniendo grabaciones...";
$string['view_page_error_empty_credentials'] = "Debes configurar las credenciales de la API de Tutoom. Más información aquí: https://tutoom.com/help/articles/native-moodle-plugin";

// Error messages and recovery suggestions.
$string['error_unauthorized'] = "Error de autenticación: Credenciales de API inválidas o faltantes.";
$string['error_unauthorized_suggestion'] = "Por favor, contacta con el administrador del sitio para verificar la configuración de la clave API de Tutoom.";
$string['error_forbidden'] = "Acceso denegado: No tienes permiso para realizar esta acción.";
$string['error_forbidden_suggestion'] = "Por favor, contacta con el administrador del sitio.";
$string['error_no_subscription'] = "No se encontró una suscripción activa de Tutoom.";
$string['error_no_subscription_suggestion'] = "Por favor, contacta con el administrador del sitio para activar tu suscripción de Tutoom.";
$string['error_max_rooms'] = "Se alcanzó el número máximo de salas concurrentes para tu suscripción.";
$string['error_max_rooms_suggestion'] = "Por favor, finaliza las salas existentes antes de crear nuevas, o contacta con el administrador para actualizar tu suscripción.";
$string['error_subscription_inactive'] = "Tu suscripción de Tutoom no está activa.";
$string['error_subscription_inactive_suggestion'] = "Por favor, contacta con el administrador del sitio.";
$string['error_validation'] = "Entrada inválida proporcionada.";
$string['error_validation_suggestion'] = "Por favor, verifica tu entrada e inténtalo de nuevo.";
$string['error_invalid_idempotency'] = "Formato de solicitud inválido.";
$string['error_invalid_idempotency_suggestion'] = "Por favor, recarga la página e inténtalo de nuevo.";
$string['error_room_not_found'] = "Sala no encontrada o ha sido eliminada.";
$string['error_room_not_found_suggestion'] = "Por favor, recarga la página. La sala puede haber sido eliminada.";
$string['error_recording_not_found'] = "Grabación no encontrada.";
$string['error_recording_not_found_suggestion'] = "La grabación puede no estar disponible aún o puede haber sido eliminada.";
$string['error_rate_limit'] = "Demasiadas solicitudes. Por favor, reduce la velocidad.";
$string['error_rate_limit_suggestion'] = "Por favor, espera un momento e inténtalo de nuevo.";
$string['error_internal'] = "Ocurrió un error en el servidor.";
$string['error_internal_suggestion'] = "Por favor, inténtalo de nuevo en unos momentos. Si el problema persiste, contacta con el administrador.";
$string['error_token_failed'] = "Error al crear el token de acceso.";
$string['error_token_failed_suggestion'] = "Por favor, inténtalo de nuevo. Si el problema persiste, contacta con el administrador.";
$string['error_service_unavailable'] = "El servicio de Tutoom no está disponible temporalmente.";
$string['error_service_unavailable_suggestion'] = "Por favor, inténtalo de nuevo en unos momentos.";
$string['error_network'] = "Error de red: No se puede conectar al servicio de Tutoom.";
$string['error_network_suggestion'] = "Por favor, verifica tu conexión a internet e inténtalo de nuevo.";
$string['error_not_found'] = "Recurso no encontrado.";
$string['error_not_found_suggestion'] = "Por favor, recarga la página e inténtalo de nuevo.";
$string['error_server'] = "Ocurrió un error en el servidor.";
$string['error_server_suggestion'] = "Por favor, inténtalo de nuevo más tarde.";
$string['error_unknown'] = "Ocurrió un error inesperado.";
$string['error_unknown_suggestion'] = "Por favor, inténtalo de nuevo o contacta con el administrador.";
$string['error_request_id'] = '(ID de solicitud: {$a})';

// Accessibility strings.
$string['view_icon_status'] = "Icono indicador de estado";
$string['view_icon_clock'] = "Icono de reloj";
$string['view_icon_participants'] = "Icono de participantes";
$string['view_message_session_status'] = "Información de estado de sesión";
$string['view_icon_play'] = "Reproducir grabación";
$string['view_icon_empty_recordings'] = "No hay grabaciones disponibles";

$string['recording_pagination'] = "Paginación de grabaciones";
$string['recording_previous'] = "Anterior";
$string['recording_next'] = "Siguiente";
$string['recording_previous_page'] = "Ir a la página anterior";
$string['recording_next_page'] = "Ir a la página siguiente";
$string['recording_page'] = "Página";

$string['privacy:metadata:tutoom_logs'] = "La tabla de registros de actividad almacena eventos de sala de usuarios.";
$string['privacy:metadata:tutoom_logs:userid'] = "El ID del usuario que activó el evento.";
$string['privacy:metadata:tutoom_logs:courseid'] = "El ID del curso donde ocurrió la actividad.";
$string['privacy:metadata:tutoom_logs:tutoomid'] = "El ID de la instancia de actividad Tutoom.";
$string['privacy:metadata:tutoom_logs:timecreated'] = "La marca de tiempo cuando ocurrió el evento.";
$string['privacy:metadata:tutoom_logs:roomid'] = "El UUID de la sala Tutoom.";
$string['privacy:metadata:tutoom_logs:event_type'] = "El tipo de evento (CREATE_ROOM, JOIN_ROOM, END_ROOM).";
$string['privacy:metadata:tutoom_logs:event_data'] = "Metadatos de evento adicionales en formato JSON.";

$string['privacy:metadata:tutoom'] = "Para crear y unirse a salas de Tutoom, es necesario intercambiar datos de usuario con el servidor.";
$string['privacy:metadata:tutoom:fullname'] = "El nombre completo del usuario que accede a Moodle.";
$string['privacy:metadata:tutoom:userid'] = "El ID de usuario se envía a Tutoom para identificar al usuario en la sala.";
$string['privacy:metadata:tutoom:coursename'] = "El nombre del curso del usuario.";
$string['privacy:metadata:tutoom:role'] = "El rol del usuario que accede a Moodle.";

// Participant management strings.
$string['mod_form_block_participants'] = 'Asignación de roles para la sesión de sala';
$string['mod_form_field_participant_list'] = 'Participantes';
$string['mod_form_field_participant_list_type_all'] = 'Todos los usuarios';
$string['mod_form_field_participant_list_type_role'] = 'Rol';
$string['mod_form_field_participant_list_type_user'] = 'Usuario';
$string['mod_form_field_participant_list_text_as'] = 'como';
$string['mod_form_field_participant_list_action_add'] = 'Agregar';
$string['mod_form_field_participant_list_action_remove'] = 'Eliminar';
$string['mod_form_field_participant_role_viewer'] = 'Visualizador';
$string['mod_form_field_participant_role_moderator'] = 'Moderador';
$string['error_invalid_participants'] = 'Configuración de participantes inválida';
$string['error_invalid_role'] = 'Asignación de rol inválida';
$string['room_creation_in_progress'] = 'Otro moderador está creando la sala. Por favor, espera...';
$string['room_already_ended'] = 'La sala ya ha sido finalizada por otro moderador.';
$string['room_deletion_in_progress'] = 'Otro moderador está finalizando la sala. Por favor, espera...';
