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
  'LBL_LIST_ORDER_Y' => 'Kolejność wejść oś Y:',
  'LBL_LIST_ORDER_X' => 'Kolejność wejść oś X:',
  'LBL_FORMAT' => 'Format:',
  'LBL_MODULE_NAME' => 'Format danych',
  'LBL_MODULE_TITLE' => 'Format danych: Strona główna',
  'LBL_SEARCH_FORM_TITLE' => 'Wyszukiwanie formatu danych',
  'LBL_LIST_FORM_TITLE' => 'Lista formatu danych',
  'LBL_LIST_NAME' => 'Nazwa formatu danych',
  'LBL_LIST_QUERY_NAME' => 'Nazwa zapytania',
  'LBL_LIST_OUTPUT_DEFAULT' => 'Domyślna wydajność',
  'LBL_LIST_LIST_ORDER_Y' => 'Kolejność Y',
  'LBL_LIST_LIST_ORDER_X' => 'Kolejność X',
  'LBL_LIST_VISIBLE' => 'Widoczne?',
  'LBL_LIST_EXPORTABLE' => 'Eksportowalny?',
  'LBL_LIST_HEADER' => 'Pokazać nagłówek?',
  'LBL_NAME' => 'Nazwa formatu danych:',
  'LBL_DESCRIPTION' => 'Opis:',
  'LBL_TYPE' => 'Typ:',
  'LBL_PARENT_DATASET' => 'Format danych nadrzędnych:',
  'LBL_QUERY_NAME' => 'Nazwa zapytania:',
  'LBL_OUTPUT_DEFAULT' => 'Typ domyślnej wydajności:',
  'LBL_HEADER' => 'Pokaż nagłówek:',
  'LBL_EXPORTABLE' => 'Eksportowalny (plik CSV tylko):',
  'LBL_VISIBLE' => 'Widoczny format danych:',
  'LBL_TABLE_WIDTH' => 'Szerokość tabeli %:',
  'LBL_FONT_SIZE' => 'Rozmiar czcionki:',
  'LBL_REPORT_NAME' => 'Nazwa raportu:',
  'LBL_PRESPACE_Y' => 'Połącz z poprzednim formatem danych',
  'LBL_TABLE_WIDTH_TYPE' => 'Typ szerokości tabeli:',
  'LBL_BODY_TEXT_COLOR' => 'Kolor tekstu:',
  'LBL_HEADER_TEXT_COLOR' => 'Kolor tekstu nagłówka:',
  'LBL_HEADER_BACK_COLOR' => 'Kolor tła nagłówka:',
  'LBL_BODY_BACK_COLOR' => 'Kolor tła:',
  'LBL_USE_PREV_HEADER' => 'Grupa z poprzednim nagłówkiem:',
  'LBL_CHILD_NAME' => 'Zapytanie podrzędne:',
  'LBL_CUSTOM_LAYOUT' => 'Niestandardowy układ:',
  'LNK_LIST_REPORTMAKER' => 'Lista raportów korporacyjnych',
  'LNK_NEW_REPORTMAKER' => 'Utwórz raport',
  'LNK_LIST_DATASET' => 'Lista formatu danych',
  'LNK_NEW_DATASET' => 'Utwórz format danych',
  'LNK_NEW_CUSTOMQUERY' => 'Utwórz niestandardowe zapytanie',
  'LNK_CUSTOMQUERIES' => 'Niestandardowe zapytania',
  'LNK_NEW_QUERYBUILDER' => 'Utwórz zapytanie',
  'LNK_QUERYBUILDER' => 'Kreator zapytań',
  'LBL_ALL_REPORTS' => 'Wszystkie raporty',
  'NTC_DELETE_CONFIRMATION' => 'Czy na pewno chcesz usunąć ten rekord?',
  'ERR_DELETE_RECORD' => 'Musisz określić numer rekordu, aby usunąć ten produkt.',
  'LBL_LAYOUT_TYPE' => 'Typ układu:',
  'LBL_LAYOUT_PARENT_VALUE' => 'Wartość domyślna:',
  'LBL_LAYOUT_DISPLAY_TYPE' => 'Typ wyświetlacza:',
  'LBL_LAYOUT_LIST_ORDER_X' => 'Podaj kolejność X:',
  'LBL_LAYOUT_LIST_ORDER_Z' => 'Podaj kolejność Z:',
  'LBL_MODIFY_HEAD' => 'Modyfikuj atrybuty nagłówka:',
  'LBL_MODIFY_BODY' => 'Modyfikuj atrybuty tekstu:',
  'LBL_BG_COLOR' => 'Kolor tła:',
  'LBL_WRAP' => 'Zawijanie tekstu:',
  'LBL_DISPLAY_TYPE' => 'Typ wyświetlacza:',
  'LBL_STYLE' => 'Styl czcionki:',
  'LBL_DISPLAY_NAME' => 'Nazwa wyświetlacza:',
  'LBL_FORMAT_TYPE' => 'Typ formatu:',
  'LBL_CELL_SIZE' => 'Szerokość komórki:',
  'LBL_HIDE_COLUMN' => 'Ukryj kolumny w raporcie:',
  'LBL_FINISHED_BUTTON' => 'Zakończono',
  'CONFIRM_LAYOUT_DISABLE' => 'Wyłączenie niestandardowego układu spowoduje usunięcie wszystkich istniejących niestandardowych właściwości układu.',
  'LBL_LEFT' => 'Lewy',
  'LBL_RIGHT' => 'Prawy',
);

