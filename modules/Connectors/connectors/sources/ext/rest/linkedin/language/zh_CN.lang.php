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


/*********************************************************************************

* Description:  Defines the English language pack for the base application.
* Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
* All Rights Reserved.
* Contributor(s): ______________________________________..
********************************************************************************/

$connector_strings = array (
    //licensing information shown in config screen
    'LBL_LICENSING_INFO' => '<table border="0" cellspacing="1"><tr><td valign="top" width="35%" class="dataLabel">从LinkedIn&#169获取一对API和机密密钥; 注册您的Sugar实例为一个新程序.<br/><br>注册实例的步骤:<br/><br/><ol><li>到LinkedIn&#169; 开发者站点: <a href=\'https://www.linkedin.com/secure/developer\' target=\'_blank\'>https://www.linkedin.com/secure/developer</a>.</li><li>使用LinkedIn&#169登陆;您想为之创建程序的账户.</li><li>点击增加新程序链接.</li><li>完成增加新程序表格.</li><li>选择同意复选框并点击新增程序.</li><li>在程序详情页面找到Linkedin&#169的API和机密密钥; 连接器 (管理 – 连接器 - Linkedin&#169;) 并输入以下密钥.</li><li>点击保存.</li></ol></td></tr></table>',

    'LBL_NAME' => '公司名称',

	//Configuration labels
	'company_url' => 'URL',
    'oauth_consumer_key' => 'API 密钥',
    'oauth_consumer_secret' => '机密密钥'
);

?>