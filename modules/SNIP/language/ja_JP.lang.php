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
  'LBL_SNIP_SUMMARY' => 'メールアーカイブは、Sugarが提供するメールアドレスに電子メールを送信することによって、メールクライアントやサービスからSugarに自動的に電子メールをインポートすることが可能なサービスです。それぞれのSugarインスタンスはユニークな電子メールアドレスを持ちます。電子メールをインポートするには、TO, CC, BCCフィールドに提供されたメールアドレスを追加して電子メールを送信します。メールアーカイブサービスはSugarインスタンスにメールをインポートします。サービスはアプリケーションにメール、添付ファイル、画像、カレンダーイベントをインポートし、メールアドレスがマッチする既存のレコードに関連付けます。<br><br>例: ユーザが取引先を閲覧する場合、取引先レコードのメールアドレスに基づいて関連付けた電子メールをすべて閲覧することができます。取引先に関連付けられている取引先担当者の電子メールもすべて閲覧することができます。<br><br>サービスの使用を開始するには以下の規約に同意し、サービスを有効にしてください。サービスはいつでも無効にできます。サービスが有効になるとサービスで使用するメールアドレスが表示されます。<br><br>',
  'LBL_REGISTER_SNIP_FAIL' => 'メールアーカイブサービスへのコンタクトに失敗しました: %s!<br>',
  'LBL_CONFIGURE_SNIP' => 'メールアーカイブ中',
  'LBL_DISABLE_SNIP' => '無効',
  'LBL_SNIP_APPLICATION_UNIQUE_KEY' => 'アプリケーションユニークキー',
  'LBL_SNIP_USER' => 'メールアーカイブユーザ',
  'LBL_SNIP_PWD' => 'メールアーカイブパスワード',
  'LBL_SNIP_SUGAR_URL' => 'SugarインスタンスURL',
  'LBL_SNIP_CALLBACK_URL' => 'メールアーカイブサービスURL',
  'LBL_SNIP_USER_DESC' => 'メールアーカイブユーザ',
  'LBL_SNIP_KEY_DESC' => 'メールアーカイブ OAuthキー。Used for acessing this instance for purposes of importing emails.',
  'LBL_SNIP_STATUS_OK' => '有効',
  'LBL_SNIP_STATUS_OK_SUMMARY' => 'メールアーカイブサーバへの接続に成功しました。',
  'LBL_SNIP_STATUS_ERROR' => 'エラー',
  'LBL_SNIP_STATUS_ERROR_SUMMARY' => 'インスタンスは有効なメールアーカイブライセンスを保持していますが、サーバは以下のエラーを返しました。',
  'LBL_SNIP_STATUS_FAIL' => 'メールアーカイブサーバに登録できません。',
  'LBL_SNIP_STATUS_FAIL_SUMMARY' => 'メールアーカイブサービスは現在利用できません。サービスがダウンしているかSugarインスタンスへの接続に失敗しています。',
  'LBL_SNIP_GENERIC_ERROR' => 'メールアーカイブサービスは現在利用できません。サービスがダウンしているかSugarインスタンスへの接続に失敗しています。',
  'LBL_SNIP_STATUS_RESET' => 'まだ実行されていません',
  'LBL_SNIP_STATUS_PROBLEM' => '問題: %s',
  'LBL_SNIP_NEVER' => 'なし',
  'LBL_SNIP_STATUS_SUMMARY' => 'メールアーカイブサービスステータス',
  'LBL_SNIP_ACCOUNT' => '取引先',
  'LBL_SNIP_STATUS' => 'ステータス',
  'LBL_SNIP_LAST_SUCCESS' => '最後に成功した実行',
  'LBL_SNIP_DESCRIPTION' => 'メールアーカイブサービスは自動的に電子メールをシステムに保存しています。',
  'LBL_SNIP_DESCRIPTION_SUMMARY' => '手動でインポートやリンクを使用することなしにSugarCRMの取引先担当者へ送信または取引先担当者から受信した電子メールを閲覧することができます。',
  'LBL_SNIP_PURCHASE_SUMMARY' => 'メールアーカイブを使用するには、SugarCRMインスタンス用のライセンスを購入する必要があります。',
  'LBL_SNIP_PURCHASE' => '購入するにはここをクリック',
  'LBL_SNIP_EMAIL' => 'メールアーカイブアドレス',
  'LBL_SNIP_AGREE' => '上記の規約と <a href=&#39;http://www.sugarcrm.com/crm/TRUSTe/privacy.html&#39; target=&#39;_blank&#39;>プライバシー契約</a>に同意します。',
  'LBL_SNIP_PRIVACY' => 'プライバシー契約',
  'LBL_SNIP_STATUS_PINGBACK_FAIL' => 'Pingback失敗',
  'LBL_SNIP_STATUS_PINGBACK_FAIL_SUMMARY' => 'メールアーカイブサーバはSugarインスタンスとの接続を確立できません。再度実施するかカスタマーサポートに連絡してください。',
  'LBL_SNIP_BUTTON_ENABLE' => 'メールアーカイブを有効',
  'LBL_SNIP_BUTTON_DISABLE' => 'メールアーカイブを無効',
  'LBL_SNIP_BUTTON_RETRY' => '再接続',
  'LBL_SNIP_ERROR_DISABLING' => 'メールアーカイブサーバに接続中にエラーが発生し、サービスを無効にすることができませんでした。',
  'LBL_SNIP_ERROR_ENABLING' => 'メールアーカイブサーバに接続中にエラーが発生し、サービスを有効にすることができませんでした。',
  'LBL_CONTACT_SUPPORT' => '再度実施するかカスタマーサポートに連絡してください。',
  'LBL_SNIP_SUPPORT' => 'カスタマーサポートに連絡してください。',
  'ERROR_BAD_RESULT' => 'サービスからBad result が返されました',
  'ERROR_NO_CURL' => 'cURLエクステンションが必要ですが有効になっていません',
  'ERROR_REQUEST_FAILED' => 'サーバにコンタクトできません',
  'LBL_CANCEL_BUTTON_TITLE' => 'キャンセル',
  'LBL_SNIP_MOUSEOVER_STATUS' => 'このインスタンスのメールアーカイブサービスのステータスです。ステータスにはメールアーカイブサーバとSugarインスタンスとの間の接続が成功しているかが反映されています。',
  'LBL_SNIP_MOUSEOVER_EMAIL' => 'Sugarに送信した電子メールをインポートするメールアーカイブのメールアドレスです。',
  'LBL_SNIP_MOUSEOVER_SERVICE_URL' => 'メールアーカイブサーバのURLです。メールアーカイブサービスの有効化、無効化等のリクエストはすべて本URLで実施されます。',
  'LBL_SNIP_MOUSEOVER_INSTANCE_URL' => 'SugarインスタンスのウェブサービスのURLです。メールアーカイブサーバはこのURLに接続します。',
);

