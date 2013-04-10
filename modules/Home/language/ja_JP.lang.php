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
  'LBL_SEARCH_RESULTS_IN' => 'in',
  'LBL_WEB' => 'Web',
  'LBL_SUGAR_COMMUNITY_EDITION' => 'Sugar Community Edition',
  'LBL_SUGAR_PROFESSIONAL' => 'Sugar Professional',
  'LBL_SUGAR_ENTERPRISE' => 'Sugar Enterprise',
  'LBL_WIKI' => 'Wiki',
  'LBL_SOURCE_PHPSQL' => 'PHP SQL Parser',
  'LBL_POWERED_BY_SUGAR' => 'Powered By SugarCRM',
  'LBL_MODULE_NAME' => 'ホーム',
  'LBL_MODULES_TO_SEARCH' => 'モジュール検索',
  'LBL_NEW_FORM_TITLE' => '取引先担当者作成',
  'LBL_FIRST_NAME' => '名:',
  'LBL_LAST_NAME' => '姓:',
  'LBL_LIST_LAST_NAME' => '姓',
  'LBL_PHONE' => '電話:',
  'LBL_EMAIL_ADDRESS' => '電子メール:',
  'LBL_MY_PIPELINE_FORM_TITLE' => '私のパイプライン',
  'LBL_PIPELINE_FORM_TITLE' => 'セールスステージ別パイプライン',
  'LBL_CAMPAIGN_ROI_FORM_TITLE' => 'キャンペーンROI',
  'LBL_MY_CLOSED_OPPORTUNITIES_GAUGE' => '私の受注済み商談',
  'LNK_NEW_CONTACT' => '取引先担当者作成',
  'LNK_NEW_ACCOUNT' => '取引先作成',
  'LNK_NEW_OPPORTUNITY' => '商談作成',
  'LNK_NEW_QUOTE' => '見積作成',
  'LNK_NEW_LEAD' => 'リード作成',
  'LNK_NEW_CASE' => 'ケース作成',
  'LNK_NEW_NOTE' => 'メモ作成',
  'LNK_NEW_CALL' => '電話作成',
  'LNK_NEW_EMAIL' => 'アーカイブ電子メール',
  'LNK_COMPOSE_EMAIL' => '電子メール作成',
  'LNK_NEW_MEETING' => '会議作成',
  'LNK_NEW_TASK' => 'タスク作成',
  'LNK_NEW_BUG' => '不具合作成',
  'LBL_ADD_BUSINESSCARD' => '名刺から作成',
  'ERR_ONE_CHAR' => '検索を実行するには少なくとも１文字を入力してください...',
  'LBL_OPEN_TASKS' => '私の未完了タスク',
  'LBL_SEARCH_RESULTS' => '検索結果',
  'LNK_NEW_SEND_EMAIL' => '電子メール作成',
  'LBL_NO_ACCESS' => 'アクセス権限がありません。システム管理者に連絡してください。',
  'LBL_NO_RESULTS_IN_MODULE' => '-- 検索結果なし --',
  'LBL_NO_RESULTS' => '<h2>検索結果が見つかりませんでした。検索条件を変えてください。</h2><br>',
  'LBL_NO_RESULTS_TIPS' => '<h3>検索のコツ: </h3><ul><li>検索すべきカテゴリが正しく選択されていることを確認してください。</li><li>検索条件を緩やかにしてください。</li><li>それでも検索結果が１件も見つからない場合、詳細検索を試してみてください。</li></ul>',
  'LBL_RELOAD_PAGE' => 'このダッシュレットを使用するには<a href="javascript: window.location.reload()">画面をリロード</a>してください。',
  'LBL_ADD_DASHLETS' => 'ダッシュレットの追加',
  'LBL_ADD_PAGE' => 'ページを追加',
  'LBL_DEL_PAGE' => 'ページを削除',
  'LBL_WEBSITE_TITLE' => 'Webサイト',
  'LBL_RSS_TITLE' => 'ニュースフィード',
  'LBL_DELETE_PAGE' => 'ページを削除',
  'LBL_CHANGE_LAYOUT' => 'レイアウトを変更',
  'LBL_RENAME_PAGE' => 'ページをリネーム',
  'LBL_CLOSE_DASHLETS' => '完了',
  'LBL_CLOSE_SITEMAP' => '閉じる',
  'LBL_OPTIONS' => 'オプション',
  'LBL_TODAY' => '今日',
  'LBL_YESTERDAY' => '昨日',
  'LBL_TOMORROW' => '明日',
  'LBL_LAST_WEEK' => '先週',
  'LBL_NEXT_WEEK' => '翌週',
  'LBL_LAST_7_DAYS' => '過去7日間',
  'LBL_NEXT_7_DAYS' => '次の7日間',
  'LBL_LAST_MONTH' => '先月',
  'LBL_NEXT_MONTH' => '翌月',
  'LBL_LAST_QUARTER' => '先四半期',
  'LBL_THIS_QUARTER' => '今四半期',
  'LBL_LAST_YEAR' => '昨年',
  'LBL_NEXT_YEAR' => '翌年',
  'LBL_LAST_30_DAYS' => '過去30日',
  'LBL_NEXT_30_DAYS' => '次の30日',
  'LBL_THIS_MONTH' => '今月',
  'LBL_THIS_YEAR' => '今年',
  'LBL_MODULES' => 'モジュール',
  'LBL_CHARTS' => 'チャート',
  'LBL_TOOLS' => 'ツール',
  'LBL_MAX_DASHLETS_REACHED' => '管理者が設定したダッシュレットの最大作成数に達しました。不要なダッシュレットを削除してから新規に作成してください。',
  'LBL_ADDING_DASHLET' => 'ダッシュレットの追加中....',
  'LBL_ADDED_DASHLET' => 'ダッシュレットが追加されました。',
  'LBL_REMOVE_DASHLET_CONFIRM' => '本当にダッシュレットをはずしてよいですか？',
  'LBL_REMOVING_DASHLET' => 'ダッシュレットをはずしています...',
  'LBL_REMOVED_DASHLET' => 'ダッシュレットがはずされました。',
  'LBL_DASHLET_CONFIGURE_GENERAL' => '一般',
  'LBL_DASHLET_CONFIGURE_FILTERS' => '絞り込み',
  'LBL_DASHLET_CONFIGURE_MY_ITEMS_ONLY' => '私のアイテムのみ',
  'LBL_DASHLET_CONFIGURE_TITLE' => 'タイトル',
  'LBL_DASHLET_CONFIGURE_DISPLAY_ROWS' => '行の表示',
  'LBL_DASHLET_DELETE' => 'ダッシュレットの削除',
  'LBL_DASHLET_REFRESH' => 'ダッシュレットの更新',
  'LBL_DASHLET_EDIT' => 'ダッシュレットの編集',
  'LBL_TRAINING_TITLE' => 'トレーニング',
  'LBL_CREATING_NEW_PAGE' => '新しいページを作成中...',
  'LBL_NEW_PAGE_FEEDBACK' => '新しいページを作成しました。ダッシュレットを選択することで新たなコンテンツを追加することができます。',
  'LBL_DELETE_PAGE_CONFIRM' => '本当にこのページを削除してよいですか?',
  'LBL_SAVING_PAGE_TITLE' => 'ページタイトルを保存中...',
  'LBL_RETRIEVING_PAGE' => 'ページを取得中...',
  'LBL_HOME_PAGE_1_NAME' => '私のSugar',
  'LBL_HOME_PAGE_2_NAME' => '営業',
  'LBL_HOME_PAGE_3_NAME' => 'サポー',
  'LBL_HOME_PAGE_6_NAME' => 'マーケティング',
  'LBL_HOME_PAGE_4_NAME' => 'トラッカー',
  'LBL_SEARCH' => '検索',
  'LBL_CLEAR' => 'クリア',
  'LBL_BASIC_CHARTS' => '基本チャート',
  'LBL_REPORT_CHARTS' => 'レポートチャート',
  'LBL_MY_FAVORITE_REPORT_CHARTS' => '私のお気に入りレポート',
  'LBL_GLOBAL_REPORT_CHARTS' => 'グローバルチームのレポート',
  'LBL_MY_TEAM_REPORT_CHARTS' => '私のチームのレポート',
  'LBL_MY_SAVED_REPORT_CHARTS' => '私の保存済みレポート',
  'LBL_DASHLET_SEARCH' => 'ダッシュレット検索',
  'LBL_VERSION' => 'バージョン',
  'LBL_BUILD' => 'ビルド',
  'LBL_AND' => 'と',
  'LBL_ARE' => 'は',
  'LBL_TRADEMARKS' => '商標',
  'LBL_OF' => 'の',
  'LBL_FOUNDERS' => '創設者',
  'LBL_JOIN_SUGAR_COMMUNITY' => 'Sugarコミュニティへ参加',
  'LBL_DETAILS_SUGARFORGE' => 'Sugar拡張機能への協力と開発',
  'LBL_DETAILS_SUGAREXCHANGE' => '認定済みモジュールの購入と販売',
  'LBL_TRAINING' => 'トレーニング',
  'LBL_DETAILS_TRAINING' => 'オンラインのインタラクティブ教材を使ってSugarを学習',
  'LBL_FORUMS' => 'フォーラム',
  'LBL_DETAILS_FORUMS' => '経験豊かなコミュニティユーザや開発者と討論',
  'LBL_DETAILS_WIKI' => 'ユーザおよび開発者トピックのナレッジベース検索',
  'LBL_DEVSITE' => '開発者サイト',
  'LBL_DETAILS_DEVSITE' => 'Sugarの開発を加速するリソース、チュートリアル、便利なリンクの発見',
  'LBL_GET_SUGARCRM_RSS' => 'SugarCRM RSSを取得',
  'LBL_SUGARCRM_NEWS' => 'SugarCRM ニュース',
  'LBL_SUGARCRM_TRAINING_NEWS' => 'SugarCRM トレーニングニュース',
  'LBL_SUGARCRM_FORUMS' => 'SugarCRM フォーラム',
  'LBL_SUGARFORGE_NEWS' => 'SugarForge ニュース',
  'LBL_ALL_NEWS' => 'すべてのニュース',
  'LBL_LINK_CURRENT_CONTRIBUTORS' => '最新のSugarCRMコントリビュータのリストへ!',
  'LBL_SOURCE_CODE' => 'ソースコード',
  'LBL_SOURCE_SUGAR' => 'Sugar - SugarCRM社が開発した世界でもっとも有名な営業支援システム',
  'LBL_SOURCE_XTEMPLATE' => 'XTemplate - Barnabás Debreceniによって開発されたPHPテンプレートエンジン',
  'LBL_SOURCE_NUSOAP' => 'NuSOAP - NuSphere CorporationとDietrich Ayalaによって開発されたWebサービス用PHPクラス',
  'LBL_SOURCE_JSCALENDAR' => 'JS Calendar - Mihai Bazonによって開発された日付入力用カレンダー',
  'LBL_SOURCE_PHPPDF' => 'PHP PDF - Wayne Munroによって開発されたPDFドキュメント作成用ライブラリ',
  'LBL_SOURCE_HTTP_WEBDAV_SERVER' => 'HTTP_WebDAV_Server - WebDAVサーバのPHP実装',
  'LBL_SOURCE_PCLZIP' => 'PclZip - Vincent Blavetにより開発されたZIP形式圧縮ライブラリ',
  'LBL_SOURCE_SMARTY' => 'Smarty - PHPテンプレートエンジン',
  'LBL_SOURCE_YAHOO_UI_LIB' => 'Yahoo! User Interface Library - リッチクライアントを実装するUIライブラリ',
  'LBL_SOURCE_PHPMAILER' => 'PHPMailer - PHP用のメール送信クラス',
  'LBL_SOURCE_JSHRINK' => 'JShrink -PHPで記載されたJavascript最小化ツール',
  'LBL_SOURCE_CRYPT_BLOWFISH' => 'Crypt_Blowfish - MCrypt PHPエクステンションを用いずに双方向blowfish暗号化を実現',
  'LBL_SOURCE_XML_HTMLSAX3' => 'XML_HTMLSax3 - ＨＴＭＬやフォーマットされていないXML用のSAXパーサ',
  'LBL_SOURCE_YAHOO_UI_LIB_EXT' => 'Yahoo! UI Extensions Library - Jack Slocumにより開発されたYahoo! User Interface Libraryの拡張',
  'LBL_SOURCE_SWFOBJECT' => 'SWFObject - Javascript Flash Player検出・組み込みスクリプト',
  'LBL_SOURCE_TINYMCE' => 'TinyMCE - WYSIWYGエディタ',
  'LBL_SOURCE_EXT' => 'Ext - クライアントサイドJavaScriptフレームワーク',
  'LBL_SOURCE_RECAPTCHA' => 'reCAPTCHA - CAPTCHAサービス',
  'LBL_SOURCE_TCPDF' => 'TCPDF - PDFドキュメントの作成用PHPクラス',
  'LBL_SOURCE_CSSMIN' => 'CssMin - CSSパーサと縮小化',
  'LBL_SOURCE_PHPSAML' => 'PHP-SAML - 基本的なPHP用のSAMLツールキット',
  'LBL_SOURCE_ISCROLL' => 'iScroll - モバイルWebキット向けのoverflow:scroll。固定幅・高さの中でのスクリール部品。',
  'LBL_SOURCE_FLASHCANVAS' => 'FlashCanvas - Internet ExplorerにHTML5キャンバスサポートを追加するJavaScriptライブラリ。Flash描画APIを用いて形やイメージをレンダリングします。ほとんどのキャンバスAPIをサポートし、VMLやSilverlightを用いる他の類似ライブラリより高速に動作します。',
  'LBL_SOURCE_JIT' => 'JavaScript InfoVis Toolkit - Interactive Data Visualizationsを生成するツールを提供します。',
  'LBL_SOURCE_ZEND' => 'Zend Framework - オープンソースのPHP5用オブジェクト指向ウェブアプリケーションフレームワーク',
  'LBL_SOURCE_PARSECSV' => 'parseCSV - PHP用CSVデータパーサー',
  'LBL_SOURCE_PHPJS' => 'php.js - Javascriptで使用するPHPファンクション',
  'LBL_SOURCE_HTMLPURIFIER' => 'HTML Purifier - standards-compliant HTMLフィルタリングライブラリ',
  'LBL_DASHLET_TITLE' => '私のサイト',
  'LBL_DASHLET_OPT_TITLE' => 'タイトル',
  'LBL_DASHLET_OPT_URL' => 'Webサイトの場所',
  'LBL_DASHLET_OPT_HEIGHT' => 'Dashletの高さ（ピクセル）',
  'LBL_DASHLET_SUGAR_NEWS' => 'Sugarニュース',
  'LBL_DASHLET_DISCOVER_SUGAR_PRO' => 'Sugarの発見',
  'LBL_MORE_DETAIL' => '追加詳細',
  'LBL_BASIC_SEARCH' => '基本検索',
  'LBL_ADVANCED_SEARCH' => '詳細検索',
  'dashlet_categories_dom' => 
  array (
    'Module Views' => 'モジュールビュー',
    'Portal' => 'ポータル',
    'Charts' => 'チャート',
    'Tools' => 'ツール',
    'Miscellaneous' => 'その他',
  ),
);

