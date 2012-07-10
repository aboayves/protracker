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
  'LBL_LICENSING_INFO' => '<table border="0" cellspacing="1"><tr><td valign="top" width="35%" class="dataLabel">Facebook&amp;#169;（<a href=\'http://www.facebook.com/developers/createapp.php\' target=\'_blank\'>http://www.facebook.com/developers/createapp.php</a>）でSugarインスタンスを新しいアプリケーションとして登録し、APIキーとAppシークレットを取得します。<br/><br>登録方法は下記の通りです。<br/><br/><ol><li>Facebook&amp;#169; to create the application: <a href=</li><li>アプリケーションを生成するアカウントでFacebook&amp;#169;にサインインしてください。</li><li>アプリケーションの生成ページでアプリケーションの名前を入力してください。これは、Sugar内部でFacebook&amp;#169;アカウントを認証する際にユーザが認識する名前です。.</li><li>Facebook&amp;#169;利用規約に同意してください。</li><li>アプリの生成をクリックしてください。</li><li>セキュリティチェックに渡すセキュリティワードを入力してください。</li><li>登録ページでWebサイトに進み、SugarインスタンスのURLを入力してください。</li><li>更新を保存してください。</li><li>左側メニューのFacebookインテグレーションのページに進み、APIキーとシークレットを確認してください。アプリケーションIDとシークレットを下記に入力してください。</li></ol></td></tr></table>',
  'oauth_consumer_key' => 'APIキー',
  'oauth_consumer_secret' => 'アプリシークレット',
);

