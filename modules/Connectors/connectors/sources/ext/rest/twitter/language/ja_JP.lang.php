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
  'company_url' => 'URL',
  'oauth_consumer_key' => 'Consumer Key',
  'oauth_consumer_secret' => 'Consumer Secret',
  'LBL_LICENSING_INFO' => '<table border="0" cellspacing="1"><tr><td valign="top" width="35%" class="dataLabel">Twitter&amp;#169でSugarインスタンスを新規アプリケーションとして登録し、Consumer KeyとConsumer Secretを取得してください。<br/><br>Steps to register your instance:<br/><br/><ol><li>Twitter&amp;#169;ディベロッパーサイト（<a href=&amp;#39;http://dev.twitter.com/apps/new&amp;#39; target=&amp;#39;_blank&amp;#39;>http://dev.twitter.com/apps/new</a>）を訪問します。</li><li>アプリケーションを登録するツイッターアカウントでサインインします。</li><li>登録フォームにアプリケーション名を入力します。これは、Sugar内部からツイッターを認証する際にユーザが識別する名前になります。</li><li>備考を入力します。</li><li>アプリケーションのURLを入力します。</li><li>アプリケーションタイプとしてブラウザを選択します。</li><li>コールバックURLを入力します（Sugarは認証の際にここをバイパスするので、何でも構いません。例: SugarのルートURL）。</li><li>セキュリティワードを入力します。</li><li>アプリケーションの登録をクリックします。</li><li>ツイッターAPIの利用規約に同意します。</li><li>アプリケーションページでConsumer KeyとConsumer Secretを確認し、以下に入力します。</li></ol></td></tr></table>',
  'LBL_NAME' => 'ツイッターユーザ名',
  'LBL_ID' => 'ツイッターユーザ名',
);


