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
  'LBL_MODULE_NAME' => 'データフォーマット',
  'LBL_MODULE_TITLE' => 'データフォーマット：ホーム',
  'LBL_SEARCH_FORM_TITLE' => 'データフォーマット内検索',
  'LBL_LIST_FORM_TITLE' => 'データフォーマット・リスト',
  'LBL_LIST_NAME' => 'データフォーマット名',
  'LBL_LIST_QUERY_NAME' => 'クエリ名',
  'LBL_LIST_OUTPUT_DEFAULT' => 'デフォルト出力',
  'LBL_LIST_LIST_ORDER_Y' => 'Y順番',
  'LBL_LIST_LIST_ORDER_X' => 'X順番',
  'LBL_LIST_VISIBLE' => '見えるようにしますか？',
  'LBL_LIST_EXPORTABLE' => 'エクスポートできるようにしますか？',
  'LBL_LIST_HEADER' => 'ヘッダーを見せますか？',
  'LBL_NAME' => 'データフォーマット名:',
  'LBL_DESCRIPTION' => '説明:',
  'LBL_TYPE' => '種類:',
  'LBL_PARENT_DATASET' => '親データフォーマット:',
  'LBL_QUERY_NAME' => 'クエリ名:',
  'LBL_OUTPUT_DEFAULT' => 'デフォルト出力種類:',
  'LBL_LIST_ORDER_Y' => '枠順 Ｙ軸:',
  'LBL_LIST_ORDER_X' => '枠順 Ｘ軸:',
  'LBL_HEADER' => 'ヘッダーを見せる:',
  'LBL_EXPORTABLE' => 'エクスポート可能（CSVファイルのみ）:',
  'LBL_VISIBLE' => '見えるデータフォーマット:',
  'LBL_TABLE_WIDTH' => '表の幅（％）:',
  'LBL_FONT_SIZE' => 'フォントサイズ:',
  'LBL_REPORT_NAME' => 'レポート名:',
  'LBL_PRESPACE_X' => '空白の前:',
  'LBL_PRESPACE_Y' => '前回のデータフォーマットと合わせる:',
  'LBL_TABLE_WIDTH_TYPE' => '表の幅の種類:',
  'LBL_BODY_TEXT_COLOR' => '本文の文字色:',
  'LBL_HEADER_TEXT_COLOR' => 'ヘッダーの文字色:',
  'LBL_HEADER_BACK_COLOR' => 'ヘッダーの背景色:',
  'LBL_BODY_BACK_COLOR' => '本文の背景色:',
  'LBL_USE_PREV_HEADER' => '前回のヘッダーとまとめる:',
  'LBL_CHILD_NAME' => '副クエリ:',
  'LBL_CUSTOM_LAYOUT' => 'カスタムレイアウト:',
  'LNK_LIST_REPORTMAKER' => 'エンタープライズレポート:',
  'LNK_NEW_REPORTMAKER' => 'レポート作成',
  'LNK_LIST_DATASET' => 'データフォーマット',
  'LNK_NEW_DATASET' => 'データフォーマット作成',
  'LNK_NEW_CUSTOMQUERY' => 'カスタムクエリ作成',
  'LNK_CUSTOMQUERIES' => 'カスタムクエリ',
  'LNK_NEW_QUERYBUILDER' => 'クエリ作成',
  'LNK_QUERYBUILDER' => 'クエリビルダー',
  'LBL_ALL_REPORTS' => 'すべてのレポート',
  'NTC_DELETE_CONFIRMATION' => '本当にこのレコードを削除してよいですか？',
  'ERR_DELETE_RECORD' => '製品を削除するためにはレコード番号を指定してください。',
  'LBL_LAYOUT_TYPE' => 'レイアウトの種類:',
  'LBL_LAYOUT_PARENT_VALUE' => 'デフォルト値:',
  'LBL_LAYOUT_DISPLAY_TYPE' => '表示の種類:',
  'LBL_LAYOUT_LIST_ORDER_X' => '順番Xを列挙:',
  'LBL_LAYOUT_LIST_ORDER_Z' => '順番Zを列挙:',
  'LBL_MODIFY_HEAD' => 'ヘッダーの属性を変更:',
  'LBL_MODIFY_BODY' => '本文の属性を変更:',
  'LBL_BG_COLOR' => '背景色:',
  'LBL_WRAP' => '本文ラップ:',
  'LBL_DISPLAY_TYPE' => '表示の種類:',
  'LBL_STYLE' => 'フォントスタイル:',
  'LBL_DISPLAY_NAME' => '表示名:',
  'LBL_FORMAT_TYPE' => 'フォーマットの種類:',
  'LBL_FORMAT' => 'フォーマット:',
  'LBL_CELL_SIZE' => 'セルの幅:',
  'LBL_HIDE_COLUMN' => 'レポートの列を隠す:',
  'LBL_FINISHED_BUTTON' => '終了済み',
  'CONFIRM_LAYOUT_DISABLE' => 'カスタムレイアウトを無効化すると既存のカスタム・レイアウト・プロパティを全て除去します。',
  'LBL_LEFT' => '左',
  'LBL_RIGHT' => '右',
  'LBL_EDIT_LAYOUT' => 'レイアウト編集',
);

