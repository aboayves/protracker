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
  'hoovers_wsdl' => 'WSDL URL',
  'LBL_LICENSING_INFO' => '<table border="0" cellspacing="1"><tr><td valign="top" width="35%" class="dataLabel"><image src="' . getWebPath('modules/Connectors/connectors/sources/ext/soap/hoovers/images/hooversLogo.gif') . '" border="0"></td><td width="65%" valign="top" class="dataLabel">' . 'Hoovers&amp;amp;#169;はSugarCRMのユーザーに企業の最新情報を無料でお届けします。各企業、業界、経営者に関してのより包括的な情報や報告をご覧になりたい場合<a href="http://www.hoovers.com" target="_blank">http://www.hoovers.com</a>（英語）を参照してください。</td></tr></table>',
  'LBL_NAME' => '会社名',
  'LBL_DUNS' => 'DUNS(企業識別コード)',
  'LBL_PARENT_DUNS' => '親DUNS(企業識別コード)',
  'LBL_STREET' => '番地',
  'LBL_ADDRESS_STREET1' => '番地1',
  'LBL_ADDRESS_STREET2' => '番地2',
  'LBL_CITY' => '市区町村',
  'LBL_STATE' => '都道府県',
  'LBL_COUNTRY' => '国',
  'LBL_ZIP' => '郵便番号',
  'LBL_FINSALES' => '年間売上',
  'LBL_HQPHONE' => '電話番号',
  'LBL_TOTAL_EMPLOYEES' => '総従業員数',
  'LBL_PRIMARY_URL' => '主URL',
  'LBL_DESCRIPTION' => '詳細',
  'LBL_SYNOPSIS' => '概要',
  'LBL_LOCATION_TYPE' => 'ロケーションタイプ',
  'LBL_COMPANY_TYPE' => '会社タイプ',
  'ERROR_NULL_CLIENT' => 'Hooversに接続するためのSOAPクライアントが生成できません。サービスが利用不可になっているか、ライセンスキーが期限切れになっているか、一日あたり利用量制限に達している可能性があります。',
  'ERROR_MISSING_SOAP_LIBRARIES' => 'エラー: SOAPライブラリ（SoapClient、SoapHeader）が読み込みできません。',
  'hoovers_endpoint' => 'エンドポイントURL',
  'hoovers_api_key' => 'APIキー',
);

