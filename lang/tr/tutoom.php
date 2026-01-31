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
$string['modulename_help'] = "Tutoom eklentisi, uzaktan eğitim için Moodle gerçek zamanlı beyaz tahta odaları oluşturmanıza olanak tanır.";
$string['missingidandcmid'] = "Tutoom kimliği yanlış. Lütfen kursunuza gidin ve Tutoom'u doğru şekilde girmek için etkinliğinizi seçin.";
$string['index_error_noinstances'] = "Tutoom örneği yok";
$string['tutoom:joinasmoderator'] = "Bir Tutoom odasına moderatör olarak katılın";
$string['tutoom:addinstance'] = "Yeni bir Tutoom odası/etkinliği ekleyin";
$string['config_api_secret_key'] = "Tutoom API gizli anahtarı";
$string['config_api_secret_key_description'] = "Tutoom hesabınızın API gizli anahtarı";
$string['config_general'] = "Genel yapılandırma";
$string['config_general_description'] = "Bu ayarlar <b>her zaman</b> kullanılır";
$string['config_activity_logs'] = "Etkinlik günlüklerini yaz";
$string['config_activity_logs_description'] = "Bu seçenek, bir oda oluşturulduğunda, silindiğinde ve kullanıcı odaya katıldığında günlükleri kaydeder.";
$string['config_recording'] = "Kayıt";
$string['config_recording_description'] = "Bu ayarlar özellik özelindedir";
$string['config_recording_enabled'] = "Kayıt varsayılan olarak etkindir";
$string['config_recording_enabled_description'] = "Oda varsayılan olarak kaydedilebilir. Tuttom etkinlik ayarlarında düzenlenebilir";
$string['config_recording_auto_start'] = "Kayıt otomatik başlatma";
$string['config_recording_auto_start_description'] = "Seçenek işaretliyse, moderatör girdiğinde odalar kayda başlayacaktır.";
$string['tutoomname'] = "Ad";
$string['mod_form_block_room'] = "Etkinlik/Oda ayarları";
$string['mod_form_field_welcome'] = "Hoş geldiniz mesajı";
$string['mod_form_field_welcome_default_message'] = "Sınıfa hoş geldiniz. Herhangi bir soru sormaktan çekinmeyin.";
$string['mod_form_field_record'] = "Oda kaydedilebilir";
$string['mod_form_field_room_type'] = "Oda türü";
$string['room_type_room_with_recordings'] = "Kayıtlı oda";
$string['room_type_room_only'] = "Sadece oda";
$string['room_type_recording_only'] = "Yalnızca kayıt";
$string['view_conference_action_start'] = "Odayı başlat";
$string['view_conference_action_join'] = "Odaya katıl";
$string['view_conference_action_end'] = "Odayı sonlandır";
$string['view_message_room_not_initalized'] = "Oda başlamadı.";
$string['view_message_room_ended'] = "Bu oda sona erdi. Devam etmek için lütfen sayfayı yeniden yükleyin";
$string['view_message_conference_in_this_room'] = "bu odada";
$string['view_message_session_status_on'] = "ÇEVRİMİÇİ";
$string['view_message_session_status_off'] = "ÇEVRİMDIŞI";
$string['view_message_session_started_at'] = "Başlangıç tarihi";
$string['view_message_user'] = "Kullanıcı";
$string['view_message_users'] = "Kullanıcılar";
$string['recording_title'] = "Kayıtlar";
$string['recording_preview'] = "Önizleme";
$string['recording_date'] = "Tarih";
$string['recording_time'] = "Saat";
$string['recording_duration'] = "Süre";
$string['recording_text_empty'] = "Şimdiye kadar kayıt yok...";
$string['recording_loading'] = "Kayıtlar alınıyor...";
$string['view_page_error_empty_credentials'] = "Tutoom API kimlik bilgilerini yapılandırmanız gerekir, daha fazla bilgi için buraya bakın: https://tutoom.com/help/articles/native-moodle-plugin";

