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
  'LNK_LIST_REPORTMAKER' => 'Lista izveštaja Preduzeća',
  'LBL_MODIFY_HEAD' => 'Izmeni atribute zaglavlja:',
  'LBL_MODIFY_BODY' => 'Izmeni atribute glavnog teksta:',
  'LBL_FORMAT' => 'Format:',
  'LBL_MODULE_NAME' => 'Format podataka',
  'LBL_MODULE_TITLE' => 'Format podataka: Početna strana',
  'LBL_SEARCH_FORM_TITLE' => 'Pretraživanje formata podataka',
  'LBL_LIST_FORM_TITLE' => 'Lista formata podataka',
  'LBL_LIST_NAME' => 'Naziv formata podataka',
  'LBL_LIST_QUERY_NAME' => 'Naziv upita',
  'LBL_LIST_OUTPUT_DEFAULT' => 'Podrazumevana izlazna vrednost',
  'LBL_LIST_LIST_ORDER_Y' => 'Y redosled',
  'LBL_LIST_LIST_ORDER_X' => 'X redosled',
  'LBL_LIST_VISIBLE' => 'Vidljivo?',
  'LBL_LIST_EXPORTABLE' => 'Može da se izveze?',
  'LBL_LIST_HEADER' => 'Prikaži zaglavlje?',
  'LBL_NAME' => 'Naziv formata podataka:',
  'LBL_DESCRIPTION' => 'Opis:',
  'LBL_TYPE' => 'Tip:',
  'LBL_PARENT_DATASET' => 'Izvorni format podatka:',
  'LBL_QUERY_NAME' => 'Naziv upita:',
  'LBL_OUTPUT_DEFAULT' => 'Podrazumevani tip izlaza:',
  'LBL_LIST_ORDER_Y' => 'Redosled slotova po Y osi:',
  'LBL_LIST_ORDER_X' => 'Redosled slotova po X osi:',
  'LBL_HEADER' => 'Prikaži zaglavlje:',
  'LBL_EXPORTABLE' => 'Može da se izveze (samo CSV fajlovi):',
  'LBL_VISIBLE' => 'Vidljiv format podataka:',
  'LBL_TABLE_WIDTH' => 'Širina tabele %:',
  'LBL_FONT_SIZE' => 'Veličina fonta:',
  'LBL_REPORT_NAME' => 'Naziv izveštaja:',
  'LBL_PRESPACE_X' => 'Prazan prostor sa strane:',
  'LBL_PRESPACE_Y' => 'Kombinuj da prethodnim formatom podatka:',
  'LBL_TABLE_WIDTH_TYPE' => 'Širina tabele je tipa:',
  'LBL_BODY_TEXT_COLOR' => 'Boja glavnog teksta:',
  'LBL_HEADER_TEXT_COLOR' => 'Boja teksta zaglavlja:',
  'LBL_HEADER_BACK_COLOR' => 'Boja pozadine zaglavlja:',
  'LBL_BODY_BACK_COLOR' => 'Boja glavne pozadine:',
  'LBL_USE_PREV_HEADER' => 'Grupiši sa prethodnim zaglavljem:',
  'LBL_CHILD_NAME' => 'Izvedeni upit:',
  'LBL_CUSTOM_LAYOUT' => 'Prilagođeni raspored:',
  'LNK_NEW_REPORTMAKER' => 'Kreiraj izveštaj',
  'LNK_LIST_DATASET' => 'Lista formata podataka',
  'LNK_NEW_DATASET' => 'Kreiraj format podatka',
  'LNK_NEW_CUSTOMQUERY' => 'Kreiraj prilagođeni upit',
  'LNK_CUSTOMQUERIES' => 'Prilagođeni upiti',
  'LNK_NEW_QUERYBUILDER' => 'Kreiraj upit',
  'LNK_QUERYBUILDER' => 'Kreator upita',
  'LBL_ALL_REPORTS' => 'Svi izveštaji',
  'NTC_DELETE_CONFIRMATION' => 'Da li ste sigurni da želite da obrišete ovaj zapis?',
  'ERR_DELETE_RECORD' => 'Morate navesti odgovarajući broj zapisa da bi ga obrisali.',
  'LBL_LAYOUT_TYPE' => 'Tip rasporeda:',
  'LBL_LAYOUT_PARENT_VALUE' => 'Podrazumevana vrednost:',
  'LBL_LAYOUT_DISPLAY_TYPE' => 'Tip prikaza:',
  'LBL_LAYOUT_LIST_ORDER_X' => 'Lista po X osi:',
  'LBL_LAYOUT_LIST_ORDER_Z' => 'Lista po Z osi:',
  'LBL_BG_COLOR' => 'Boja pozadine:',
  'LBL_WRAP' => 'Prelomi tekst:',
  'LBL_DISPLAY_TYPE' => 'Tip prikaza:',
  'LBL_STYLE' => 'Stil fonta:',
  'LBL_DISPLAY_NAME' => 'Naziv za prikaz:',
  'LBL_FORMAT_TYPE' => 'Tip formata:',
  'LBL_CELL_SIZE' => 'Širina ćelije:',
  'LBL_HIDE_COLUMN' => 'Sakrij kolonu u izveštaju:',
  'LBL_FINISHED_BUTTON' => 'Završeno',
  'CONFIRM_LAYOUT_DISABLE' => 'Iskučivanje prilagođenog rasporeda ukloniće sva svojstva postojećih prilagođenih rasporeda',
  'LBL_LEFT' => 'Levo',
  'LBL_RIGHT' => 'Desno',
);

