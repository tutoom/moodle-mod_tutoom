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
$string['modulename_help'] = "Il plugin Tutoom ti consente di creare all'interno di Moodle stanze con lavagna in tempo reale per l'istruzione a distanza.";
$string['missingidandcmid'] = "L'ID Tutoom non è corretto. Vai al tuo corso e seleziona la tua attività per entrare correttamente in Tutoom.";
$string['index_error_noinstances'] = "Non ci sono istanze di Tutoom";
$string['tutoom:joinasmoderator'] = "Unisciti come moderatore a una stanza Tutoom";
$string['tutoom:addinstance'] = "Aggiungi una nuova stanza/attività Tutoom";
$string['config_api_secret_key'] = "Chiave segreta API Tutoom";
$string['config_api_secret_key_description'] = "La chiave segreta API del tuo account Tutoom";
$string['config_general'] = "Configurazione generale";
$string['config_general_description'] = "Queste impostazioni sono <b>sempre</b> utilizzate";
$string['config_activity_logs'] = "Scrivi registri attività";
$string['config_activity_logs_description'] = "Questa opzione salva i registri quando una stanza viene creata, eliminata e un utente si unisce alla stanza.";
$string['config_recording'] = "Registrazione";
$string['config_recording_description'] = "Queste impostazioni sono specifiche della funzionalità";
$string['config_recording_enabled'] = "Registrazione abilitata per impostazione predefinita";
$string['config_recording_enabled_description'] = "La stanza può essere registrata per impostazione predefinita. Può essere modificata nelle impostazioni attività Tuttom";
$string['config_recording_auto_start'] = "Avvio automatico della registrazione";
$string['config_recording_auto_start_description'] = "Se l'opzione è selezionata, le stanze inizieranno a registrare quando entra il moderatore.";
$string['tutoomname'] = "Nome";
$string['mod_form_block_room'] = "Impostazioni attività/stanza";
$string['mod_form_field_welcome'] = "Messaggio di benvenuto";
$string['mod_form_field_welcome_default_message'] = "Benvenuto alla classe. Sentiti libero di fare qualsiasi domanda.";
$string['mod_form_field_record'] = "La stanza può essere registrata";
$string['mod_form_field_room_type'] = "Tipo di stanza";
$string['room_type_room_with_recordings'] = "Stanza con registrazioni";
$string['room_type_room_only'] = "Solo stanza";
$string['room_type_recording_only'] = "Solo registrazione";
$string['view_conference_action_start'] = "Inizia stanza";
$string['view_conference_action_join'] = "Accedi alla stanza";
$string['view_conference_action_end'] = "Termina stanza";
$string['view_message_room_not_initalized'] = "La stanza non è iniziata.";
$string['view_message_room_ended'] = "Questa stanza è terminata. Ricarica la pagina per continuare";
$string['view_message_conference_in_this_room'] = "in questa stanza";
$string['view_message_session_status_on'] = "ONLINE";
$string['view_message_session_status_off'] = "OFFLINE";
$string['view_message_session_started_at'] = "Iniziato alle";
$string['view_message_user'] = "utente";
$string['view_message_users'] = "utenti";
$string['recording_title'] = "Registrazioni";
$string['recording_preview'] = "Anteprima";
$string['recording_date'] = "Data";
$string['recording_time'] = "Ora";
$string['recording_duration'] = "Durata";
$string['recording_text_empty'] = "Nessuna registrazione finora...";
$string['recording_loading'] = "Ottenimento registrazioni...";
$string['view_page_error_empty_credentials'] = "Devi configurare le credenziali API di Tutoom, maggiori informazioni qui: https://tutoom.com/help/articles/native-moodle-plugin";

