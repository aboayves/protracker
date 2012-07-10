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
  'ERR_DELETE_RECORD' => 'Morate navesti broj zapisa da bi obrisali kompaniju.',
  'LBL_ACCEPT' => 'Prihvati',
  'LBL_ACCEPT_THIS' => 'Prihvati?',
  'LBL_COLON' => ':',
  'LBL_CONTACT_NAME' => 'Ime kontakta:',
  'LBL_DATE' => 'Datum početka:',
  'LBL_DATE_TIME' => 'Datum i vreme početka:',
  'LBL_DEFAULT_SUBPANEL_TITLE' => 'Aktuelne aktivnosti',
  'LBL_DESCRIPTION' => 'Opis',
  'LBL_DESCRIPTION_INFORMATION' => 'Opisne informacije',
  'LBL_DIRECTION' => 'Smer',
  'LBL_DURATION' => 'Trajanje:',
  'LBL_DURATION_MINUTES' => 'Trajanje u minutima:',
  'LBL_HISTORY' => 'Istorija',
  'LBL_HOURS_MINS' => '(sati/minuta)',
  'LBL_INVITEE' => 'Pozvani',
  'LBL_LIST_ASSIGNED_TO_NAME' => 'Dodeljeni korisnik',
  'LBL_LIST_CLOSE' => 'Zatvori',
  'LBL_LIST_CONTACT' => 'Kontakt',
  'LBL_LIST_DATE' => 'Datum',
  'LBL_LIST_DIRECTION' => 'Smer',
  'LBL_LIST_DUE_DATE' => 'Krajnji rok',
  'LBL_LIST_FORM_TITLE' => 'Lista aktivnosti',
  'LBL_LIST_LAST_MODIFIED' => 'Poslednja izmena',
  'LBL_LIST_RELATED_TO' => 'Povezano sa',
  'LBL_LIST_STATUS' => 'Status',
  'LBL_LIST_SUBJECT' => 'Naslov',
  'LBL_LIST_TIME' => 'Vreme početka',
  'LBL_LOCATION' => 'Lokacija:',
  'LBL_MEETING' => 'Sastanak:',
  'LBL_MODULE_NAME' => 'Aktivnosti',
  'LBL_MODULE_TITLE' => 'Aktivnosti: Početna strana',
  'LBL_NEW_NOTE_BUTTON_KEY' => 'T',
  'LBL_NEW_NOTE_BUTTON_LABEL' => 'Kreiraj belešku ili prilog',
  'LBL_NEW_NOTE_BUTTON_TITLE' => 'Kreiraj belešku ili prilog [Alt+T]',
  'LBL_NEW_TASK_BUTTON_KEY' => 'N',
  'LBL_NEW_TASK_BUTTON_LABEL' => 'Kreiraj zadatak',
  'LBL_NEW_TASK_BUTTON_TITLE' => 'Kreiraj zadatak [Alt+N]',
  'LBL_OPEN_ACTIVITIES' => 'Aktuelne aktivnosti',
  'LBL_SCHEDULE_CALL_BUTTON_KEY' => 'C',
  'LBL_SCHEDULE_CALL_BUTTON_LABEL' => 'Evidentiraj poziv',
  'LBL_SCHEDULE_CALL_BUTTON_TITLE' => 'Evidentiraj poziv [Alt+C]',
  'LBL_SCHEDULE_MEETING_BUTTON_KEY' => 'M',
  'LBL_SCHEDULE_MEETING_BUTTON_LABEL' => 'Zakaži sastanak',
  'LBL_SCHEDULE_MEETING_BUTTON_TITLE' => 'Zakaži sastanak [Alt+M]',
  'LBL_SEARCH_FORM_TITLE' => 'Pretraživanje aktivnosti',
  'LBL_STATUS' => 'Status:',
  'LBL_SUBJECT' => 'Naslov:',
  'LBL_TIME' => 'Vreme početka:',
  'LBL_TODAY' => 'kroz',
  'LBL_TRACK_EMAIL_BUTTON_KEY' => 'K',
  'LBL_TRACK_EMAIL_BUTTON_LABEL' => 'Arhiviraj Email',
  'LBL_TRACK_EMAIL_BUTTON_TITLE' => 'Arhiviraj Email [Alt+K]',
  'LBL_UPCOMING' => 'Moji nadolazeći sastanci',
  'LNK_CALL_LIST' => 'Pregledaj pozive',
  'LNK_EMAIL_LIST' => 'Pregledaj Email-ove',
  'LNK_IMPORT_CALLS' => 'Uvezi pozive',
  'LNK_IMPORT_MEETINGS' => 'Uvezi sastanke',
  'LNK_IMPORT_NOTES' => 'Uvezi beleške',
  'LNK_IMPORT_TASKS' => 'Uvezi zadatke',
  'LNK_MEETING_LIST' => 'Pregledaj sastanke',
  'LNK_NEW_APPOINTMENT' => 'Novi sastanak',
  'LNK_NEW_CALL' => 'Evidentiraj poziv',
  'LNK_NEW_EMAIL' => 'Kreiraj arhiviran Email',
  'LNK_NEW_MEETING' => 'Zakaži sastanak',
  'LNK_NEW_NOTE' => 'Kreiraj belešku ili dodaj prilog',
  'LNK_NEW_TASK' => 'Kreiraj zadatak',
  'LNK_NOTE_LIST' => 'Pregledaj beleške',
  'LNK_TASK_LIST' => 'Pregledaj zadatke',
  'LNK_VIEW_CALENDAR' => 'Pregledaj kalendar',
  'NTC_NONE' => 'Nijedna',
  'NTC_NONE_SCHEDULED' => 'Nema zakazanih.',
  'NTC_REMOVE_INVITEE' => 'Da li sigurno želite da uklonite ovog pozvanog sa sastanka?',
  'appointment_filter_dom' => 
  array (
    'last next_month' => 'sledećeg meseca',
    'last this_month' => 'ovog meseca',
    'next Saturday' => 'sledeće nedelje',
    'this Saturday' => 'ove nedelje',
    'today' => 'danas',
    'tomorrow' => 'sutra',
  ),
);

