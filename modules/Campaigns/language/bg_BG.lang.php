<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');


/*********************************************************************************
 * The contents of this file are subject to the SugarCRM Master Subscription
 * Agreement ("License") which can be viewed at
 * http://www.sugarcrm.com/crm/master-subscription-agreement
 * By installing or using this file, You have unconditionally agreed to the
 * terms and conditions of the License, and You may not use this file except in
 * compliance with the License.  Under the terms of the license, You shall not,
 * among other things: 1) sublicense, resell, rent, lease, redistribute, assign
 * or otherwise transfer Your rights to the Software, and 2) use the Software
 * for timesharing or service bureau purposes such as hosting the Software for
 * commercial gain and/or for the benefit of a third party.  Use of the Software
 * may be subject to applicable fees and any use of the Software without first
 * paying applicable fees is strictly prohibited.  You do not have the right to
 * remove SugarCRM copyrights from the source code or user interface.
 *
 * All copies of the Covered Code must include on each user interface screen:
 *  (i) the "Powered by SugarCRM" logo and
 *  (ii) the SugarCRM copyright notice
 * in the same form as they appear in the distribution.  See full license for
 * requirements.
 *
 * Your Warranty, Limitations of liability and Indemnity are expressly stated
 * in the License.  Please refer to the License for the specific language
 * governing these rights and limitations under the License.  Portions created
 * by SugarCRM are Copyright (C) 2004-2012 SugarCRM, Inc.; All Rights Reserved.
 ********************************************************************************/

	

