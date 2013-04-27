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
  'LBL_AM' => 'AM',
  'LBL_APPLY_BUTTON' => 'Pritaikyti',
  'LBL_ASSIGNED_TO_NAME' => 'Atsakingas',
  'LBL_BUSY' => 'Užimta',
  'LBL_CANCEL_BUTTON' => 'Atšaukti',
  'LBL_CLOSE_BUTTON' => 'Uždaryti:',
  'LBL_CONFIRM_REMOVE' => 'Ar tikrai norite ištrinti įrašą?',
  'LBL_CONFIRM_REMOVE_ALL_RECURRING' => 'Ar tikrai norite ištrinti pasikartojančius įrašus?',
  'LBL_CONFLICT' => 'Konfliktas',
  'LBL_CREATE_CALL' => 'Suplanuoti skambutį',
  'LBL_CREATE_MEETING' => 'Suplanuoti susitikimą',
  'LBL_CREATE_NEW_RECORD' => 'Sukurti priminimą',
  'LBL_DATE' => 'Pradžios data ir laikas',
  'LBL_DATE_END_ERROR' => 'Pabaigos data yra anksčiau nei pradžios data.',
  'LBL_DATE_TIME' => 'Pradžios data ir laikas',
  'LBL_DAY' => 'Diena',
  'LBL_DELETE_BUTTON' => 'Ištrinti',
  'LBL_DURATION' => 'Trukmė',
  'LBL_EDIT_ALL_RECURRENCES' => 'Redaguoti visus pasikartojimus',
  'LBL_EDIT_RECORD' => 'Redaguoti priminimą',
  'LBL_EDIT_USERLIST' => 'Vartotojų sąrašas',
  'LBL_ERROR_LOADING' => 'Klaida kraunantis',
  'LBL_ERROR_SAVING' => 'Klaida saugant',
  'LBL_FILTER_BY_TEAM' => 'Filtruoti vartotojų sąrašą pagal komandą:',
  'LBL_GENERAL_TAB' => 'Išsamiau',
  'LBL_GOTO_DATE' => 'Eiti į datą',
  'LBL_HOURS_ABBREV' => 'v',
  'LBL_INFO_DESC' => 'Aprašymas',
  'LBL_INFO_DUE_DT' => 'Atlikimo data',
  'LBL_INFO_DURATION' => 'Trukmė',
  'LBL_INFO_NAME' => 'Tema',
  'LBL_INFO_RELATED_TO' => 'Susijęs su',
  'LBL_INFO_START_DT' => 'Pradžios data:',
  'LBL_INFO_TITLE' => 'Papildomos detalės',
  'LBL_LOADING' => 'Kraunama ... ( defined in ./portal/include/language/lt_LT.lang.php )',
  'LBL_MINS_ABBREV' => 'm',
  'LBL_MODULE_NAME' => 'Kalendorius',
  'LBL_MODULE_NAME_SINGULAR' => 'Kalendorius',
  'LBL_MODULE_TITLE' => 'Kalendorius',
  'LBL_MONTH' => 'Mėnesis',
  'LBL_NEXT_DAY' => 'Kita diena',
  'LBL_NEXT_MONTH' => 'Kitas mėnuo',
  'LBL_NEXT_SHARED' => 'Toliau',
  'LBL_NEXT_WEEK' => 'Kita savaitė',
  'LBL_NEXT_YEAR' => 'Kiti metai',
  'LBL_NO' => 'Ne',
  'LBL_NO_USER' => 'Nėra atitikmens laukui: Atsakingas',
  'LBL_PARTICIPANTS_TAB' => 'Dalyviai',
  'LBL_PM' => 'PM',
  'LBL_PREVIOUS_DAY' => 'Ankstesnė diena',
  'LBL_PREVIOUS_MONTH' => 'Ankstesnis mėnuo',
  'LBL_PREVIOUS_SHARED' => 'Atgal',
  'LBL_PREVIOUS_WEEK' => 'Ankstesnė savaitė',
  'LBL_PREVIOUS_YEAR' => 'Ankstesni metai',
  'LBL_RECURRING_LIMIT_ERROR' => 'Šis pasikartojantis$moduleTitle nebegali būti daug suplanuotas, kadangi jis viršija leistina pasikartojimų $limit skaičių.',
  'LBL_REFRESH' => 'Atnaujinti',
  'LBL_REMOVE_ALL_RECURRENCES' => 'Ištrinti visus pasikartojimus',
  'LBL_REPEAT_COUNT' => 'Įvykių skaičius',
  'LBL_REPEAT_DOW' => 'Ant',
  'LBL_REPEAT_END' => 'Pabaiga',
  'LBL_REPEAT_END_AFTER' => 'Po',
  'LBL_REPEAT_END_BY' => 'Pagal',
  'LBL_REPEAT_INTERVAL' => 'Intervalas',
  'LBL_REPEAT_OCCURRENCES' => 'Įvykiai',
  'LBL_REPEAT_TAB' => 'Pasikartojimai',
  'LBL_REPEAT_TYPE' => 'Pasikartojimo tipas',
  'LBL_REPEAT_UNTIL' => 'Kartoti iki',
  'LBL_SAVE_BUTTON' => 'Saugoti',
  'LBL_SAVING' => 'Saugoma...',
  'LBL_SCHEDULED' => 'Suplanuota',
  'LBL_SELECT_USERS' => 'Pasirinkti vartotojus, kuriuos rodyti kalendoriuje',
  'LBL_SENDING_INVITES' => 'Siunčiami pakvietimai...',
  'LBL_SEND_INVITES' => 'Siųsti pakvietimus',
  'LBL_SETTINGS' => 'Nustatymai ( defined in ./include/language/lt_LT.lang.php )',
  'LBL_SETTINGS_CALLS_SHOW' => 'Rodyti skambučius',
  'LBL_SETTINGS_DISPLAY_TIMESLOTS' => 'Atvaizduoti laiką dienų ir savaičių vaizdais:',
  'LBL_SETTINGS_TASKS_SHOW' => 'Rodyti užduotis:',
  'LBL_SETTINGS_TIME_ENDS' => 'Pabaigos laikas:',
  'LBL_SETTINGS_TIME_STARTS' => 'Pradžios laikas:',
  'LBL_SETTINGS_TITLE' => 'Nustatymai ( defined in ./include/language/lt_LT.lang.php )',
  'LBL_SHARED' => 'Bendras',
  'LBL_SHARED_CAL_TITLE' => 'Bendras kalendorius',
  'LBL_STATUS' => 'Statusas',
  'LBL_STYLE_ADVANCED' => 'Išplėstinis',
  'LBL_STYLE_BASIC' => 'Numatytasis',
  'LBL_SUBJECT' => 'Tema',
  'LBL_USERS' => 'Vartotojas',
  'LBL_USER_CALENDARS' => 'Vartotojo kalendoriai',
  'LBL_WEEK' => 'Savaitė',
  'LBL_YEAR' => 'Metai',
  'LBL_YES' => 'Taip',
  'LNK_CALL_LIST' => 'Skambučiai',
  'LNK_IMPORT_CALLS' => 'Importuoti skambučius',
  'LNK_IMPORT_MEETINGS' => 'Importuoti susitikimus',
  'LNK_IMPORT_TASKS' => 'Importuoti užduotis',
  'LNK_MEETING_LIST' => 'Susitikimai',
  'LNK_NEW_APPOINTMENT' => 'Sukurti paskyrimą',
  'LNK_NEW_CALL' => 'Suplanuoti skambutį',
  'LNK_NEW_MEETING' => 'Suplanuoti susitikimą',
  'LNK_NEW_TASK' => 'Sukurti užduotį',
  'LNK_TASK_LIST' => 'Užduotys',
  'LNK_VIEW_CALENDAR' => 'Šiandien',
  'NOTICE_DURATION_TIME' => 'Trukmės periodas turi būti daugiau už 0',
);

