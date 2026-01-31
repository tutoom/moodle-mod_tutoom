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
$string['modulename_help'] = "O plugin Tutoom permite que você crie salas de quadro branco em tempo real do Moodle para educação à distância.";
$string['missingidandcmid'] = "O ID Tutoom está incorreto. Por favor, vá para o seu curso e selecione sua atividade para entrar corretamente no Tutoom.";
$string['index_error_noinstances'] = "Não há instâncias do Tutoom";
$string['tutoom:joinasmoderator'] = "Entre como moderador em uma sala Tutoom";
$string['tutoom:addinstance'] = "Adicione uma nova sala/atividade Tutoom";
$string['config_api_secret_key'] = "Chave secreta da API Tutoom";
$string['config_api_secret_key_description'] = "A chave secreta da API da sua conta Tutoom";
$string['config_general'] = "Configuração geral";
$string['config_general_description'] = "Estas configurações são <b>sempre</b> usadas";
$string['config_activity_logs'] = "Gravar registros de atividade";
$string['config_activity_logs_description'] = "Esta opção salva registros quando uma sala é criada, excluída e o usuário entra na sala.";
$string['config_recording'] = "Gravação";
$string['config_recording_description'] = "Estas configurações são específicas do recurso";
$string['config_recording_enabled'] = "Gravação habilitada por padrão";
$string['config_recording_enabled_description'] = "A sala pode ser gravada por padrão. Pode ser editável nas configurações de atividade do Tuttom";
$string['config_recording_auto_start'] = "Início automático da gravação";
$string['config_recording_auto_start_description'] = "Se a opção estiver marcada, as salas começarão a gravar quando o moderador entrar.";
$string['tutoomname'] = "Nome";
$string['mod_form_block_room'] = "Configurações de atividade/sala";
$string['mod_form_field_welcome'] = "Mensagem de boas-vindas";
$string['mod_form_field_welcome_default_message'] = "Bem-vindo à aula. Sinta-se à vontade para fazer qualquer pergunta.";
$string['mod_form_field_record'] = "A sala pode ser gravada";
$string['mod_form_field_room_type'] = "Tipo de sala";
$string['room_type_room_with_recordings'] = "Sala com gravações";
$string['room_type_room_only'] = "Somente sala";
$string['room_type_recording_only'] = "Somente gravação";
$string['view_conference_action_start'] = "Iniciar sala";
$string['view_conference_action_join'] = "Entrar na sala";
$string['view_conference_action_end'] = "Finalizar sala";
$string['view_message_room_not_initalized'] = "A sala não começou.";
$string['view_message_room_ended'] = "Esta sala terminou. Recarregue a página para continuar";
$string['view_message_conference_in_this_room'] = "nesta sala";
$string['view_message_session_status_on'] = "ONLINE";
$string['view_message_session_status_off'] = "OFFLINE";
$string['view_message_session_started_at'] = "Começou em";
$string['view_message_user'] = "usuário";
$string['view_message_users'] = "usuários";
$string['recording_title'] = "Gravações";
$string['recording_preview'] = "Visualizar";
$string['recording_date'] = "Data";
$string['recording_time'] = "Hora";
$string['recording_duration'] = "Duração";
$string['recording_text_empty'] = "Nenhuma gravação até agora...";
$string['recording_loading'] = "Obtendo gravações...";
$string['view_page_error_empty_credentials'] = "Você precisa configurar as credenciais da API do Tutoom, mais informações aqui: https://tutoom.com/help/articles/native-moodle-plugin";

