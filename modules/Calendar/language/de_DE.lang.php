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
  'LBL_SETTINGS_DISPLAY_TIMESLOTS' => 'Zeiteinteilung in Tag- und Wochenansichten anzeigen',
  'LBL_DATE_END_ERROR' => 'Enddatum liegt vor dem Stardatum',
  'LNK_MEETING_LIST' => 'Meetings',
  'LBL_AM' => 'AM',
  'LBL_PM' => 'PM',
  'LBL_STATUS' => 'Status',
  'LBL_GENERAL_TAB' => 'Details',
  'LBL_MODULE_NAME' => 'Kalender',
  'LBL_MODULE_TITLE' => 'Kalender',
  'LNK_NEW_CALL' => 'Neuer Anruf',
  'LNK_NEW_MEETING' => 'Neues Meeting',
  'LNK_NEW_APPOINTMENT' => 'Neuer Termin',
  'LNK_NEW_TASK' => 'Neue Aufgabe',
  'LNK_CALL_LIST' => 'Anrufe',
  'LNK_TASK_LIST' => 'Aufgaben',
  'LNK_VIEW_CALENDAR' => 'Heute',
  'LNK_IMPORT_CALLS' => 'Anrufe importieren',
  'LNK_IMPORT_MEETINGS' => 'Meetings importieren',
  'LNK_IMPORT_TASKS' => 'Aufgaben importieren',
  'LBL_MONTH' => 'Monat',
  'LBL_DAY' => 'Tag',
  'LBL_YEAR' => 'Jahr',
  'LBL_WEEK' => 'Woche',
  'LBL_PREVIOUS_MONTH' => 'Voriger Monat',
  'LBL_PREVIOUS_DAY' => 'Voriger Tag',
  'LBL_PREVIOUS_YEAR' => 'Voriges Jahr',
  'LBL_PREVIOUS_WEEK' => 'Vorige Woche',
  'LBL_NEXT_MONTH' => 'Nächster Monat',
  'LBL_NEXT_DAY' => 'Nächster Tag',
  'LBL_NEXT_YEAR' => 'Nächstes Jahr',
  'LBL_NEXT_WEEK' => 'Nächste Woche',
  'LBL_SCHEDULED' => 'Gebucht',
  'LBL_BUSY' => 'Belegt',
  'LBL_CONFLICT' => 'Terminkonflikt',
  'LBL_USER_CALENDARS' => 'Benutzerkalender',
  'LBL_SHARED' => 'Gemeinsam',
  'LBL_PREVIOUS_SHARED' => 'Zurück',
  'LBL_NEXT_SHARED' => 'Weiter',
  'LBL_SHARED_CAL_TITLE' => 'Gemeinsamer Kalender',
  'LBL_USERS' => 'Benutzer',
  'LBL_REFRESH' => 'Aktualisieren',
  'LBL_EDIT_USERLIST' => 'Benutzer Liste',
  'LBL_SELECT_USERS' => 'Benutzer für Anzeige wählen',
  'LBL_FILTER_BY_TEAM' => 'Benutzerliste nach Team filtern:',
  'LBL_ASSIGNED_TO_NAME' => 'Zugewiesen an',
  'LBL_DATE' => 'Startdatum und -zeit:',
  'LBL_CREATE_MEETING' => 'Neues Meeting',
  'LBL_CREATE_CALL' => 'Neuer Anruf',
  'LBL_HOURS_ABBREV' => 'St.',
  'LBL_MINS_ABBREV' => 'min',
  'LBL_YES' => 'Ja',
  'LBL_NO' => 'Nein',
  'LBL_SETTINGS' => 'Einstellungen',
  'LBL_CREATE_NEW_RECORD' => 'Aktivität erstellen',
  'LBL_LOADING' => 'Laden. Bitte warten...',
  'LBL_SAVING' => 'Speichern',
  'LBL_SENDING_INVITES' => 'Einladungen verschickt',
  'LBL_CONFIRM_REMOVE' => 'Soll der Satz wirklich gelöscht werden?',
  'LBL_CONFIRM_REMOVE_ALL_RECURRING' => 'Wollen Sie wirklich alle Serientermine',
  'LBL_EDIT_RECORD' => 'Aktivität bearbeiten',
  'LBL_ERROR_SAVING' => 'Fehler beim Speichern',
  'LBL_ERROR_LOADING' => 'Fehler beim Laden',
  'LBL_GOTO_DATE' => 'Gehe nach Datum',
  'NOTICE_DURATION_TIME' => 'Zeitdauer muss größer als 0 sein',
  'LBL_STYLE_BASIC' => 'Einfach',
  'LBL_STYLE_ADVANCED' => 'Erweitert',
  'LBL_INFO_TITLE' => 'Weitere Details',
  'LBL_INFO_DESC' => 'Beschreibung',
  'LBL_INFO_START_DT' => 'Datum Zeit Start',
  'LBL_INFO_DUE_DT' => 'Datum Zeit fällig',
  'LBL_INFO_DURATION' => 'Dauer:',
  'LBL_INFO_NAME' => 'Betreff',
  'LBL_INFO_RELATED_TO' => 'Gehört zu',
  'LBL_NO_USER' => 'kein passendes Feld: gehört zu',
  'LBL_SUBJECT' => 'Betreff',
  'LBL_DURATION' => 'Dauer:',
  'LBL_DATE_TIME' => 'Startdatum und -zeit:',
  'LBL_SETTINGS_TITLE' => 'Einstellungen',
  'LBL_SETTINGS_TIME_STARTS' => 'Startzeit',
  'LBL_SETTINGS_TIME_ENDS' => 'Endzeit',
  'LBL_SETTINGS_CALLS_SHOW' => 'Anrufe anzeigen',
  'LBL_SETTINGS_TASKS_SHOW' => 'Aufgaben zeigen',
  'LBL_SAVE_BUTTON' => 'Speichern',
  'LBL_DELETE_BUTTON' => 'Löschen',
  'LBL_APPLY_BUTTON' => 'Filter anwenden',
  'LBL_SEND_INVITES' => 'Einladungen senden',
  'LBL_CANCEL_BUTTON' => 'Abbrechen',
  'LBL_CLOSE_BUTTON' => 'Beenden:',
  'LBL_PARTICIPANTS_TAB' => 'Teilnehmer',
  'LBL_REPEAT_TAB' => 'Ereignis',
  'LBL_REPEAT_TYPE' => 'Wiederholen',
  'LBL_REPEAT_INTERVAL' => 'Intervall',
  'LBL_REPEAT_END' => 'Ende',
  'LBL_REPEAT_END_AFTER' => 'nach',
  'LBL_REPEAT_OCCURRENCES' => 'Ereignisse',
  'LBL_REPEAT_END_BY' => 'Nach',
  'LBL_REPEAT_DOW' => 'Am',
  'LBL_REPEAT_UNTIL' => 'Wiederholen bis',
  'LBL_REPEAT_COUNT' => 'Anzahl Ereignisse',
  'LBL_REPEAT_LIMIT_ERROR' => 'Die Anfrage überschreitet das $limit Meeting-Limit',
  'LBL_EDIT_ALL_RECURRENCES' => 'Alle Ereignisse bearbeieten',
  'LBL_REMOVE_ALL_RECURRENCES' => 'Alle Ereignisse entfernen',
);

