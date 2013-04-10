<?php

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





if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');


	
$mod_strings = array (
  'LBL_PROJECT_HOLIDAYS' => 'Semester',
  'LBL_OPPORTUNITIES' => 'Affärsmöjligheter',
  'LBL_LAST_WEEK' => 'Föregående',
  'LBL_NEXT_WEEK' => 'Nästa',
  'LBL_PROJECTRESOURCES_SUBPANEL_TITLE' => 'Projektresurser',
  'LBL_PROJECTTASK_SUBPANEL_TITLE' => 'Projektuppgift',
  'LBL_HOLIDAYS_SUBPANEL_TITLE' => 'Semestrar',
  'LBL_PROJECT_INFORMATION' => 'Projekt översikt',
  'LBL_ID' => 'Id:',
  'LBL_TEAM_ID' => 'Team:',
  'LBL_STATUS' => 'Status:',
  'LBL_LIST_TEAM_ID' => 'Team',
  'LBL_TASK_ID' => 'ID',
  'LBL_START' => 'Start',
  'LBL_TASK_ID_WIDGET' => 'id',
  'LBL_START_WIDGET' => 'date_start',
  'LBL_FINISH_WIDGET' => 'date_finish',
  'LBL_PREDECESSORS_WIDGET' => 'predecessors_',
  'LBL_PERCENT_COMPLETE_WIDGET' => 'percent_complete',
  'LBL_GANTT_ONLY' => 'Gantt',
  'LBL_MODULE_NAME' => 'Projekt',
  'LBL_MODULE_TITLE' => 'Projekt: Hem',
  'LBL_SEARCH_FORM_TITLE' => 'Sök projekt',
  'LBL_LIST_FORM_TITLE' => 'Lista projekt',
  'LBL_HISTORY_TITLE' => 'Historik',
  'LBL_DATE_ENTERED' => 'Skapat datum:',
  'LBL_DATE_MODIFIED' => 'Redigeringsdatum:',
  'LBL_ASSIGNED_USER_ID' => 'Tilldelad till:',
  'LBL_ASSIGNED_USER_NAME' => 'Tilldelad till:',
  'LBL_MODIFIED_USER_ID' => 'Redigerad av användare Id:',
  'LBL_CREATED_BY' => 'Skapad av:',
  'LBL_NAME' => 'Namn:',
  'LBL_PDF_PROJECT_NAME' => 'Projektnamn:',
  'LBL_DESCRIPTION' => 'Beskrivning:',
  'LBL_DELETED' => 'Raderad:',
  'LBL_DATE' => 'Datum:',
  'LBL_DATE_START' => 'Startdatum:',
  'LBL_DATE_END' => 'Slutdatum:',
  'LBL_PRIORITY' => 'Prioritet:',
  'LBL_MY_PROJECTS' => 'Mina projekt',
  'LBL_MY_PROJECT_TASKS' => 'Mina projektuppgifter',
  'LBL_TOTAL_ESTIMATED_EFFORT' => 'Total estimering (timmar):',
  'LBL_TOTAL_ACTUAL_EFFORT' => 'Total faktisk tid (timmar):',
  'LBL_LIST_NAME' => 'Namn',
  'LBL_LIST_DAYS' => 'dagar',
  'LBL_LIST_ASSIGNED_USER_ID' => 'Tilldelad till',
  'LBL_LIST_TOTAL_ESTIMATED_EFFORT' => 'Totalt estimat (timmar)',
  'LBL_LIST_TOTAL_ACTUAL_EFFORT' => 'Total faktisk tid (timmar)',
  'LBL_LIST_UPCOMING_TASKS' => 'Kommande uppgifter (1 vecka)',
  'LBL_LIST_OVERDUE_TASKS' => 'Försenade aktiviteter',
  'LBL_LIST_OPEN_CASES' => 'Öppna ärenden',
  'LBL_LIST_END_DATE' => 'Slutdatum',
  'LBL_PROJECT_SUBPANEL_TITLE' => 'Projekt',
  'LBL_PROJECT_TASK_SUBPANEL_TITLE' => 'Projektuppgifter',
  'LBL_CONTACT_SUBPANEL_TITLE' => 'Kontakter',
  'LBL_ACCOUNT_SUBPANEL_TITLE' => 'Organisationer',
  'LBL_OPPORTUNITY_SUBPANEL_TITLE' => 'Affärsmöjligheter',
  'LBL_QUOTE_SUBPANEL_TITLE' => 'Offerter',
  'LBL_NEW_FORM_TITLE' => 'Nytt projekt',
  'CONTACT_REMOVE_PROJECT_CONFIRM' => 'Är du säker på att du vill radera kontakten från projektet?',
  'LNK_NEW_PROJECT' => 'Skapa projekt',
  'LNK_PROJECT_LIST' => 'Lista projekt',
  'LNK_NEW_PROJECT_TASK' => 'Skapa projektuppgift',
  'LNK_PROJECT_TASK_LIST' => 'Projektuppgifter',
  'LNK_PROJECT_DASHBOARD' => 'Mina projekts dashboards',
  'LNK_PROJECT_TASKS_DASHBOARD' => 'Mina projektuppgifters dashboards',
  'LNK_NEW_PROJECT_TEMPLATES' => 'Skapa projektmall',
  'LNK_PROJECT_TEMPLATES_LIST' => 'Projektmallar',
  'LNK_PROJECT_RESOURCE_REPORT' => 'Resursrapport',
  'LBL_DEFAULT_SUBPANEL_TITLE' => 'Projekt',
  'LBL_ACTIVITIES_TITLE' => 'Aktiviteter',
  'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Aktiviteter',
  'LBL_HISTORY_SUBPANEL_TITLE' => 'Historik',
  'LBL_QUICK_NEW_PROJECT' => 'Nytt projekt',
  'LBL_PROJECT_TASKS_SUBPANEL_TITLE' => 'Projektuppgifter',
  'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontakter',
  'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Organisationer',
  'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Affärsmöjligheter',
  'LBL_CASES_SUBPANEL_TITLE' => 'Ärenden',
  'LBL_BUGS_SUBPANEL_TITLE' => 'Buggar',
  'LBL_PRODUCTS_SUBPANEL_TITLE' => 'Produkter',
  'LBL_QUOTES_SUBPANEL_TITLE' => 'Offerter',
  'LBL_RESOURCES_SUBPANEL_TITLE' => 'Resurser',
  'LBL_RESOURCE_NAME' => 'Namn',
  'LBL_RESOURCE_TYPE' => 'Typ',
  'LBL_TASK_NAME' => 'Uppgiftsnamn',
  'LBL_DURATION' => 'Varaktighet',
  'LBL_ACTUAL_DURATION' => 'Faktisk varaktighet',
  'LBL_FINISH' => 'Slut',
  'LBL_PREDECESSORS' => 'Föregångare',
  'LBL_PERCENT_COMPLETE' => '% Färdigt',
  'LBL_RESOURCE_NAMES' => 'Resurs',
  'LBL_MORE' => 'Mer...',
  'LBL_PERCENT_BUSY' => '% Upptagen',
  'LBL_USER_RESOURCE' => 'Användarresurs',
  'LBL_CONTACTS_RESOURCE' => 'Kontaktresurs',
  'LBL_LIST_RESOURCE' => 'Resurs:',
  'LBL_TASK_NAME_WIDGET' => 'beskrivning',
  'LBL_DURATION_WIDGET' => 'varaktighet',
  'LBL_RESOURCE_NAMES_WIDGET' => 'resurs',
  'LBL_EDIT_PROJECT_TASKS_TITLE' => 'Redigera projektuppgifter',
  'LBL_VIEW_GANTT_TITLE' => 'Visa Gantt',
  'LBL_INSERT_BUTTON' => 'Infoga rader',
  'LBL_INDENT_BUTTON' => 'Indrag',
  'LBL_OUTDENT_BUTTON' => 'Utdrag',
  'LBL_SAVE_BUTTON' => 'Spara',
  'LBL_COPY_BUTTON' => 'Kopiera',
  'LBL_PASTE_BUTTON' => 'Klistra in',
  'LBL_DELETE_BUTTON' => 'Radera',
  'LBL_EXPAND_ALL_BUTTON' => 'Utöka alla',
  'LBL_COLLAPSE_ALL_BUTTON' => 'Dra ihop alla',
  'LBL_MARK_AS_MILESTONE_BUTTON' => 'Markera som milstolpe',
  'LBL_UNMARK_AS_MILESTONE_BUTTON' => 'Avmarkera som milstolpe',
  'LBL_HIDE_OPTIONAL_COLUMNS_BUTTON' => 'Dölj valfria kolumner',
  'LBL_SHOW_OPTIONAL_COLUMNS_BUTTON' => 'Visa valfria kolumner',
  'LBL_VIEW_TASK_DETAILS_BUTTON' => 'Visa uppgiftsdetaljer',
  'LBL_RECALCULATE_DATES_BUTTON' => 'Räkna om datumen',
  'LBL_EXPORT_TO_PDF' => 'Exportera till PDF',
  'LBL_FILTER_ALL_TASKS' => 'Alla uppgifter',
  'LBL_FILTER_COMPLETED_TASKS' => 'Färdiga uppgifter',
  'LBL_FILTER_INCOMPLETE_TASKS' => 'Ofärdiga uppgifter',
  'LBL_FILTER_MILESTONES' => 'Milstolpar',
  'LBL_FILTER_RESOURCE' => 'Uppgifter som använder resurs',
  'LBL_FILTER_DATE_RANGE' => 'Uppgifter i tidsintervall',
  'LBL_FILTER_VIEW' => 'Visa',
  'LBL_LIST_FILTER_VIEW' => 'Visa:',
  'LBL_FILTER_DATE_RANGE_START' => 'Uppgifter som startar eller slutar efter',
  'LBL_FILTER_DATE_RANGE_FINISH' => 'och före',
  'LBL_FILTER_MY_TASKS' => 'Mina uppgifter',
  'LBL_FILTER_MY_OVERDUE_TASKS' => 'Mina försenade uppgifter',
  'LBL_FILTER_MY_UPCOMING_TASKS' => 'Mina kommande uppgifter (1 vecka)',
  'LBL_CUT_BUTTON' => 'Klipp ut',
  'LBL_WEEK_BUTTON' => 'Vecka',
  'LBL_BIWEEK_BUTTON' => '2 veckor',
  'LBL_MONTH_BUTTON' => 'Månad',
  'ERR_TASK_NAME_FOR_ROW' => 'Uppgiftsnamn för rad',
  'ERR_IS_EMPTY' => 'kan inte vara tom.',
  'ERR_PERCENT_COMPLETE' => '% Färdig måste vara ett värde mellan 0 och 100.',
  'ERR_DURATION' => 'Varaktigheten måste vara ett heltal.',
  'ERR_DATE' => 'Specificerade datumet infaller på en ledig dag.',
  'ERR_FINISH_DATE' => 'Slutdatum kan inte vara före startdatum.',
  'ERR_PREDECESSORS_INPUT' => 'Värden som angivits i föregående fält måste vara av formen "1" eller "1,2"',
  'ERR_PREDECESSORS_OUT_OF_RANGE' => 'Värdet som angivits för föregångarfältet är större än antalet rader.',
  'ERR_PREDECESSOR_CYCLE_FAIL' => 'Den specificerade föregångaren skapar en beroendecykel.',
  'ERR_PREDECESSOR_IS_PARENT_OR_CHILD_FAIL' => 'Den specificerade föregångaren är endera en föräldrauppgift eller eller en dotteruppgift.',
  'NTC_DELETE_TASK_AND_SUBTASKS' => 'Är du säker på att du vill radera uppgiften och alla dess dotteruppgifter?',
  'NTC_NO_ACTIVE_PROJECTS' => 'Du har inga aktiva projekt eller projektuppgifter.',
  'NTC_ASSIGN_RIGHT_TEAM' => 'Säkerställ att alla projektresurser är medlemmar till detta team.',
  'LBL_GRID_ONLY' => 'Rutsystem',
  'LBL_GRID_GANTT' => 'Rutsystem/Gantt',
  'LBL_REPORT' => 'Rapport',
  'LBL_DAILY_REPORT' => 'Daglig rapport',
  'LBL_PROJECT_HOLIDAYS_TITLE' => 'Projektsemestrar',
  'LBL_HOLIDAYS_TITLE' => 'Semestrar',
  'LBL_HOLIDAY' => 'Semester',
  'LBL_PROJECT_TEMPLATE' => 'Projektmall',
  'LBL_PROJECT_TEMPLATES_LIST' => 'Lista projektmallar',
  'LBL_PROJECT_TEMPLATES_TITLE' => 'Projektmallar: Hem',
  'LBL_IS_TEMPLATE' => 'Är mall',
  'LBL_SAVE_TEMPLATE_BUTTON_TITLE' => 'Spara som mall',
  'LBL_SAVE_TEMPLATE_BUTTON_LABEL' => 'Spara som mall',
  'LBL_SAVE_AS_PROJECT' => 'Spara som projekt',
  'LBL_SAVE_AS_TEMPLATE' => 'Spara som mall',
  'LBL_SAVE_AS_NEW_PROJECT_BUTTON' => 'Spara som nytt projekt',
  'LBL_SAVE_AS_NEW_TEMPLATE_BUTTON' => 'Spara som ny mall',
  'LBL_TEMPLATE_NAME' => 'Mallnamn:',
  'LBL_PROJECT_NAME' => 'Projektnamn:',
  'LBL_PROJECT_TEMPLATE_NAME' => 'Mallnamn:',
  'LBL_EXPORT_TO_MS_PROJECT' => 'Exportera till MS Project',
  'LBL_POPUP_DATE_START' => 'Startdatum:',
  'LBL_POPUP_DATE_FINISH' => 'Slutdatum:',
  'LBL_POPUP_PERCENT_COMPLETE' => '% Färdigt:',
  'LBL_POPUP_RESOURCE_NAME' => 'Resursnamn:',
  'LBL_MY_PROJECTS_DASHBOARD' => 'Mina projekts dashboard',
  'LBL_RESOURCE_REPORT' => 'Resursrapport',
  'LBL_PERSONAL_HOLIDAY' => '-- Personlig semester --',
);

