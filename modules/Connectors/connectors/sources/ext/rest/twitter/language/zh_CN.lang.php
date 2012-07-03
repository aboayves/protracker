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
  'LBL_ID' => 'Twitter用户名',
  'LBL_LICENSING_INFO' => '<table border="0" cellspacing="1"><tr><td valign="top" width="35%" class="dataLabel">从Twitter&#169获取一个消费者Key和密匙Twitter&#169; 注册您的Sugar实例为一个新程序.<br/><br>注册实例的步骤:<br/><br/><ol><li>到Twitter&#169;开发者站点: <a href=$#39;http://dev.twitter.com/apps/new$#39; target=$#39;_blank$#39;>http://dev.twitter.com/apps/new</a>.</li><li>使用您想为之注册程序的Twitter账户登陆.</li><li>在注册表格内，输入名称和描述.在验证用户的Twitter账户时，他们可以在Sugar内部看到这个名称.</li><li>输入一段描述.</li><li>输入一个程序的网站URL(可以是任意内容).</li><li>为程序类型选择 "浏览器".</li><li>在为程序类型选择 "浏览器"之后，输入一个电话回访的URL(可为任意内容，因为Sugar在验证过程中已将其忽视. 例如: 输入您的Sugar源URL).</li><li>输入验证字符.</li><li>点击 "注册程序".</li><li>接受Twitter的API服务条款.</li><li>在程序页面内, 找到用户密钥和用户机密.输入以下密钥和机密.</li></ol></td></tr></table>',
  'LBL_NAME' => 'Twitter用户名',
  'company_url' => 'URL',
  'oauth_consumer_key' => '用户密钥',
  'oauth_consumer_secret' => '用户机密',
);