// Error messages and recovery suggestions.
$string['error_unauthorized'] = "Erro de autenticação: Credenciais de API inválidas ou ausentes.";
$string['error_unauthorized_suggestion'] = "Entre em contato com o administrador do site para verificar a configuração da chave API do Tutoom.";
$string['error_forbidden'] = "Acesso negado: Você não tem permissão para executar esta ação.";
$string['error_forbidden_suggestion'] = "Entre em contato com o administrador do site.";
$string['error_no_subscription'] = "Nenhuma assinatura ativa do Tutoom foi encontrada.";
$string['error_no_subscription_suggestion'] = "Entre em contato com o administrador do site para ativar sua assinatura do Tutoom.";
$string['error_max_rooms'] = "Número máximo de salas simultâneas para sua assinatura foi atingido.";
$string['error_max_rooms_suggestion'] = "Finalize as salas existentes antes de criar novas ou entre em contato com o administrador para atualizar sua assinatura.";
$string['error_subscription_inactive'] = "Sua assinatura do Tutoom não está ativa.";
$string['error_subscription_inactive_suggestion'] = "Entre em contato com o administrador do site.";
$string['error_validation'] = "Entrada inválida fornecida.";
$string['error_validation_suggestion'] = "Verifique sua entrada e tente novamente.";
$string['error_invalid_idempotency'] = "Formato de solicitação inválido.";
$string['error_invalid_idempotency_suggestion'] = "Recarregue a página e tente novamente.";
$string['error_room_not_found'] = "Sala não encontrada ou foi excluída.";
$string['error_room_not_found_suggestion'] = "Recarregue a página. A sala pode ter sido excluída.";
$string['error_recording_not_found'] = "Gravação não encontrada.";
$string['error_recording_not_found_suggestion'] = "A gravação pode não estar disponível ainda ou pode ter sido excluída.";
$string['error_rate_limit'] = "Muitas solicitações. Por favor, diminua a velocidade.";
$string['error_rate_limit_suggestion'] = "Aguarde um momento e tente novamente.";
$string['error_internal'] = "Ocorreu um erro no servidor.";
$string['error_internal_suggestion'] = "Tente novamente em alguns instantes. Se o problema persistir, entre em contato com o administrador.";
$string['error_token_failed'] = "Falha ao criar token de acesso.";
$string['error_token_failed_suggestion'] = "Tente novamente. Se o problema persistir, entre em contato com o administrador.";
$string['error_service_unavailable'] = "O serviço Tutoom está temporariamente indisponível.";
$string['error_service_unavailable_suggestion'] = "Tente novamente em alguns instantes.";
$string['error_network'] = "Erro de rede: Não foi possível conectar ao serviço Tutoom.";
$string['error_network_suggestion'] = "Verifique sua conexão com a internet e tente novamente.";
$string['error_not_found'] = "Recurso não encontrado.";
$string['error_not_found_suggestion'] = "Recarregue a página e tente novamente.";
$string['error_server'] = "Ocorreu um erro no servidor.";
$string['error_server_suggestion'] = "Tente novamente mais tarde.";
$string['error_unknown'] = "Ocorreu um erro inesperado.";
$string['error_unknown_suggestion'] = "Tente novamente ou entre em contato com o administrador.";
$string['error_request_id'] = '(ID da solicitação: {$a})';

// Accessibility strings.
$string['view_icon_status'] = "Ícone indicador de status";
$string['view_icon_clock'] = "Ícone de relógio";
$string['view_icon_participants'] = "Ícone de participantes";
$string['view_message_session_status'] = "Informações de status da sessão";
$string['view_icon_play'] = "Reproduzir gravação";
$string['view_icon_empty_recordings'] = "Nenhuma gravação disponível";

$string['recording_pagination'] = "Paginação de gravações";
$string['recording_previous'] = "Anterior";
$string['recording_next'] = "Próximo";
$string['recording_previous_page'] = "Ir para a página anterior";
$string['recording_next_page'] = "Ir para a próxima página";
$string['recording_page'] = "Página";

$string['privacy:metadata:tutoom_logs'] = "A tabela de log de atividades armazena eventos de sala do usuário.";
$string['privacy:metadata:tutoom_logs:userid'] = "O ID do usuário que acionou o evento.";
$string['privacy:metadata:tutoom_logs:courseid'] = "O ID do curso onde a atividade ocorreu.";
$string['privacy:metadata:tutoom_logs:tutoomid'] = "O ID da instância da atividade Tutoom.";
$string['privacy:metadata:tutoom_logs:timecreated'] = "O registro de data e hora de quando o evento ocorreu.";
$string['privacy:metadata:tutoom_logs:roomid'] = "O UUID da sala Tutoom.";
$string['privacy:metadata:tutoom_logs:event_type'] = "O tipo de evento (CREATE_ROOM, JOIN_ROOM, END_ROOM).";
$string['privacy:metadata:tutoom_logs:event_data'] = "Metadados de evento adicionais em formato JSON.";

$string['privacy:metadata:tutoom'] = "Para criar e ingressar em salas do Tutoom, os dados do usuário precisam ser trocados com o servidor.";
$string['privacy:metadata:tutoom:fullname'] = "O nome completo do usuário que acessa o Moodle.";
$string['privacy:metadata:tutoom:userid'] = "O ID do usuário é enviado ao Tutoom para identificar o usuário na sala.";
$string['privacy:metadata:tutoom:coursename'] = "O nome do curso do usuário";
$string['privacy:metadata:tutoom:role'] = "A função do usuário que acessa o Moodle.";

// Participant management strings.
$string['mod_form_block_participants'] = 'Atribuição de funções para sessão de sala';
$string['mod_form_field_participant_list'] = 'Participantes';
$string['mod_form_field_participant_list_type_all'] = 'Todos os usuários';
$string['mod_form_field_participant_list_type_role'] = 'Função';
$string['mod_form_field_participant_list_type_user'] = 'Usuário';
$string['mod_form_field_participant_list_text_as'] = 'como';
$string['mod_form_field_participant_list_action_add'] = 'Adicionar';
$string['mod_form_field_participant_list_action_remove'] = 'Remover';
$string['mod_form_field_participant_role_viewer'] = 'Visualizador';
$string['mod_form_field_participant_role_moderator'] = 'Moderador';
$string['error_invalid_participants'] = 'Configuração de participantes inválida';
$string['error_invalid_role'] = 'Atribuição de função inválida';
$string['room_creation_in_progress'] = 'Outro moderador está criando a sala. Por favor, aguarde...';
$string['room_already_ended'] = 'A sala já foi encerrada por outro moderador.';
$string['room_deletion_in_progress'] = 'Outro moderador está encerrando a sala. Por favor, aguarde...';
