<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');


/*********************************************************************************
 * By installing or using this file, you are confirming on behalf of the entity
 * subscribed to the SugarCRM Inc. product ("Company") that Company is bound by
 * the SugarCRM Inc. Master Subscription Agreement (“MSA”), which is viewable at:
 * http://www.sugarcrm.com/master-subscription-agreement
 *
 * If Company is not bound by the MSA, then by installing or using this file
 * you are agreeing unconditionally that Company will be bound by the MSA and
 * certifying that you have authority to bind Company accordingly.
 *
 * Copyright (C) 2004-2013 SugarCRM Inc.  All rights reserved.
 ********************************************************************************/

	

$mod_strings = array (
  'ERR_DELETE_RECORD' => 'Трябва да определите номер, за да изтриете този запис.',
  'ERR_EMPLOYEE_NAME_EXISTS_1' => 'Име на служителя',
  'ERR_EMPLOYEE_NAME_EXISTS_2' => 'вече съществува.  Не се допуска дублиране на имената на служителите. Променете името на служителя така, че да няма дублиране.',
  'ERR_LAST_ADMIN_1' => 'Име на служителя "',
  'ERR_LAST_ADMIN_2' => '" е последен служител с администраторски права. Поне един служител трябва да има администраторски права.',
  'LBL_ADDRESS' => 'Адрес:',
  'LBL_ADDRESS_CITY' => 'Град',
  'LBL_ADDRESS_COUNTRY' => 'Държава',
  'LBL_ADDRESS_INFORMATION' => 'Адресна информация',
  'LBL_ADDRESS_POSTALCODE' => 'Пощенски код',
  'LBL_ADDRESS_STATE' => 'Област',
  'LBL_ADDRESS_STREET' => 'Улица',
  'LBL_ADMIN' => 'Администратор:',
  'LBL_ANY_ADDRESS' => 'Адрес:',
  'LBL_ANY_EMAIL' => 'Електронна поща:',
  'LBL_ANY_PHONE' => 'Телефон:',
  'LBL_AUTHENTICATE_ID' => 'Authentication Id',
  'LBL_CITY' => 'Град:',
  'LBL_COUNTRY' => 'Държава:',
  'LBL_CREATED_BY_NAME' => 'Създадено от',
  'LBL_CREATE_USER_BUTTON_KEY' => 'N',
  'LBL_CREATE_USER_BUTTON_LABEL' => 'Добавяне на нов потребител',
  'LBL_CREATE_USER_BUTTON_TITLE' => 'Добавяне на нов потребител [Alt+N]',
  'LBL_CURRENCY' => 'Валута:',
  'LBL_DATE_ENTERED' => 'Въведено на',
  'LBL_DATE_FORMAT' => 'Формат на датата:',
  'LBL_DATE_MODIFIED' => 'Модифицирано на',
  'LBL_DEFAULT_TEAM' => 'Екип по подразбиране:',
  'LBL_DEFAULT_TEAM_TEXT' => 'Изберете екип по подразбиране за нови записи',
  'LBL_DELETED' => 'Изтрити',
  'LBL_DELETE_EMPLOYEE_CONFIRM' => 'Наистина ли желаете да изтриете този служител?',
  'LBL_DELETE_USER_CONFIRM' => 'Служителита са също и потребители на системата.<br />Изтриването на запис на служителите ще изтрие записа на потребителите, и потребителите вече няма да имат достъп до приложението.<br />Искате ли да продължите с изтриването на този запис?',
  'LBL_DEPARTMENT' => 'Отдел:',
  'LBL_DESCRIPTION' => 'Описание',
  'LBL_EMAIL' => 'Електронна поща:',
  'LBL_EMAIL_LINK_TYPE' => 'Пощенски клиент',
  'LBL_EMAIL_LINK_TYPE_HELP' => '<b>Sugar Mail Client:</b> Потребителят изпраща електронни съобщения като използва клиента за електронна поща в SugarCRM.<br><b>External Mail Client:</b> Потребителят изпраща електронни съобщения, използвайки външен за системата клиент за електронна поща като Microsoft Outlook.',
  'LBL_EMPLOYEE' => 'Служители:',
  'LBL_EMPLOYEE_INFORMATION' => 'Информация за служителя',
  'LBL_EMPLOYEE_NAME' => 'Име на служителя:',
  'LBL_EMPLOYEE_SETTINGS' => 'Настройки',
  'LBL_EMPLOYEE_STATUS' => 'Статус на служителя:',
  'LBL_ERROR' => 'Грешка:',
  'LBL_EXT_AUTHENTICATE' => 'External Authentication',
  'LBL_FAVORITE_COLOR' => 'Любим цвят:',
  'LBL_FAX' => 'Факс:',
  'LBL_FAX_PHONE' => 'Факс',
  'LBL_FF_CLEAR' => 'Изчисти',
  'LBL_FIRST_NAME' => 'Име:',
  'LBL_GROUP' => 'Групов потребител',
  'LBL_GROUP_USER' => 'Групов потребител',
  'LBL_HOME_PHONE' => 'Домашен телефон:',
  'LBL_IS_ADMIN' => 'е администратор:',
  'LBL_LANGUAGE' => 'Език:',
  'LBL_LAST_NAME' => 'Фамилия:',
  'LBL_LIST_ACCEPT_STATUS' => 'Статус на поканата',
  'LBL_LIST_ADMIN' => 'Администриране',
  'LBL_LIST_DEPARTMENT' => 'Отдел',
  'LBL_LIST_DESCRIPTION' => 'Описание',
  'LBL_LIST_EMAIL' => 'Електронна поща',
  'LBL_LIST_EMPLOYEE_NAME' => 'Име на служителя',
  'LBL_LIST_EMPLOYEE_STATUS' => 'Статус на служителя',
  'LBL_LIST_FORM_TITLE' => 'Служители',
  'LBL_LIST_LAST_NAME' => 'Фамилия',
  'LBL_LIST_NAME' => 'Име',
  'LBL_LIST_PRIMARY_PHONE' => 'Телефон',
  'LBL_LIST_REPORTS_TO_NAME' => 'Докладва на',
  'LBL_LIST_USER_NAME' => 'Потребител',
  'LBL_LOGIN' => 'Вход',
  'LBL_MESSENGER_ID' => 'IM име:',
  'LBL_MESSENGER_TYPE' => 'IM тип:',
  'LBL_MOBILE_PHONE' => 'Мобилен номер:',
  'LBL_MODIFIED_BY' => 'Модифицирано от',
  'LBL_MODIFIED_BY_ID' => 'Модифицирано от',
  'LBL_MODULE_NAME' => 'Служители',
  'LBL_MODULE_TITLE' => 'Служители',
  'LBL_MY_TEAMS' => 'Моите екипи',
  'LBL_NAME' => 'Име:',
  'LBL_NEW_EMPLOYEE_BUTTON_KEY' => 'N',
  'LBL_NEW_EMPLOYEE_BUTTON_LABEL' => 'Нов служител',
  'LBL_NEW_EMPLOYEE_BUTTON_TITLE' => 'Добавяне на нов служител [Alt+N]',
  'LBL_NEW_FORM_TITLE' => 'Нов служител',
  'LBL_NOTES' => 'Бележки:',
  'LBL_OFFICE_PHONE' => 'Служебен телефон:',
  'LBL_ONLY_ACTIVE' => 'Активни служители',
  'LBL_OTHER' => 'Алтернативен телефон:',
  'LBL_OTHER_EMAIL' => 'Алтернативна електронна поща:',
  'LBL_OTHER_PHONE' => 'Алтернативен телефон:',
  'LBL_PASSWORD' => 'Парола за идентификация:',
  'LBL_PHOTO' => 'Снимка',
  'LBL_PICTURE_FILE' => 'Снимка',
  'LBL_PORTAL_ONLY' => 'Потребител само на портала',
  'LBL_PORTAL_ONLY_USER' => 'Портален потребител',
  'LBL_POSTAL_CODE' => 'Пощенски код:',
  'LBL_PRIMARY_ADDRESS' => 'Основен адрес:',
  'LBL_PSW_MODIFIED' => 'Последна промяна на парола',
  'LBL_RECEIVE_NOTIFICATIONS' => 'Уведомление при присвоен запис:',
  'LBL_REPORTS_TO' => 'Докладва на:',
  'LBL_REPORTS_TO_NAME' => 'Докладва на',
  'LBL_RESET_PREFERENCES' => 'Връщане към стандартни настройки',
  'LBL_SAVED_SEARCH' => 'Настройки на подредби',
  'LBL_SEARCH_FORM_TITLE' => 'Търсене в модул "Служители"',
  'LBL_SELECT' => 'Избери',
  'LBL_SHOW_ON_EMPLOYEES' => 'Display Employee Record',
  'LBL_STATE' => 'Област:',
  'LBL_STATUS' => 'Статус',
  'LBL_SUGAR_LOGIN' => 'е потребител на Sugar:',
  'LBL_SYSTEM_GENERATED_PASSWORD' => 'Системно Генерирана Парола',
  'LBL_THEME' => 'Визуализация:',
  'LBL_TIMEZONE' => 'Текущо време:',
  'LBL_TIME_FORMAT' => 'Формат на часа:',
  'LBL_TITLE' => 'Длъжност:',
  'LBL_USER_HASH' => 'Парола',
  'LBL_USER_NAME' => 'Потребителско име:',
  'LBL_USER_TYPE' => 'Тип потребител',
  'LBL_WORK_PHONE' => 'Телефон:',
  'LNK_EDIT_TABS' => 'Редактиране на табулатори',
  'LNK_EMPLOYEE_LIST' => 'Служители',
  'LNK_NEW_EMPLOYEE' => 'Добавяне на нов служител',
  'NTC_REMOVE_TEAM_MEMBER_CONFIRMATION' => 'Сигурни ли сте че искате да премахнете това членство на потребителя?',
);

