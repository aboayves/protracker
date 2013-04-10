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
  'ERR_REPORT_INVALID_SUBJECT' => 'Bericht ist nicht gültig',
  'ERR_REPORT_INVALID' => 'Der Bericht "{0}" enthält ungültige Felder: {1}',
  'LBL_MODULE' => 'Module',
  'LBL_REPORT_ATT_NAME' => 'Name',
  'LBL_AVG' => 'AVG',
  'LBL_MAX' => 'MAX',
  'LBL_QUARTER_ABBREVIATION' => 'Q',
  'LBL_FILTER' => 'Filter',
  'LBL_STATUS' => 'Status',
  'LBL_1X2' => '1 X 2',
  'LBL_2X1' => '2 X 1',
  'LBL_ALT_INFORMATION' => 'Information',
  'LBL_MODULE_NAME' => 'Berichte',
  'LBL_REPORT_MODULES' => 'Berichte',
  'LBL_REPORT_ATT_MODULES' => 'Berichte',
  'LBL_REPORT_EXPAND_ALL' => 'Alle ausklappen',
  'LBL_REPORT_COLLAPSE_ALL' => 'Alle zuklappen',
  'LBL_REPORT_SHOW_CHART' => 'Chart anzeigen',
  'LBL_REPORT_HIDE_CHART' => 'Chart ausblenden',
  'LBL_REPORT_SHOW_DETAILS' => 'Details anzeigen',
  'LBL_REPORT_HIDE_DETAILS' => 'Details ausblenden',
  'LNK_NEW_CONTACT' => 'Neuer Kontakt',
  'LNK_NEW_ACCOUNT' => 'Neue Firma',
  'LNK_NEW_OPPORTUNITY' => 'Neue Verkaufschance',
  'LNK_NEW_CASE' => 'Neues Ticket',
  'LNK_NEW_NOTE' => 'Neue Notiz oder Anlage',
  'LNK_NEW_CALL' => 'Neuer Anruf',
  'LNK_NEW_EMAIL' => 'E-Mail archivieren',
  'LNK_NEW_MEETING' => 'Neues Meeting',
  'LNK_NEW_TASK' => 'Neue Aufgabe',
  'LBL_REPORTS' => 'Berichte',
  'LBL_TITLE' => 'Titel',
  'LBL_UNTITLED' => 'unbenannt',
  'LBL_ACCOUNTS' => 'Firmen',
  'LBL_OPPORTUNITIES' => 'Verkaufschancen',
  'LBL_CONTACTS' => 'Kontakte',
  'LBL_LEADS' => 'Interessenten',
  'LBL_ACCOUNT' => 'Firma',
  'LBL_OPPORTUNITY' => 'Verkaufschance',
  'LBL_CONTACT' => 'Kontakt',
  'LBL_LEAD' => 'Interessent',
  'LBL_DELETE_ERROR' => 'Nur Eigentümer der Berichte oder Administratoren können Berichte löschen.',
  'LBL_ROWS_AND_COLUMNS_REPORT' => 'Zeilen und Spalten Bericht',
  'LBL_ROWS_AND_COLUMNS_REPORT_DESC' => 'Ein tabellarischer Bericht erstellen, der die Ergebnisse einer Filteroperation als Zeilen- und Spaltenbericht anzeigt.',
  'LBL_SUMMATION_REPORT' => 'Summierungsbericht',
  'LBL_SUMMATION_REPORT_DESC' => 'Ein tabellarischer Bericht erstellen, der die Ergebnisse einer Filteroperation von berechneten Werten anzeigt. Die Daten können auch als Diagramm angezeigt werden.',
  'LBL_MATRIX_REPORT' => 'Matrix Bericht',
  'LBL_MATRIX_REPORT_DESC' => 'Ein Matrix-Bericht erstellen, der die Ergebnisse einer Filteroperation als Gittertabelle über maximal drei Felder zusammengruppiert anzeigt.',
  'LBL_SUMMATION_REPORT_WITH_DETAILS_DESC' => 'Ein Summierungsbericht erstellen, der die Daten je Datensatz zusätzlich anzeigt. .',
  'LBL_SUMMATION_REPORT_WITH_DETAILS' => 'Summierungsbericht mit Details',
  'LBL_SHOW_QUERY' => 'Abfrage anzeigen',
  'LBL_DO_ROUND' => 'Runde Nummer über 100000',
  'LBL_SAVE_AS' => 'Speichern unter',
  'LBL_FILTERS' => 'Filter',
  'LBL_NO_CHART_DRAWN_MESSAGE' => 'Es kann keine Grafik erzeugt werden, da zu wenige Daten vorliegen.',
  'LBL_RUNTIME_FILTERS' => 'Runtime Filters',
  'LBL_VIEWER_RUNTIME_HELP' => 'Hier werden die definierten Filterwerte angezeigt',
  'LBL_REPORT_RESULTS' => 'Ergebnisse',
  'LBL_REPORT_RESULTS_MESSAGE' => 'Bericht ausführen auswählen, um Ergebnisse zu sehen',
  'LBL_REPORT_FILTER_MODIFIED_MESSAGE' => 'Die Berichtsfilter sind seit der letzte Ausführung verändert worden.',
  'LBL_REPORT_MODIFIED_MESSAGE' => 'Die Bericht ist seit der letzte Ausführung verändert worden.',
  'LBL_ADD_NEW_FILTER' => 'Neuen Filter hinzufügen',
  'LBL_DISPLAY_COLUMNS' => 'Spalten anzeigen',
  'LBL_SUMMARY_COLUMNS' => 'Summierungsspalten',
  'LBL_HIDE_COLUMNS' => 'Spalten ausblenden',
  'LBL_SUBMIT_QUERY' => 'Abfrage abschicken',
  'LBL_QUERY' => 'Abfrage',
  'LBL_CHANGE' => 'Ändern',
  'LBL_REMOVE' => 'Entfernen',
  'LBL_CREATE_CUSTOM_REPORT' => 'Neuer benutzerdefinierter Bericht',
  'LBL_CREATE_REPORT' => 'Neuer Bericht',
  'LBL_MY_SAVED_REPORTS' => 'Meine gespeicherten Berichte',
  'LBL_MY_TEAMS_REPORTS' => '-- Meine Team Berichte --',
  'LBL_REPORT_NAME' => 'Berichtsname',
  'LBL_CURRENT_QUARTER_FORECAST' => 'Aktuelle Quartalsprognose',
  'LBL_ALL_PUBLISHED_REPORTS' => 'Alle veröffentlichten Berichte',
  'LBL_DETAILED_FORECAST' => 'Detaillierte Prognose',
  'LBL_PARTNER_ACCOUNT_LIST' => 'Liste Partnerfirmen',
  'LBL_CUSTOMER_ACCOUNT_LIST' => 'Liste Kundenkonten',
  'LBL_CALL_LIST_BY_LAST_DATE_CONTACTED' => 'Anrufliste nach letztem Kontaktdatum',
  'LBL_OPPORTUNITIES_BY_LEAD_SOURCE' => 'Verkaufschancen nach Quelle',
  'LBL_CURRENT_QUARTER_COMMITTED_DEALS' => 'Festgelegte Abschlüsse aktuelles Quartal',
  'LBL_VIEW' => 'Ansicht',
  'LBL_DELETE' => 'Löschen',
  'LBL_PUBLISH' => 'publizieren',
  'LBL_UN_PUBLISH' => 'Publikation aufheben',
  'LBL_SCHEDULE_REPORT' => 'Bericht terminieren',
  'LBL_START_DATE' => 'Startdatum',
  'LBL_END_DATE' => 'Enddatum',
  'LBL_FILTER_DATE_RANGE_START' => 'Von',
  'LBL_FILTER_DATE_RANGE_FINISH' => 'bis',
  'LBL_SELECT_RECORD' => 'Datensatz auswählen',
  'LBL_TIME_INTERVAL' => 'Zeitababstand',
  'LBL_SCHEDULE_ACTIVE' => 'Aktiv',
  'LBL_SCHEDULE_EMAIL' => 'Bericht terminieren',
  'LBL_NEXT_RUN' => 'Nächste E-Mail',
  'LBL_UPDATE_SCHEDULE' => 'Zeitplanung aktualisieren',
  'LBL_YOU_HAVE_NO_SAVED_REPORTS.' => 'Sie haben keine gespeicherte Berichte',
  'LBL_MY_REPORTS' => 'Meine Berichte',
  'LBL_ACCOUNT_REPORTS' => 'Firmenberichte',
  'LBL_CONTACT_REPORTS' => 'Kontaktberichte',
  'LBL_OPPORTUNITY_REPORTS' => 'Verkaufschancen Berichte',
  'LBL_CASE_REPORTS' => 'Ticketberichte',
  'LBL_BUG_REPORTS' => 'Fehlerberichte',
  'LBL_LEAD_REPORTS' => 'Interessentenberichte',
  'LBL_QUOTE_REPORTS' => 'Angebotsberichte',
  'LBL_CALL_REPORTS' => 'Anrufberichte',
  'LBL_MEETING_REPORTS' => 'Meetingberichte',
  'LBL_TASK_REPORTS' => 'Aufgabenberichte',
  'LBL_EMAIL_REPORTS' => 'E-Mail Berichte',
  'LBL_ALL_REPORTS' => 'Alle Berichte',
  'LBL_ACTIVITIES_REPORTS' => 'Aktivitäten Bericht',
  'LBL_CHART_TYPE' => 'Diagrammtyp',
  'LBL_NO_REPORTS' => 'Keine Ergebnisse.',
  'LBL_SAVED_SEARCH' => 'Gespeicherte Suche &amp; Layout',
  'LBL_MY_TEAM_ACCOUNT_REPORTS' => 'Firmenberichte meines Teams',
  'LBL_MY_TEAM_OPPORTUNITY_REPORTS' => 'Verkaufschancenberichte meines Teams',
  'LBL_MY_TEAM_CONTACT_REPORTS' => 'Kontaktberichte meines Teams',
  'LBL_MY_TEAM_CASE_REPORTS' => 'Ticketberichte meines Teams',
  'LBL_MY_TEAM_BUG_REPORTS' => 'Fehlerberichte meines Teams',
  'LBL_MY_TEAM_LEAD_REPORTS' => 'Leadberichte meines Teams',
  'LBL_MY_TEAM_QUOTE_REPORTS' => 'Angebotsberichte meines Teams',
  'LBL_MY_TEAM_CALL_REPORTS' => 'Anrufberichte meines Teams',
  'LBL_MY_TEAM_MEETING_REPORTS' => 'Meetingberichte meines Teams',
  'LBL_MY_TEAM_TASK_REPORTS' => 'Aufgabenberichte meines Teams',
  'LBL_MY_TEAM_EMAIL_REPORTS' => 'E-Mailberichte meines Teams',
  'LBL_MY_TEAM_FORECAST_REPORTS' => 'Prognoseberichte meines Teams',
  'LBL_MY_TEAM_PROSPECT_REPORTS' => 'Zielpersonenberichte meines Teams',
  'LBL_MY_TEAM_CONTRACT_REPORTS' => 'Vertragsberichte meines Teams',
  'LBL_MY_TEAM_PROJECT_TASK_REPORTS' => 'Projektaufgabenberichte meines Teams',
  'LBL_MY_ACCOUNT_REPORTS' => 'Meine Firmenberichte',
  'LBL_MY_OPPORTUNITY_REPORTS' => 'Meine Verkaufschancenberichte',
  'LBL_MY_CONTACT_REPORTS' => 'Meine Kontaktberichte',
  'LBL_MY_CASE_REPORTS' => 'Meine Ticketberichte',
  'LBL_MY_BUG_REPORTS' => 'Meine Fehlerberichte',
  'LBL_MY_LEAD_REPORTS' => 'Meine Interessentenberichte',
  'LBL_MY_QUOTE_REPORTS' => 'Meine Angebotsberichte',
  'LBL_MY_CALL_REPORTS' => 'Meine Anrufberichte',
  'LBL_MY_MEETING_REPORTS' => 'Meine Meetingberichte',
  'LBL_MY_TASK_REPORTS' => 'Meine Aufgabenberichte',
  'LBL_MY_EMAIL_REPORTS' => 'Meine E-Mail Berichte',
  'LBL_MY_FORECAST_REPORTS' => 'Meine Prognoseberichte',
  'LBL_EXPORT' => 'Exportieren',
  'LBL_OF' => 'von',
  'LBL_SUCCESS_REPORT' => 'ERFOLG: Bericht',
  'LBL_MY_PROSPECT_REPORTS' => 'Meine Zielpersonenberichte',
  'LBL_WAS_SAVED' => 'wurde gespeichert',
  'LBL_FAILURE_REPORT' => 'FEHLER: Bericht',
  'LBL_WAS_NOT_SAVED' => 'wurde nicht gespeichert',
  'LBL_EQUALS' => 'Gleich',
  'LBL_LESS_THAN' => 'Weniger als',
  'LBL_GREATER_THAN' => 'Größer als',
  'LBL_DOES_NOT_EQUAL' => 'Ungleich',
  'LBL_ON' => 'Am',
  'LBL_BEFORE' => 'vor',
  'LBL_AFTER' => 'nach',
  'LBL_IS_BETWEEN' => 'ist zwischen',
  'LBL_NOT_ON' => 'Nicht an',
  'LBL_CONTAINS' => 'Enthält',
  'LBL_DOES_NOT_CONTAIN' => 'Enthält nicht',
  'LBL_STARTS_WITH' => 'Beginnt mit',
  'LBL_ENDS_WITH' => 'Endet mit',
  'LBL_TO_PDF' => 'Als PDF speichern',
  'LBL_PDF_TIMESTAMP' => 'J_m_t_H_i',
  'LBL_CSV_TIMESTAMP' => 'J_m_t_H_i_s',
  'LBL_IS' => 'Ist',
  'LBL_IS_NOT' => 'ist nicht',
  'LBL_ONE_OF' => 'Eines Von',
  'LBL_IS_NOT_ONE_OF' => 'ist keines aus',
  'LBL_ANY' => 'irgendein',
  'LBL_ALL' => 'zumindest',
  'LBL_EXACT' => 'exakt',
  'MSG_UNABLE_PUBLISH_ANOTHER' => 'Kann nicht publiziert werden: Es gibt eine anderen veröffentlichten Bericht mit dem selben Namen.',
  'MSG_UNABLE_PUBLISH_YOU_OWN' => 'Eine publizierter Bericht eines anderen Benutzers kann nicht aufgehoben werden. Sie haben einen Bericht mit dem selben Namen.',
  'LBL_PUBLISHED_ACCOUNT_REPORTS' => 'Veröffentlichte Firmenberichte',
  'LBL_PUBLISHED_CONTACT_REPORTS' => 'Veröffentlichte Kontaktberichte',
  'LBL_PUBLISHED_OPPORTUNITY_REPORTS' => 'Veröffentlichte Verkaufschancenberichte',
  'LBL_PUBLISHED_CASE_REPORTS' => 'Veröffentlichte Ticketberichte',
  'LBL_PUBLISHED_BUG_REPORTS' => 'Veröffentlichte Fehlerberichte',
  'LBL_PUBLISHED_LEAD_REPORTS' => 'Veröffentlichte Interessentenberichte',
  'LBL_PUBLISHED_QUOTE_REPORTS' => 'Veröffentlichte Angebotsberichte',
  'LBL_PUBLISHED_CALL_REPORTS' => 'Veröffentlichte Anrufberichte',
  'LBL_PUBLISHED_MEETING_REPORTS' => 'Veröffentlichte Meetingberichte',
  'LBL_PUBLISHED_TASK_REPORTS' => 'Veröffentlichte Aufgabenberichte',
  'LBL_PUBLISHED_EMAIL_REPORTS' => 'Veröffentlichte E-Mail Berichte',
  'LBL_PUBLISHED_FORECAST_REPORTS' => 'Veröffentlichte Prognoseberichte',
  'LBL_PUBLISHED_PROSPECT_REPORTS' => 'Veröffentlichte Zielpersonenberichte',
  'LBL_THERE_ARE_NO_REPORTS_OF_THIS_TYPE' => 'Es gibt keine Berichte dieses Typs',
  'LBL_AND' => 'und',
  'LBL_MISSING_FIELDS' => 'Fehlende Felder',
  'LBL_AT_LEAST_ONE_DISPLAY_COLUMN' => 'Zumindest eine Darstellungsspalte',
  'LBL_MISSING_INPUT_VALUE' => 'Fehlender Eingabewert',
  'LBL_MISSING_SECOND_INPUT_VALUE' => 'Fehlender zweiter Eingabewert.',
  'LBL_NOTHING_WAS_SELECTED' => 'nichts ausgewählt.',
  'LBL_TOTAL' => 'Gesamt',
  'LBL_MODULE_NAME_SAVED' => 'Modulname',
  'LBL_REPORT_TYPE' => 'Berichtstyp',
  'LBL_REPORT_LAST_RUN_DATE' => 'Letzer Zugriff',
  'LBL_REPORT__ATT_TYPE' => 'Typ',
  'LBL_REPORT_RUN_WITH_FILTER' => 'Filter anwenden',
  'LBL_REPORT_RESET_FILTER' => 'Zurücksetzen',
  'LBL_DISPLAY_SUMMARIES' => 'Auswertungen anzeigen',
  'LBL_HIDE_SUMMARIES' => 'Auswertungen verbergen',
  'LBL_RUN_BUTTON_TITLE' => 'Bericht ausführen [Alt+R]',
  'LBL_RUN_REPORT_BUTTON_LABEL' => 'Bericht ausführen',
  'LBL_RUN_REPORT_BUTTON_KEY' => 'Entwurf speichern [Alt+R]',
  'LBL_DUPLICATE_AS_ORIGINAL' => 'als Originaltyp',
  'LBL_DUPLICATE_AS_ROWS_AND_COLS' => 'als Zeilen und Spalten',
  'LBL_DUPLICATE_AS_SUMMATON' => 'Als Summierung',
  'LBL_DUPLICATE_AS_SUMMATION_DETAILS' => 'Als Summierung mit Details',
  'LBL_SUMMATION_WITH_DETAILS' => 'Summierung mit Details',
  'LBL_DUPLICATE_AS_MATRIX' => 'Als Matrix',
  'LBL_SAVE_RUN' => 'Speichern und Ausführen',
  'LBL_WITH_DETAILS' => 'Mit Details',
  'LBL_CHOOSE_COLUMNS' => 'Wählen Sie Spalten zum Anzeigen',
  'LBL_CHOOSE_SUMMARIES' => 'Wählen Sie Auswertungen zum Anzeigen',
  'LBL_GROUP_BY' => 'Gruppieren nach',
  'LBL_ADD_COLUMN' => 'Spalte hinzufügen',
  'LBL_GRAND_TOTAL' => 'Gesamtbetrag',
  'LBL_SEARCH_FORM_TITLE' => 'Bericht Suche',
  'LBL_FORECAST_REPORTS' => 'Prognoseberichte',
  'LBL_MY_PROJECT_TASK_REPORTS' => 'Meine Projektaufgaben Berichte',
  'LBL_PUBLISHED_PROJECT_TASK_REPORTS' => 'Veröffentlichte Projektaufgaben Berichte',
  'LBL_PROJECT_TASK_REPORTS' => 'Projektaufgabenberichte',
  'LBL_WEIGHTED_AVG_AMOUNT' => 'Gewichteter Durchschn. Betrag',
  'LBL_WEIGHTED_SUM_AMOUNT' => 'Gewichteter Summen Betrag',
  'ERR_SELECT_COLUMN' => 'Bitte wählen Sie zuerst eine Anzeigespalte',
  'LBL_BY_MONTH' => 'Monatlich',
  'LBL_BY_YEAR' => 'Jährlich',
  'LBL_BY_QUARTER' => 'Quartalsweise',
  'LBL_COUNT' => 'Zähler',
  'LBL_SUM' => 'SUMME',
  'LBL_MIN' => 'Xmin',
  'LBL_MONTH' => 'Monat',
  'LBL_YEAR' => 'Jahr',
  'LBL_QUARTER' => 'Quartal',
  'LBL_YESTERDAY' => 'Gestern',
  'LBL_TODAY' => 'Heute',
  'LBL_TOMORROW' => 'Morgen',
  'LBL_LAST_WEEK' => 'Letzte Woche',
  'LBL_NEXT_WEEK' => 'Nächste Woche',
  'LBL_LAST_7_DAYS' => 'Letzten 7 Tage',
  'LBL_NEXT_7_DAYS' => 'Nächsten 7 Tage',
  'LBL_LAST_MONTH' => 'Letzten Monat',
  'LBL_NEXT_MONTH' => 'Nächster Monat',
  'LBL_LAST_QUARTER' => 'Letzes Quartal',
  'LBL_THIS_QUARTER' => 'Dieses Quartal',
  'LBL_LAST_YEAR' => 'Letztes Jahr',
  'LBL_NEXT_YEAR' => 'Nächstes Jahr',
  'LBL_SELECT' => 'Auswählen',
  'LBL_AT_LEAST_ONE_SUMMARY_COLUMN' => 'Zumindest eine Summenspalte',
  'LBL_SHOW_DETAILS' => 'Details zeigen',
  'LBL_1_REPORT_ON' => '1. Bericht über',
  'LBL_2_FILTER' => '2. Filter',
  'LBL_3_GROUP' => '3. Gruppe',
  'LBL_3_CHOOSE' => '3. Anzeigespalten wählen',
  'LBL_4_CHOOSE' => '4. Anzeigespalten wählen',
  'LBL_5_CHART_OPTIONS' => '5. Diagramm Optionen',
  'LBL_LABEL' => 'Bezeichnung',
  'LBL_THIS_MONTH' => 'Diesen Monat',
  'LBL_LAST_30_DAYS' => 'Letzten 30 Tage',
  'LBL_NEXT_30_DAYS' => 'Nächsten 30 Tage',
  'LBL_THIS_YEAR' => 'Dieses Jahr',
  'LBL_LIST_FORM_TITLE' => 'Berichte',
  'LBL_PROSPECT_REPORTS' => 'Zielpersonen Berichte',
  'LBL_IS_EMPTY' => 'Ist leer',
  'LBL_IS_NOT_EMPTY' => 'Ist nicht leer',
  'LBL_CHART_DESCRIPTION' => 'Diagramm Beschreibung',
  'LBL_USE_COLUMN_FOR' => 'Datenreihen für Diagramm auswählen',
  'LBL_RELATED' => 'Verknüpft:',
  'LBL_OWNER' => 'Zugewiesen an',
  'LBL_TEAM' => 'Team',
  'LBL_TOTAL_IS' => 'Summe ist',
  'CHART_COUNT_PATTERN' => '{count} {module} wo {group_label} ist {group_text}',
  'LBL_WITH_A_TOTAL' => 'mit einer Summe',
  'LBL_WITH_AN_AVERAGE' => 'mit einem Durchschnitt',
  'CHART_SUMAVG_PATTERN' => '{count} {module} {numerical_function} {numerical_label} von {currency_symbol}{numerical_value}{thousands} wo {group_label} ist {group_text}',
  'LBL_WHOSE_MAXIMUM' => 'dessen Maximum',
  'LBL_WHOSE_MINIMUM' => 'dessen Minimum',
  'CHART_MINMAX_PATTERN' => '{count} {module} {numerical_function} {numerical_label} ist {numerical_value}{thousands} wo {group_label} ist {group_text}',
  'LBL_ROLLOVER' => 'Für Details gehen Sie auf den Balken.',
  'LBL_ROLLOVER_WEDGE' => 'Für Details gehen Sie auf einen Ausschnitt.',
  'LBL_ROLLOVER_SQUARE' => 'Über ein Quadrat bewegen für Details',
  'LBL_NO_CHART' => 'Kein Diagramm',
  'LBL_HORIZ_BAR' => 'Waagrechter Balken',
  'LBL_VERT_BAR' => 'Vertikaler Balken',
  'LBL_PIE' => 'Tortenstück',
  'LBL_LINE' => 'Linie',
  'LBL_FUNNEL' => 'Trichter',
  'LBL_GROUP_BY_REQUIRED' => 'Ein Summenbericht mit einer &amp;#039;gruppiert nach&amp;#039; und einer Summenspalte wird benötigt, um ein Diagramm zu erzeugen',
  'MSG_NO_PERMISSIONS' => 'Sie haben keine Berechtigung diesen Bericht zu bearbeiten',
  'LBL_NONE' => '--kein(e)--',
  'LBL_NONE_STRING' => 'Kein(e)',
  'LBL_DATE_BASED_FILTERS' => '&amp;lt;i&amp;gt;Datumsfilter sind relativ zur Zeitzone des &amp;lt;b&amp;gt;zugewiesenen&amp;lt;/b&amp;gt; Benutzers&amp;lt;/i&amp;gt;',
  'LBL_CONTRACT_REPORTS' => 'Vertragsberichte',
  'LBL_MY_CONTRACT_REPORTS' => 'Meine Vertragsberichte',
  'LBL_PUBLISHED_CONTRACT_REPORTS' => 'Veröffentlichte Vertragsberichte',
  'LBL_HELLO' => 'Hallo',
  'LBL_SCHEDULED_REPORT_MSG_INTRO' => 'Im Anhang finden Sie einen von Sugar automatisch generiererten Bericht. Dieser Bericht wurde erstellt am',
  'LBL_SCHEDULED_REPORT_MSG_BODY1' => 'und gespeichert unter dem Namen &amp;quot;',
  'LBL_SCHEDULED_REPORT_MSG_BODY2' => '&amp;quot;. Wenn Sie Ihre Berichtseinstellungen ändern wollen melden Sie sich bei Sugar an und klicken auf den  &amp;quot;Berichte&amp;quot; Reiter.',
  'LBL_LIST_PUBLISHED' => 'Veröffentlicht',
  'LBL_THIS_WEEK' => 'Diese Woche',
  'LBL_NEXT_QUARTER' => 'Nächstes Quartal',
  'LBL_ADD_RELATE' => 'Verknüpfte hinzufügen',
  'LBL_DEL_THIS' => 'Entfernen',
  'LBL_ALERT_CANT_ADD' => 'Sie können kein verknüpftes Modul hinzufügen wenn Sie keine Tabelle zum Verknüpfen auswählen.\\nWählen Sie ein Modul aus der Auswahlliste links von der &amp;#039;Verknüpfte hinzufügen&amp;#039; Schaltfläche die Sie gerade gedrückt haben.',
  'LBL_BY_DAY' => 'Täglich',
  'LBL_DAY' => 'Tag',
  'LBL_OUTER_JOIN_CHECKBOX' => 'Optional',
  'LBL_ANY_ONE_OF' => 'Irgendeines von',
  'LBL_RELATED_TABLE_BLANK' => 'Wählen Sie ein Modul für die Verknüpfung.',
  'LBL_FILTER_CONDITIONS' => 'Wählen Sie Einträge die',
  'LBL_FILTER_OR' => 'IRGENDEINEN',
  'LBL_FILTER_AND' => 'ALLE',
  'LBL_FILTERS_END' => 'der folgenden Filter erfüllen.',
  'LBL_FAVORITE_REPORTS' => 'Meine Favoritenberichte',
  'LBL_FAVORITE_REPORTS_TITLE' => 'Meine Favoritenberichte',
  'LBL_ADDED_FAVORITES' => 'Bericht(e) zu Meinen Favoritenberichten hinzugefügt.',
  'LBL_REMOVED_FAVORITES' => 'Bericht(e) von Meinen Favoritenberichten entfernt.',
  'LBL_MODULE_TITLE' => 'Berichte: Home',
  'LBL_MODULE_VIEWER_TITLE' => 'Berichtansicht: Startseite',
  'LBL_REPORT_MODULE_VIEWER_TITLE' => 'Berichtansicht',
  'LBL_REPORT_SCHEDULE_TITLE' => 'Zeitplaner',
  'LBL_FAVORITES_TITLE' => 'Berichte: Meine Favoritenberichte',
  'LBL_TABLE_CHANGED' => 'Die Modulliste wurde geändert, bitte überprüfen Sie nochmals die Einstellungen der Kriterien im Reiter Gruppen.',
  'LBL_OPTIONAL_HELP' => 'Markieren Sie das Kästchen um die Einträge des Primärmoduls anzuzeigen, auch wenn die Einträge des verknüpften Moduls nicht existieren. Wenn das Häkchen nicht gesetzt wurde, dann werden die Einträge des Primärmoduls nur angezeigt, wenn es einen oder mehrere Einträge im verknüpften Modul gibt.',
  'LBL_RUNTIME_HELP' => 'Dieses Kästchen auswählen, um User die Möglichkeit zu geben, die Filterwerte vor der Berichtgenerierung zu verändern.',
  'LBL_USER_EMPTY_HELP' => 'Um Sätze zu sehen, die keinen User zugewiesen sind, bitte die Box &amp;#39;Optionale zugehörige Module&amp;#39; im Berichtsdetails auswählen, zusätzlich die Option &amp;#39;Ist Leer&amp;#39; beim zugewiesenen User auswählen. Als Ergebnis werden Datensätze ohne User angezeigt.',
  'DEFAULT_REPORT_TITLE_1' => 'Aktuelle Quartalsprognose',
  'DEFAULT_REPORT_TITLE_2' => 'Detaillierte Prognose',
  'DEFAULT_REPORT_TITLE_3' => 'Liste Partnerfirmen',
  'DEFAULT_REPORT_TITLE_4' => 'Liste Kundenkonten',
  'DEFAULT_REPORT_TITLE_5' => 'Anrufliste nach letztem Kontaktdatum',
  'DEFAULT_REPORT_TITLE_6' => 'Verkaufschancen nach Quelle',
  'DEFAULT_REPORT_TITLE_7' => 'Offene Tickets nach Benutzer und Status',
  'DEFAULT_REPORT_TITLE_8' => 'Offene Tickets nach Monat und Benutzer',
  'DEFAULT_REPORT_TITLE_9' => 'Offene Tickets nach Priorität und Benutzer',
  'DEFAULT_REPORT_TITLE_10' => 'Neue Tickets nach Monat',
  'DEFAULT_REPORT_TITLE_11' => 'Pipeline nach Art und Team',
  'DEFAULT_REPORT_TITLE_12' => 'Pipeline nach Team und Benutzer',
  'DEFAULT_REPORT_TITLE_17' => 'Gewonnene Verkaufschancen nach Quelle',
  'DEFAULT_REPORT_TITLE_13' => 'Aufgaben nach Team und Benutzer',
  'DEFAULT_REPORT_TITLE_14' => 'Anrufe nach Team und Benutzer',
  'DEFAULT_REPORT_TITLE_15' => 'Meetings nach Team und Benutzer',
  'DEFAULT_REPORT_TITLE_16' => 'Firmen nach Typ und Branche',
  'DEFAULT_REPORT_TITLE_18' => 'Interessenten nach Quelle',
  'DEFAULT_REPORT_TITLE_19' => 'Meine Nutzungsdaten (heute)',
  'DEFAULT_REPORT_TITLE_20' => 'Meine Nutzungsdaten (letzte 7 Tage)',
  'DEFAULT_REPORT_TITLE_21' => 'Meine Nutzungsdaten (letzte 30 Tage)',
  'DEFAULT_REPORT_TITLE_22' => 'Meine benutzten Module (heute)',
  'DEFAULT_REPORT_TITLE_23' => 'Meine benutzten Module (letzte 7 Tage)',
  'DEFAULT_REPORT_TITLE_24' => 'Meine benutzten Module (letzte 30 Tage)',
  'DEFAULT_REPORT_TITLE_25' => 'User benutzen (Usage) Zahlen (letzte 7 Tage)',
  'DEFAULT_REPORT_TITLE_26' => 'User benutzen (Usage) Zahlen (letzte 30 Tage)',
  'DEFAULT_REPORT_TITLE_27' => 'User benutzen (Usage) Zahlen (letzte 30 Tage)',
  'DEFAULT_REPORT_TITLE_28' => 'langsame Abfragen',
  'DEFAULT_REPORT_TITLE_29' => 'Meine angepassten Datensätze (letzte 7 Tage)',
  'DEFAULT_REPORT_TITLE_31' => 'Meine angepassten Datensätze (letzte 30 Tage)',
  'DEFAULT_REPORT_TITLE_32' => 'Angepasste Datensätze meinr Mitarbeiter (letzte 30 Tage)',
  'DEFAULT_REPORT_TITLE_41' => 'Aktive User Sessions (letzte 7 Tage)',
  'DEFAULT_REPORT_TITLE_42' => 'Überblick aktive User Sessions (letzte 7 Tage))',
  'DEFAULT_REPORT_TITLE_43' => 'Kunden Eigentürmer',
  'DEFAULT_REPORT_TITLE_44' => 'Meine neuen Kunden',
  'DEFAULT_REPORT_TITLE_45' => 'Verkaufschancen pro Verkaufsphase',
  'DEFAULT_REPORT_TITLE_46' => 'Verkaufschancen pro Type',
  'DEFAULT_REPORT_TITLE_47' => 'Offene Anrufe',
  'DEFAULT_REPORT_TITLE_48' => 'Offene Meetings',
  'DEFAULT_REPORT_TITLE_49' => 'Offene Tasks',
  'DEFAULT_REPORT_TITLE_50' => 'Verkaufschancen gewonnen pro Firma',
  'DEFAULT_REPORT_TITLE_51' => 'gewonnene Verkaufschancen pro Benutzer',
  'DEFAULT_REPORT_TITLE_52' => 'Alle offenen Verkaufschancen',
  'DEFAULT_REPORT_TITLE_53' => 'Alle geschlossenen Verkaufschancen',
  'LBL_ASSIGNED_TO_NAME' => 'Zugewiesen an:',
  'LBL_CONTENT' => 'Inhalt',
  'LBL_IS_PUBLISHED' => 'Ist publiziert',
  'LBL_FAVORITE' => 'Favorit',
  'LBL_SCHEDULE_TYPE' => 'Zeitplanungstyp',
  'LBL_NO_ACCESS' => 'Sie können diesen Bericht wegen Berechtigungseinschränkungen nicht ausführen.',
  'LBL_SELECT_REPORT_TYPE' => 'Wählen Sie den Typ des Reports, welches Sie erstellen möchten:',
  'LBL_SELECT_MODULE' => 'Hauptmodul für den Bericht auswählen',
  'LBL_NEXT' => 'Nächste >',
  'LBL_PREVIOUS' => '< Zurück',
  'LBL_CANCEL' => 'Abbrechen',
  'LBL_AVAILABLE_FIELDS' => 'Verfügbare Felder',
  'LBL_RELATED_MODULES' => 'Verknüpfte Module',
  'LBL_FIELD_NAME' => 'Feldname',
  'LBL_RUN_TIME_LABEL' => 'Laufzeit',
  'LBL_NO_IMAGE' => 'Kein Bild',
  'LBL_BASIC_FILTERS' => 'Einfach Filter',
  'LBL_ADVANCED_FILTERS' => 'Erweitere Filter',
  'LBL_ADD_GROUP' => 'Filter Gruppe hinzufügen',
  'LBL_REMOVE_GROUP' => 'Filter Gruppe entfernen',
  'LBL_ADD_FILTER_TO' => 'Filter &amp;#39;an&amp;#39; hinzufügen',
  'LBL_COLUMN_NAME' => 'Spaltenname',
  'LBL_OPTIONAL_MODULES' => 'Optionale Module',
  'LBL_SELECT_REPORT_TYPE_ICON' => 'Auswahl Berichtstyp',
  'LBL_SELECT_MODULE_BUTTON' => 'Ein Hauptmodul auswählen (Bild anklicken).',
  'LBL_DEFINE_FILTERS' => 'Filter definieren',
  'LBL_SELECT_GROUP_BY' => 'Gruppierung definieren',
  'LBL_CHOOSE_DISPLAY_COLS' => 'Anzeigenspalten auswählen',
  'LBL_REPORT_DETAILS' => 'Berichtdetails',
  'LBL_REPORT_GROUP_BY' => 'Gruppierung nach',
  'LBL_CLEAR' => 'Leeren',
  'LBL_CHART_OPTIONS' => 'Diagramm Optionen',
  'LBL_CHART_DATA_HELP' => 'Select the Summary that will be displayed in the chart',
  'LBL_DO_ROUND_HELP' => 'Nummern über 1000000 werden in den Charts gerundet<br>Beispiel: 350000 wird als 350k ausgedrückt',
  'LBL_COMBO_TYPE_AHEAD' => 'Suche nach Feldname',
  'LBL_MAXIMUM_3_GROUP_BY' => 'Ein Matrix Bericht kann nicht mehr als 3 Gruppierungen nach enthalten.',
  'LBL_MINIMUM_2_GROUP_BY' => 'Ein Matrix Bericht muss mindestens 2 Gruppierungen nach haben.',
  'LBL_MATRIX_LAYOUT' => 'Layout Optionen:',
  'LBL_REMOVE_BTN_HELP' => 'Hier klicken um eine Filter Gruppe zu entfernen.',
  'LBL_ADD_BTN_HELP' => 'Hier klicken, um eine neue Filtergruppe hinzuzufügen. Mit Filtergruppen können logische UND/ODER  Gruppen gebildet werden.',
  'LBL_ORDER_BY' => 'Order By',
  'LBL_ASCENDING' => 'Aufsteigend',
  'LBL_DESCENDING' => 'Absteigend',
  'LBL_TYPE' => 'Typ',
  'LBL_SUBJECT' => 'Betreff',
  'LBL_DATE' => 'Startdatum',
  'LBL_NO_FILTERS' => 'hat keine Filter.',
  'LBL_DELETED_FIELD_IN_REPORT1' => 'Das Feld in diesem Bericht ist nicht länger gültig',
  'LBL_DELETED_FIELD_IN_REPORT2' => 'Bitte editieren den Bericht und überprüfen Sie ob die anderen Parameter noch relevant sind',
  'LBL_CURRENT_USER' => 'Aktueller Benutzer',
  'LBL_MODULE_CHANGE_PROMPT' => 'Wenn ein anderes Modul ausgewählt wird, gehen alle Filteroperation und definierte Spalten verloren. Wollen Sie weitermachen?',
  'LBL_CANNOT_BE_EMPTY' => 'darf nicht leer sein.',
  'LBL_FIELDS_PANEL_HELP_DESC' => 'All reportable fields from the selected module in &amp;lt;B&amp;gt;Related Modules&amp;lt;/B&amp;gt; appear here. Select a field.',
  'LBL_RELATED_MODULES_PANEL_HELP_DESC' => 'The primary module and all related modules appear here. Select a module.',
  'LBL_PREVIEW_REPORT' => 'Vorschau',
  'LBL_FILTERS_HELP_DESC' => 'Hier werden die ausgewählten Filterwerte angezeigt.',
  'LBL_GROUP_BY_HELP_DESC' => '&amp;lt;b&amp;gt;Steps to Define Group By:&amp;lt;/b&amp;gt;&amp;lt;br&amp;gt;&amp;lt;/br&amp;gt;1) Click on a Module in the &amp;lt;b&amp;gt;Related Modules&amp;lt;/b&amp;gt; pane that you would like to use to group records in your report. By default, the primary module (top node in the tree view) is selected. &amp;lt;br/&amp;gt;&amp;lt;br/&amp;gt;<br />	You can select a related module (child node in the tree view) by clicking on the module. Expand the node to view additional modules related to the related module. The module that you select determines which reportable fields appear in the &amp;lt;b&amp;gt;Available Fields&amp;lt;/b&amp;gt; pane.&amp;lt;br/&amp;gt;&amp;lt;br/&amp;gt;<br />	2) Click on the Field in the &amp;lt;b&amp;gt;Available Fields&amp;lt;/b&amp;gt; pane to group records by the field in your report. You can also search for the field by typing in the text box in the pane.&amp;lt;br/&amp;gt;&amp;lt;br/&amp;gt;<br />	After selecting any number of fields from the module selected in the &amp;lt;b&amp;gt;Related Modules&amp;lt;/b&amp;gt; pane, you can choose a different module from which you can select any number of fields to group records. However, the report becomes less readable when you group by more than several fields.&amp;lt;br/&amp;gt;&amp;lt;br/&amp;gt;<br />	You can change the order of the fields by dragging and dropping them to the desired position.  Changing the order affects the way the results are displayed.&amp;lt;br/&amp;gt;&amp;lt;br/&amp;gt;  For Matrix Reports, you can use a maximum of three fields to group records.',
  'LBL_DISPLAY_COLS_HELP_DESC' => 'Hier werden die ausgewählten Anzeigenspalten angezeigt.',
  'LBL_DISPLAY_SUMMARY_HELP_DESC' => '<b>Steps to Choose Display Summaries:</b><br/><br/>1) Click on the Module in the <b>Related Modules</b> pane that you would like to use for the summaries in your report. By default, the primary module (top node in the tree view) is selected.<br/><br/><br />	You can select a related module (child node in the tree view) by clicking on the module. Expand the node to view additional modules related to the related module. The module that you select determines which reportable fields appear in the <b>Available Fields</b> pane.<br/><br/><br />	2) Click on a Field in the <b>Available Fields</b> pane to select summaries for your report. You can also search for the field by typing in the text box in the pane.<br/><br/><br />	After selecting any number of fields from the module selected in the <b>Related Modules</b> pane, you can choose a different module from which you can select additional fields for the summaries in your report.<br/><br/>For Matrix Reports, you can select more than one field to display multiple values within a single cell in your report.',
  'LBL_DCE_LICENSING_REPORT' => 'Lizenzen Bericht',
  'DEFAULT_REPORT_TITLE_33' => 'Vorlagen Benutzung',
  'DEFAULT_REPORT_TITLE_34' => 'Max Sessions am Tag (letzte 7 Tage)',
  'DEFAULT_REPORT_TITLE_35' => 'Anfragen je Tag (letzte 7 Tage)',
  'DEFAULT_REPORT_TITLE_36' => 'Logins je Tag (letzte 7 Tage)',
  'DEFAULT_REPORT_TITLE_37' => 'Abfragen je Tag (letzte 7 Tage)',
  'DEFAULT_REPORT_TITLE_38' => 'Anhänge je Tag (letzte 7 Tage)',
  'DEFAULT_REPORT_TITLE_39' => 'User je Tag (letzte 7 Tage)',
  'DEFAULT_REPORT_TITLE_40' => 'Speicherverwendung je Tag (letzte 7 Tage)',
  'LBL_ALT_SHOW' => 'Anzeigen',
  'LBL_REPORT_DATA_COLUMN_ORDERS' => 'Der Bericht enthält Daten in folgender Spaltenreihenfolge',
  'LBL_HELP' => 'Hilfe',
  'LBL_EDITLAYOUT' => 'Layout bearbeiten',
  'LBL_SORT' => 'Sortieren',
  'LBL_EDIT' => 'Bearbeiten',
  'LBL_SHOW' => 'Anzeigen',
  'LBL_MORE' => 'Mehr',
  'LBL_LEFT' => 'Links',
  'LBL_RIGHT' => 'Rechts',
  'LBL_DOWN' => 'nach unten',
  'LBL_UP' => 'nach oben',
  'LBL_REPORT_GRAND_TOTAL' => 'Gesamtbetrag',
  'DROPDOWN_SCHEDULE_INTERVALS' => 
  array (
    3600 => 'stündlich',
    21600 => 'Jede 6te Stunde',
    43200 => 'Jede 12te Stunde',
    86400 => 'täglich',
    604800 => 'wöchentlich',
    1209600 => 'Jede 2te Woche',
    2419200 => 'Jede 4te Woche',
  ),
);

