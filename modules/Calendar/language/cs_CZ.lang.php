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

	

$mod_list_strings = array (
  'dom_cal_month' => 
  array (
    1 => 'Led',
    2 => 'Úno',
    3 => 'Bře',
    4 => 'Dub',
    5 => 'Kvě',
    6 => 'Čer',
    7 => 'Črv',
    8 => 'Srp',
    9 => 'Zář',
    10 => 'Říj',
    11 => 'Lis',
    12 => 'Pro',
  ),
  'dom_cal_month_long' => 
  array (
    1 => 'Leden',
    2 => 'Únor',
    3 => 'Březen',
    4 => 'Duben',
    5 => 'Květen',
    6 => 'Červen',
    7 => 'Červenec',
    8 => 'Srpen',
    9 => 'Září',
    10 => 'Říjen',
    11 => 'Listopad',
    12 => 'Prosinec',
  ),
  'dom_cal_weekdays' => 
  array (
    1 => 'Po',
    2 => 'Út',
    3 => 'St',
    4 => 'Čt',
    5 => 'Pá',
    6 => 'So',
  ),
  'dom_cal_weekdays_long' => 
  array (
    1 => 'Pondělí',
    2 => 'Úterý',
    3 => 'Středa',
    4 => 'Čtvrtek',
    5 => 'Pátek',
    6 => 'Sobota',
  ),
);

