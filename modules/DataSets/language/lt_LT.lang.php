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
  'LBL_PRESPACE_X' => 'Pre-Space Side:',
  'LBL_MODULE_NAME' => 'Duomenų formatas',
  'LBL_MODULE_TITLE' => 'Duomenų formatai: Pradžia',
  'LBL_SEARCH_FORM_TITLE' => 'Duomenų formato paieška',
  'LBL_LIST_FORM_TITLE' => 'Duomenų formato sąrašas',
  'LBL_LIST_NAME' => 'Duomenų formato pavadinimas',
  'LBL_LIST_QUERY_NAME' => 'Užklausos pavadinimas',
  'LBL_LIST_OUTPUT_DEFAULT' => 'Numatytas išvedimas',
  'LBL_LIST_LIST_ORDER_Y' => 'Y seka',
  'LBL_LIST_LIST_ORDER_X' => 'X seka',
  'LBL_LIST_VISIBLE' => 'Matomas?',
  'LBL_LIST_EXPORTABLE' => 'Eksportuojamas?',
  'LBL_LIST_HEADER' => 'Rodyti antraštę?',
  'LBL_NAME' => 'Duomenų formato pavadinimas',
  'LBL_DESCRIPTION' => 'Aprašymas',
  'LBL_TYPE' => 'Tipas:',
  'LBL_PARENT_DATASET' => 'Pagrindinis duomenų formatas:',
  'LBL_QUERY_NAME' => 'Užklauso pavadinimas:',
  'LBL_OUTPUT_DEFAULT' => 'Numatytas išvedimo tipas:',
  'LBL_LIST_ORDER_Y' => 'Seka Y ašyje',
  'LBL_LIST_ORDER_X' => 'Seka X ašyje',
  'LBL_HEADER' => 'Rodyti antraštę:',
  'LBL_EXPORTABLE' => 'Eksportuojamas (tiks CSV failai):',
  'LBL_VISIBLE' => 'Matomas duomenų formatas:',
  'LBL_TABLE_WIDTH' => 'Lentelės plotis %:',
  'LBL_FONT_SIZE' => 'Šrifto dydis:',
  'LBL_REPORT_NAME' => 'Ataskaitos pavadinimas',
  'LBL_PRESPACE_Y' => 'Apjungti su ankstesniu duomenų formatu:',
  'LBL_TABLE_WIDTH_TYPE' => 'Lentelės pločio tipas:',
  'LBL_BODY_TEXT_COLOR' => 'Turinio teksto spalva:',
  'LBL_HEADER_TEXT_COLOR' => 'Antraštės teksto spalva:',
  'LBL_HEADER_BACK_COLOR' => 'Antraštės fono spalva:',
  'LBL_BODY_BACK_COLOR' => 'Turinio fono spalva:',
  'LBL_USE_PREV_HEADER' => 'Grupuoti su ankstesne antrašte:',
  'LBL_CHILD_NAME' => 'Sub-užklausa:',
  'LBL_CUSTOM_LAYOUT' => 'Nestandartinis išdėstymas:',
  'LNK_LIST_REPORTMAKER' => 'Enterprise ataskaitos',
  'LNK_NEW_REPORTMAKER' => 'Sukurti ataskaitą',
  'LNK_LIST_DATASET' => 'Duomenų formatai',
  'LNK_NEW_DATASET' => 'Sukurti duomenų formatą',
  'LNK_NEW_CUSTOMQUERY' => 'Sukurti nestandartinę užklausą',
  'LNK_CUSTOMQUERIES' => 'Nestandartinės užklausos',
  'LNK_NEW_QUERYBUILDER' => 'Sukurti užklausą',
  'LNK_QUERYBUILDER' => 'Užklausos kūrėjas',
  'LBL_ALL_REPORTS' => 'Visos ataskaitos',
  'NTC_DELETE_CONFIRMATION' => 'Ar tikrai norite ištrinti šį įrašą?',
  'ERR_DELETE_RECORD' => 'Nurodykite įrašą, kad ištrinti prekę.',
  'LBL_LAYOUT_TYPE' => 'Išdėstymo tipas:',
  'LBL_LAYOUT_PARENT_VALUE' => 'Numatyta reikšmė:',
  'LBL_LAYOUT_DISPLAY_TYPE' => 'Atvaizdavimo tipas:',
  'LBL_LAYOUT_LIST_ORDER_X' => 'Sąrašo rikiavimas X:',
  'LBL_LAYOUT_LIST_ORDER_Z' => 'Sąrašo rikiavimas Z:',
  'LBL_MODIFY_HEAD' => 'Redaguoti antraštės savybes:',
  'LBL_MODIFY_BODY' => 'Redaguoti turinio savybes:',
  'LBL_BG_COLOR' => 'Fono spalva:',
  'LBL_WRAP' => 'Apgaubti tekstą',
  'LBL_DISPLAY_TYPE' => 'Atvaizdavimo tipas:',
  'LBL_STYLE' => 'Šrifto stilius:',
  'LBL_DISPLAY_NAME' => 'Rodomas pavadinimas:',
  'LBL_FORMAT_TYPE' => 'Formato tipas:',
  'LBL_FORMAT' => 'Formatas:',
  'LBL_CELL_SIZE' => 'Elemento plotis:',
  'LBL_HIDE_COLUMN' => 'Paslėpti atskaitoje stulpelį:',
  'LBL_FINISHED_BUTTON' => 'Užbaigta',
  'CONFIRM_LAYOUT_DISABLE' => 'Išjungus nestandartinius išdėstymus, pradings visos nestandartinės išdėstymo savybės',
  'LBL_LEFT' => 'Kairė',
  'LBL_RIGHT' => 'Dešinė',
);

