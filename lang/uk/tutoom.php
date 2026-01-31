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
$string['modulename_help'] = "Плагін Tutoom дозволяє створювати в Moodle кімнати для дошок у реальному часі для дистанційної освіти.";
$string['missingidandcmid'] = "Ідентифікатор Tutoom неправильний. Будь ласка, перейдіть до свого курсу та виберіть свою діяльність, щоб правильно увійти в Tutoom.";
$string['index_error_noinstances'] = "Немає екземплярів Tutoom";
$string['tutoom:joinasmoderator'] = "Приєднуйтесь як модератор кімнати Tutoom";
$string['tutoom:addinstance'] = "Додайте нову кімнату/діяльність Tutoom";
$string['config_api_secret_key'] = "Секретний ключ API Tutoom";
$string['config_api_secret_key_description'] = "Секретний ключ API вашого облікового запису Tutoom";
$string['config_general'] = "Загальна конфігурація";
$string['config_general_description'] = "Ці налаштування <b>завжди</b> використовуються";
$string['config_activity_logs'] = "Пишіть журнали активності";
$string['config_activity_logs_description'] = "Ця опція зберігає журнали, коли кімната створюється, видаляється та користувач приєднується до кімнати.";
$string['config_recording'] = "Запис";
$string['config_recording_description'] = "Ці налаштування залежать від окремих функцій";
$string['config_recording_enabled'] = "Запис увімкнено за замовчуванням";
$string['config_recording_enabled_description'] = "Кімнату можна записати за замовчуванням. Можна редагувати в налаштуваннях активності Tuttom";
$string['config_recording_auto_start'] = "Автозапуск запису";
$string['config_recording_auto_start_description'] = "Якщо опцію позначено, кімнати почнуть записувати, коли увійде модератор.";
$string['tutoomname'] = "Ім'я";
$string['mod_form_block_room'] = "Налаштування діяльності/кімнати";
$string['mod_form_field_welcome'] = "Вітальне повідомлення";
$string['mod_form_field_welcome_default_message'] = "Ласкаво просимо до класу. Не соромтеся задати будь-яке запитання.";
$string['mod_form_field_record'] = "Номер можна записувати";
$string['mod_form_field_room_type'] = "Тип кімнати";
$string['room_type_room_with_recordings'] = "Кімната із записами";
$string['room_type_room_only'] = "Тільки кімната";
$string['room_type_recording_only'] = "Тільки запис";
$string['view_conference_action_start'] = "Початкова кімната";
$string['view_conference_action_join'] = "Приєднатися до кімнати";
$string['view_conference_action_end'] = "Кінцева кімната";
$string['view_message_room_not_initalized'] = "Кімната не розпочата.";
$string['view_message_room_ended'] = "Ця кімната закінчилася. Перезавантажте сторінку, щоб продовжити";
$string['view_message_conference_in_this_room'] = "в цій кімнаті";
$string['view_message_session_status_on'] = "ОНЛАЙН";
$string['view_message_session_status_off'] = "OFFLINE";
$string['view_message_session_started_at'] = "Розпочато о";
$string['view_message_user'] = "користувача";
$string['view_message_users'] = "користувачів";
$string['recording_title'] = "Записи";
$string['recording_preview'] = "Попередній перегляд";
$string['recording_date'] = "Дата";
$string['recording_time'] = "час";
$string['recording_duration'] = "Тривалість";
$string['recording_text_empty'] = "Поки немає записів...";
$string['recording_loading'] = "Отримання записів...";
$string['view_page_error_empty_credentials'] = "Вам потрібно налаштувати облікові дані Tutoom API, більше інформації тут: https://tutoom.com/help/articles/native-moodle-plugin";

