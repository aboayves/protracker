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
  'LBL_COLON' => ':',
  'LBL_SEND_BUTTON_KEY' => 'I',
  'LBL_OUTLOOK_ID' => 'Outlook ID',
  'LBL_BLANK' => '-なし-',
  'LBL_MODULE_NAME' => '電話',
  'LBL_MODULE_TITLE' => '電話: ホーム',
  'LBL_SEARCH_FORM_TITLE' => '電話検索',
  'LBL_LIST_FORM_TITLE' => '電話',
  'LBL_NEW_FORM_TITLE' => 'アポイント作成',
  'LBL_LIST_CLOSE' => '完了',
  'LBL_LIST_SUBJECT' => '件名',
  'LBL_LIST_CONTACT' => '取引先担当者',
  'LBL_LIST_RELATED_TO' => '関連先',
  'LBL_LIST_RELATED_TO_ID' => '関連先ID',
  'LBL_LIST_DATE' => '実施日',
  'LBL_LIST_TIME' => '開始時間',
  'LBL_LIST_DURATION' => '時間',
  'LBL_LIST_DIRECTION' => '方向',
  'LBL_SUBJECT' => '件名:',
  'LBL_REMINDER' => 'リマインダ:',
  'LBL_CONTACT_NAME' => '取引先担当者:',
  'LBL_DESCRIPTION_INFORMATION' => '詳細情報',
  'LBL_DESCRIPTION' => '詳細:',
  'LBL_STATUS' => 'ステータス:',
  'LBL_DIRECTION' => '方向:',
  'LBL_DATE' => '開始日:',
  'LBL_DURATION' => '時間:',
  'LBL_DURATION_HOURS' => '時間:',
  'LBL_DURATION_MINUTES' => '分:',
  'LBL_HOURS_MINUTES' => '(時/分)',
  'LBL_CALL' => '電話:',
  'LBL_DATE_TIME' => '開始日時:',
  'LBL_TIME' => '開始時間:',
  'LBL_HOURS_ABBREV' => '時間',
  'LBL_MINSS_ABBREV' => '分',
  'LNK_NEW_CALL' => '電話作成',
  'LNK_NEW_MEETING' => '会議作成',
  'LNK_CALL_LIST' => '電話',
  'LNK_IMPORT_CALLS' => '電話のインポ－ト',
  'ERR_DELETE_RECORD' => '取引先を削除するにはレコード番号を指定する必要があります。',
  'NTC_REMOVE_INVITEE' => '本当にこの参加者を電話からはずしてよいですか？',
  'LBL_INVITEE' => '参加者',
  'LBL_RELATED_TO' => '関係先:',
  'LNK_NEW_APPOINTMENT' => 'アポイント作成',
  'LBL_SCHEDULING_FORM_TITLE' => 'スケジューリング',
  'LBL_ADD_INVITEE' => '参加者追加',
  'LBL_NAME' => '名前',
  'LBL_FIRST_NAME' => '名',
  'LBL_LAST_NAME' => '姓',
  'LBL_EMAIL' => '電子メール',
  'LBL_PHONE' => '電話',
  'LBL_REMINDER_POPUP' => 'ポップアップ',
  'LBL_REMINDER_EMAIL' => '電子メール',
  'LBL_EMAIL_REMINDER' => '電子メールリマインダ',
  'LBL_EMAIL_REMINDER_TIME' => '電子メールリマインダ時間',
  'LBL_SEND_BUTTON_TITLE' => '保存＆招待送信 [Alt+I]',
  'LBL_SEND_BUTTON_LABEL' => '保存＆招待送信',
  'LBL_DATE_END' => '終了日',
  'LBL_TIME_END' => '終了時間',
  'LBL_REMINDER_TIME' => 'リマインダ時間',
  'LBL_EMAIL_REMINDER_SENT' => '電子メールリマインダ送信済み',
  'LBL_SEARCH_BUTTON' => '検索',
  'LBL_ACTIVITIES_REPORTS' => '活動レポート',
  'LBL_ADD_BUTTON' => '追加',
  'LBL_DEFAULT_SUBPANEL_TITLE' => '電話',
  'LBL_LOG_CALL' => '電話作成',
  'LNK_SELECT_ACCOUNT' => '取引先選択',
  'LNK_NEW_ACCOUNT' => '取引先作成',
  'LNK_NEW_OPPORTUNITY' => '商談作成',
  'LBL_DEL' => '削除',
  'LBL_LEADS_SUBPANEL_TITLE' => 'リード',
  'LBL_CONTACTS_SUBPANEL_TITLE' => '取引先担当者',
  'LBL_USERS_SUBPANEL_TITLE' => 'ユーザ',
  'LBL_MEMBER_OF' => '以下のメンバー:',
  'LBL_HISTORY_SUBPANEL_TITLE' => 'メモ',
  'LBL_LIST_ASSIGNED_TO_NAME' => 'アサイン先',
  'LBL_LIST_MY_CALLS' => '私の電話',
  'LBL_SELECT_FROM_DROPDOWN' => '関連先ドロップダウンリストから選択してください。',
  'LBL_ASSIGNED_TO_NAME' => 'アサイン先',
  'LBL_ASSIGNED_TO_ID' => 'アサイン先',
  'NOTICE_DURATION_TIME' => '時間は0以上である必要があります。',
  'LBL_CALL_INFORMATION' => '電話の概要',
  'LBL_REMOVE' => 'はずす',
  'LBL_ACCEPT_STATUS' => '受け入れステータス',
  'LBL_ACCEPT_LINK' => '承認リンク',
  'LBL_PARENT_ID' => '親ID',
  'LBL_EXPORT_MODIFIED_USER_ID' => '更新者ID',
  'LBL_EXPORT_CREATED_BY' => '作成者ID',
  'LBL_EXPORT_ASSIGNED_USER_ID' => 'アサイン先ID',
  'LBL_EXPORT_DATE_START' => '開始日時',
  'LBL_EXPORT_PARENT_TYPE' => 'モジュールに関連',
  'LBL_EXPORT_REMINDER_TIME' => 'リマインド時（分）',
  'LBL_CREATE_INVITEE' => '参加者作成',
  'LBL_CREATE_CONTACT' => '取引先担当者作成',
  'LBL_CREATE_LEAD' => 'リード作成',
  'LBL_CREATE_AND_ADD' => '作成＆追加',
  'LBL_CANCEL_CREATE_INVITEE' => 'キャンセル',
  'LBL_EMPTY_SEARCH_RESULT' => '見つかりませんでした。以下より参加者を作成してください。',
  'LBL_NO_ACCESS' => '$moduleを作成する権限がありません。',
  'LBL_REPEAT_TYPE' => 'リピートタイプ',
  'LBL_REPEAT_INTERVAL' => 'リピート間隔',
  'LBL_REPEAT_DOW' => '繰り返し日',
  'LBL_REPEAT_UNTIL' => '以下まで繰り返し',
  'LBL_REPEAT_COUNT' => 'リピート数',
  'LBL_REPEAT_PARENT_ID' => '関連親ID',
  'LBL_RECURRING_SOURCE' => '循環ソース',
  'LBL_SYNCED_RECURRING_MSG' => 'この電話は他のシステムからSugarに同期されています。Sugarでこの電話を編集した場合は他のシステムへ同期できません。',
);

