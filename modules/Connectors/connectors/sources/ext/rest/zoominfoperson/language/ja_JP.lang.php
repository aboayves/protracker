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
  'LBL_ID' => 'ID',
  'LBL_LICENSING_INFO' => '<table border="0" cellspacing="1"><tr><td valign="top" width="35%" class="dataLabel"><image src="' . getWebPath('modules/Connectors/connectors/sources/ext/rest/zoominfoperson/images/zoominfo.gif') . '" border="0"></td><td width="65%" valign="top" class="dataLabel">' . 'ZoomInfo&amp;amp;amp;#169; は500万以上の会社の4,500万人以上のビジネスパーソンについての詳細情報をご提供します。詳しくは<a target="_blank" href="http://www.zoominfo.com/about">http://www.zoominfo.com/about</a>（英語）を参照してください。</td></tr></table>',
  'LBL_SEARCH_FIELDS_INFO' => 'API: 姓・名とメールアドレスのフィールドはZoominfo© パーソンによってサポートされています。',
  'LBL_EMAIL' => 'メールアドレス',
  'LBL_FIRST_NAME' => '名',
  'LBL_LAST_NAME' => '姓',
  'LBL_JOB_TITLE' => '役職名',
  'LBL_IMAGE_URL' => '画像URL',
  'LBL_SUMMARY_URL' => 'サマリーURL',
  'LBL_COMPANY_NAME' => '会社名',
  'LBL_ZOOMPERSON_URL' => 'ZoominfoパーソンURL',
  'LBL_DIRECT_PHONE' => '直通電話',
  'LBL_COMPANY_PHONE' => '会社電話',
  'LBL_FAX' => 'ファックス',
  'LBL_CURRENT_JOB_TITLE' => '現在の役職名',
  'LBL_CURRENT_JOB_START_DATE' => '現職の開始日',
  'LBL_CURRENT_JOB_COMPANY_NAME' => '現職の会社名',
  'LBL_CURRENT_JOB_COMPANY_STREET' => '現職の住所',
  'LBL_CURRENT_JOB_COMPANY_CITY' => '現職の市区町村',
  'LBL_CURRENT_JOB_COMPANY_STATE' => '現職の都道府県',
  'LBL_CURRENT_JOB_COMPANY_ZIP' => '現職の郵便番号',
  'LBL_CURRENT_JOB_COMPANY_COUNTRY_CODE' => '現職の国名コード',
  'LBL_CURRENT_INDUSTRY' => '現職の業種',
  'LBL_BIOGRAPHY' => '経歴',
  'LBL_EDUCATION_SCHOOL' => '出身大学・大学院',
  'LBL_AFFILIATION_TITLE' => '所属役職名',
  'LBL_AFFILIATION_COMPANY_PHONE' => '所属会社の電話番号',
  'LBL_AFFILIATION_COMPANY_NAME' => '所属会社名',
  'LBL_AFFILIATION_COMPANY_WEBSITE' => '所属会社のWebサイト',
  'person_search_url' => '人物検索クエリURL',
  'person_detail_url' => '人物詳細クエリURL',
  'partner_code' => 'パートナーAPIコード',
  'api_key' => 'APIキー',
  'ERROR_LBL_CONNECTION_PROBLEM' => 'エラー: Zoominfo - パーソン・コネクタのサーバに接続することができません。',
);



