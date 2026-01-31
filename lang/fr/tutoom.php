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
$string['modulename_help'] = "Le plugin Tutoom vous permet de créer des salles de tableau blanc en temps réel pour l'enseignement à distance depuis Moodle.";
$string['missingidandcmid'] = "L'identifiant Tutoom est incorrect. Veuillez accéder à votre cours et sélectionner votre activité pour accéder correctement à Tutoom.";
$string['index_error_noinstances'] = "Il n'y a aucune instance de Tutoom.";
$string['tutoom:joinasmoderator'] = "Rejoindre une salle Tutoom en tant que modérateur.";
$string['tutoom:addinstance'] = "Ajouter une nouvelle salle/activité Tutoom.";
$string['config_api_secret_key'] = "Clé secrète de l'API Tutoom.";
$string['config_api_secret_key_description'] = "La clé secrète API de votre compte Tutoom";
$string['config_general'] = "Configuration générale";
$string['config_general_description'] = "Ces paramètres sont <b>toujours</b> utilisés";
$string['config_activity_logs'] = "Écrire les journaux d'activité";
$string['config_activity_logs_description'] = "Cette option enregistre les journaux de création, de suppression et de connexion d'un salon.";
$string['config_recording'] = "Enregistrement";
$string['config_recording_description'] = "Ces paramètres sont spécifiques à chaque fonctionnalité.";
$string['config_recording_enabled'] = "Enregistrement activé par défaut";
$string['config_recording_enabled_description'] = "Le salon peut être enregistré par défaut. Modifiable dans les paramètres d'activité Tutoom.";
$string['config_recording_auto_start'] = "Démarrage automatique de l'enregistrement";
$string['config_recording_auto_start_description'] = "Si l'option est cochée, l'enregistrement des salles commencera dès l'arrivée du modérateur.";
$string['tutoomname'] = "Nom";
$string['mod_form_block_room'] = "Paramètres de l'activité/de la salle";
$string['mod_form_field_welcome'] = "Message de bienvenue";
$string['mod_form_field_welcome_default_message'] = "Bienvenue dans le cours. N'hésitez pas à poser vos questions.";
$string['mod_form_field_record'] = "La salle peut être enregistrée.";
$string['mod_form_field_room_type'] = "Type de salle";
$string['room_type_room_with_recordings'] = "Salle avec enregistrements";
$string['room_type_room_only'] = "Salle uniquement";
$string['room_type_recording_only'] = "Enregistrement uniquement";
$string['view_conference_action_start'] = "Démarrer la salle";
$string['view_conference_action_join'] = "Rejoindre la salle";
$string['view_conference_action_end'] = "Fin de la salle";
$string['view_message_room_not_initalized'] = "La salle n'a pas commencé.";
$string['view_message_room_ended'] = "Cette salle est terminée. Veuillez actualiser la page pour continuer.";
$string['view_message_conference_in_this_room'] = "Dans cette salle";
$string['view_message_session_status_on'] = "EN LIGNE";
$string['view_message_session_status_off'] = "HORS LIGNE";
$string['view_message_session_started_at'] = "Débuté à";
$string['view_message_user'] = "utilisateur";
$string['view_message_users'] = "utilisateurs";
$string['recording_title'] = "Enregistrements";
$string['recording_preview'] = "Aperçu";
$string['recording_date'] = "Date";
$string['recording_time'] = "Heure";
$string['recording_duration'] = "Durée";
$string['recording_text_empty'] = "Aucun enregistrement pour le moment...";
$string['recording_loading'] = "Enregistrements en cours...";
$string['view_page_error_empty_credentials'] = "Vous devez configurer les identifiants de l'API Tutoom. Plus d'informations ici : https://tutoom.com/help/articles/native-moodle-plugin";
// Error messages and recovery suggestions.
$string['error_unauthorized'] = "Échec de l'authentification : Identifiants API invalides ou manquants.";
$string['error_unauthorized_suggestion'] = "Veuillez contacter l'administrateur de votre site pour vérifier la configuration de la clé API Tutoom.";
$string['error_forbidden'] = "Accès refusé : Vous n'avez pas la permission d'effectuer cette action.";
$string['error_forbidden_suggestion'] = "Veuillez contacter l'administrateur de votre site.";
$string['error_no_subscription'] = "Aucun abonnement Tutoom actif trouvé.";
$string['error_no_subscription_suggestion'] = "Veuillez contacter l'administrateur de votre site pour activer votre abonnement Tutoom.";
$string['error_max_rooms'] = "Nombre maximum de salles simultanées atteint pour votre abonnement.";
$string['error_max_rooms_suggestion'] = "Veuillez terminer les salles existantes avant d'en créer de nouvelles, ou contactez votre administrateur pour mettre à niveau votre abonnement.";
$string['error_subscription_inactive'] = "Votre abonnement Tutoom n'est pas actif.";
$string['error_subscription_inactive_suggestion'] = "Veuillez contacter l'administrateur de votre site.";
$string['error_validation'] = "Entrée invalide fournie.";
$string['error_validation_suggestion'] = "Veuillez vérifier votre saisie et réessayer.";
$string['error_invalid_idempotency'] = "Format de demande invalide.";
$string['error_invalid_idempotency_suggestion'] = "Veuillez actualiser la page et réessayer.";
$string['error_room_not_found'] = "Salle introuvable ou supprimée.";
$string['error_room_not_found_suggestion'] = "Veuillez actualiser la page. La salle a peut-être été supprimée.";
$string['error_recording_not_found'] = "Enregistrement introuvable.";
$string['error_recording_not_found_suggestion'] = "L'enregistrement peut ne pas être encore disponible ou a peut-être été supprimé.";
$string['error_rate_limit'] = "Trop de demandes. Veuillez ralentir.";
$string['error_rate_limit_suggestion'] = "Veuillez attendre un moment et réessayer.";
$string['error_internal'] = "Une erreur serveur s'est produite.";
$string['error_internal_suggestion'] = "Veuillez réessayer dans quelques instants. Si le problème persiste, contactez votre administrateur.";
$string['error_token_failed'] = "Échec de la création du jeton d'accès.";
$string['error_token_failed_suggestion'] = "Veuillez réessayer. Si le problème persiste, contactez votre administrateur.";
$string['error_service_unavailable'] = "Le service Tutoom est temporairement indisponible.";
$string['error_service_unavailable_suggestion'] = "Veuillez réessayer dans quelques instants.";
$string['error_network'] = "Erreur réseau : Impossible de se connecter au service Tutoom.";
$string['error_network_suggestion'] = "Veuillez vérifier votre connexion Internet et réessayer.";
$string['error_not_found'] = "Ressource introuvable.";
$string['error_not_found_suggestion'] = "Veuillez actualiser la page et réessayer.";
$string['error_server'] = "Une erreur serveur s'est produite.";
$string['error_server_suggestion'] = "Veuillez réessayer plus tard.";
$string['error_unknown'] = "Une erreur inattendue s'est produite.";
$string['error_unknown_suggestion'] = "Veuillez réessayer ou contacter votre administrateur.";
$string['error_request_id'] = '(ID de demande : {$a})';