// Error messages and recovery suggestions.
$string['error_unauthorized'] = "Kimlik doğrulama hatası: Geçersiz veya eksik API kimlik bilgileri.";
$string['error_unauthorized_suggestion'] = "Tutoom API anahtarı yapılandırmasını doğrulamak için lütfen site yöneticinizle iletişime geçin.";
$string['error_forbidden'] = "Erişim reddedildi: Bu eylemi gerçekleştirme izniniz yok.";
$string['error_forbidden_suggestion'] = "Lütfen site yöneticinizle iletişime geçin.";
$string['error_no_subscription'] = "Aktif bir Tutoom aboneliği bulunamadı.";
$string['error_no_subscription_suggestion'] = "Tutoom aboneliğinizi etkinleştirmek için lütfen site yöneticinizle iletişime geçin.";
$string['error_max_rooms'] = "Aboneliğiniz için maksimum eşzamanlı oda sayısına ulaşıldı.";
$string['error_max_rooms_suggestion'] = "Lütfen yenilerini oluşturmadan önce mevcut odaları sonlandırın veya aboneliğinizi yükseltmek için yöneticiyle iletişime geçin.";
$string['error_subscription_inactive'] = "Tutoom aboneliğiniz aktif değil.";
$string['error_subscription_inactive_suggestion'] = "Lütfen site yöneticinizle iletişime geçin.";
$string['error_validation'] = "Geçersiz giriş sağlandı.";
$string['error_validation_suggestion'] = "Lütfen girişinizi kontrol edin ve tekrar deneyin.";
$string['error_invalid_idempotency'] = "Geçersiz istek biçimi.";
$string['error_invalid_idempotency_suggestion'] = "Lütfen sayfayı yeniden yükleyin ve tekrar deneyin.";
$string['error_room_not_found'] = "Oda bulunamadı veya silindi.";
$string['error_room_not_found_suggestion'] = "Lütfen sayfayı yeniden yükleyin. Oda silinmiş olabilir.";
$string['error_recording_not_found'] = "Kayıt bulunamadı.";
$string['error_recording_not_found_suggestion'] = "Kayıt henüz mevcut olmayabilir veya silinmiş olabilir.";
$string['error_rate_limit'] = "Çok fazla istek. Lütfen yavaşlayın.";
$string['error_rate_limit_suggestion'] = "Lütfen bir dakika bekleyin ve tekrar deneyin.";
$string['error_internal'] = "Bir sunucu hatası oluştu.";
$string['error_internal_suggestion'] = "Lütfen birkaç dakika sonra tekrar deneyin. Sorun devam ederse yöneticiyle iletişime geçin.";
$string['error_token_failed'] = "Erişim belirteci oluşturulamadı.";
$string['error_token_failed_suggestion'] = "Lütfen tekrar deneyin. Sorun devam ederse yöneticiyle iletişime geçin.";
$string['error_service_unavailable'] = "Tutoom hizmeti geçici olarak kullanılamıyor.";
$string['error_service_unavailable_suggestion'] = "Lütfen birkaç dakika sonra tekrar deneyin.";
$string['error_network'] = "Ağ hatası: Tutoom hizmetine bağlanılamıyor.";
$string['error_network_suggestion'] = "Lütfen internet bağlantınızı kontrol edin ve tekrar deneyin.";
$string['error_not_found'] = "Kaynak bulunamadı.";
$string['error_not_found_suggestion'] = "Lütfen sayfayı yeniden yükleyin ve tekrar deneyin.";
$string['error_server'] = "Bir sunucu hatası oluştu.";
$string['error_server_suggestion'] = "Lütfen daha sonra tekrar deneyin.";
$string['error_unknown'] = "Beklenmeyen bir hata oluştu.";
$string['error_unknown_suggestion'] = "Lütfen tekrar deneyin veya yöneticiyle iletişime geçin.";
$string['error_request_id'] = '(İstek kimliği: {$a})';