$mod_strings = array (
  'NTC_DELETE_CONFIRMATION' => 'Сигурни ли сте, че желаете да изтриете този запис?',
  'LBL_LEADS_DELETED_SINCE_CREATED' => '{0} потенциални клиенти, създадени през тази кампания са били изтрити в последствие.',
  'LBL_CAMPAIGN_DAYS_REMAIN' => 'Оставащи дни',
  'LBL_TRACK_BUTTON_KEY' => 'T',
  'LBL_QUEUE_BUTTON_KEY' => 'u',
  'LBL_TEST_BUTTON_KEY' => 'e',
  'LBL_TODETAIL_BUTTON_KEY' => 'T',
  'LBL_TRACK_DELETE_BUTTON_KEY' => 'D',
  'LBL_ROLLOVER_VIEW' => 'Rollover a bar to view details.',
  'LBL_TARGETED' => 'Targeted',
  'LBL_TOTAL_TARGETED' => 'Total Targeted',
  'LBL_UNSUBSCRIBED_HEADER_EXPL' => 'Moving the newsletter to the Available Newsletters/Newsletters Unsubscribed To list will add the contact to the Unsubscription List for this newsletter.  It will not remove the contact from the original Subscription List or Target List.',
  'LBL_DEFAULT_LIST_ENTRIES_WERE_PROCESSED' => 'Entries were Processed',
  'LBL_SCHEDULER_LINK' => 'go to scheduler admin screen.',
  'LBL_TO_WIZARD' => 'launch',
  'LBL_USE_EXISTING' => 'Use Existing',
  'LBL_CREATE_WEB_TO_LEAD_FORM' => 'CreateWebToLeadForm',
  'LBL_LOG_ENTRIES' => 'Log Entries',
  'LBL_TRACK_QUEUE_SUBPANEL_TITLE' => 'Track Queue',
  'LBL_TARGETED_SUBPANEL_TITLE' => 'Targeted',
  'LBL_VIEWED_SUBPANEL_TITLE' => 'Viewed',
  'LBL_REMOVED_SUBPANEL_TITLE' => 'Removed',
  'LBL_BLOCKED_SUBPANEL_TITLE' => 'Blocked',
  'LBL_INVALID' => 'Invalid',
  'LBL_ALERT' => 'Alert',
  'LBL_FROM_ADDR' => 'Адрес на подателя',
  'LBL_REPLY_ADDR' => 'Адрес а отговор:',
  'LBL_REPLY_NAME' => 'Отговор до:',
  'LBL_MODULE_NAME' => 'Кампании',
  'LBL_MODULE_TITLE' => 'Кампании',
  'LBL_NEWSLETTER_TITLE' => 'Кампании: Бюлетини',
  'LBL_SEARCH_FORM_TITLE' => 'Търсене в модул "Кампании"',
  'LBL_LIST_FORM_TITLE' => 'Списък с кампании',
  'LBL_NEWSLETTER_LIST_FORM_TITLE' => 'Списък с бюлетини',
  'LBL_CAMPAIGN_NAME' => 'Име:',
  'LBL_CAMPAIGN' => 'Кампания:',
  'LBL_NAME' => 'Име:',
  'LBL_INVITEE' => 'Контакти',
  'LBL_LIST_CAMPAIGN_NAME' => 'Кампании',
  'LBL_LIST_STATUS' => 'Статус',
  'LBL_LIST_TYPE' => 'Тип',
  'LBL_LIST_START_DATE' => 'Начална дата',
  'LBL_LIST_END_DATE' => 'Крайна дата',
  'LBL_DATE_ENTERED' => 'Създадено на',
  'LBL_DATE_MODIFIED' => 'Модифицирано на',
  'LBL_MODIFIED' => 'Модифицирано от:',
  'LBL_CREATED' => 'Създадено от:',
  'LBL_TEAM' => 'Екип:',
  'LBL_ASSIGNED_TO' => 'Отговорник:',
  'LBL_ASSIGNED_TO_ID' => 'Отговорник:',
  'LBL_ASSIGNED_TO_NAME' => 'Отговорник:',
  'LBL_CAMPAIGN_START_DATE' => 'Начална дата:',
  'LBL_CAMPAIGN_END_DATE' => 'Крайна дата:',
  'LBL_CAMPAIGN_STATUS' => 'Статус:',
  'LBL_CAMPAIGN_BUDGET' => 'Бюджет:',
  'LBL_CAMPAIGN_EXPECTED_COST' => 'Планирани разходи:',
  'LBL_CAMPAIGN_ACTUAL_COST' => 'Действителни разходи:',
  'LBL_CAMPAIGN_EXPECTED_REVENUE' => 'Планирани приходи:',
  'LBL_CAMPAIGN_IMPRESSIONS' => 'Брой показвания:',
  'LBL_CAMPAIGN_COST_PER_IMPRESSION' => 'Цена за едно показване:',
  'LBL_CAMPAIGN_COST_PER_CLICK_THROUGH' => 'Cost Per Click Through:',
  'LBL_CAMPAIGN_OPPORTUNITIES_WON' => 'Реализирани възможности:',
  'LBL_CAMPAIGN_TYPE' => 'Вид:',
  'LBL_CAMPAIGN_OBJECTIVE' => 'Цел:',
  'LBL_CAMPAIGN_CONTENT' => 'Описание:',
  'LNK_NEW_CAMPAIGN' => 'Създаване на кампания',
  'LNL_NEW_CAMPAIGN_WIZARD' => 'Електронен помощник',
  'LNK_CAMPAIGN_LIST' => 'Списък с кампании',
  'LNK_NEW_PROSPECT' => 'Създаване на целеви клиент',
  'LNK_PROSPECT_LIST' => 'Целеви клиенти',
  'LNK_NEW_PROSPECT_LIST' => 'Създаване на целева група',
  'LNK_PROSPECT_LIST_LIST' => 'Целеви групи',
  'LBL_MODIFIED_BY' => 'Модифицирано от:',
  'LBL_CREATED_BY' => 'Създадено от:',
  'LBL_DATE_CREATED' => 'Създадено на:',
  'LBL_DATE_LAST_MODIFIED' => 'Модифицирано на:',
  'LBL_TRACKER_KEY' => 'Маркер:',
  'LBL_TRACKER_URL' => 'Маркер:',
  'LBL_TRACKER_TEXT' => 'Текст на препратка за проследяване:',
  'LBL_TRACKER_COUNT' => 'Tracker Count:',
  'LBL_REFER_URL' => 'Tracker Redirect URL:',
  'LBL_DEFAULT_SUBPANEL_TITLE' => 'Кампании',
  'LBL_EMAIL_CAMPAIGNS_TITLE' => 'Кампания посредством електронна поща',
  'LBL_NEW_FORM_TITLE' => 'Нова кампания',
  'LBL_TRACKED_URLS' => 'Маркери',
  'LBL_TRACKED_URLS_SUBPANEL_TITLE' => 'Маркери',
  'LBL_CAMPAIGN_ACCOUNTS_SUBPANEL_TITLE' => 'Организации',
  'LBL_PROSPECT_LIST_SUBPANEL_TITLE' => 'Целева група',
  'LBL_EMAIL_MARKETING_SUBPANEL_TITLE' => 'Маркетингови послания',
  'LNK_NEW_EMAIL_TEMPLATE' => 'Създаване на шаблон',
  'LNK_EMAIL_TEMPLATE_LIST' => 'Списък с шаблони',
  'LBL_TRACK_BUTTON_TITLE' => 'Статус на кампанията',
  'LBL_TRACK_BUTTON_LABEL' => 'Статус на кампанията',
  'LBL_QUEUE_BUTTON_TITLE' => 'Изпращане на електронни писма',
  'LBL_QUEUE_BUTTON_LABEL' => 'Изпращане на електронни писма',
  'LBL_TEST_BUTTON_TITLE' => 'Изпращане на тестови съобщения',
  'LBL_TEST_BUTTON_LABEL' => 'Изпращане на тестови съобщения',
  'LBL_COPY_AND_PASTE_CODE' => 'Или копирайте показания по-долу HTML и го поставете в една съществуваща страница',
  'LBL_TODETAIL_BUTTON_TITLE' => 'Подробности за кампанията',
  'LBL_TODETAIL_BUTTON_LABEL' => 'Подробности за кампанията',
  'LBL_DEFAULT' => 'Целеви групи',
  'LBL_MESSAGE_QUEUE_TITLE' => 'Чакащи за изпращане',
  'LBL_LOG_ENTRIES_TITLE' => 'Отговори',
  'LBL_LOG_ENTRIES_TARGETED_TITLE' => 'Изпратени / направен опит за изпращане',
  'LBL_LOG_ENTRIES_SEND_ERROR_TITLE' => 'Върнати, други грешки',
  'LBL_LOG_ENTRIES_INVALID_EMAIL_TITLE' => 'Върнати, невалиден адрес',
  'LBL_LOG_ENTRIES_LINK_TITLE' => 'Посетили адреса',
  'LBL_LOG_ENTRIES_VIEWED_TITLE' => 'Прочели съобщението',
  'LBL_LOG_ENTRIES_REMOVED_TITLE' => 'Да не се изпраща електронна поща',
  'LBL_LOG_ENTRIES_LEAD_TITLE' => 'Създадени потенциални клиенти',
  'LBL_CAMPAIGN_LEAD_SUBPANEL_TITLE' => 'Потенциални клиенти',
  'LBL_OPPORTUNITY_SUBPANEL_TITLE' => 'Възможности',
  'LBL_LOG_ENTRIES_CONTACT_TITLE' => 'Създадени контакти',
  'LBL_BACK_TO_CAMPAIGNS' => 'Връщане в модул кампании',
  'ERR_NO_EMAIL_MARKETING' => 'Необходимо е най-малко едно маркетингово съобщение със статус "Активно" да е асоциирано с кампанията.',
  'ERR_NO_TARGET_LISTS' => 'Необходимо е най-малко една целева група да е асоциирана с кампанията.',
  'ERR_NO_TEST_TARGET_LISTS' => 'Необходимо е най-малко една целева група от тип "Тестова" да е асоциирана с кампанията.',
  'ERR_SENDING_NOW' => 'Съобщенията са в процес на изпращане, моля, опитайте по-късно.',
  'ERR_MESS_NOT_FOUND_FOR_LIST' => 'Няма намерени маркетингови послания за тази целева група',
  'ERR_MESS_DUPLICATE_FOR_LIST' => 'Несъвместими помежду си маркетингови послания са дефинирани за тази целева група',
  'ERR_FIX_MESSAGES' => 'Моля, отстранете грешките, преди да продължите',
  'LBL_TRACK_ROI_BUTTON_LABEL' => 'Възвръщаемост',
  'LBL_TRACK_DELETE_BUTTON_TITLE' => 'Изтрий пробните записи',
  'LBL_TRACK_DELETE_BUTTON_LABEL' => 'Изтрий пробните записи',
  'LBL_TRACK_DELETE_CONFIRM' => 'Тази опция ще изтрие записи в дневника, създадени след изпращане на тестови съобщения. Продължи?',
  'ERR_NO_MAILBOX' => 'Следните маркетингови съобщения нямат пощенска кутия, с която да са асоциирани.<BR>Моля, отстранете проблема преди да продължите.',
  'LBL_LIST_TO_ACTIVITY' => 'Статус на кампанията',
  'LBL_CURRENCY_ID' => 'Валута',
  'LBL_CURRENCY' => 'Валута:',
  'LBL_CAMPAIGN_FREQUENCY' => 'Периодичност',
  'LBL_NEWSLETTERS' => 'Списък с бюлетини',
  'LBL_NEWSLETTER' => 'Бюлетин',
  'LBL_NEWSLETTER_FORENTRY' => 'Бюлетин',
  'LBL_MORE_DETAILS' => 'Детайли',
  'LBL_CREATE_NEWSLETTER' => 'Създаване на бюлетин',
  'LBL_LIST_NAME' => 'Име',
  'LBL_STATUS_TEXT' => 'Статус:',
  'LBL_FROM_MAILBOX_NAME' => 'Използване на пощенска кутия:',
  'LBL_FROM_NAME' => 'Подател:',
  'LBL_START_DATE_TIME' => 'Начална дата и час:',
  'LBL_DATE_START' => 'Начална дата',
  'LBL_TIME_START' => 'Начален час',
  'LBL_TEMPLATE' => 'Шаблон на електронно писмо:',
  'LBL_CREATE_EMAIL_TEMPLATE' => 'Създай',
  'LBL_MESSAGE_FOR' => 'Изпращане на съобщението до:',
  'LBL_FINISH' => 'Край',
  'LBL_ALL_PROSPECT_LISTS' => 'Всички целеви групи в кампанията.',
  'LBL_EDIT_EMAIL_TEMPLATE' => 'Редактиране',
  'LBL_EMAIL_SETUP_WIZARD' => 'Настройки на електронна поща',
  'LBL_DIAGNOSTIC_WIZARD' => 'Диагностика',
  'LBL_ALREADY_SUBSCRIBED_HEADER' => 'Наличен абонамент за бюлетини',
  'LBL_UNSUBSCRIBED_HEADER' => 'Налични бюлетини',
  'LBL_FILTER_CHART_BY' => 'Филтриране по маркетингово послание:',
  'LBL_MANAGE_SUBSCRIPTIONS_TITLE' => 'Управление на абонамента',
  'LBL_MARK_AS_SENT' => 'Маркирай като изпратени',
  'LBL_DEFAULT_LIST_NOT_FOUND' => 'Целева група от тип "По подразбиране" не бе намерена',
  'LBL_DEFAULT_LIST_ENTRIES_NOT_FOUND' => 'Няма намерени записи',
  'LBL_EDIT_TRACKER_NAME' => 'Име на маркера:',
  'LBL_EDIT_TRACKER_URL' => 'Адрес:',
  'LBL_EDIT_OPT_OUT_' => 'Блокира изпращането на послания?',
  'LBL_EDIT_OPT_OUT' => 'Блокира изпращането на послания:',
  'LBL_UNSUBSCRIPTION_LIST_NAME' => 'Име на списъка с прекратилите абонамента:',
  'LBL_SUBSCRIPTION_LIST_NAME' => 'Име на списъка с абонати:',
  'LBL_TEST_LIST_NAME' => 'Име на целевата група за тестови бюлетини:',
  'LBL_UNSUBSCRIPTION_TYPE_NAME' => 'Прекратяване на абонамент',
  'LBL_SUBSCRIPTION_TYPE_NAME' => 'Абонамент',
  'LBL_TEST_TYPE_NAME' => 'Тестов',
  'LBL_UNSUBSCRIPTION_LIST' => 'Списък с прекратили абонамента',
  'LBL_SUBSCRIPTION_LIST' => 'Списък с абонати',
  'LBL_MRKT_NAME' => 'Име',
  'LBL_TEST_LIST' => 'Целева група за тестови бюлетини',
  'LBL_WIZARD_HEADER_MESSAGE' => 'Попълнете задължителните полета, за да идентифицирате кампанията.',
  'LBL_WIZARD_BUDGET_MESSAGE' => 'Попълнете бюджета за изчисляване на възвръщаемостта.',
  'LBL_WIZARD_SUBSCRIPTION_MESSAGE' => 'Към всеки бюлетин трябва да има асоциирани 3 (три) групи (Абонати, Прекратили абонамента, Получатели на тестови бюлетини). Може да използвате вече съществуващи групи или в противен случай, след запазване на кампанията автоматично ще се генерират празни такива.',
  'LBL_WIZARD_TARGET_MESSAGE1' => 'Изберете съществуващи или създайте нови целеви групи. Членовете на тези групи ще бъдат използвани за получатели при изпращане на маркетинговото послание.',
  'LBL_WIZARD_TARGET_MESSAGE2' => 'Или създайте нов от формата долу:',
  'LBL_WIZARD_TRACKER_MESSAGE' => 'Създайте маркери, които да бъдат използвани в кампанията. За да създадете маркер е необходимо полетата "Име на маркера" и "Адрес" да бъдат попълнени.',
  'LBL_WIZARD_MARKETING_MESSAGE' => 'Попълнете формата долу, за да създадете маркетингово послание. Полетата позволяват да специфицирате информация относно кога и как посланието да бъде изпратено.',
  'LBL_WIZARD_SENDMAIL_MESSAGE' => 'Това е финалната стъпка на процеса.  Изберете действие: изпращане на маркетинговото послание, изпращане на маркетинговот послание до тестови получатели или запазване на бюлетина и преминаване към секция "Резюме".',
  'LBL_HOME_START_MESSAGE' => 'Изберете типа на създаваната кампанията.',
  'LBL_WIZARD_LAST_STEP_MESSAGE' => 'Не може да продължите, изпълнявате финалната стъпка.',
  'LBL_WIZARD_FIRST_STEP_MESSAGE' => 'Не може да се върнете, изпълнявате първата стъпка.',
  'LBL_WIZ_NEWSLETTER_TITLE_STEP1' => 'Данни на кампанията',
  'LBL_WIZ_NEWSLETTER_TITLE_STEP2' => 'Бюджет на кампанията',
  'LBL_WIZ_NEWSLETTER_TITLE_STEP3' => 'Създаване на маркери',
  'LBL_WIZ_NEWSLETTER_TITLE_STEP4' => 'Допълнителна информация',
  'LBL_WIZ_MARKETING_TITLE' => 'Маркетингово послание',
  'LBL_WIZ_SENDMAIL_TITLE' => 'Изпращане',
  'LBL_WIZ_TEST_EMAIL_TITLE' => 'Тествай',
  'LBL_WIZ_NEWSLETTER_TITLE_SUMMARY' => 'Резюме',
  'LBL_NAVIGATION_MENU_GEN1' => 'Данни на кампанията',
  'LBL_NAVIGATION_MENU_GEN2' => 'Бюджет',
  'LBL_NAVIGATION_MENU_TRACKERS' => 'Маркери',
  'LBL_NAVIGATION_MENU_MARKETING' => 'Маркетинг',
  'LBL_NAVIGATION_MENU_SEND_EMAIL' => 'Изпращане',
  'LBL_NAVIGATION_MENU_SUBSCRIPTIONS' => 'Целеви групи',
  'LBL_NAVIGATION_MENU_SUMMARY' => 'Резюме',
  'LBL_SUBSCRIPTION_TARGET_WIZARD_DESC' => 'Създаване на целева група за кампанията от тип Абонаментен.<br>  Служи за получаване на писма от текущата кампания.  <br>При липса на група, ще се генерира празна такава автоматично.',
  'LBL_UNSUBSCRIPTION_TARGET_WIZARD_DESC' => 'Създаване на целева група за кампанията от тип Unsubscription.  <br>Съдържа адреси, до които писма от текущата кампания няма да се изпращат, поради отписване на адресатите.  <br>При липса на група, ще се генерира празна такава автоматично.',
  'LBL_TEST_TARGET_WIZARD_DESC' => 'Създаване на целева група за кампанията от тип Тестови.  <br>Служи за получаване на тестови писма от текущата кампания.  <br>При липса на група, ще се генерира празна такава автоматично.',
  'LBL_TRACKERS' => 'Маркери',
  'LBL_ADD_TRACKER' => 'Създаване на маркер',
  'LBL_ADD_TARGET' => 'Добави',
  'LBL_CREATE_TARGET' => 'Създай',
  'LBL_SELECT_TARGET' => 'Използване на вече съществуващ списък',
  'LBL_REMOVE' => 'rem',
  'LBL_CONFIRM' => 'Начало',
  'LBL_START' => 'Начало',
  'LBL_TOTAL_ENTRIES' => 'Записи',
  'LBL_CONFIRM_CAMPAIGN_SAVE_CONTINUE' => 'Запазване на записа и преминаване към Marketing Email',
  'LBL_CONFIRM_CAMPAIGN_SAVE_OPTIONS' => 'Запазване на настройките',
  'LBL_CONFIRM_CAMPAIGN_SAVE_EXIT' => 'Искате ли да запазите информацията преди да излезете?',
  'LBL_CONFIRM_SEND_SAVE' => 'Вие сте на път да напуснете и да изпратите Email кампанията. Искате ли да запазите преди да продължите?',
  'LBL_NEWSLETTER WIZARD_TITLE' => 'Бюлетин:',
  'LBL_NEWSLETTER_WIZARD_START_TITLE' => 'Редактиране на бюлетин:',
  'LBL_CAMPAIGN_WIZARD_START_TITLE' => 'Редактиране на кампания:',
  'LBL_SEND_AS_TEST' => 'Изпращане на маркетинговото послание до тестови получатели',
  'LBL_SAVE_EXIT_BUTTON_LABEL' => 'Край',
  'LBL_SAVE_CONTINUE_BUTTON_LABEL' => 'Запази и продължи',
  'LBL_TARGET_LISTS' => 'Целеви групи',
  'LBL_NO_SUBS_ENTRIES_WARNING' => 'Трябва да имате поне един запис в списъка с абонати, за да изпратите маркетингово послание. Може да допълните списъка след приключване.',
  'LBL_NO_TARGET_ENTRIES_WARNING' => 'Трябва да имате поне един запис в целевата група, за да изпратите маркетингово послание. Може да допълните списъка след приключване.',
  'LBL_NO_TARGETS_WARNING' => 'Трябва да имате поне една целева група, асоциирана с кампанията, за да изпратите маркетингово послание.',
  'LBL_NONE' => 'няма създадени',
  'LBL_CAMPAIGN_WIZARD' => 'Електронен помощник',
  'LBL_EMAIL' => 'Електронна поща',
  'LBL_OTHER_TYPE_CAMPAIGN' => 'Друг тип',
  'LBL_CHOOSE_CAMPAIGN_TYPE' => 'Тип кампания',
  'LBL_TARGET_LIST' => 'Целева група',
  'LBL_TARGET_TYPE' => 'Тип на списъка',
  'LBL_TARGET_NAME' => 'Име на списъка',
  'LBL_EMAILS_SCHEDULED' => 'Писма, запланирани за изпращане',
  'LBL_TEST_EMAILS_SENT' => 'Тестово изпращане',
  'LBL_USERS_CANNOT_OPTOUT' => 'Потребителите на системата не могат да се отписват от получаването на писмата.',
  'LBL_ELECTED_TO_OPTOUT' => 'Избрали сте да се отпишете и да не получавате други писма.',
  'LBL_COPY_OF' => 'Копие на',
  'LBL_SAVED_SEARCH' => 'Съхранени критерии за търсене',
  'LBL_WIZ_FROM_NAME' => 'Подател:',
  'LBL_WIZ_FROM_ADDRESS' => 'Адрес на подателя:',
  'LBL_EMAILS_PER_RUN' => 'Брой писма в пакет:',
  'LBL_CUSTOM_LOCATION' => 'Ръчна настройка',
  'LBL_DEFAULT_LOCATION' => 'По подразбиране',
  'ERR_INT_ONLY_EMAIL_PER_RUN' => 'Възможно е въвеждане само на цели числа в "Брой на писма в пакет"',
  'LBL_LOCATION_TRACK' => 'Местоположение на файловете за проследяване на потребителската активност (campaign_tracker.php, ...):',
  'LBL_MAIL_SENDTYPE' => 'Начин на предаване:',
  'LBL_MAIL_SMTPAUTH_REQ' => 'Рестриктиран достъп?',
  'LBL_MAIL_SMTPPASS' => 'Парола:',
  'LBL_MAIL_SMTPPORT' => 'Порт',
  'LBL_MAIL_SMTPSERVER' => 'Сървър за електронна поща',
  'LBL_MAIL_SMTPUSER' => 'Потребител',
  'LBL_EMAIL_SETUP_WIZARD_TITLE' => 'Настройки на електронна поща за кампании',
  'TRACKING_ENTRIES_LOCATION_DEFAULT_VALUE' => 'config.php->site_url',
  'LBL_NOTIFY_TITLE' => 'Опции при изпращане',
  'LBL_MASS_MAILING_TITLE' => 'Опции пеи изпращане',
  'LBL_SERVER_TYPE' => 'Протокол за получаване',
  'LBL_SERVER_URL' => 'Сървър за електронна поща',
  'LBL_LOGIN' => 'Потребител',
  'LBL_PORT' => 'Порт на сървъра',
  'LBL_MAILBOX_NAME' => 'Име на подателя',
  'LBL_PASSWORD' => 'Парола',
  'LBL_MAILBOX_DEFAULT' => 'Входящи',
  'LBL_MAILBOX' => 'Папка',
  'LBL_NAVIGATION_MENU_SETUP' => 'Настройки',
  'LBL_NAVIGATION_MENU_NEW_MAILBOX' => 'Нова пощенска кутия',
  'LBL_MAILBOX_CHECK_WIZ_GOOD' => 'Пощенска(и) кутия(и) с опция за управление на върнати електронни писма вече е(са) създадена(и). Ако желаете можете да създадете допълнителни.',
  'LBL_MAILBOX_CHECK_WIZ_BAD' => 'Няма създадени пощенски кутии с опция за управление на върнати електронни писма. Моля създайте такава.',
  'LBL_CAMP_MESSAGE_COPY' => 'Съхраняване на копия от изпратените съобщения:',
  'LBL_CAMP_MESSAGE_COPY_DESC' => 'Искате ли да се съхраняват копия от <bold>всички</bold> съобщения изпратени през кампании?  <bold>Нашата препоръка е това да не се прави и стойността по подразбиране е не</bold>.  Така ще се съхраняват единствено шаблоните на маркетинговите послания и необходимите променливи, които позволяват да се възстанови конкретно съобщение.',
  'LBL_YES' => 'Да',
  'LBL_NO' => 'Не',
  'LBL_DEFAULT_FROM_ADDR' => 'По подразбиране:',
  'LBL_EMAIL_SETUP_DESC' => 'Попълнете формата долу, за да промените системните настройки и маркетинговите послания на кампанията да могат да бъдат изпратени.',
  'LBL_CREATE_MAILBOX' => 'Създаване на нова пощенска кутия',
  'LBL_SSL_DESC' => 'Ако сървърът за електронна поща поддържа SSL, маркирането на тази опция ще активира SSL връзка при изтегляне на електронни писма.',
  'LBL_SSL' => 'Използване на SSL',
  'LNK_CAMPAIGN_DIGNOSTIC_LINK' => 'Възможно е кампанията да не се изпълни коректно и писмата да не се изпратят поради следните причини:',
  'LBL_CAMPAIGN_DIAGNOSTICS' => 'Диагностика на настройките за кампании',
  'LBL_DIAGNOSTIC' => 'Диагностика',
  'LBL_MAILBOX_CHECK1_GOOD' => 'Създадена(и) пощенска(и) кутия(и) с опция за управление на върнати електронни писма:',
  'LBL_MAILBOX_CHECK1_BAD' => 'Няма създадени пощенски кутии с опция за управление на върнати електронни писма.',
  'LBL_MAILBOX_CHECK2_GOOD' => 'Зададени настройки за електронна поща:',
  'LBL_MAILBOX_CHECK2_BAD' => 'Моля конфигурирайте адреса за електронна поща на системата. Секцията "Настройки на електронна поща" в раздел "Администриране" не е попълнена.',
  'LBL_SCHEDULER_CHECK_GOOD' => 'Изпълнявани задачи към момента',
  'LBL_SCHEDULER_CHECK_BAD' => 'Няма конфигурирани задачи',
  'LBL_SCHEDULER_CHECK1_BAD' => 'Няма конфигурирана задача за обработка на върнати електронни писма от кампании.',
  'LBL_SCHEDULER_CHECK2_BAD' => 'Няма конфигурирана задача за изпращане на електронни писма от кампании.',
  'LBL_SCHEDULER_NAME' => 'Автоматизирани задачи',
  'LBL_SCHEDULER_STATUS' => 'Статус',
  'LBL_MARKETING_CHECK1_GOOD' => 'Намерено маркетингово послание за кампанията.',
  'LBL_MARKETING_CHECK1_BAD' => 'Не е намерено маркетингово послание за кампанията, дефинирайте послание за успешно изпращане на кампанията.',
  'LBL_MARKETING_CHECK2_GOOD' => 'Намерени целеви групи.',
  'LBL_MARKETING_CHECK2_BAD' => 'Не са намерени целеви групи за кампанията, създайте група за получаване от профила на кампанията.',
  'LBL_EMAIL_SETUP_WIZ' => 'Стартиране на настройките на електронната поща',
  'LBL_TO_WIZARD_TITLE' => 'Електронен помощник',
  'LBL_EDIT_EXISTING' => 'Редактиране на кампания',
  'LBL_EDIT_TARGET_LIST' => 'Редактиране на списъка с целеви клиенти',
  'LBL_SEND_EMAIL' => 'Изпращане на маркетинговото послание',
  'LBL_CREATE_NEW_MARKETING_EMAIL' => 'Създаване на ново маркетингово съобщение',
  'LBL_CHOOSE_NEXT_STEP' => 'Изберете следващата си стъпка',
  'LBL_NON_ADMIN_ERROR_MSG' => 'Моля, свържете се със системния администратор за разрешаването на този проблем',
  'LBL_EMAIL_COMPONENTS' => 'Електронна поща',
  'LBL_SCHEDULER_COMPONENTS' => 'Автоматизирани задачи',
  'LBL_RECHECK_BTN' => 'Проверка на настройките',
  'LBL_WEB_TO_LEAD_FORM_TITLE1' => 'Създаване на уеб форма: Избор на полета',
  'LBL_WEB_TO_LEAD_FORM_TITLE2' => 'Създаване на уеб форма: Настройки',
  'LBL_DRAG_DROP_COLUMNS' => 'С натискане на бутона на мишката преместете полета в колони 1 & 2',
  'LBL_DEFINE_LEAD_HEADER' => 'Заглавие на формата:',
  'LBL_LEAD_DEFAULT_HEADER' => 'Уеб форма на кампанията',
  'LBL_DEFINE_LEAD_SUBMIT' => 'Текст на бутона за изпращане:',
  'LBL_DEFINE_LEAD_POST_URL' => 'Адрес за изпращане на формата:',
  'LBL_EDIT_LEAD_POST_URL' => 'Редактиране на адреса за изпращане?',
  'LBL_DEFINE_LEAD_REDIRECT_URL' => 'Препратка към адрес след изпращане:',
  'LBL_LEAD_NOTIFY_CAMPAIGN' => 'Свързана кампания:',
  'LBL_DEFAULT_LEAD_SUBMIT' => 'Изпрати',
  'LBL_WEB_TO_LEAD' => 'Създаване на уеб форма',
  'LBL_LEAD_FOOTER' => 'Текст в долна секция:',
  'LBL_CAMPAIGN_NOT_SELECTED' => 'Изберете и асоциирайте кампания:',
  'NTC_NO_LEGENDS' => 'Няма запис:',
  'LBL_SELECT_LEAD_FIELDS' => 'Моля, изберете от наличните полета',
  'LBL_DESCRIPTION_LEAD_FORM' => 'Текст в горна секция:',
  'LBL_DESCRIPTION_TEXT_LEAD_FORM' => 'Попълването на тази форма ще генерира потенциален клиент и препратка към кампанията',
  'LBL_DOWNLOAD_TEXT_WEB_TO_LEAD_FORM' => 'Моля, изтеглете Вашата Уеб форма',
  'LBL_DOWNLOAD_WEB_TO_LEAD_FORM' => 'Уеб форма',
  'LBL_PROVIDE_WEB_TO_LEAD_FORM_FIELDS' => 'Моля, попълнете всички налични полета',
  'LBL_NOT_VALID_EMAIL_ADDRESS' => 'Невалиден адрес на електронна поща',
  'LBL_AVALAIBLE_FIELDS_HEADER' => 'Налични полета',
  'LBL_LEAD_FORM_FIRST_HEADER' => 'Уеб форма (1-ва колона)',
  'LBL_LEAD_FORM_SECOND_HEADER' => 'Уеб форма (2-ра колона)',
  'LBL_LEAD_MODULE' => 'Потенциални клиенти',
  'LBL_SELECT_REQUIRED_LEAD_FIELDS' => 'Моля, изберете задължителни полета:',
  'LBL_CAMPAIGN_RETURN_ON_INVESTMENT' => 'Възвръщаемост на инвестициите на кампанията',
  'LBL_CAMPAIGN_RESPONSE_BY_RECIPIENT_ACTIVITY' => 'Статус на кампанията',
  'LBL_LOG_ENTRIES_BLOCKEDD_TITLE' => 'Блокирани',
  'LBL_AMOUNT_IN' => 'Amount in',
  'LBL_ROI_CHART_REVENUE' => 'Приходи',
  'LBL_ROI_CHART_INVESTMENT' => 'Инвестиция',
  'LBL_ROI_CHART_BUDGET' => 'Бюджет',
  'LBL_ROI_CHART_EXPECTED_REVENUE' => 'Очаквани приходи',
  'LBL_TOP_CAMPAIGNS' => 'Най-успешните кампании',
  'LBL_TOP_CAMPAIGNS_NAME' => 'Име на кампанията',
  'LBL_TOP_CAMPAIGNS_REVENUE' => 'Приходи',
  'LBL_LEADS' => 'Потенциални клиенти',
  'LBL_CONTACTS' => 'Контакти',
  'LBL_ACCOUNTS' => 'Организации',
  'LBL_OPPORTUNITIES' => 'Възможности',
  'LBL_CREATED_USER' => 'Създаден потребител',
  'LBL_MODIFIED_USER' => 'Модифициран потребител',
  'LBL_PROSPECTLISTS_SUBPANEL_TITLE' => 'Целева група',
  'LBL_EMAILMARKETING_SUBPANEL_TITLE' => 'Маркетингови послания',
  'LBL_LINK_SUBPANEL_TITLE' => 'Препратка',
  'LBL_LEAD_SUBPANEL_TITLE' => 'Потенциален клиент',
  'LBL_CONTACT_SUBPANEL_TITLE' => 'Контакт',
  'LBL_INVALID EMAIL_SUBPANEL_TITLE' => 'Невалиден електронен адрес',
  'LBL_SEND ERROR_SUBPANEL_TITLE' => 'С грешка при изпращане',
  'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Организации',
  'LBL_LEADS_SUBPANEL_TITLE' => 'Потенциални клиенти',
  'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Възможности',
  'LBL_IMPORT_PROSPECTS' => 'Импортиране на записи с целеви клиенти',
  'LBL_LEAD_FORM_WIZARD' => 'Създаване на уеб форми: Избор на полета',
  'LBL_CAMPAIGN_INFORMATION' => 'Кампания',
  'LBL_MONTH' => 'Месец',
  'LBL_YEAR' => 'Година',
  'LBL_DAY' => 'Ден',
  'LBL_EDIT_LAYOUT' => 'Редактиране на подредби',
  'LBL_VALID' => 'Валиден',
  'LBL_EDIT_INLINE' => 'Редактирай',
  'LBL_DELETE_INLINE' => 'Изтрий',
  'LBL_DELETE' => 'Премахни',
  'LBL_VIEW_INLINE' => 'Разгледай',
);

