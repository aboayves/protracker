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
  'ERR_PASSWORD_CHANGE_FAILED_3' => '.	Новата порала е невалидна.',
  'LBL_REMINDER_POPUP' => 'Popup',
  'LBL_REMINDER_EMAIL' => 'Електронна поща',
  'LBL_ICAL_PUB_URL' => 'URL за iCal интеграция',
  'LBL_ICAL_PUB_URL_HELP' => 'Използвайте следното URL, за да актуализирате календара на Sugar.',
  'LBL_ASSIGN_PRIVATE_TEAM' => '(private team on save)',
  'LBL_TEAM_UPLINE' => 'Member Reports-to',
  'ERR_RECIPIENT_EMAIL' => 'Recipient Email Address',
  'ERR_SERVER_STATUS' => 'Your server status',
  'LBL_AUTHENTICATE_ID' => 'Authentication Id',
  'LBL_EXT_AUTHENTICATE' => 'External Authentication',
  'LBL_EMAIL_TEMPLATE_MISSING' => 'No email template is selected for the email containing the password that will be sent to the user.  Please select an email template in the Password Management page.',
  'LBL_GENERATE_PASSWORD_BUTTON_KEY' => 'G',
  'LBL_LDAP' => 'LDAP',
  'LBL_LOGIN_BUTTON_KEY' => 'L',
  'LBL_NEW_USER_BUTTON_KEY' => 'N',
  'LBL_NORMAL_LOGIN' => 'Switch to Normal View',
  'LBL_RECAPTCHA_NEW_CAPTCHA' => 'Get another CAPTCHA',
  'LBL_RECAPTCHA_SOUND' => 'Switch to Sound',
  'LBL_RECAPTCHA_IMAGE' => 'Switch to Image',
  'LBL_RECAPTCHA_INSTRUCTION' => 'Enter the Two Words Below',
  'LBL_RECAPTCHA_INSTRUCTION_OPPOSITE' => 'Enter the Two Words to the Right',
  'LBL_RECAPTCHA_FILL_FIELD' => 'Enter the text that appears in the image.',
  'LBL_RECAPTCHA_INVALID_REQUEST_COOKIE' => 'The challenge parameter of the verify Recaptcha script was incorrect.',
  'LBL_YOUR_QUERY_URL' => 'Your Query URL',
  'LBL_PROCESSING' => 'Processing',
  'LBL_UPDATE_FINISH' => 'Update complete',
  'LBL_AFFECTED' => 'affected',
  'LBL_REASS_STEP2_TITLE' => 'Team Reassignment',
  'LBL_REASS_USER_FROM_TEAM' => 'From User Team:',
  'LBL_REASS_USER_TO_TEAM' => 'To User Team:',
  'LBL_REASS_TEAM_NO_CHANGE' => '-- No Change --',
  'LBL_REASS_NOT_PROCESSED' => 'could not be processed:',
  'LBL_REASS_ASSESSING' => 'Assessing',
  'LBL_REASS_RECORDS_FROM' => 'records from',
  'LBL_REASS_WILL_BE_UPDATED' => 'will be updated.',
  'LBL_REASS_WORK_NOTIF_AUDIT' => 'Include Workflow/Notifications/Audit (significantly slower)',
  'LBL_REASS_SUCCESS_ASSIGN' => 'Successfully assigned',
  'LBL_REASS_CANNOT_PROCESS' => 'could not be processed:',
  'LBL_REASS_NONE' => 'None',
  'LBL_REASS_UPDATE_COMPLETE' => 'Update complete',
  'LBL_REASS_SUCCESSFUL' => 'Successful',
  'LBL_REASS_BUTTON_RETURN' => 'Return',
  'LBL_REASS_CONFIRM_REASSIGN_TITLE' => 'Re-assign',
  'LBL_BASIC' => 'Inbound Setup',
  'LBL_FIND_OPTIMUM_KEY' => 'f',
  'LBL_FORCE' => 'Force Negative',
  'LBL_FORCE_DESC' => 'Some IMAP/POP3 servers require special switches. Check to force a negative switch when connecting (i.e., /notls)',
  'LBL_TEST_BUTTON_KEY' => 't',
  'LBL_EXTERNAL_AUTH_ONLY' => 'Authenticate this user only through',
  'LBL_ONLY' => 'Only',
  'LBL_PDF_PAGE_ORIENTATION_TEXT' => '',
  'LBL_PDF_MARGIN_HEADER_TEXT' => '',
  'LBL_PDF_MARGIN_FOOTER_TEXT' => '',
  'LBL_PDF_MARGIN_TOP_TEXT' => '',
  'LBL_PDF_MARGIN_BOTTOM_TEXT' => '',
  'LBL_PDF_MARGIN_LEFT_TEXT' => '',
  'LBL_PDF_MARGIN_RIGHT_TEXT' => '',
  'LBL_PDF_FONT_SIZE_MAIN_TEXT' => '',
  'LBL_PDF_FONT_SIZE_DATA_TEXT' => '',
  'LBL_LAST_ADMIN_NOTICE' => 'You have selected yourself. You cannot change the User Type or Status of yourself.',
  'LBL_EXCHANGE_SMTPSERVER' => 'Exchange Server:',
  'LBL_OK' => 'OK',
  'LBL_WIZARD_FINISH1' => 'What would you like to do next?',
  'LBL_WIZARD_FINISH2' => 'Start Using Sugar',
  'LBL_WIZARD_FINISH4' => 'Import data from external sources into the application.',
  'LBL_WIZARD_FINISH5' => 'Create Users',
  'LBL_WIZARD_FINISH6' => 'Create new user accounts for people to use to access the application.',
  'LBL_WIZARD_FINISH7' => 'View and Manage Application Settings',
  'LBL_WIZARD_FINISH8' => 'Manage advanced settings, including default application settings.',
  'LBL_WIZARD_FINISH10' => 'Use Studio to create and manage application fields and layouts.',
  'LBL_WIZARD_FINISH12' => 'Find training materials and classes that will help you get started as a system administrator or end user of the application.',
  'LBL_WIZARD_FINISH2DESC' => 'Go directly to the application Home page.',
  'LBL_CHECKMARK' => 'Checkmark',
  'LBL_OAUTH_TOKENS' => 'OAuth Tokens',
  'LBL_OAUTH_TOKENS_SUBPANEL_TITLE' => 'OAuth Access Tokens',
  'LBL_MODIFIED_USER_ID' => 'Modified User ID',
  'LBL_PHONE_HOME' => 'Phone Home',
  'LBL_PHONE_MOBILE' => 'Phone Mobile',
  'LBL_PHONE_WORK' => 'Phone Work',
  'LBL_PHONE_OTHER' => 'Phone Other',
  'LBL_PHONE_FAX' => 'Phone Fax',
  'LBL_PORTAL_ONLY' => 'Portal Only',
  'LBL_SHOW_ON_EMPLOYEES' => 'Display Employee Record',
  'LBL_IS_GROUP' => 'Is Group',
  'LBL_EXPORT_CREATED_BY' => 'Created By ID',
  'LBL_ASSIGN_TEAM' => 'Възлагане на екип',
  'LBL_DEFAULT_TEAM_TEXT' => 'Определете екип по подразбиране за нови записи.',
  'LBL_DEFAULT_TEAM' => 'Екип по подразбиране',
  'LBL_LIST_DESCRIPTION' => 'Описание',
  'LBL_MY_TEAMS' => 'Моите екипи',
  'LBL_PRIVATE_TEAM_FOR' => 'Персонален екип за',
  'LNK_EDIT_TABS' => 'Редактиране на табулатори',
  'NTC_REMOVE_TEAM_MEMBER_CONFIRMATION' => 'Сигурни ли сте, че искате да премахнете това членство на потребителя?',
  'LBL_TEAMS' => 'Екип',
  'LBL_TEAM_UPLINE_EXPLICIT' => 'Член',
  'LBL_DELETE_USER_CONFIRM' => 'Служителита са също и потребители на системата.<br />Изтриването на запис на служителите ще изтрие записа на потребителите, и потребителите вече няма да имат достъп до приложението.<br />Искате ли да продължите с изтриването на този запис?',
  'LBL_DELETE_GROUP_CONFIRM' => 'Сигурни ли сте, че искате да изтриете този Групов потребител? Натиснете OK, за да изтриете записа за потребителя. Ще имате възможност да посочите нов отговорник за записите, чиито отговорник е изтритият потребител.',
  'LBL_DELETE_PORTAL_CONFIRM' => 'Сигурни ли сте, че искате да изтриете този потребител на Портала? Натиснете OK, за да изтриете записа за потребителя.',
  'LNK_IMPORT_USERS' => 'Импортиране на потребители',
  'ERR_DELETE_RECORD' => 'Трябва да определите номер, за да изтриете този запис.',
  'ERR_EMAIL_INCORRECT' => 'Посочете валиден адрес на електронна поща, на който да бъде изпратена генерираната автоматично парола.',
  'ERR_EMAIL_NO_OPTS' => 'Не са намерени оптимални настройки за Входяща поща.',
  'ERR_ENTER_CONFIRMATION_PASSWORD' => 'Моля, въведете потвърждение на новата си парола.',
  'ERR_ENTER_NEW_PASSWORD' => 'Моля, въведете новата си парола.',
  'ERR_ENTER_OLD_PASSWORD' => 'Моля, въведете старата си парола.',
  'ERR_IE_FAILURE1' => '[За връщане, натиснете тук]',
  'ERR_IE_FAILURE2' => 'Грешка при свързване.  Моля, проверете настройките и опитайте отново.',
  'ERR_IE_MISSING_REQUIRED' => '"Липсва задължителна информация в настройки на Входяща поща.n  Моля, проверете настройките и опитайте отново.nnАко не сте определили настройки за Входяща поща, моля, оставете полетата непопълнени."',
  'ERR_INVALID_PASSWORD' => 'Въвели сте грешен потребител или парола.',
  'ERR_NO_LOGIN_MOBILE' => 'Първоначалното влизане за работа с приложението изключва използването на мобилен браузър за достъп и следва да се осъществи в нормален режим. Моля, използвайте друг браузър или натиснете върху препратката долу за преход в нормален режим. Извиняваме се за причинените неудобства.',
  'ERR_LAST_ADMIN_1' => 'Име на потребителя "',
  'ERR_LAST_ADMIN_2' => '" е последен потребител с администраторски права. Поне един потребител трябва да има администраторски права.',
  'ERR_PASSWORD_CHANGE_FAILED_1' => 'Изменението на потребителската парола е неуспешно за',
  'ERR_PASSWORD_CHANGE_FAILED_2' => 'неуспешно.  Трябва да има нова парола.',
  'ERR_PASSWORD_INCORRECT_OLD_1' => 'Грешна стара парола за потребител',
  'ERR_PASSWORD_INCORRECT_OLD_2' => '. Въведете паролата отново.',
  'ERR_PASSWORD_MISMATCH' => 'Несъвпадение на потребителските пароли.',
  'ERR_PASSWORD_USERNAME_MISSMATCH' => 'Трябва да посочите валиден Потребител и адрес за електронна поща.',
  'ERR_PASSWORD_LINK_EXPIRED' => 'Линкът е вече не е валиден, моля генерирайте нов',
  'ERR_REENTER_PASSWORDS' => 'Моля, въведете паролата си още веднъж. Стойностите на "нова парола" и "потвърждение на парола" не съвпадат.',
  'ERR_REPORT_LOOP' => 'Намерено е зацикляне в йерархичната структура. Потребителят не може да докладва сам на себе си, както и началниците не могат да му се отчитат.',
  'ERR_RULES_NOT_MET' => 'Въведенета парола не отговаря на зададените системни критерии.  Моля опитайте отново.',
  'ERR_USER_INFO_NOT_FOUND' => 'Не е намерена информация за потребителя',
  'ERR_USER_NAME_EXISTS_1' => 'Потребителското име',
  'ERR_USER_NAME_EXISTS_2' => 'вече съществува.	Не се допуска дублиране на имената на потребителите.	Въведете уникално потребителско име.',
  'ERR_USER_IS_LOCKED_OUT' => 'Потребителят е блокиран от системата и не може да се идентифицира с неговата/нейната съществуваща парола.',
  'LBL_PASSWORD_SENT' => 'Паролата е променена',
  'LBL_CANNOT_SEND_PASSWORD' => 'Паролата не може да бъде изпратена',
  'ERR_EMAIL_NOT_SENT_ADMIN' => 'Системата не може да изпълни заявката. Моля проверете:',
  'ERR_SMTP_URL_SMTP_PORT' => 'URL и Порт на SMTP сървъра',
  'ERR_SMTP_USERNAME_SMTP_PASSWORD' => 'SMTP потребител и парола',
  'ERR_SERVER_SMTP_EMPTY' => 'Системата не може да изпрати електронна поща на потребителя. Моля проверете настройките в секция Настройка на електронна поща.',
  'LBL_ADDRESS_CITY' => 'Град',
  'LBL_ADDRESS_COUNTRY' => 'Държава',
  'LBL_ADDRESS_INFORMATION' => 'Адресна информация',
  'LBL_ADDRESS_POSTALCODE' => 'Пощенски код',
  'LBL_ADDRESS_STATE' => 'Област',
  'LBL_ADDRESS_STREET' => 'Улица',
  'LBL_ADDRESS' => 'Адрес',
  'LBL_ADMIN_USER' => 'Системен администратор',
  'LBL_ADMIN_DESC' => 'Потребителят може да получи достъп до страницата за администрация на всички записи, независимо от екипа.',
  'LBL_REGULAR_DESC' => 'Потребителите имат достъп до модули и записи в базата.',
  'LBL_ADMIN' => 'Администратор',
  'LBL_ADVANCED' => 'Настройки',
  'LBL_ANY_ADDRESS' => 'Адрес:',
  'LBL_ANY_EMAIL' => 'Електронна поща',
  'LBL_ANY_PHONE' => 'Телефон',
  'LBL_BUTTON_CREATE' => 'Създай',
  'LBL_BUTTON_EDIT' => 'Редактиране',
  'LBL_CALENDAR_OPTIONS' => 'Настройки на календар',
  'LBL_CHANGE_PASSWORD' => 'Смяна на парола',
  'LBL_CHANGE_SYSTEM_PASSWORD' => 'Моля, въведете нова парола.',
  'LBL_CHANGE_PASSWORD_TITLE' => 'Парола',
  'LBL_CHOOSE_A_KEY' => 'Изберете парола за недопускане на неправомерно публикуване на Вашия календар',
  'LBL_CHOOSE_WHICH' => 'Избор на показваните табулатори',
  'LBL_CITY' => 'Град',
  'LBL_CLEAR_BUTTON_TITLE' => 'Изчисти',
  'LBL_CONFIRM_PASSWORD' => 'Потвърждение на паролата',
  'LBL_CONFIRM_REGULAR_USER' => 'Типът на потребителя е променен от Системен администратор на Потребител на системата.  След запазване на промените потребителя няма да разполага с администраторски права.nnНатиснете “OK',
  'LBL_COUNTRY' => 'Държава',
  'LBL_CURRENCY_TEXT' => 'Задаване на текуща валута',
  'LBL_CURRENCY' => 'Валута',
  'LBL_CURRENCY_EXAMPLE' => 'Пример за показване на валута',
  'LBL_CURRENCY_SIG_DIGITS' => 'Цифри след десетичния знак за валута',
  'LBL_CURRENCY_SIG_DIGITS_DESC' => 'Задаване на броя показвани цифри след десетичния знак за валута',
  'LBL_NUMBER_GROUPING_SEP' => 'Разделител за хилядите',
  'LBL_NUMBER_GROUPING_SEP_TEXT' => 'Знак за разделяне на хилядите',
  'LBL_DECIMAL_SEP' => 'Десетичен знак',
  'LBL_DECIMAL_SEP_TEXT' => 'Десетичен знак',
  'LBL_FDOW' => 'Начало на седмицата',
  'LBL_FDOW_TEXT' => 'Първи ден от седмицата показван в седмичен, месечен и годишен календар',
  'LBL_DATE_FORMAT_TEXT' => 'Задаване на формат за показване на дати',
  'LBL_DATE_FORMAT' => 'Формат на дата',
  'LBL_DEFAULT_SUBPANEL_TITLE' => 'Потребители',
  'LBL_DEPARTMENT' => 'Отдел',
  'LBL_DESCRIPTION' => 'Описание',
  'LBL_DISPLAY_TABS' => 'Показвани табулатори',
  'LBL_DOWNLOADS' => 'Изтегляне на програми',
  'LBL_DST_INSTRUCTIONS' => '(+DST) индикира съобразяването с лятно часово време',
  'LBL_EDIT_TABS' => 'Редактиране на табулатори',
  'LBL_EDIT' => 'Редактиране',
  'LBL_USER_HASH' => 'Парола',
  'LBL_ACCOUNT_NAME' => 'Oрганизация',
  'LBL_USER_PREFERENCES' => 'Потребителски настройки',
  'LBL_EMAIL_OTHER' => 'Алтернативна електронна поща',
  'LBL_EMAIL' => 'Адрес на ел. поща',
  'LBL_EMAIL_CHARSET' => 'Знаков набор за изходящи писма',
  'LBL_EMAIL_EDITOR_OPTION' => 'Формат за изпращане',
  'LBL_EMAIL_GMAIL_DEFAULTS' => 'Настройки по подразбиране от Gmail',
  'LBL_EMAIL_LINK_TYPE' => 'Пощенски клиент',
  'LBL_EMAIL_LINK_TYPE_HELP' => '<b>Sugar Mail Client:</b> Потребителят изпраща електронни съобщения като използва клиента за електронна поща в SugarCRM.<br><b>External Mail Client:</b> Потребителят изпраща електронни съобщения, използвайки външен за системата клиент за електронна поща като Microsoft Outlook.',
  'LBL_EMAIL_NOT_SENT' => 'Системата не е в състояние да обработи заявката Ви. Моля, свържете се със системния администратор.',
  'LBL_EMAIL_PROVIDER' => 'Идентификация през сървъра за изходяща електронна поща',
  'LBL_EMAIL_SHOW_COUNTS' => 'Показване броя на съобщенията?',
  'LBL_EMAIL_SIGNATURE_ERROR1' => 'Въведете заглавие за този подпис.',
  'LBL_EMAIL_SMTP_SSL' => 'SSL криптиране на SMTP връзката',
  'LBL_EMPLOYEE_STATUS' => 'Статус',
  'LBL_EMPLOYEE_INFORMATION' => 'Служебна информация',
  'LBL_ERROR' => 'Грешка',
  'LBL_EXPORT_CHARSET' => 'Знаков набор при Импорт/Експорт',
  'LBL_EXPORT_CHARSET_DESC' => 'Определяне на знаков набор за работа.  Опцията се използва при импортиране на данни, изпращане на писма, експортиране в .csv формати, генериране на PDF и създаване на електронни визитки.',
  'LBL_EXPORT_DELIMITER' => 'Разделител при експортиране',
  'LBL_EXPORT_DELIMITER_DESC' => 'Задаване на символ(и) за разграничаване на данните при експортиране.',
  'LBL_FAX_PHONE' => 'Факс',
  'LBL_FAX' => 'Факс',
  'LBL_FIRST_NAME' => 'Име',
  'LBL_SYSTEM_GENERATED_PASSWORD' => 'Системно Генерирана Парола',
  'LBL_GENERATE_PASSWORD_BUTTON_LABEL' => 'Промяна на парола',
  'LBL_GENERATE_PASSWORD_BUTTON_TITLE' => 'Промяна на парола [Alt+G]',
  'LBL_GENERATE_PASSWORD' => 'Промяна на парола',
  'LBL_GROUP_DESC' => 'Груповият потребител се използва за възлагане към групова пощенска кутия и преразпределяне на записи към отделните потребители при използване функциите на Входяща поща.	Този потребител няма достъп чрез Sugar Suite уеб интерфейса.',
  'LBL_GROUP_USER_STATUS' => 'Групов потребител',
  'LBL_GROUP_USER' => 'Групов потребител',
  'LBL_HIDE_TABS' => 'Скрити табулатори',
  'LBL_HOME_PHONE' => 'Домашен телефон',
  'LBL_INBOUND_TITLE' => 'Информация',
  'LBL_IS_ADMIN' => 'е администратор:',
  'LBL_LANGUAGE' => 'Език',
  'LBL_LAST_NAME' => 'Фамилия',
  'LBL_LAST_NAME_SLASH_NAME' => 'Фамилия/Име',
  'LBL_LAYOUT_OPTIONS' => 'Настройки на подредби',
  'LBL_LDAP_AUTHENTICATION' => 'LDAP идентификация',
  'LBL_LIST_ACCEPT_STATUS' => 'Статус на поканата',
  'LBL_LIST_ADMIN' => 'Администриране',
  'LBL_LIST_DEPARTMENT' => 'Отдел',
  'LBL_LIST_EMAIL' => 'Електронна поща',
  'LBL_LIST_FORM_TITLE' => 'Потребители',
  'LBL_LIST_GROUP' => 'Група',
  'LBL_LIST_LAST_NAME' => 'Фамилия',
  'LBL_LIST_MEMBERSHIP' => 'Членство',
  'LBL_LIST_NAME' => 'Име',
  'LBL_LIST_PRIMARY_PHONE' => 'Телефон',
  'LBL_LIST_PASSWORD' => 'Парола',
  'LBL_LIST_STATUS' => 'Статус',
  'LBL_LIST_TITLE' => 'Длъжност',
  'LBL_LIST_USER_NAME' => 'Потребител',
  'LBL_LOCALE_DEFAULT_NAME_FORMAT' => 'Формат на имена',
  'LBL_LOCALE_DESC_FIRST' => '[Име]',
  'LBL_LOCALE_DESC_LAST' => '[Фамилия]',
  'LBL_LOCALE_DESC_SALUTATION' => '[Обръщение]',
  'LBL_LOCALE_DESC_TITLE' => '[Длъжност]',
  'LBL_PICTURE_FILE' => 'Снимка',
  'LBL_LOCALE_EXAMPLE_NAME_FORMAT' => 'Пример',
  'LBL_LOCALE_NAME_FORMAT_DESC' => 'Задаване на формат за изписване на имена.',
  'LBL_LOCALE_NAME_FORMAT_DESC_2' => '<i>"s" Обръщение<br>"f" Име<br>"l" Фамилия</i>',
  'LBL_SAVED_SEARCH' => 'Съхранени критерии за търсене',
  'LBL_LOGIN_BUTTON_LABEL' => 'Вход',
  'LBL_LOGIN_BUTTON_TITLE' => 'Вход [Alt+L]',
  'LBL_LOGIN_WELCOME_TO' => 'Добре дошли',
  'LBL_LOGIN_OPTIONS' => 'Опции',
  'LBL_LOGIN_FORGOT_PASSWORD' => 'Забравена парола?',
  'LBL_LOGIN_SUBMIT' => 'Изпрати',
  'LBL_LOGIN_ATTEMPTS_OVERRUN' => 'Недопустимо много неуспешни опити за идентификация.',
  'LBL_LOGIN_LOGIN_TIME_ALLOWED' => 'Можете да опитате да се идентифицирате отново',
  'LBL_LOGIN_LOGIN_TIME_DAYS' => 'дни.',
  'LBL_LOGIN_LOGIN_TIME_HOURS' => 'ч.',
  'LBL_LOGIN_LOGIN_TIME_MINUTES' => 'мин.',
  'LBL_LOGIN_LOGIN_TIME_SECONDS' => 'сек.',
  'LBL_LOGIN_ADMIN_CALL' => 'Свържете се със Системния администратор.',
  'LBL_MAIL_FROMADDRESS' => 'Адрес за отговор',
  'LBL_MAIL_FROMNAME' => 'Отговор до',
  'LBL_MAIL_OPTIONS_TITLE' => 'Настройки на електронна поща',
  'LBL_MAIL_SENDTYPE' => 'Начин на предаване',
  'LBL_MAIL_SMTPAUTH_REQ' => 'Рестриктиран достъп?',
  'LBL_MAIL_SMTPPORT' => 'Порт:',
  'LBL_MAILMERGE_TEXT' => 'Активиране на параметъра за сливане на писма. (Параметърът следва да бъде зададен и от администратора при конфигуриране на настройките)',
  'LBL_MAILMERGE' => 'Сливане на писма',
  'LBL_MAX_TAB' => 'Брой табулатори',
  'LBL_MAX_TAB_DESCRIPTION' => 'Задаване на максимален брой табулатори за показване в главното меню.',
  'LBL_MAX_SUBTAB' => 'Брой подтабулатори',
  'LBL_MAX_SUBTAB_DESCRIPTION' => 'Задаване на максимален брой подстраници за показване към отделен табулатор в главното меню.',
  'LBL_MESSENGER_ID' => 'IM име',
  'LBL_MESSENGER_TYPE' => 'IM тип',
  'LBL_MOBILE_PHONE' => 'Мобилен телефон',
  'LBL_MODIFIED_BY' => 'Модифицирано от',
  'LBL_CREATED_BY_NAME' => 'Създадено от',
  'LBL_MODIFIED_BY_ID' => 'Модифицирано от',
  'LBL_MODULE_NAME' => 'Потребители',
  'LBL_MODULE_TITLE' => 'Потребители',
  'LBL_NAME' => 'Пълно име',
  'LBL_SIGNATURE_NAME' => 'Име',
  'LBL_NAVIGATION_PARADIGM' => 'Навигация при работа с модули',
  'LBL_NAVIGATION_PARADIGM_DESCRIPTION' => 'Преглед на модули чрез групиране по тематични области или като табулатори за всеки отделен модул.',
  'LBL_USE_GROUP_TABS' => 'Групирани модули',
  'LBL_NEW_FORM_TITLE' => 'Нов потребител',
  'LBL_NEW_PASSWORD' => 'Нова парола',
  'LBL_NEW_PASSWORD1' => 'Парола',
  'LBL_NEW_PASSWORD2' => 'Потвърждение на паролата',
  'LBL_NEW_USER_PASSWORD_1' => 'Паролата беше променена успешно.',
  'LBL_NEW_USER_PASSWORD_2' => 'Изпратена е електронна поща със системно-генерираната парола до потребителя.',
  'LBL_NEW_USER_PASSWORD_3' => 'Паролата беше създадена успешно.',
  'LBL_NEW_USER_BUTTON_LABEL' => 'Нов потребител',
  'LBL_NEW_USER_BUTTON_TITLE' => 'Нов потребител [Alt+N]',
  'LBL_NOTES' => 'Бележки',
  'LBL_OFFICE_PHONE' => 'Телефон',
  'LBL_OLD_PASSWORD' => 'Стара парола',
  'LBL_OTHER_EMAIL' => 'Алтернативна електронна поща',
  'LBL_OTHER_PHONE' => 'Алтернативен телефон',
  'LBL_OTHER' => 'Други',
  'LBL_PASSWORD' => 'Парола',
  'LBL_PASSWORD_GENERATED' => 'Генерирана е нова парола',
  'LBL_PASSWORD_EXPIRATION_LOGIN' => 'Валидността на Вашата парола е изтекла. Моля въведете нова парола.',
  'LBL_PASSWORD_EXPIRATION_GENERATED' => 'Вашата парола е системно-генерирана',
  'LBL_PASSWORD_EXPIRATION_TIME' => 'Валидността на Вашата парола е изтекла. Моля въведете нова парола.',
  'LBL_PSW_MODIFIED' => 'password last changed',
  'LBL_PHONE' => 'Телефон',
  'LBL_PICK_TZ_WELCOME' => 'Добре дошли в Sugar Suite.',
  'LBL_PICK_TZ_DESCRIPTION' => 'Преди да продължите, моля, изберете часови пояс от менюто долу. Евентуална бъдеща промяна на часовия пояс може да се осъществи от меню "Персонални настройки".',
  'LBL_PORTAL_ONLY_DESC' => 'Използва се за портала на SugarCRM. Този тип потребител не може да прави опити за идентификация през стандартния уеб интерфейс на системата.',
  'LBL_PORTAL_ONLY_USER' => 'Портален потребител',
  'LBL_POSTAL_CODE' => 'Пощенски код',
  'LBL_PRIMARY_ADDRESS' => 'Основен адрес',
  'LBL_PROMPT_TIMEZONE_TEXT' => 'Задаване на часови пояс от потребителя при първоначално влизане в системата.',
  'LBL_PROMPT_TIMEZONE' => 'Потвърждение от потребителя',
  'LBL_PROVIDE_USERNAME_AND_EMAIL' => 'Въведете Потребител и Адрес на електронна поща.',
  'LBL_PUBLISH_KEY' => 'Публичен ключ',
  'LBL_RECAPTCHA_INVALID_PRIVATE_KEY' => 'Невалиден частен ключ за протокола Recaptcha',
  'LBL_RECAPTCHA_UNKNOWN' => 'Грешка в протокола Recaptcha',
  'LBL_RECEIVE_NOTIFICATIONS_TEXT' => 'Получаване на писмо, когато Ви се присвои запис.',
  'LBL_RECEIVE_NOTIFICATIONS' => 'Уведомление при присвоен запис',
  'LBL_REGISTER' => 'Нов потребител? Моля, регистрирайте се',
  'LBL_REGULAR_USER' => 'Потребител на системата',
  'LBL_REMINDER_TEXT' => 'Визуализиране на диалогов прозорец за напомняне за наближаващи срещи или обаждания',
  'LBL_REMINDER' => 'Визуализиране на диалогов прозорец за напомняне?',
  'LBL_REMOVED_TABS' => 'Табулатори, премахнати от Администратора',
  'LBL_REPORTS_TO_NAME' => 'Докладва на',
  'LBL_REPORTS_TO' => 'Докладва на',
  'LBL_REPORTS_TO_ID' => 'Докладва на:',
  'LBL_REQUEST_SUBMIT' => 'Вашата заявка е подадена.',
  'LBL_RESET_TO_DEFAULT' => 'Връщане към стандартни настройки',
  'LBL_RESET_PREFERENCES' => 'Настройки по подразбиране',
  'LBL_RESET_PREFERENCES_WARNING' => 'Сигурни ли сте, че искате да върнете стойностите по подразбиране за настройките на потребителя?',
  'LBL_RESET_PREFERENCES_WARNING_USER' => 'Сигурни ли сте, че искате да върнете стойностите по подразбиране за настройките на потребителя?',
  'LBL_RESET_HOMEPAGE' => 'Подредба на начална страница по подразбиране',
  'LBL_RESET_DASHBOARD' => 'Електронно табло',
  'LBL_RESET_HOMEPAGE_WARNING' => 'Сигурни ли сте, че искате да върнете стойностите по подразбиране за начална страница на потребителя?',
  'LBL_RESET_HOMEPAGE_WARNING_USER' => 'Сигурни ли сте, че искате да върнете стойностите по подразбиране за начална страница на потребителя?',
  'LBL_SALUTATION' => 'Поздрав',
  'LBL_ROLES_SUBPANEL_TITLE' => 'Роли',
  'LBL_SEARCH_FORM_TITLE' => 'Търсене в модул "Потребители"',
  'LBL_SEARCH_URL' => 'Търсене на местоположение',
  'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'Избери маркираните потребители',
  'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'Избери маркираните потребители',
  'LBL_SETTINGS_URL_DESC' => 'Използване на този адрес при задаване на настройки на Sugar Plug-in за Microsoft&reg; Outlook&reg; и Sugar Plug-in за Microsoft&reg; Word&reg;.',
  'LBL_SETTINGS_URL' => 'Адрес',
  'LBL_SIGNATURE' => 'Подпис',
  'LBL_SIGNATURE_HTML' => 'HTML подпис',
  'LBL_SIGNATURE_DEFAULT' => 'Използване на подпис?',
  'LBL_SIGNATURE_PREPEND' => 'Използване на подпис?',
  'LBL_SIGNATURES' => 'Подписи',
  'LBL_STATE' => 'Област',
  'LBL_STATUS' => 'Статус',
  'LBL_SUBPANEL_LINKS' => 'Препратки към панели със свързани записи',
  'LBL_SUBPANEL_LINKS_DESCRIPTION' => 'Във формите за визуализиране на детайли, да се показва лента с препратки към отделните панели със свързани записи.',
  'LBL_SUBPANEL_TABS' => 'Групиране на панели със свързани записи',
  'LBL_SUBPANEL_TABS_DESCRIPTION' => 'Във формите за визуализиране на детайли, панелите със свързани записи да се групират по тематични области.',
  'LBL_SUGAR_LOGIN' => 'е потребител на Sugar:',
  'LBL_SUPPORTED_THEME_ONLY' => 'Важи за визуализации, поддържащи такава опция.',
  'LBL_SWAP_LAST_VIEWED_DESCRIPTION' => 'Визуализация на секцията Разгледани записи като странично ляво меню.',
  'LBL_SWAP_SHORTCUT_DESCRIPTION' => 'Визуализация на секцията Меню като лента в горната част на страницата.',
  'LBL_SWAP_LAST_VIEWED_POSITION' => 'Визуализация на последно разгледани записи',
  'LBL_SWAP_SHORTCUT_POSITION' => 'Визуализация на секция Меню',
  'LBL_TAB_TITLE_EMAIL' => 'Настройки на електронна поща',
  'LBL_TAB_TITLE_USER' => 'Потребителски настройки',
  'LBL_THEME' => 'Теми',
  'LBL_THEME_COLOR' => 'Цвят',
  'LBL_THEME_FONT' => 'Фон',
  'LBL_TIME_FORMAT_TEXT' => 'Задаване на формат за показване на часа',
  'LBL_TIME_FORMAT' => 'Формат на часа',
  'LBL_TIMEZONE_DST_TEXT' => 'Осъществява преход към лятно време',
  'LBL_TIMEZONE_DST' => 'Преход към лятно време',
  'LBL_TIMEZONE_TEXT' => 'Задаване на часови пояс',
  'LBL_TIMEZONE' => 'Часова зона',
  'LBL_TITLE' => 'Длъжност',
  'LBL_USE_REAL_NAMES' => 'Показване на пълно име',
  'LBL_USE_REAL_NAMES_DESC' => 'Изписване пълно име на потребителя вместо потребителско име',
  'LBL_USER_INFORMATION' => 'Профил на потребителя',
  'LBL_USER_LOCALE' => 'Регионални настройки',
  'LBL_USER_NAME' => 'Потребител',
  'LBL_USER_SETTINGS' => 'Потребителски настройки',
  'LBL_USER_TYPE' => 'Тип потребител',
  'LBL_USER_ACCESS' => 'Достъп',
  'LBL_USER' => 'Потребители',
  'LBL_WORK_PHONE' => 'Телефон',
  'LBL_YOUR_PUBLISH_URL' => 'Публикуване на',
  'LNK_NEW_USER' => 'Създаване на потребител',
  'LNK_NEW_PORTAL_USER' => 'Създаване на Портален потребител',
  'LNK_NEW_GROUP_USER' => 'Създаване на потребителска група',
  'LNK_USER_LIST' => 'Списък с потребители',
  'LNK_REASSIGN_RECORDS' => 'Промяна на отговорници',
  'LBL_PROSPECT_LIST' => 'Целева група',
  'LBL_EMAILS' => 'Електронна поща',
  'LBL_USER_NAME_FOR_ROLE' => 'Потребители/Екипи/Роли',
  'LBL_SESSION_EXPIRED' => 'Вие сте влезли, защото вашата сесия е изтекла.',
  'LBL_TOO_MANY_CONCURRENT' => 'Настоящата сесия е терминирана след стартиране на нова за потребител със същото име.',
  'LBL_REASS_SCRIPT_TITLE' => 'Record Reassignment',
  'LBL_REASS_DESC_PART1' => 'Всички записи от избраните модули ще бъдат назначени към посочения от Вас потребител.',
  'LBL_REASS_DESC_PART2' => 'Изберете модулите, за които да можете да изпълнявате автоматизирани процеси, изпращате уведомления и следите промените при промяна на отговорник. Натиснете Следваща стъпка, за да продължите с процеса на промяна на отговорника. Натиснете Restart, за да започнете процеса от начало.',
  'LBL_REASS_STEP2_DESC' => 'The teams listed below were available in the from user&#39;s team, but not in the to user&#39;s team. All records in the From User&#39;s team will not be visible in the To User team unless the team values are mapped.',
  'LBL_REASS_USER_FROM' => 'От потребител:',
  'LBL_REASS_USER_TO' => 'Към потребител:',
  'LBL_REASS_TEAM_TO' => 'Възлагане на екип:',
  'LBL_REASS_TEAMS_GOOD_MSG' => 'The To user has access to all of the From user&#39;s teams. No mapping necessary. Redirecting to the next page in 5 seconds.',
  'LBL_REASS_MOD_REASSIGN' => 'Модули за включване в операцията:',
  'LBL_REASS_FILTERS' => 'Филтри',
  'LBL_REASS_NOTES_TITLE' => 'Бележки:',
  'LBL_REASS_NOTES_THREE' => 'Even if you don&#39;t include Auditing, the Date Modified and Modified By are still updated accordingly.',
  'LBL_REASS_NOTES_ONE' => 'Assigning records to yourself will not trigger assignment notifications.',
  'LBL_REASS_NOTES_TWO' => 'Including Workflow, Notifications, and Audit tracking in the reassignment is significantly slower.',
  'LBL_REASS_VERBOSE_OUTPUT' => 'Verbose output (applies only to reassignment tasks that include workflows)',
  'LBL_REASS_VERBOSE_HELP' => 'Изберете тази опция, за да видите подробна информация за преназначаване на задачи, които включват работни потоци.',
  'LBL_REASS_FROM' => 'от',
  'LBL_REASS_TO' => '-',
  'LBL_REASS_TEAM_SET_TO' => 'and team was set to',
  'LBL_REASS_FAILED_SAVE' => 'Грешка при съхранение на записа',
  'LBL_REASS_THE_FOLLOWING' => 'Следните',
  'LBL_REASS_HAVE_BEEN_UPDATED' => 'бяха актуализирани:',
  'LBL_REASS_FAILED' => 'Завършил неуспешно',
  'LBL_REASS_BUTTON_SUBMIT' => 'Изпрати',
  'LBL_REASS_BUTTON_CLEAR' => 'Изчисти',
  'LBL_REASS_BUTTON_CONTINUE' => 'Продължи',
  'LBL_REASS_BUTTON_REASSIGN' => 'Преназначаване',
  'LBL_REASS_BUTTON_GO_BACK' => 'Отмени',
  'LBL_REASS_BUTTON_RESTART' => 'Започни отначало',
  'LBL_REASS_CONFIRM_REASSIGN' => 'Сигурни ли сте, че искате да назначите нов отговорник за записите на този потребител?',
  'LBL_REASS_CONFIRM_REASSIGN_YES' => 'Да',
  'LBL_REASS_CONFIRM_REASSIGN_NO' => 'Не',
  'ERR_REASS_SELECT_MODULE' => 'Моля, изберете най-малко един модул.',
  'ERR_REASS_DIFF_USERS' => 'Важно: потребителят за назначаване следва да бъде различен от текущия отговорник на записите.',
  'LBL_APPLY_OPTIMUMS' => 'Определяне на оптимални настройки',
  'LBL_ASSIGN_TO_USER' => 'Отговорник',
  'LBL_CERT_DESC' => 'Force validation of the mail server&#39;s Security Certificate - do not use if self-signing.',
  'LBL_CERT' => 'Валидиране на сертификата',
  'LBL_FIND_OPTIMUM_MSG' => '<br>Определяне на оптимални настройки за свързване.',
  'LBL_FIND_OPTIMUM_TITLE' => 'Определяне на оптимална конфигурация',
  'LBL_FOUND_OPTIMUM_MSG' => '<br>Намерени са оптимални настройки.	За задаване на настройките за пощенската Ви кутия, натиснете бутона долу.',
  'LBL_EMAIL_INBOUND_TITLE' => 'Настройки на Входяща поща',
  'LBL_EMAIL_OUTBOUND_TITLE' => 'Настройки на Изходяща поща',
  'LBL_LOGIN' => 'Потребител',
  'LBL_MAILBOX_DEFAULT' => 'Входящи',
  'LBL_MAILBOX_SSL_DESC' => 'Използване на SSL при свързване. При възникване на проблеми се уверете, че PHP инсталцията е с включена опция "--with-imap-ssl" .',
  'LBL_MAILBOX' => 'Папка',
  'LBL_MAILBOX_TYPE' => 'Възможни действия',
  'LBL_MARK_READ_NO' => 'Маркиране на писмата като изтрити след импортиране',
  'LBL_MARK_READ_YES' => 'Запазване на писмата на сървъра след импортиране',
  'LBL_MARK_READ_DESC' => 'Маркиране на писмата като прочетени на пощенския сървър при импортиране; не се изтриват от сървъра.',
  'LBL_MARK_READ' => 'Запазване на писмата на сървъра',
  'LBL_ONLY_SINCE_NO' => 'Не. Проверка за всички налични писма на пощенския сървър.',
  'LBL_ONLY_SINCE_YES' => 'Да.',
  'LBL_ONLY_SINCE_DESC' => 'При използване на POP3, PHP не разполага с опция за филтриране на нови/непрочетени съобщения.	Тази функция позволява проверка само на съобщения, получени СЛЕД последната проверка на пощенската кутия.	Това ще подобри функционирането на системата, в случай че сървърът за електронна поща не поддържа IMAP.',
  'LBL_ONLY_SINCE' => 'Само нови съобщения',
  'LBL_PORT' => 'Порт на пощенски сървър',
  'LBL_SERVER_OPTIONS' => 'Допълнителни настройки',
  'LBL_SERVER_TYPE' => 'Протокол за получаване',
  'LBL_SERVER_URL' => 'Сървър за електронна поща',
  'LBL_SSL' => 'Използване на SSL',
  'LBL_SSL_DESC' => 'Използване на SSL при свързване с пощенски сървър.',
  'LBL_TEST_BUTTON_TITLE' => 'Проверка [Alt+T]',
  'LBL_TEST_SETTINGS' => 'Проверка на настройките',
  'LBL_TEST_SUCCESSFUL' => 'Връзката е осъществена успешно.',
  'LBL_TLS_DESC' => 'Използване на TLS при свързване с пощенски сървър - използване само при поддържане на този протокол от пощенския Ви сървър.',
  'LBL_TLS' => 'Използване на TLS',
  'LBL_TOGGLE_ADV' => 'Показване на допълнителни настройки',
  'LBL_OWN_OPPS' => 'Изключване на възможности',
  'LBL_OWN_OPPS_DESC' => 'Опцията се маркира, ако на потребителя няма да се възлагат възможности. Валидна е за потребителите с мениджърски функции, които не са въвлечени в процеса на продажби. Използва се за модул "Прогнози".',
  'LBL_LDAP_ERROR' => 'LDAP грешка: Моля, свържете се със системния администратор',
  'LBL_LDAP_EXTENSION_ERROR' => 'LDAP грешка: Разширенията не бяха заредени',
  'LBL_USER_HOLIDAY_SUBPANEL_TITLE' => 'Почивни дни на потребителя',
  'LBL_RESOURCE_NAME' => 'Име',
  'LBL_RESOURCE_TYPE' => 'Тип',
  'LBL_PDF_SETTINGS' => 'PDF настройки',
  'LBL_PDF_PAGE_FORMAT' => 'Формат на страницата',
  'LBL_PDF_PAGE_FORMAT_TEXT' => 'Използван формат на страници',
  'LBL_PDF_PAGE_ORIENTATION' => 'Ориентация на страницата',
  'LBL_PDF_PAGE_ORIENTATION_P' => 'Портрет',
  'LBL_PDF_PAGE_ORIENTATION_L' => 'Лендскейп',
  'LBL_PDF_MARGIN_HEADER' => 'Отстояние за "Header"',
  'LBL_PDF_MARGIN_FOOTER' => 'Отстояние за "Footer"',
  'LBL_PDF_MARGIN_TOP' => 'Горно отстояние',
  'LBL_PDF_MARGIN_BOTTOM' => 'Долно отстояние',
  'LBL_PDF_MARGIN_LEFT' => 'Ляво отстояние',
  'LBL_PDF_MARGIN_RIGHT' => 'Дясно отстояние',
  'LBL_PDF_FONT_NAME_MAIN' => 'Шрифт за "Header" и "Body"',
  'LBL_PDF_FONT_NAME_MAIN_TEXT' => 'Избраният шрифт ще бъде използван за текста в "header" и "body" на PDF документа',
  'LBL_PDF_FONT_SIZE_MAIN' => 'Размер на основен шрифт',
  'LBL_PDF_FONT_NAME_DATA' => 'Врифт за "Footer"',
  'LBL_PDF_FONT_NAME_DATA_TEXT' => 'Избраният шрифт ще бъде използван за текста в "footer" на PDF документа',
  'LBL_PDF_FONT_SIZE_DATA' => 'Размер на шрифта за данни',
  'LBL_MAIL_SMTPUSER' => 'Потребител:',
  'LBL_MAIL_SMTPPASS' => 'Парола:',
  'LBL_MAIL_SMTPSERVER' => 'Сървър за електронна поща:',
  'LBL_SMTP_SERVER_HELP' => 'Този SMTP сървър не може да бъде използван за изходяща поща. Въведете потребител и парола за идентификация, за да можете да използвате сървъра.',
  'LBL_MISSING_DEFAULT_OUTBOUND_SMTP_SETTINGS' => 'Администраторът не е конфигурирал изпращането на изходяща електронна поща през системата.  Тестово писмо не може да бъде изпратено.',
  'LBL_MAIL_SMTPTYPE' => 'Тип на SMTP сървъра:',
  'LBL_MAIL_SMTP_SETTINGS' => 'Настройка на SMTP сървър за електронна поща',
  'LBL_CHOOSE_EMAIL_PROVIDER' => 'Изберете доставчик на електронна поща:',
  'LBL_YAHOOMAIL_SMTPPASS' => 'Yahoo! Парола:',
  'LBL_YAHOOMAIL_SMTPUSER' => 'Yahoo! Идентификатор:',
  'LBL_GMAIL_SMTPPASS' => 'Gmail парола:',
  'LBL_GMAIL_SMTPUSER' => 'Gmail адрес за ел. поща:',
  'LBL_EXCHANGE_SMTPPASS' => 'Exchange парола:',
  'LBL_EXCHANGE_SMTPUSER' => 'Exchange потребител:',
  'LBL_EXCHANGE_SMTPPORT' => 'Exchange порт:',
  'LBL_CANCEL' => 'Отмени',
  'LBL_DELETE_USER' => 'Изтриване на потребител',
  'LBL_WIZARD_TITLE' => 'Електронен помощник',
  'LBL_WIZARD_WELCOME_TAB' => 'Потребител:',
  'LBL_WIZARD_WELCOME_TITLE' => 'Добре дошли в Sugar!',
  'LBL_WIZARD_WELCOME' => 'Натиснете <b>Продължи</b> за да конфигурирате базови персонални настройки на SugarCRM.',
  'LBL_WIZARD_WELCOME_NOSMTP' => 'Натиснете <b>Продължи</b> за да конфигурирате базови персонални настройки на SugarCRM.',
  'LBL_WIZARD_NEXT_BUTTON' => 'Продължи >',
  'LBL_WIZARD_BACK_BUTTON' => '< Върни',
  'LBL_WIZARD_SKIP_BUTTON' => 'Пропусни',
  'LBL_WIZARD_FINISH_BUTTON' => 'Край',
  'LBL_WIZARD_FINISH_TAB' => 'Край',
  'LBL_WIZARD_FINISH_TITLE' => 'Вече можете да използвате Sugar!',
  'LBL_WIZARD_FINISH' => 'Click <b>Finish</b> below to save your settings and to begin using Sugar. For more information on using Sugar:<br /><br /><br /><table cellpadding=0 cellspacing=0><br /><tr><td><!--not_in_theme!--><img src=include/images/university.png style="margin-right: 5px;"></td><td><a href="http://www.sugarcrm.com/university" target="_blank"><b>Sugar University</b></a><br>End-user and System Administrator Training and Resources</td></tr><br /><tr><td colspan=2><hr style="margin: 5px 0px;"></td></tr><br /><tr><td><!--not_in_theme!--><img src=include/images/docs.png style="margin-right: 5px;"></td><td><a href="http://docs.sugarcrm.com/" target="_blank"><b>Documentation</b></a><br>Product Guides and Release Notes</td></tr><br /><tr><td colspan=2><hr style="margin: 5px 0px;"></td></tr><br /><tr><td><!--not_in_theme!--><img src=include/images/kb.png style="margin-right: 5px;"></td><td><a href="http://kb.sugarcrm.com/" target="_blank"><b>Knowledge Base</b></a><br>Tips from SugarCRM Support for performing common tasks and processes in Sugar</td></tr><br /><tr><td colspan=2><hr style="margin: 5px 0px;"></td></tr><br /><tr><td><!--not_in_theme!--><img src=include/images/forums.png style="margin-right: 5px;"></td><td><a href="http://www.sugarcrm.com/forums" target="_blank"><b>Forums</b></a><br>Forums dedicated to the Sugar Community to discuss topics of interest with each other and with SugarCRM Developers</td></tr><br /></table>',
  'LBL_WIZARD_FINISH3' => 'Import Data',
  'LBL_WIZARD_FINISH9' => 'Configure the Application',
  'LBL_WIZARD_FINISH11' => 'Visit Sugar University',
  'LBL_WIZARD_FINISH14' => 'Documentation',
  'LBL_WIZARD_FINISH15' => 'Product Guides and Release Notes',
  'LBL_WIZARD_FINISH16' => 'Knowledge Base',
  'LBL_WIZARD_FINISH17' => 'Tips from SugarCRM Support for performing common tasks and processes in Sugar',
  'LBL_WIZARD_FINISH18' => 'Forums',
  'LBL_WIZARD_FINISH19' => 'Forums dedicated to the Sugar Community to discuss topics of interest with each other and with SugarCRM Developers',
  'LBL_WIZARD_PERSONALINFO' => 'Информация за текущия потребител',
  'LBL_WIZARD_LOCALE' => 'Регионални настройки',
  'LBL_WIZARD_SMTP' => 'Вашата електронна поща',
  'LBL_WIZARD_PERSONALINFO_DESC' => 'Моля предоставете информация за Вас. Тя ще бъде достъпна за останалите потребители на Sugar.<br />Полетата маркирани с <span class="required">*</span> са задължителни.',
  'LBL_WIZARD_LOCALE_DESC' => 'Изберете часова зона и формат на дати, валути и имена. Форматите са такива каквито искате да се появяват за Вас в Sugar.',
  'LBL_WIZARD_SMTP_DESC' => 'Посочете потребителско име и парола за пощенската Ви кутия за изходяща поща.',
  'LBL_EAPM_SUBPANEL_TITLE' => 'Профили в други приложения',
  'LBL_EDITLAYOUT' => 'Редактиране на подредби',
  'LBL_HELP' => 'Помощ',
  'LBL_THEMEPREVIEW' => 'Прегледай',
  'LBL_DATE_MODIFIED' => 'Модифицирано на',
  'LBL_DATE_ENTERED' => 'Въведено на',
  'LBL_DELETED' => 'Изтрити',
  'LBL_HIDEOPTIONS' => 'Скриване на опции',
  'LBL_SHOWOPTIONS' => 'Допълнителни опции',
);