$mod_strings = array (
  'LBL_AM' => 'dopoledne',
  'LBL_APPLY_BUTTON' => 'Použít',
  'LBL_ASSIGNED_TO_NAME' => 'Přiřazeno komu',
  'LBL_BUSY' => 'Obsazeno',
  'LBL_CANCEL_BUTTON' => 'Zrušit',
  'LBL_CLOSE_BUTTON' => 'Zavřít',
  'LBL_CONFIRM_REMOVE' => 'Jste si jisti, že chcete odstranit záznam?',
  'LBL_CONFLICT' => 'Konflikt',
  'LBL_CREATE_CALL' => 'Naplánovat hovor',
  'LBL_CREATE_MEETING' => 'Naplánovat schůzku',
  'LBL_CREATE_NEW_RECORD' => 'Vytvořit aktivitu',
  'LBL_DATE' => 'Datum & čas začátku',
  'LBL_DATE_END_ERROR' => 'Konečný datum je menší než počáteční datum',
  'LBL_DATE_TIME' => 'Počáteční datum & čas:',
  'LBL_DAY' => 'Den',
  'LBL_DELETE_BUTTON' => 'Odstranit',
  'LBL_DURATION' => 'Doba trvání:',
  'LBL_EDIT_ALL_RECURRENCES' => 'Upravit všechny recidivy',
  'LBL_EDIT_RECORD' => 'Upravit aktivity',
  'LBL_EDIT_USERLIST' => 'Seznam uživatelů',
  'LBL_ERROR_LOADING' => 'Chyba při načítání',
  'LBL_ERROR_SAVING' => 'Chyba při ukládání',
  'LBL_FILTER_BY_TEAM' => 'Vyfiltrovat uživatele podle týmu:',
  'LBL_GENERAL_TAB' => 'Detaily',
  'LBL_GOTO_DATE' => 'Datum',
  'LBL_HOURS_ABBREV' => 'h',
  'LBL_INFO_DESC' => 'Popis',
  'LBL_INFO_DUE_DT' => 'Do data',
  'LBL_INFO_DURATION' => 'Doba trvání',
  'LBL_INFO_NAME' => 'Předmět',
  'LBL_INFO_RELATED_TO' => 'Vztahuje se k',
  'LBL_INFO_START_DT' => 'Počáteční datum',
  'LBL_INFO_TITLE' => 'Další podrobnosti',
  'LBL_LOADING' => 'Nahrávání ...',
  'LBL_MINS_ABBREV' => 'm',
  'LBL_MODULE_NAME' => 'Kalendář',
  'LBL_MODULE_TITLE' => 'Kalendář',
  'LBL_MONTH' => 'Měsíc',
  'LBL_NEXT_DAY' => 'Následující den',
  'LBL_NEXT_MONTH' => 'Následující měsíc',
  'LBL_NEXT_SHARED' => 'Další',
  'LBL_NEXT_WEEK' => 'Následující týden',
  'LBL_NEXT_YEAR' => 'Následující rok',
  'LBL_NO' => 'Ne',
  'LBL_NO_USER' => 'Nevybrán žádný uživatel',
  'LBL_PARTICIPANTS_TAB' => 'Pozvaní',
  'LBL_PM' => 'odpoledne',
  'LBL_PREVIOUS_DAY' => 'Předchozí den',
  'LBL_PREVIOUS_MONTH' => 'Předchozí měsíc',
  'LBL_PREVIOUS_SHARED' => 'Předchozí',
  'LBL_PREVIOUS_WEEK' => 'Předchozí týden',
  'LBL_PREVIOUS_YEAR' => 'Předchozí rok',
  'LBL_REFRESH' => 'Obnovit',
  'LBL_REMOVE_ALL_RECURRENCES' => 'Odstranit všechny recidivy',
  'LBL_REPEAT_COUNT' => 'Čislo recidivy',
  'LBL_REPEAT_DOW' => 'na',
  'LBL_REPEAT_END' => 'Konec',
  'LBL_REPEAT_END_AFTER' => 'Po',
  'LBL_REPEAT_END_BY' => 'dle',
  'LBL_REPEAT_INTERVAL' => 'Každý',
  'LBL_REPEAT_LIMIT_ERROR' => 'Váš požadavek hodlá vytvořit více než $limit schůzek',
  'LBL_REPEAT_OCCURRENCES' => 'recidivy',
  'LBL_REPEAT_TAB' => 'Recidiva',
  'LBL_REPEAT_TYPE' => 'Opakovat',
  'LBL_REPEAT_UNTIL' => 'Opakovat dokud',
  'LBL_SAVE_BUTTON' => 'Uložit',
  'LBL_SAVING' => 'Ukládám...',
  'LBL_SCHEDULED' => 'Naplánováno',
  'LBL_SELECT_USERS' => 'Vyberte uživate pro zobrazení kalendáře',
  'LBL_SENDING_INVITES' => 'Uložení &amp; zaslání pozvánek',
  'LBL_SEND_INVITES' => 'Uložit &amp; odeslat pozvánky',
  'LBL_SETTINGS' => 'Nastavení',
  'LBL_SETTINGS_CALLS_SHOW' => 'Přehled hovorů:',
  'LBL_SETTINGS_DISPLAY_TIMESLOTS' => 'Zobrazení časových intervalů v zobrazení dne a týdne:',
  'LBL_SETTINGS_TASKS_SHOW' => 'Přehled úkolů:',
  'LBL_SETTINGS_TIME_ENDS' => 'Konečný čas',
  'LBL_SETTINGS_TIME_STARTS' => 'Počáteční čas',
  'LBL_SETTINGS_TITLE' => 'Nastavení',
  'LBL_SHARED' => 'Sdíleno',
  'LBL_SHARED_CAL_TITLE' => 'Sdílený kalendář',
  'LBL_STATUS' => 'Stav',
  'LBL_STYLE_ADVANCED' => 'Rozšiřené',
  'LBL_STYLE_BASIC' => 'Základní',
  'LBL_SUBJECT' => 'Předmět',
  'LBL_USERS' => 'Uživatel',
  'LBL_USER_CALENDARS' => 'Kalendáře uživatelů',
  'LBL_WEEK' => 'Týden',
  'LBL_YEAR' => 'Rok',
  'LBL_YES' => 'Ano',
  'LNK_CALL_LIST' => 'Hovory',
  'LNK_IMPORT_CALLS' => 'Import hovorů',
  'LNK_IMPORT_MEETINGS' => 'Import setkání',
  'LNK_IMPORT_TASKS' => 'Import úkolů',
  'LNK_MEETING_LIST' => 'Schůzky',
  'LNK_NEW_APPOINTMENT' => 'Naplánovat událost',
  'LNK_NEW_CALL' => 'Naplánovat hovor',
  'LNK_NEW_MEETING' => 'Naplánovat schůzku',
  'LNK_NEW_TASK' => 'Přidat úkol',
  'LNK_TASK_LIST' => 'Úkoly',
  'LNK_VIEW_CALENDAR' => 'Dnes',
  'NOTICE_DURATION_TIME' => 'Doba trvání musí být větší než 0',
);

