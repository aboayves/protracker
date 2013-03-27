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
  'LBL_EDIT_LAYOUT' => 'Layout bearbeiten',
  'LBL_PRESPACE_X' => 'Pre-Space Side:',
  'LBL_FORMAT' => 'Format:',
  'LBL_MODULE_NAME' => 'Datenformat',
  'LBL_MODULE_TITLE' => 'Datenformat: Home',
  'LBL_SEARCH_FORM_TITLE' => 'Datenformat suchen',
  'LBL_LIST_FORM_TITLE' => 'Datenformat Liste',
  'LBL_LIST_NAME' => 'Datenformat Name',
  'LBL_LIST_QUERY_NAME' => 'Abfrage Name:',
  'LBL_LIST_OUTPUT_DEFAULT' => 'Standard Ausgabe',
  'LBL_LIST_LIST_ORDER_Y' => 'Y Reihenfolge',
  'LBL_LIST_LIST_ORDER_X' => 'X Reihenfolge',
  'LBL_LIST_VISIBLE' => 'Sichtbar?',
  'LBL_LIST_EXPORTABLE' => 'Exportierbar?',
  'LBL_LIST_HEADER' => 'Anzeige Kopf?',
  'LBL_NAME' => 'Datenformat Name',
  'LBL_DESCRIPTION' => 'Beschreibung:',
  'LBL_TYPE' => 'Typ:',
  'LBL_PARENT_DATASET' => 'Übergeordnetes Datenset',
  'LBL_QUERY_NAME' => 'Abfrage Name:',
  'LBL_OUTPUT_DEFAULT' => 'Standard Ausgabe Typ',
  'LBL_LIST_ORDER_Y' => 'Vertikale Positionierung:',
  'LBL_LIST_ORDER_X' => 'Horizontale Positionierung:',
  'LBL_HEADER' => 'Anzeige Kopf:',
  'LBL_EXPORTABLE' => 'Exportierbar (als CSV Datei)',
  'LBL_VISIBLE' => 'Datensätze sichtbar',
  'LBL_TABLE_WIDTH' => 'Tabellen Breite in %:',
  'LBL_FONT_SIZE' => 'Schriftgröße',
  'LBL_REPORT_NAME' => 'Berichtsname',
  'LBL_PRESPACE_Y' => 'mit vorherigem Daten Format konbinieren',
  'LBL_TABLE_WIDTH_TYPE' => 'Tabellen Breiten Typ',
  'LBL_BODY_TEXT_COLOR' => 'Textfarbe Body',
  'LBL_HEADER_TEXT_COLOR' => 'Textfarbe Header',
  'LBL_HEADER_BACK_COLOR' => 'Hintergrundfarbe Header',
  'LBL_BODY_BACK_COLOR' => 'Hintergrundfarbe Body',
  'LBL_USE_PREV_HEADER' => 'Gruppieren mit letztem header',
  'LBL_CHILD_NAME' => 'Sub/Child Query',
  'LBL_CUSTOM_LAYOUT' => 'Eigenes Layout',
  'LNK_LIST_REPORTMAKER' => 'Enterprise Berichte anzeigen',
  'LNK_NEW_REPORTMAKER' => 'Neuen Bericht erstellen',
  'LNK_LIST_DATASET' => 'Datenformat Liste',
  'LNK_NEW_DATASET' => 'Datenformat erstellen',
  'LNK_NEW_CUSTOMQUERY' => 'individuelle Abfrage erstellen',
  'LNK_CUSTOMQUERIES' => 'individuelle Abfragen anzeigen',
  'LNK_NEW_QUERYBUILDER' => 'individuelle Abfrage erstellen',
  'LNK_QUERYBUILDER' => 'Abfragebuilder',
  'LBL_ALL_REPORTS' => 'Alle Berichte',
  'NTC_DELETE_CONFIRMATION' => 'Sind Sie sicher, dass Sie diesen Eintrag löschen wollen?',
  'ERR_DELETE_RECORD' => 'Um diesen Eintrag zu löschen, muss eine Datensatznummer angegeben werden.',
  'LBL_LAYOUT_TYPE' => 'Layout Typ',
  'LBL_LAYOUT_PARENT_VALUE' => 'Vorgabewert:',
  'LBL_LAYOUT_DISPLAY_TYPE' => 'Anzeige Typ:',
  'LBL_LAYOUT_LIST_ORDER_X' => 'Anzeigereihenfolge X:',
  'LBL_LAYOUT_LIST_ORDER_Z' => 'Anzeigereihenfolge Y:',
  'LBL_MODIFY_HEAD' => 'Header Attribute anpassen:',
  'LBL_MODIFY_BODY' => 'Body Attribte anpassen',
  'LBL_BG_COLOR' => 'Hintergrundfarbe:',
  'LBL_WRAP' => 'Zeile umbrechen:',
  'LBL_DISPLAY_TYPE' => 'Anzeige Typ:',
  'LBL_STYLE' => 'Schriftart:',
  'LBL_DISPLAY_NAME' => 'Anzeigename:',
  'LBL_FORMAT_TYPE' => 'Format Typ:',
  'LBL_CELL_SIZE' => 'Zellenbreite',
  'LBL_HIDE_COLUMN' => 'Spalte in Report ausblenden',
  'LBL_FINISHED_BUTTON' => 'Komplett',
  'CONFIRM_LAYOUT_DISABLE' => 'Wenn Sie das kundeneigene Layout entfernen werden auch alle kundeneignen Anzeigeeinstellungen gelöscht',
  'LBL_LEFT' => 'Links',
  'LBL_RIGHT' => 'Rechts',
);

