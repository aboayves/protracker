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
  'LBL_ADVANCED_SEARCH' => 'Rozšiřené vyhledávání',
  'LBL_BASICSEARCH' => 'Základní vyhledávání',
  'LBL_SHOW_MORE_OPTIONS' => 'Zobrazit více možností',
  'LBL_HIDE_OPTIONS' => 'Skrýt více možností',
  'LBL_VIEW' => 'Zobrazit',
  'LBL_POST_TITLE' => 'Stav aktualizace u',
  'LBL_URL_LINK_TITLE' => 'URL',
  'LBL_TEAM_VISIBILITY_TITLE' => 'tým, který může vidět tento příspěvek',
  'LBL_ID' => 'ID',
  'LBL_MODULE_NAME' => 'Activity Streams',
  'LBL_MODULE_TITLE' => 'Activity Streams',
  'LBL_LINK_TYPE_YouTube' => 'YouTube&#153;',
  'LBL_TEAM' => 'Tým',
  'LBL_TEAM_ID' => 'Id Týmu',
  'LBL_ASSIGNED_TO_ID' => 'Id zodpovědného uživatele',
  'LBL_ASSIGNED_TO_NAME' => 'Přiřazeno komu',
  'LBL_DATE_ENTERED' => 'Datum vytvoření',
  'LBL_DATE_MODIFIED' => 'Datum úpravy',
  'LBL_MODIFIED' => 'Upraveno kým',
  'LBL_MODIFIED_ID' => 'Id modifikátora',
  'LBL_MODIFIED_NAME' => 'Upravil',
  'LBL_CREATED' => 'Vytvořil',
  'LBL_CREATED_ID' => 'ID tvůrce',
  'LBL_DESCRIPTION' => 'Popis',
  'LBL_DELETED' => 'Smazáno',
  'LBL_NAME' => 'Jméno',
  'LBL_SAVING' => 'Ukládám...',
  'LBL_SAVED' => 'Uloženo',
  'LBL_CREATED_USER' => 'Vytvořeno uživatelem',
  'LBL_MODIFIED_USER' => 'Upraveno uživatelem',
  'LBL_LIST_FORM_TITLE' => 'Feed List',
  'LBL_DASHLET_DISABLED' => 'POZOR: Sugar Feed log je vypnut, nové záznamy nebudou ukládány dokud nebude aktivován',
  'LBL_ADMIN_SETTINGS' => 'Sugar Feed nastavení',
  'LBL_RECORDS_DELETED' => 'Všechny předchozí záznamy se Sugar Feed budou vymzány pokud Feed bude aktivován. Další záznamy se budou ukládat automaticky.',
  'LBL_CONFIRM_DELETE_RECORDS' => 'Jste si jist, že chcete smazat veškeré záznamy z Sugar Feed?',
  'LBL_FLUSH_RECORDS' => 'Smazat Sugar Feed záznamy',
  'LBL_ENABLE_FEED' => 'Aktivovat Sugar Feed',
  'LBL_ENABLE_MODULE_LIST' => 'Aktivovat Sugar Feeds pro',
  'LBL_HOMEPAGE_TITLE' => 'Můj Sugar Feed',
  'LNK_NEW_RECORD' => 'Vytvořit Sugar Feed',
  'LNK_LIST' => 'Zpráva Sugar Feed',
  'LBL_SEARCH_FORM_TITLE' => 'Vyhledat Sugar Feed',
  'LBL_HISTORY_SUBPANEL_TITLE' => 'Prohlížet historii',
  'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Aktivity',
  'LBL_SUGAR_FEED_SUBPANEL_TITLE' => 'Zpráva Sugar Feed',
  'LBL_NEW_FORM_TITLE' => 'Nový Sugar Feed',
  'LBL_ALL' => 'Všechny',
  'LBL_USER_FEED' => 'User Feed',
  'LBL_ENABLE_USER_FEED' => 'Spustit User Feed',
  'LBL_TO' => 'Viditelné pro tým',
  'LBL_IS' => 'je',
  'LBL_DONE' => 'Hotovo',
  'LBL_TITLE' => 'Název',
  'LBL_ROWS' => 'řádek',
  'LBL_MY_FAVORITES_ONLY' => 'Pouze oblíbené',
  'LBL_ENABLE_EXTERNAL_CONNECTORS' => 'Poznámka: Pro viditelnost Facebook či Twitter zpráv (feeds), nastavte Konektory.',
  'LBL_CATEGORIES' => 'moduly',
  'LBL_TIME_LAST_WEEK' => 'Poslední týden',
  'LBL_TIME_WEEKS' => 'Týdny',
  'LBL_TIME_DAYS' => 'Dny',
  'LBL_TIME_YESTERDAY' => 'Včera',
  'LBL_TIME_HOURS' => 'Hodiny',
  'LBL_TIME_HOUR' => 'Hodiny',
  'LBL_TIME_MINUTES' => 'Minuty',
  'LBL_TIME_MINUTE' => 'Minuta',
  'LBL_TIME_SECONDS' => 'Vteřiny',
  'LBL_TIME_SECOND' => 'Vteřina',
  'LBL_TIME_AGO' => 'před',
  'CREATED_CONTACT' => 'Vytvořil <b>nový</b> kontakt',
  'CREATED_OPPORTUNITY' => 'Vytvořil <b>nový</b> obchod',
  'CREATED_CASE' => 'Vytvořil <b>nový</b> případ',
  'CREATED_LEAD' => 'Vytvořil <b>novou</b> příležitost',
  'FOR' => 'pro',
  'CLOSED_CASE' => '<b>UZAVŘENÝ</b> případ',
  'CONVERTED_LEAD' => '<b>PŘEVEDENÁ</b> příležitost',
  'WON_OPPORTUNITY' => '<b>VYHRANÝ</b> obchod',
  'WITH' => 's',
  'LBL_LINK_TYPE_Link' => 'Odkaz',
  'LBL_LINK_TYPE_Image' => 'Obrázek',
  'LBL_SELECT' => 'Vyberte',
  'LBL_POST' => 'Zveřejni',
  'LBL_EXTERNAL_PREFIX' => 'Externí:',
  'LBL_EXTERNAL_WARNING' => 'Položky označené "externí", vyžadují externí účet.',
  'LBL_AUTHENTICATE' => 'Ověřit',
  'LBL_AUTHENTICATION_PENDING' => 'Ne všechny externí učty, které jste vybral, jsou ověřeny. Klikněte na &#39;Zrušit&#39; pro návrat do okna Možností pro ověření těchto externích účtů nebo &#39;OK&#39; pro pokračování bez ověření.',
);