// Accessibility strings.
$string['view_icon_status'] = "Icône d'indicateur d'état";
$string['view_icon_clock'] = "Icône d'horloge";
$string['view_icon_participants'] = "Icône de participants";
$string['view_message_session_status'] = "Informations sur l'état de la session";
$string['view_icon_play'] = "Lire l'enregistrement";
$string['view_icon_empty_recordings'] = "Aucun enregistrement disponible";

$string['recording_pagination'] = "Pagination des enregistrements";
$string['recording_previous'] = "Précédent";
$string['recording_next'] = "Suivant";
$string['recording_previous_page'] = "Aller à la page précédente";
$string['recording_next_page'] = "Aller à la page suivante";
$string['recording_page'] = "Page";

$string['privacy:metadata:tutoom_logs'] = "La table des journaux d'activité stocke les événements de salle d'utilisateurs.";
$string['privacy:metadata:tutoom_logs:userid'] = "L'ID de l'utilisateur qui a déclenché l'événement.";
$string['privacy:metadata:tutoom_logs:courseid'] = "L'ID du cours où l'activité s'est produite.";
$string['privacy:metadata:tutoom_logs:tutoomid'] = "L'ID de l'instance d'activité Tutoom.";
$string['privacy:metadata:tutoom_logs:timecreated'] = "L'horodatage lorsque l'événement s'est produit.";
$string['privacy:metadata:tutoom_logs:roomid'] = "L'UUID de la salle Tutoom.";
$string['privacy:metadata:tutoom_logs:event_type'] = "Le type d'événement (CREATE_ROOM, JOIN_ROOM, END_ROOM).";
$string['privacy:metadata:tutoom_logs:event_data'] = "Métadonnées d'événement supplémentaires au format JSON.";

$string['privacy:metadata:tutoom'] = "Pour créer et rejoindre des salles Tutoom, des données utilisateur doivent être échangées avec le serveur.";
$string['privacy:metadata:tutoom:fullname'] = "Le nom complet de l'utilisateur accédant à Moodle.";
$string['privacy:metadata:tutoom:userid'] = "L'ID utilisateur est envoyé à Tutoom pour identifier l'utilisateur dans la salle.";
$string['privacy:metadata:tutoom:coursename'] = "Le nom du cours de l'utilisateur.";
$string['privacy:metadata:tutoom:role'] = "Le rôle de l'utilisateur accédant à Moodle.";

// Participant management strings.
$string['mod_form_block_participants'] = 'Attributions de rôles pour la session de salle';
$string['mod_form_field_participant_list'] = 'Participants';
$string['mod_form_field_participant_list_type_all'] = 'Tous les utilisateurs';
$string['mod_form_field_participant_list_type_role'] = 'Rôle';
$string['mod_form_field_participant_list_type_user'] = 'Utilisateur';
$string['mod_form_field_participant_list_text_as'] = 'en tant que';
$string['mod_form_field_participant_list_action_add'] = 'Ajouter';
$string['mod_form_field_participant_list_action_remove'] = 'Supprimer';
$string['mod_form_field_participant_role_viewer'] = 'Spectateur';
$string['mod_form_field_participant_role_moderator'] = 'Modérateur';
$string['error_invalid_participants'] = 'Configuration des participants invalide';
$string['error_invalid_role'] = 'Attribution de rôle invalide';
$string['room_creation_in_progress'] = 'Un autre modérateur crée la salle. Veuillez patienter...';
$string['room_already_ended'] = 'La salle a déjà été terminée par un autre modérateur.';
$string['room_deletion_in_progress'] = 'Un autre modérateur termine la salle. Veuillez patienter...';