// Error messages and recovery suggestions.
$string['error_unauthorized'] = "Autenticazione fallita: Credenziali API non valide o mancanti.";
$string['error_unauthorized_suggestion'] = "Si prega di contattare l'amministratore del sito per verificare la configurazione della chiave API di Tutoom.";
$string['error_forbidden'] = "Accesso negato: Non hai il permesso di eseguire questa azione.";
$string['error_forbidden_suggestion'] = "Si prega di contattare l'amministratore del sito.";
$string['error_no_subscription'] = "Nessun abbonamento Tutoom attivo trovato.";
$string['error_no_subscription_suggestion'] = "Si prega di contattare l'amministratore del sito per attivare l'abbonamento Tutoom.";
$string['error_max_rooms'] = "Numero massimo di stanze simultanee raggiunto per il tuo abbonamento.";
$string['error_max_rooms_suggestion'] = "Si prega di terminare le stanze esistenti prima di crearne di nuove, o contattare l'amministratore per aggiornare l'abbonamento.";
$string['error_subscription_inactive'] = "Il tuo abbonamento Tutoom non è attivo.";
$string['error_subscription_inactive_suggestion'] = "Si prega di contattare l'amministratore del sito.";
$string['error_validation'] = "Input non valido fornito.";
$string['error_validation_suggestion'] = "Si prega di controllare l'input e riprovare.";
$string['error_invalid_idempotency'] = "Formato richiesta non valido.";
$string['error_invalid_idempotency_suggestion'] = "Si prega di aggiornare la pagina e riprovare.";
$string['error_room_not_found'] = "Stanza non trovata o è stata eliminata.";
$string['error_room_not_found_suggestion'] = "Si prega di aggiornare la pagina. La stanza potrebbe essere stata eliminata.";
$string['error_recording_not_found'] = "Registrazione non trovata.";
$string['error_recording_not_found_suggestion'] = "La registrazione potrebbe non essere ancora disponibile o potrebbe essere stata eliminata.";
$string['error_rate_limit'] = "Troppe richieste. Si prega di rallentare.";
$string['error_rate_limit_suggestion'] = "Si prega di attendere un momento e riprovare.";
$string['error_internal'] = "Si è verificato un errore del server.";
$string['error_internal_suggestion'] = "Si prega di riprovare tra pochi istanti. Se il problema persiste, contattare l'amministratore.";
$string['error_token_failed'] = "Impossibile creare il token di accesso.";
$string['error_token_failed_suggestion'] = "Si prega di riprovare. Se il problema persiste, contattare l'amministratore.";
$string['error_service_unavailable'] = "Il servizio Tutoom è temporaneamente non disponibile.";
$string['error_service_unavailable_suggestion'] = "Si prega di riprovare tra pochi istanti.";
$string['error_network'] = "Errore di rete: Impossibile connettersi al servizio Tutoom.";
$string['error_network_suggestion'] = "Si prega di controllare la connessione Internet e riprovare.";
$string['error_not_found'] = "Risorsa non trovata.";
$string['error_not_found_suggestion'] = "Si prega di aggiornare la pagina e riprovare.";
$string['error_server'] = "Si è verificato un errore del server.";
$string['error_server_suggestion'] = "Si prega di riprovare più tardi.";
$string['error_unknown'] = "Si è verificato un errore imprevisto.";
$string['error_unknown_suggestion'] = "Si prega di riprovare o contattare l'amministratore.";
$string['error_request_id'] = '(ID richiesta: {$a})';

// Accessibility strings.
$string['view_icon_status'] = "Icona indicatore di stato";
$string['view_icon_clock'] = "Icona orologio";
$string['view_icon_participants'] = "Icona partecipanti";
$string['view_message_session_status'] = "Informazioni sullo stato della sessione";
$string['view_icon_play'] = "Riproduci registrazione";
$string['view_icon_empty_recordings'] = "Nessuna registrazione disponibile";

$string['recording_pagination'] = "Paginazione registrazioni";
$string['recording_previous'] = "Precedente";
$string['recording_next'] = "Successivo";
$string['recording_previous_page'] = "Vai alla pagina precedente";
$string['recording_next_page'] = "Vai alla pagina successiva";
$string['recording_page'] = "Pagina";

$string['privacy:metadata:tutoom_logs'] = "La tabella dei log delle attività memorizza gli eventi delle stanze degli utenti.";
$string['privacy:metadata:tutoom_logs:userid'] = "L'ID utente che ha attivato l'evento.";
$string['privacy:metadata:tutoom_logs:courseid'] = "L'ID corso dove si è verificata l'attività.";
$string['privacy:metadata:tutoom_logs:tutoomid'] = "L'ID istanza dell'attività Tutoom.";
$string['privacy:metadata:tutoom_logs:timecreated'] = "Il timestamp di quando si è verificato l'evento.";
$string['privacy:metadata:tutoom_logs:roomid'] = "L'UUID della stanza Tutoom.";
$string['privacy:metadata:tutoom_logs:event_type'] = "Il tipo di evento (CREATE_ROOM, JOIN_ROOM, END_ROOM).";
$string['privacy:metadata:tutoom_logs:event_data'] = "Metadati aggiuntivi dell'evento in formato JSON.";

$string['privacy:metadata:tutoom'] = "Per creare e partecipare alle stanze di Tutoom, i dati utente devono essere scambiati con il server.";
$string['privacy:metadata:tutoom:fullname'] = "Il nome completo dell'utente che accede a Moodle.";
$string['privacy:metadata:tutoom:userid'] = "L'ID utente viene inviato a Tutoom per identificare l'utente nella stanza.";
$string['privacy:metadata:tutoom:coursename'] = "Il nome del corso dell'utente";
$string['privacy:metadata:tutoom:role'] = "Il ruolo dell'utente che accede a Moodle.";

// Participant management strings.
$string['mod_form_block_participants'] = 'Assegnazioni ruoli per la sessione di stanza';
$string['mod_form_field_participant_list'] = 'Partecipanti';
$string['mod_form_field_participant_list_type_all'] = 'Tutti gli utenti';
$string['mod_form_field_participant_list_type_role'] = 'Ruolo';
$string['mod_form_field_participant_list_type_user'] = 'Utente';
$string['mod_form_field_participant_list_text_as'] = 'come';
$string['mod_form_field_participant_list_action_add'] = 'Aggiungi';
$string['mod_form_field_participant_list_action_remove'] = 'Rimuovi';
$string['mod_form_field_participant_role_viewer'] = 'Spettatore';
$string['mod_form_field_participant_role_moderator'] = 'Moderatore';
$string['error_invalid_participants'] = 'Configurazione partecipanti non valida';
$string['error_invalid_role'] = 'Assegnazione ruolo non valida';
$string['room_creation_in_progress'] = 'Un altro moderatore sta creando la stanza. Attendere prego...';
$string['room_already_ended'] = 'La stanza è già stata terminata da un altro moderatore.';
$string['room_deletion_in_progress'] = 'Un altro moderatore sta terminando la stanza. Attendere prego...';