// Error messages and recovery suggestions.
$string['error_unauthorized'] = "Помилка автентифікації: Недійсні або відсутні облікові дані API.";
$string['error_unauthorized_suggestion'] = "Будь ласка, зв'яжіться з адміністратором сайту для перевірки конфігурації ключа API Tutoom.";
$string['error_forbidden'] = "Доступ заборонено: У вас немає дозволу на виконання цієї дії.";
$string['error_forbidden_suggestion'] = "Будь ласка, зв'яжіться з адміністратором сайту.";
$string['error_no_subscription'] = "Активної підписки Tutoom не знайдено.";
$string['error_no_subscription_suggestion'] = "Будь ласка, зв'яжіться з адміністратором сайту, щоб активувати вашу підписку Tutoom.";
$string['error_max_rooms'] = "Досягнуто максимальної кількості одночасних кімнат для вашої підписки.";
$string['error_max_rooms_suggestion'] = "Будь ласка, завершіть існуючі кімнати перед створенням нових або зв'яжіться з адміністратором для оновлення підписки.";
$string['error_subscription_inactive'] = "Ваша підписка Tutoom не активна.";
$string['error_subscription_inactive_suggestion'] = "Будь ласка, зв'яжіться з адміністратором сайту.";
$string['error_validation'] = "Надано недійсні вхідні дані.";
$string['error_validation_suggestion'] = "Будь ласка, перевірте ваші дані та спробуйте ще раз.";
$string['error_invalid_idempotency'] = "Недійсний формат запиту.";
$string['error_invalid_idempotency_suggestion'] = "Будь ласка, перезавантажте сторінку та спробуйте ще раз.";
$string['error_room_not_found'] = "Кімнату не знайдено або її було видалено.";
$string['error_room_not_found_suggestion'] = "Будь ласка, перезавантажте сторінку. Кімнату могли видалити.";
$string['error_recording_not_found'] = "Запис не знайдено.";
$string['error_recording_not_found_suggestion'] = "Запис може бути ще недоступним або його могли видалити.";
$string['error_rate_limit'] = "Занадто багато запитів. Будь ласка, сповільніться.";
$string['error_rate_limit_suggestion'] = "Будь ласка, зачекайте хвилину та спробуйте ще раз.";
$string['error_internal'] = "Виникла помилка сервера.";
$string['error_internal_suggestion'] = "Будь ласка, спробуйте ще раз через кілька хвилин. Якщо проблема не зникає, зв'яжіться з адміністратором.";
$string['error_token_failed'] = "Не вдалося створити токен доступу.";
$string['error_token_failed_suggestion'] = "Будь ласка, спробуйте ще раз. Якщо проблема не зникає, зв'яжіться з адміністратором.";
$string['error_service_unavailable'] = "Служба Tutoom тимчасово недоступна.";
$string['error_service_unavailable_suggestion'] = "Будь ласка, спробуйте ще раз через кілька хвилин.";
$string['error_network'] = "Помилка мережі: Не вдається підключитися до служби Tutoom.";
$string['error_network_suggestion'] = "Будь ласка, перевірте підключення до Інтернету та спробуйте ще раз.";
$string['error_not_found'] = "Ресурс не знайдено.";
$string['error_not_found_suggestion'] = "Будь ласка, перезавантажте сторінку та спробуйте ще раз.";
$string['error_server'] = "Виникла помилка сервера.";
$string['error_server_suggestion'] = "Будь ласка, спробуйте ще раз пізніше.";
$string['error_unknown'] = "Сталася несподівана помилка.";
$string['error_unknown_suggestion'] = "Будь ласка, спробуйте ще раз або зв'яжіться з адміністратором.";
$string['error_request_id'] = '(ID запиту: {$a})';

// Accessibility strings.
$string['view_icon_status'] = "Значок індикатора стану";
$string['view_icon_clock'] = "Значок годинника";
$string['view_icon_participants'] = "Значок учасників";
$string['view_message_session_status'] = "Інформація про статус сесії";
$string['view_icon_play'] = "Відтворити запис";
$string['view_icon_empty_recordings'] = "Немає доступних записів";

$string['recording_pagination'] = "Пагінація записів";
$string['recording_previous'] = "Попередній";
$string['recording_next'] = "Наступний";
$string['recording_previous_page'] = "Перейти до попередньої сторінки";
$string['recording_next_page'] = "Перейти до наступної сторінки";
$string['recording_page'] = "Сторінка";

$string['privacy:metadata:tutoom_logs'] = "Таблиця журналу активності зберігає події кімнати користувача.";
$string['privacy:metadata:tutoom_logs:userid'] = "Ідентифікатор користувача, який викликав подію.";
$string['privacy:metadata:tutoom_logs:courseid'] = "Ідентифікатор курсу, де відбулася активність.";
$string['privacy:metadata:tutoom_logs:tutoomid'] = "Ідентифікатор екземпляра активності Tutoom.";
$string['privacy:metadata:tutoom_logs:timecreated'] = "Позначка часу, коли відбулася подія.";
$string['privacy:metadata:tutoom_logs:roomid'] = "UUID кімнати Tutoom.";
$string['privacy:metadata:tutoom_logs:event_type'] = "Тип події (CREATE_ROOM, JOIN_ROOM, END_ROOM).";
$string['privacy:metadata:tutoom_logs:event_data'] = "Додаткові метадані події у форматі JSON.";

$string['privacy:metadata:tutoom'] = "Щоб створити кімнати Tutoom і приєднатися до них, потрібно обмінятися даними користувача з сервером.";
$string['privacy:metadata:tutoom:fullname'] = "Повне ім'я користувача, який отримує доступ до Moodle.";
$string['privacy:metadata:tutoom:userid'] = "Ідентифікатор користувача надсилається до Tutoom для ідентифікації користувача в кімнаті.";
$string['privacy:metadata:tutoom:coursename'] = "Ім'я курсу користувача";
$string['privacy:metadata:tutoom:role'] = "Роль користувача, який отримує доступ до Moodle.";

// Participant management strings.
$string['mod_form_block_participants'] = 'Призначення ролей для сесії кімнати';
$string['mod_form_field_participant_list'] = 'Учасники';
$string['mod_form_field_participant_list_type_all'] = 'Усі користувачі';
$string['mod_form_field_participant_list_type_role'] = 'Роль';
$string['mod_form_field_participant_list_type_user'] = 'Користувач';
$string['mod_form_field_participant_list_text_as'] = 'як';
$string['mod_form_field_participant_list_action_add'] = 'Додати';
$string['mod_form_field_participant_list_action_remove'] = 'Видалити';
$string['mod_form_field_participant_role_viewer'] = 'Глядач';
$string['mod_form_field_participant_role_moderator'] = 'Модератор';
$string['error_invalid_participants'] = 'Недійсне налаштування учасників';
$string['error_invalid_role'] = 'Недійсне призначення ролі';
$string['room_creation_in_progress'] = 'Інший модератор створює кімнату. Будь ласка, зачекайте...';
$string['room_already_ended'] = 'Кімнату вже завершив інший модератор.';
$string['room_deletion_in_progress'] = 'Інший модератор завершує кімнату. Будь ласка, зачекайте...';