// Accessibility strings.
$string['view_icon_status'] = "Durum göstergesi simgesi";
$string['view_icon_clock'] = "Saat simgesi";
$string['view_icon_participants'] = "Katılımcılar simgesi";
$string['view_message_session_status'] = "Oturum durumu bilgisi";
$string['view_icon_play'] = "Kaydı oynat";
$string['view_icon_empty_recordings'] = "Kayıt mevcut değil";

$string['recording_pagination'] = "Kayıt sayfalandırma";
$string['recording_previous'] = "Önceki";
$string['recording_next'] = "Sonraki";
$string['recording_previous_page'] = "Önceki sayfaya git";
$string['recording_next_page'] = "Sonraki sayfaya git";
$string['recording_page'] = "Sayfa";

$string['privacy:metadata:tutoom_logs'] = "Etkinlik günlüğü tablosu kullanıcı odası olaylarını depolar.";
$string['privacy:metadata:tutoom_logs:userid'] = "Olayı tetikleyen kullanıcının kimliği.";
$string['privacy:metadata:tutoom_logs:courseid'] = "Etkinliğin gerçekleştiği kursun kimliği.";
$string['privacy:metadata:tutoom_logs:tutoomid'] = "Tutoom etkinlik örneğinin kimliği.";
$string['privacy:metadata:tutoom_logs:timecreated'] = "Olayın gerçekleştiği zaman damgası.";
$string['privacy:metadata:tutoom_logs:roomid'] = "Tutoom odasının UUID'si.";
$string['privacy:metadata:tutoom_logs:event_type'] = "Olay türü (CREATE_ROOM, JOIN_ROOM, END_ROOM).";
$string['privacy:metadata:tutoom_logs:event_data'] = "JSON formatında ek olay meta verileri.";

$string['privacy:metadata:tutoom'] = "Tutoom odaları oluşturmak ve katılmak için, kullanıcı verilerinin sunucuyla paylaşılması gerekir.";
$string['privacy:metadata:tutoom:fullname'] = "Moodle'a erişen kullanıcının tam adı.";
$string['privacy:metadata:tutoom:userid'] = "Kullanıcı kimliği, odadaki kullanıcıyı tanımlamak için Tutoom'a gönderilir.";
$string['privacy:metadata:tutoom:coursename'] = "Kullanıcının ders adı";
$string['privacy:metadata:tutoom:role'] = "Moodle'a erişen kullanıcının rolü.";

// Participant management strings.
$string['mod_form_block_participants'] = 'Oda oturumu için rol ataması';
$string['mod_form_field_participant_list'] = 'Katılımcılar';
$string['mod_form_field_participant_list_type_all'] = 'Tüm kullanıcılar';
$string['mod_form_field_participant_list_type_role'] = 'Rol';
$string['mod_form_field_participant_list_type_user'] = 'Kullanıcı';
$string['mod_form_field_participant_list_text_as'] = 'olarak';
$string['mod_form_field_participant_list_action_add'] = 'Ekle';
$string['mod_form_field_participant_list_action_remove'] = 'Kaldır';
$string['mod_form_field_participant_role_viewer'] = 'İzleyici';
$string['mod_form_field_participant_role_moderator'] = 'Moderatör';
$string['error_invalid_participants'] = 'Geçersiz katılımcı ayarı';
$string['error_invalid_role'] = 'Geçersiz rol ataması';
$string['room_creation_in_progress'] = 'Başka bir moderatör odayı oluşturuyor. Lütfen bekleyin...';
$string['room_already_ended'] = 'Oda zaten başka bir moderatör tarafından sonlandırıldı.';
$string['room_deletion_in_progress'] = 'Başka bir moderatör odayı sonlandırıyor. Lütfen bekleyin...';
