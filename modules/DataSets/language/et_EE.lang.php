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
  'LBL_WRAP' => 'Wrap Text:',
  'LBL_PARENT_DATASET' => 'Parent Data Format:',
  'LBL_MODULE_NAME' => 'Andmeformaat',
  'LBL_MODULE_TITLE' => 'Andmeformaadid: Avaleht',
  'LBL_SEARCH_FORM_TITLE' => 'Andmeformaadi otsing',
  'LBL_LIST_FORM_TITLE' => 'Andmeformaadi loend',
  'LBL_LIST_NAME' => 'Andmeformaadi Nimi',
  'LBL_LIST_QUERY_NAME' => 'Päringu nimi',
  'LBL_LIST_OUTPUT_DEFAULT' => 'Vaikeväljund',
  'LBL_LIST_LIST_ORDER_Y' => 'Y Tellimus',
  'LBL_LIST_LIST_ORDER_X' => 'X Tellimusq',
  'LBL_LIST_VISIBLE' => 'Nähtav?',
  'LBL_LIST_EXPORTABLE' => 'Eksporditav?',
  'LBL_LIST_HEADER' => 'Näita päist?',
  'LBL_NAME' => 'Andmeformaadi nimi:',
  'LBL_DESCRIPTION' => 'Kirjeldus:',
  'LBL_TYPE' => 'Tüüp:',
  'LBL_QUERY_NAME' => 'Päringu nimi:',
  'LBL_OUTPUT_DEFAULT' => 'Vaikeväljundi tüüp:',
  'LBL_LIST_ORDER_Y' => 'Ava tellimus Y-teljel:',
  'LBL_LIST_ORDER_X' => 'Ava tellimus X-teljel:',
  'LBL_HEADER' => 'Näita päist:',
  'LBL_EXPORTABLE' => 'Eksporditav (ainult CSV fail):',
  'LBL_VISIBLE' => 'Nähtav andmeformaat:',
  'LBL_TABLE_WIDTH' => 'Tabeli laius %:',
  'LBL_FONT_SIZE' => 'Fondi suurus:',
  'LBL_REPORT_NAME' => 'Aruande nimi:',
  'LBL_PRESPACE_Y' => 'Kombineeri eelmise andmeformaadiga:',
  'LBL_TABLE_WIDTH_TYPE' => 'Tabeli laiuse tüüp:',
  'LBL_BODY_TEXT_COLOR' => 'Kehateksti värv:',
  'LBL_HEADER_TEXT_COLOR' => 'Päise teksti värv:',
  'LBL_HEADER_BACK_COLOR' => 'Päise tausta värv:',
  'LBL_BODY_BACK_COLOR' => 'Keha tausta värv:',
  'LBL_USE_PREV_HEADER' => 'Grupeeri koos eelmise päisega:',
  'LBL_CHILD_NAME' => 'Alampäring:',
  'LBL_CUSTOM_LAYOUT' => 'Kohandatud paigutus:',
  'LNK_LIST_REPORTMAKER' => 'Enterprise aruande loend',
  'LNK_NEW_REPORTMAKER' => 'Loo aruanne',
  'LNK_LIST_DATASET' => 'Andmete formaadi loend',
  'LNK_NEW_DATASET' => 'Loo andmeformaat',
  'LNK_NEW_CUSTOMQUERY' => 'Loo kohandatud päring',
  'LNK_CUSTOMQUERIES' => 'Kohandatud päringud',
  'LNK_NEW_QUERYBUILDER' => 'Loo päring',
  'LNK_QUERYBUILDER' => 'Päringu ehitaja',
  'LBL_ALL_REPORTS' => 'Kõik aruanded',
  'NTC_DELETE_CONFIRMATION' => 'Oled kindel, et soovid seda kirjet kustutada?',
  'ERR_DELETE_RECORD' => 'Artikli kustutamiseks täpsusta kirje numbrit.',
  'LBL_LAYOUT_TYPE' => 'Paigutuse tüüp:',
  'LBL_LAYOUT_PARENT_VALUE' => 'Vaikeväärtus:',
  'LBL_LAYOUT_DISPLAY_TYPE' => 'Kuva tüüp:',
  'LBL_LAYOUT_LIST_ORDER_X' => 'Loendi tellimus X:',
  'LBL_LAYOUT_LIST_ORDER_Z' => 'Loendi tellimus Z:',
  'LBL_MODIFY_HEAD' => 'Muuda päise atribuute:',
  'LBL_MODIFY_BODY' => 'Muuda keha atribuute:',
  'LBL_BG_COLOR' => 'Tausta värv:',
  'LBL_DISPLAY_TYPE' => 'Kuva tüüp:',
  'LBL_STYLE' => 'Fondi stiil:',
  'LBL_DISPLAY_NAME' => 'Kuva nimi:',
  'LBL_FORMAT_TYPE' => 'Formaadi tüüp:',
  'LBL_FORMAT' => 'Formaat:',
  'LBL_CELL_SIZE' => 'Lahtri laius:',
  'LBL_HIDE_COLUMN' => 'Peida veerud aruandes',
  'LBL_FINISHED_BUTTON' => 'Lõpetatud',
  'CONFIRM_LAYOUT_DISABLE' => 'Kohandatud paigutuse lubamine eemaldab kõik olemasolevad kohandatud paigutuste omadused.',
  'LBL_LEFT' => 'Vasak',
  'LBL_RIGHT' => 'Parem',
);