$mod_list_strings = array (
  'dom_cal_month' => 
  array (
    1 => 'Sau',
    2 => 'Vas',
    3 => 'Kov',
    4 => 'Bal',
    5 => 'Geg',
    6 => 'Bir',
    7 => 'Lie',
    8 => 'Rgp',
    9 => 'Rgs',
    10 => 'Spa',
    11 => 'Lap',
    12 => 'Gru',
  ),
  'dom_cal_month_long' => 
  array (
    1 => 'Sausis',
    2 => 'Vasaris',
    3 => 'Kovas',
    4 => 'Balandis',
    5 => 'Gegužė',
    6 => 'Birželis',
    7 => 'Liepa',
    8 => 'Rugpjūtis',
    9 => 'Rugsėjis',
    10 => 'Spalis',
    11 => 'Lapkritis',
    12 => 'Gruodis',
  ),
  'dom_cal_weekdays' => 
  array (
    1 => 'Pir',
    2 => 'Ant',
    3 => 'Tre',
    4 => 'Ket',
    5 => 'Pen',
    6 => 'Šeš',
  ),
  'dom_cal_weekdays_long' => 
  array (
    1 => 'Pirmadienis',
    2 => 'Antradienis',
    3 => 'Trečiadienis',
    4 => 'Ketvirtadienis',
    5 => 'Penktadienis',
    6 => 'Šeštadienis',
  ),
);

