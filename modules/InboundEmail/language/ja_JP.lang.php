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
  'LBL_RE' => 'RE:',
  'LBL_FIND_OPTIMUM_KEY' => 'f',
  'LBL_TEST_BUTTON_KEY' => 't',
  'LBL_ASSIGN_TEAM' => 'チームにアサイン',
  'ERR_BAD_LOGIN_PASSWORD' => 'ログインIDかパスワードが不正です',
  'ERR_BODY_TOO_LONG' => '\\r本文が長すぎてメール全体を取り込めません。整形されました。',
  'ERR_INI_ZLIB' => 'Zlibコンプレッションを一時的に無効にできませんでした。設定テストが失敗する可能性があります。',
  'ERR_MAILBOX_FAIL' => 'メールアカウントを検索できませんでした。',
  'ERR_NO_IMAP' => 'IMAPライブラリが見つかりませんでした。インバウンドメールを継続する前に解決してください。',
  'ERR_NO_OPTS_SAVED' => 'あなたのインバウンドメールアカウントに最適な条件は１つも保存されませんでした。設定を見直してください。',
  'ERR_TEST_MAILBOX' => '設定を確認して再試行してください。',
  'LBL_APPLY_OPTIMUMS' => '最適設定を実行',
  'LBL_ASSIGN_TO_USER' => 'ユーザにアサイン',
  'LBL_AUTOREPLY_OPTIONS' => '自動返信オプション',
  'LBL_AUTOREPLY' => '自動返信テンプレート',
  'LBL_AUTOREPLY_HELP' => '自動返信オプションを選択することによって、メールの送信者に対し、メールを受信したことを通知することができます。',
  'LBL_BASIC' => 'メールアカウント情報',
  'LBL_CASE_MACRO' => 'ケースマクロ',
  'LBL_CASE_MACRO_DESC' => '受信したメールをケースに関連付けるためのマクロを設定してください。',
  'LBL_CASE_MACRO_DESC2' => '任意の値を設定できますが、<b>「%1」</b>は残してください。',
  'LBL_CERT_DESC' => 'メールサーバのセキュリティ証明書の認証を強制します。自己署名の場合は使用しないでください。',
  'LBL_CERT' => '有効な証明書',
  'LBL_CLOSE_POPUP' => 'ウィンドウを閉じる',
  'LBL_CREATE_NEW_GROUP' => '--保存時にグループを作成--',
  'LBL_CREATE_TEMPLATE' => '作成',
  'LBL_SUBSCRIBE_FOLDERS' => 'フォルダを購読',
  'LBL_DEFAULT_FROM_ADDR' => 'デフォルト:',
  'LBL_DEFAULT_FROM_NAME' => 'デフォルト:',
  'LBL_DELETE_SEEN' => '受信したメールをメールサーバから削除',
  'LBL_EDIT_TEMPLATE' => '編集',
  'LBL_EMAIL_OPTIONS' => '電子メール処理オプション',
  'LBL_EMAIL_BOUNCE_OPTIONS' => 'バウンス処理オプション',
  'LBL_FILTER_DOMAIN_DESC' => 'このドメインに自動返信を送信しない。',
  'LBL_ASSIGN_TO_GROUP_FOLDER_DESC' => 'グループフォルダに電子メールアカウントを割り当て、電子メールの自動インポートを有効にする。',
  'LBL_POSSIBLE_ACTION_DESC' => 'ケースを作成オプションを選ぶには、グループフォルダが選択されていなければいけません。',
  'LBL_FILTER_DOMAIN' => '以下のドメインに自動送信しない',
  'LBL_FIND_OPTIMUM_MSG' => '<br>最適な接続の設定を検出',
  'LBL_FIND_OPTIMUM_TITLE' => '最適な設定を検出',
  'LBL_FIND_SSL_WARN' => '<br>SSLのテストには時間がかかる場合があります。しばらくお待ちください。',
  'LBL_FORCE_DESC' => 'いくつかのIMAP/POP3サーバは特別なスイッチを必要とします。チェックを入れると接続時にネガティブスイッチを強制します。（例: /notls）',
  'LBL_FORCE' => 'ネガティブを強制',
  'LBL_FOUND_MAILBOXES' => '以下の使用可能なフォルダを検出しました:<br>選択してください:',
  'LBL_FOUND_OPTIMUM_MSG' => '<br>最適な設定を検出しました。下記のボタンをクリックするとこの受信箱に設定を適用できます。',
  'LBL_FROM_ADDR' => '送信元（From）のアドレス',
  'LBL_FROM_ADDR_DESC' => 'メールサービスプロバイダの制約により、ここで指定された電子メールアドレスが送信済みメールのFromに表示されない場合があります。このような場合は、送信サーバ用のアカウントが用いられます。',
  'LBL_FROM_NAME_ADDR' => '名前/メールから',
  'LBL_FROM_NAME' => '送信元（From）の名前',
  'LBL_GROUP_QUEUE' => 'グループにアサイン',
  'LBL_HOME' => 'ホーム',
  'LBL_LIST_MAILBOX_TYPE' => '受信箱用途',
  'LBL_LIST_NAME' => '名前:',
  'LBL_LIST_GLOBAL_PERSONAL' => 'タイプ',
  'LBL_LIST_SERVER_URL' => 'メールサーバ',
  'LBL_LIST_STATUS' => 'ステータス:',
  'LBL_LOGIN' => 'ユーザ名',
  'LBL_MAILBOX_DEFAULT' => '受信箱',
  'LBL_MAILBOX_SSL_DESC' => '接続時にSSLを利用します。これが機能しない場合、PHPが「--with-imap-ssl」オプションでコンパイルされているかどうか確認してください。',
  'LBL_MAILBOX_SSL' => 'SSL利用',
  'LBL_MAILBOX_TYPE' => '可能なアクション',
  'LBL_DISTRIBUTION_METHOD' => '配布方式',
  'LBL_CREATE_CASE_REPLY_TEMPLATE' => 'ケース返信テンプレート作成',
  'LBL_CREATE_CASE_REPLY_TEMPLATE_HELP' => '自動返信オプションを選択することによって、メールの送信者に対し、ケースが作成されたことを通知することができます。電子メールの件名欄には、ケースマクロに応じて生成されたケース番号が付加されます。この返信は、メールが最初に送信されたときにのみ送付されます。',
  'LBL_MAILBOX' => '監視フォルダ',
  'LBL_TRASH_FOLDER' => 'ごみ箱',
  'LBL_GET_TRASH_FOLDER' => 'ごみ箱の取得',
  'LBL_SENT_FOLDER' => '送信済みフォルダ',
  'LBL_GET_SENT_FOLDER' => '送信済みフォルダの取得',
  'LBL_SELECT' => '選択',
  'LBL_MARK_READ_DESC' => '受信時にメールサーバ上のメールを削除せずに既読フラグを立てます。',
  'LBL_MARK_READ_NO' => '受信後に削除フラグを立てる',
  'LBL_MARK_READ_YES' => '受信後にサーバにメールを保存',
  'LBL_MARK_READ' => 'メールをサーバに保存',
  'LBL_MAX_AUTO_REPLIES' => '自動応答の数',
  'LBL_MAX_AUTO_REPLIES_DESC' => '同一のメールアドレスに24時間以内に送信される自動応答の最大数をセットしてください',
  'LBL_PERSONAL_MODULE_NAME' => '個人のメールアカウント',
  'LBL_CREATE_CASE' => 'メールからケースを作成',
  'LBL_CREATE_CASE_HELP' => '受信メールから自動的にケースを作成する場合に選択してください。',
  'LBL_MODULE_NAME' => 'グループメールアカウント',
  'LBL_BOUNCE_MODULE_NAME' => 'バウンス処理用受信箱',
  'LBL_MODULE_TITLE' => 'インバウンドメール',
  'LBL_NAME' => '名前',
  'LBL_NONE' => 'なし',
  'LBL_NO_OPTIMUMS' => '最適設定が見つかりませんでした。設定を確認して再度実行してください。',
  'LBL_ONLY_SINCE_DESC' => 'POP3を用いる場合、PHPは新規メールと未読メールを区分できません。IMAPをサポートしていない場合、このフラグを設定することにより、最後に受信箱をチェックした時間以降のメッセージのみをチェックできるため、性能を著しく向上させることが可能です。',
  'LBL_ONLY_SINCE_NO' => 'いいえ。メールサーバのすべての電子メールをチェックします。',
  'LBL_ONLY_SINCE_YES' => 'はい。',
  'LBL_ONLY_SINCE' => '最後のチェック以降の新規メールのみ:',
  'LBL_OUTBOUND_SERVER' => '送信メールサーバ',
  'LBL_PASSWORD_CHECK' => 'パスワードチェック',
  'LBL_PASSWORD' => 'パスワード',
  'LBL_POP3_SUCCESS' => 'POP3の接続テストに成功しました。',
  'LBL_POPUP_FAILURE' => 'テスト接続に失敗しました。エラーは以下のとおりです。',
  'LBL_POPUP_SUCCESS' => 'テスト接続に成功しました。設定が有効に機能しています。',
  'LBL_POPUP_TITLE' => '設定のテスト',
  'LBL_GETTING_FOLDERS_LIST' => 'フォルダリストを取得中',
  'LBL_SELECT_SUBSCRIBED_FOLDERS' => '購読するフォルダの選択',
  'LBL_SELECT_TRASH_FOLDERS' => 'ごみ箱の選択',
  'LBL_SELECT_SENT_FOLDERS' => '送信済みフォルダの選択',
  'LBL_DELETED_FOLDERS_LIST' => '次のフォルダ %s は存在しないかサーバで削除されました。',
  'LBL_PORT' => 'メールサーバのポート',
  'LBL_QUEUE' => 'メールアカウントキュー',
  'LBL_REPLY_NAME_ADDR' => '返信用の名前/電子メール',
  'LBL_REPLY_TO_NAME' => '返信先（Reply-To）の名前',
  'LBL_REPLY_TO_ADDR' => '返信先（Reply-To）のアドレス',
  'LBL_SAME_AS_ABOVE' => '名前/メールから利用',
  'LBL_SAVE_RAW' => 'メールを加工せずに保存',
  'LBL_SAVE_RAW_DESC_1' => '受信メールを未加工のまま追加で保存する場合は「はい」を選択してください。',
  'LBL_SAVE_RAW_DESC_2' => 'データベースのスキーマ定義やその他サイズに関連する設定値以上のメールを受信した場合、メールが正常に保存されません。',
  'LBL_SERVER_OPTIONS' => 'メールサーバオプション',
  'LBL_SERVER_TYPE' => 'メールサーバプロトコル',
  'LBL_SERVER_URL' => '受信メールサーバ',
  'LBL_SSL_DESC' => 'メールサーバがSSLをサポートする場合、SSLを利用してメールを受信します。',
  'LBL_ASSIGN_TO_TEAM_DESC' => '選択されたチームは電子メールアカウントへアクセスできます。グループフォルダを選択すると、グループフォルダのアサイン先チームは選択したチームに上書きされます。',
  'LBL_SSL' => 'SSL利用',
  'LBL_STATUS' => 'ステータス',
  'LBL_SYSTEM_DEFAULT' => 'システムデフォルト',
  'LBL_TEST_BUTTON_TITLE' => 'テスト[Alt+T]',
  'LBL_TEST_SETTINGS' => '設定のテスト',
  'LBL_TEST_SUCCESSFUL' => '接続に成功しました。',
  'LBL_TEST_WAIT_MESSAGE' => 'しばらくお待ちください...',
  'LBL_TLS_DESC' => 'メールサーバとの接続にTransport Layer Securityを用います。メールサーバがサポートしている場合に利用してください。',
  'LBL_TLS' => 'TLS利用',
  'LBL_WARN_IMAP_TITLE' => 'IMAP警告',
  'LBL_WARN_IMAP' => '警告一覧:',
  'LBL_WARN_NO_IMAP' => 'このシステムはPHPモジュールにIMAP c-clientライブラリ（--with-imap=/path/to/imap_c-client_library）が入っていません。この問題を解決するには管理者に連絡してください。',
  'LNK_CREATE_GROUP' => 'グループ作成',
  'LNK_LIST_CREATE_NEW_GROUP' => 'グループメールアカウント作成',
  'LNK_LIST_CREATE_NEW_BOUNCE' => 'バウンス処理用アカウント作成',
  'LNK_LIST_MAILBOXES' => 'すべてのメールアカウント',
  'LNK_LIST_QUEUES' => 'すべてのキュー',
  'LNK_LIST_SCHEDULER' => 'スケジューラー',
  'LNK_LIST_TEST_IMPORT' => '電子メールインポートをテスト',
  'LNK_NEW_QUEUES' => 'キューの作成',
  'LNK_SEED_QUEUES' => 'チームからのシードキュー',
  'LBL_IS_PERSONAL' => '個人',
  'LBL_GROUPFOLDER_ID' => 'グループフォルダID',
  'LBL_ASSIGN_TO_GROUP_FOLDER' => 'グループフォルダにアサイン',
  'LBL_ALLOW_OUTBOUND_GROUP_USAGE' => 'ユーザがメールを送信する際に「From」の名前とアドレスをReply Toに利用することを許可する。',
  'LBL_ALLOW_OUTBOUND_GROUP_USAGE_DESC' => 'このオプションが選択された場合、このグループアカウントに関連付けられたFromの名前とアドレスは送信元の選択リストに表示されます。',
  'LBL_STATUS_ACTIVE' => 'アクティブ',
  'LBL_STATUS_INACTIVE' => '非アクティブ',
  'LBL_IS_GROUP' => 'グループ',
  'LBL_ENABLE_AUTO_IMPORT' => '電子メールを自動的にインポート',
  'LBL_WARNING_CHANGING_AUTO_IMPORT' => '警告: 自動的にインポートする設定を変更しようとしています。設定の変更によりデータが失われる可能性があります。',
  'LBL_WARNING_CHANGING_AUTO_IMPORT_WITH_CREATE_CASE' => '警告: ケースを自動的に作成する場合は自動インポートが有効に設定されている必要があります。',
  'LBL_EDIT_LAYOUT' => 'レイアウト編集',
);

