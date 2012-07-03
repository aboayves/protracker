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
  'LBL_LICENSING_INFO' => '<table border="0" cellspacing="1"><tr><td valign="top" width="35%" class="dataLabel">为您的Sugar实例创建一个应用来从Facebook&#169; 获得一个API键值和应用秘密：<br/><br/><ol><li>去下面的Facebook&#169; 页面来创建应用： <a href=$#39;http://www.facebook.com/developers/createapp.php$#39; target=$#39;_blank$#39;>http://www.facebook.com/developers/createapp.php</a>.</li><li>使用您希望创建应用的帐号来登陆到Facebook&#169;。</li><li>在"Create Application"页面，为这个应用输入一个名字，当用户验证时他们将在Sugar内看到这个名字。</li><li>选择 "Agree" 来同意Facebook&#169;的条款</li><li>Click "Create App"</li><li>输入并提交安全验证语来通过安全检查。</li><li>在您的应用页面，去到 "Web Site" 区域(链接在左手边菜单) 并输入您SugarCRM的本地URL来作为"Site URL."</li><li>点击 "Save Changes"</li><li>去到 "Facebook Integration" 页面(链接在左手边菜单) 并找到API键值和应用密码，输入您的应用ID和应用密码在下方。</li></ol></td></tr></table>',
  'oauth_consumer_key' => 'API键值',
  'oauth_consumer_secret' => '应用密码',
);

