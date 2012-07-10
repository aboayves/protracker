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

	

$connector_strings = array (
  'LBL_COMPANY_ID' => 'ID',
  'LBL_LICENSING_INFO' => '<table border="0" cellspacing="1"><tr><td valign="top" width="35%" class="dataLabel"><image src="' . getWebPath('modules/Connectors/connectors/sources/ext/rest/zoominfocompany/images/zoominfo.gif') . '" border="0"></td><td width="65%" valign="top" class="dataLabel">' . 'ZoomInfo&amp;amp;#169; は500万以上の会社の4,500万人以上のビジネスパーソンについての詳細情報をご提供します。詳しくは<a target="_blank" href="http://www.zoominfo.com/about">http://www.zoominfo.com/about</a>（英語）を参照してください。</td></tr></table>',
  'LBL_SEARCH_FIELDS_INFO' => 'API: 会社名、国、都道府県、市区町村フィールドはZoominfo©CompanyのAPI によってサポートされています。',
  'LBL_COMPANY_NAME' => '会社名',
  'LBL_STREET' => '番地',
  'LBL_CITY' => '市区町村',
  'LBL_ZIP' => '郵便番号',
  'LBL_STATE' => '都道府県',
  'LBL_COUNTRY' => '国',
  'LBL_INDUSTRY' => '業種',
  'LBL_WEBSITE' => 'Webサイト',
  'LBL_DESCRIPTION' => '詳細',
  'LBL_PHONE' => '電話',
  'LBL_COMPANY_TICKER' => '会社ティッカー',
  'LBL_ZOOMINFO_COMPANY_URL' => '会社概要URL',
  'LBL_REVENUE' => '歳入',
  'LBL_EMPLOYEES' => '従業員',
  'company_search_url' => '会社検索URL',
  'company_detail_url' => '会社詳細URL',
  'partner_code' => 'パートナーAPIコード',
  'api_key' => 'APIキー',
  'ERROR_LBL_CONNECTION_PROBLEM' => 'エラー: Zoominfo -Company コネクタのサーバに接続することができません。',
);


