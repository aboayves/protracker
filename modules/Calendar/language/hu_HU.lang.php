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
    1 => 'Jan',
    2 => 'Feb',
    3 => 'Márc',
    4 => 'Ápr',
    5 => 'Máj',
    6 => 'Jún',
    7 => 'Júl',
    8 => 'Aug',
    9 => 'Szept',
    10 => 'Okt',
    11 => 'Nov',
    12 => 'Dec',
  ),
  'dom_cal_month_long' => 
  array (
    1 => 'Január',
    2 => 'Február',
    3 => 'Március',
    4 => 'Április',
    5 => 'Május',
    6 => 'Június',
    7 => 'Július',
    8 => 'Augusztus',
    9 => 'Szeptember',
    10 => 'Október',
    11 => 'November',
    12 => 'December',
  ),
  'dom_cal_weekdays' => 
  array (
    1 => 'H',
    2 => 'K',
    3 => 'Szer',
    4 => 'Cs',
    5 => 'P',
    6 => 'Szo',
  ),
  'dom_cal_weekdays_long' => 
  array (
    1 => 'Hétfő',
    2 => 'Kedd',
    3 => 'Szerda',
    4 => 'Csütörtök',
    5 => 'Péntek',
    6 => 'Szombat',
  ),
);

$mod_strings = array (
  'LBL_AM' => 'de.',
  'LBL_APPLY_BUTTON' => 'Alkalmaz',
  'LBL_ASSIGNED_TO_NAME' => 'Felelős:',
  'LBL_BUSY' => 'Foglalt',
  'LBL_CANCEL_BUTTON' => 'Mégsem',
  'LBL_CLOSE_BUTTON' => 'Bezár',
  'LBL_CONFIRM_REMOVE' => 'Biztos benne, hogy eltávolítja a rekordot?',
  'LBL_CONFIRM_REMOVE_ALL_RECURRING' => 'Biztos benne, hogy eltávolítja az ismétlődő rekordokat?',
  'LBL_CONFLICT' => 'Ütközés',
  'LBL_CREATE_CALL' => 'Hívás naplózása',
  'LBL_CREATE_MEETING' => 'Találkozó ütemezése',
  'LBL_CREATE_NEW_RECORD' => 'Tevékenység létrehozása',
  'LBL_DATE' => 'Kezdő dátum & idő',
  'LBL_DATE_END_ERROR' => 'A befejezés dátuma megelőzi a kezdés dátumát',
  'LBL_DATE_TIME' => 'Dátum és idő',
  'LBL_DAY' => 'Nap',
  'LBL_DELETE_BUTTON' => 'Törlés',
  'LBL_DURATION' => 'Időtartam',
  'LBL_EDIT_ALL_RECURRENCES' => 'Minden ismétlődés szerkesztése',
  'LBL_EDIT_RECORD' => 'Tevékenység szerkesztése',
  'LBL_EDIT_USERLIST' => 'Felhasználói lista',
  'LBL_ERROR_LOADING' => 'Hiba a betöltés során',
  'LBL_ERROR_SAVING' => 'Hiba a mentés során',
  'LBL_FILTER_BY_TEAM' => 'Felhasználói lista szűrése csoport szerint:',
  'LBL_GENERAL_TAB' => 'Részletek',
  'LBL_GOTO_DATE' => 'Ugrás dátumra',
  'LBL_HOURS_ABBREV' => 'óra',
  'LBL_INFO_DESC' => 'Leírás',
  'LBL_INFO_DUE_DT' => 'Esedékesség dátuma',
  'LBL_INFO_DURATION' => 'Időtartam',
  'LBL_INFO_NAME' => 'Tárgy',
  'LBL_INFO_RELATED_TO' => 'Kapcsolódó kliens',
  'LBL_INFO_START_DT' => 'Kezdés dátuma',
  'LBL_INFO_TITLE' => 'További részletek',
  'LBL_LOADING' => 'Betöltés...',
  'LBL_MINS_ABBREV' => 'perc',
  'LBL_MODULE_NAME' => 'Naptár',
  'LBL_MODULE_TITLE' => 'Naptár',
  'LBL_MONTH' => 'Hónap',
  'LBL_NEXT_DAY' => 'Következő nap',
  'LBL_NEXT_MONTH' => 'Következő hónap',
  'LBL_NEXT_SHARED' => 'Következő',
  'LBL_NEXT_WEEK' => 'Következő hét',
  'LBL_NEXT_YEAR' => 'Következő év',
  'LBL_NO' => 'Nem',
  'LBL_NO_USER' => 'Hozzárendelés nem található',
  'LBL_PARTICIPANTS_TAB' => 'Meghívottak',
  'LBL_PM' => 'du.',
  'LBL_PREVIOUS_DAY' => 'Előző nap',
  'LBL_PREVIOUS_MONTH' => 'Előző hónap',
  'LBL_PREVIOUS_SHARED' => 'Előző',
  'LBL_PREVIOUS_WEEK' => 'Előző hét',
  'LBL_PREVIOUS_YEAR' => 'Előző év',
  'LBL_REFRESH' => 'Frissítés',
  'LBL_REMOVE_ALL_RECURRENCES' => 'Minden ismétlődés törlése',
  'LBL_REPEAT_COUNT' => 'Többszörös előfordulások száma',
  'LBL_REPEAT_DOW' => 'rajta',
  'LBL_REPEAT_END' => 'Vége',
  'LBL_REPEAT_END_AFTER' => 'Után',
  'LBL_REPEAT_END_BY' => 'Tőle',
  'LBL_REPEAT_INTERVAL' => 'Minden',
  'LBL_REPEAT_LIMIT_ERROR' => 'A parancs több, mint $limit találkozót próbál létrehozni.',
  'LBL_REPEAT_OCCURRENCES' => 'többszörös előfordulások',
  'LBL_REPEAT_TAB' => 'Többszörös előfordulás',
  'LBL_REPEAT_TYPE' => 'Ismétel',
  'LBL_REPEAT_UNTIL' => 'ismétel míg',
  'LBL_SAVE_BUTTON' => 'Mentés',
  'LBL_SAVING' => 'Mentés...',
  'LBL_SCHEDULED' => 'Ütemezett',
  'LBL_SELECT_USERS' => 'Válassza ki a felhasználót a naptár megtekintéséhez',
  'LBL_SENDING_INVITES' => 'Mentés és meghívók küldése...',
  'LBL_SEND_INVITES' => 'Mentés és meghívók küldése',
  'LBL_SETTINGS' => 'Beállítások',
  'LBL_SETTINGS_CALLS_SHOW' => 'Hívások megjelenítése:',
  'LBL_SETTINGS_DISPLAY_TIMESLOTS' => 'Idősávok megjelenítése napi és heti bontásban:',
  'LBL_SETTINGS_TASKS_SHOW' => 'Feladatok megjelenítése:',
  'LBL_SETTINGS_TIME_ENDS' => 'Befejezés időpontja:',
  'LBL_SETTINGS_TIME_STARTS' => 'Kezdés időpontja:',
  'LBL_SETTINGS_TITLE' => 'Beállítások',
  'LBL_SHARED' => 'Megosztott',
  'LBL_SHARED_CAL_TITLE' => 'Megosztott naptár',
  'LBL_STATUS' => 'Állapot',
  'LBL_STYLE_ADVANCED' => 'Összetett',
  'LBL_STYLE_BASIC' => 'Egyszerű',
  'LBL_SUBJECT' => 'Tárgy',
  'LBL_USERS' => 'Felhasználók',
  'LBL_USER_CALENDARS' => 'Felhasználó naptárai',
  'LBL_WEEK' => 'Hét',
  'LBL_YEAR' => 'Év',
  'LBL_YES' => 'Igen',
  'LNK_CALL_LIST' => 'Hívások',
  'LNK_IMPORT_CALLS' => 'Hívások importálása',
  'LNK_IMPORT_MEETINGS' => 'Találkozók importálása',
  'LNK_IMPORT_TASKS' => 'Feladatok importálása',
  'LNK_MEETING_LIST' => 'Találkozók',
  'LNK_NEW_APPOINTMENT' => 'Megbeszélés létrehozása',
  'LNK_NEW_CALL' => 'Hívás naplózása',
  'LNK_NEW_MEETING' => 'Találkozó ütemezése',
  'LNK_NEW_TASK' => 'Feladat létrehozása',
  'LNK_TASK_LIST' => 'Feladatok',
  'LNK_VIEW_CALENDAR' => 'Ma',
  'NOTICE_DURATION_TIME' => 'Az időtartamnak nagyobbnak kell lennie 0-nál',
);

