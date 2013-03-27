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
  'LBL_ADD_BUTTON_KEY' => 'A',
  'LBL_NEW_BUTTON_KEY' => 'N',
  'LBL_DETAILS_BUTTON_KEY' => 'D',
  'LBL_EDIT_BUTTON_KEY' => 'N',
  'LBL_RUN_BUTTON_KEY' => 'R',
  'LBL_MODULE_NAME' => 'Enterprise ataskaitos',
  'LBL_MODULE_TITLE' => 'Enterprise ataskaitos',
  'LBL_SEARCH_FORM_TITLE' => 'Enterprise ataskaitos: paieška',
  'LBL_LIST_FORM_TITLE' => 'Visos Enterprise ataskaitos',
  'LBL_LIST_NAME' => 'Pavadinimas',
  'LBL_LIST_QUERY_NAME' => 'Užklausa',
  'LBL_LIST_PUBLISHED' => 'Paskelbta',
  'LBL_LIST_SCHEDULED' => 'Suplanuota',
  'LBL_LIST_TYPE' => 'Tipas',
  'LBL_LIST_MODULE_TITLE' => 'Modulis',
  'LBL_DESCRIPTION' => 'Aprašymas',
  'LBL_PARENT_DATASET' => 'Pagrindinis duomenų rinkinys:',
  'LBL_QUERY_NAME' => 'Užklauso pavadinimas:',
  'LBL_TYPE' => 'Ataskaitos tipas:',
  'LBL_SCHEDULED' => 'Suplanuota ataskaita:',
  'LBL_PUBLISHED' => 'Paskelbta ataskaita:',
  'LBL_NAME' => 'Ataskaitos pavadinimas:',
  'LBL_TITLE' => 'Ataskaitos antraštė:',
  'LBL_TABLE_WIDTH' => 'Lentelės plotis %:',
  'LBL_TABLE_HEIGHT' => 'Lentelės aukštis %:',
  'LBL_FONT_SIZE' => 'Šrifto dydis:',
  'NTC_DELETE_CONFIRMATION' => 'Ar Jūs tikrai norite ištrinti šį įrašą?',
  'ERR_DELETE_RECORD' => 'Nurodykite įrašą, kad ištrinti prekę.',
  'LBL_CURRENCY' => 'Valiuta:',
  'LNK_LIST_REPORTMAKER' => 'Enterprise ataskaitos',
  'LNK_NEW_REPORTMAKER' => 'Sukurti Enterprise ataskaitą',
  'LNK_LIST_DATASET' => 'Duomenų formatai',
  'LNK_NEW_DATASET' => 'Sukurti duomenų formatą',
  'LNK_NEW_CUSTOMQUERY' => 'Sukurti nestandartinę užklausą',
  'LNK_CUSTOMQUERIES' => 'Nestandartinės užklausos',
  'LNK_NEW_QUERYBUILDER' => 'Sukurti užklausą',
  'LNK_QUERYBUILDER' => 'Užklausos kūrėjas',
  'LNK_ADVANCED_REPORTING' => 'Valdyti Enterprise ataskaitas',
  'LBL_ALL_REPORTS' => 'Žiūrėti ataskaitas',
  'LBL_ADD_DATA_SET' => 'Įdėti naują duomenų rinkinį',
  'LBL_EDIT_DATA_SET' => 'Atnaujinti duomenų rinkinį',
  'LBL_DATA_SET' => 'Duomenų rinkinys:',
  'LBL_LIST_ORDER_Y' => 'Vertikalus talpinimas:',
  'LBL_LIST_ORDER_X' => 'Horizontalus talpinimas:',
  'LBL_REPORT_ALIGN' => 'Ataskaitos lygiavimas:',
  'LBL_ADD_BUTTON_TITLE' => 'Pasirinkti [Alt+A]',
  'LBL_ADD_BUTTON_LABEL' => 'Pasirinkti',
  'LBL_NEW_BUTTON_TITLE' => 'Įdėti [Alt+N]',
  'LBL_NEW_BUTTON_LABEL' => 'Sukurti naują',
  'LBL_DETAILS_BUTTON_TITLE' => 'Ataskaita išsamiau [Alt+D]',
  'LBL_DETAILS_BUTTON_LABEL' => 'Ataskaita išsamiau',
  'LBL_EDIT_BUTTON_TITLE' => 'Redaguoti ataskaitą [Alt+E]',
  'LBL_EDIT_BUTTON_LABEL' => 'redaguoti',
  'LBL_RUN_BUTTON_TITLE' => 'Generuoti ataskaitą [Alt+R]',
  'LBL_RUN_BUTTON_LABEL' => 'Generuoti ataskaitą',
  'LNK_UP' => 'Aukštyn',
  'LNK_DOWN' => 'Žemyn',
  'LBL_NONE' => 'Nesuplanuota',
  'LBL_SCHEDULE_EMAIL' => 'Suplanuota',
  'LBL_HELLO' => 'Sveiki',
  'LBL_SCHEDULED_REPORT_MSG_INTRO' => 'Jūs gavote SugarCRM sugeneruotą ataskaitą.  Ši ataskaita buvo sukurta',
  'LBL_SCHEDULED_REPORT_MSG_BODY1' => 'ir išsaugota pavadinimu "',
  'LBL_SCHEDULED_REPORT_MSG_BODY2' => '". Jeigu Jūs norite pakeisti savo ataskaitos nustatymus, prašome prisijungti prie SugarCRM ir paspausti ant "Ataskaitos" kortelės.',
);

