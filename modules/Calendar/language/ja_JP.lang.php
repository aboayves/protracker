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

	

$mod_list_strings = array (
  'dom_cal_month' => 
  array (
    1 => '1月',
    2 => '2月',
    3 => '3月',
    4 => '4月',
    5 => '5月',
    6 => '6月',
    7 => '7月',
    8 => '8月',
    9 => '9月',
    10 => '10月',
    11 => '11月',
    12 => '12月',
  ),
  'dom_cal_month_long' => 
  array (
    1 => '1月',
    2 => '2月',
    3 => '3月',
    4 => '4月',
    5 => '5月',
    6 => '6月',
    7 => '7月',
    8 => '8月',
    9 => '9月',
    10 => '10月',
    11 => '11月',
    12 => '12月',
  ),
  'dom_cal_weekdays' => 
  array (
    1 => '月',
    2 => '火',
    3 => '水',
    4 => '木',
    5 => '金',
    6 => '土',
  ),
  'dom_cal_weekdays_long' => 
  array (
    1 => '月曜日',
    2 => '火曜日',
    3 => '水曜日',
    4 => '木曜日',
    5 => '金曜日',
    6 => '土曜日',
  ),
);

$mod_strings = array (
  'LBL_AM' => 'AM',
  'LBL_APPLY_BUTTON' => '適用',
  'LBL_ASSIGNED_TO_NAME' => 'アサイン先',
  'LBL_BUSY' => '予定あり',
  'LBL_CANCEL_BUTTON' => 'キャンセル',
  'LBL_CLOSE_BUTTON' => '完了',
  'LBL_CONFIRM_REMOVE' => '本当にこのレコードをはずしてよいですか？',
  'LBL_CONFIRM_REMOVE_ALL_RECURRING' => '本当にこの関連レコードをすべてはずしてよいですか？',
  'LBL_CONFLICT' => '他のスケジュールと重複',
  'LBL_CREATE_CALL' => '電話作成',
  'LBL_CREATE_MEETING' => '会議作成',
  'LBL_CREATE_NEW_RECORD' => '活動作成',
  'LBL_DATE' => '開始日時',
  'LBL_DATE_END_ERROR' => '最終日が開始日より前です',
  'LBL_DATE_TIME' => '日時',
  'LBL_DAY' => '日',
  'LBL_DELETE_BUTTON' => '削除',
  'LBL_DURATION' => '時間',
  'LBL_EDIT_ALL_RECURRENCES' => 'すべての発生を編集',
  'LBL_EDIT_RECORD' => '活動編集',
  'LBL_EDIT_USERLIST' => 'ユーザ',
  'LBL_ERROR_LOADING' => '読み込み中にエラー',
  'LBL_ERROR_SAVING' => '保存中にエラー',
  'LBL_FILTER_BY_TEAM' => '表示するチームを選択:',
  'LBL_GENERAL_TAB' => '詳細',
  'LBL_GOTO_DATE' => '日へ移動',
  'LBL_HOURS_ABBREV' => '時間',
  'LBL_INFO_DESC' => '詳細',
  'LBL_INFO_DUE_DT' => '期限日',
  'LBL_INFO_DURATION' => '時間',
  'LBL_INFO_NAME' => '件名',
  'LBL_INFO_RELATED_TO' => '関連先',
  'LBL_INFO_START_DT' => '開始日',
  'LBL_INFO_TITLE' => '追加詳細',
  'LBL_LOADING' => '読み込み中.....',
  'LBL_MINS_ABBREV' => '分',
  'LBL_MODULE_NAME' => 'カレンダー',
  'LBL_MODULE_TITLE' => 'カレンダー',
  'LBL_MONTH' => '月',
  'LBL_NEXT_DAY' => '翌日',
  'LBL_NEXT_MONTH' => '翌月',
  'LBL_NEXT_SHARED' => '翌週',
  'LBL_NEXT_WEEK' => '翌週',
  'LBL_NEXT_YEAR' => '翌年',
  'LBL_NO' => 'いいえ',
  'LBL_NO_USER' => 'フィールドにマッチしません: アサイン先',
  'LBL_PARTICIPANTS_TAB' => '参加者一覧',
  'LBL_PM' => 'PM',
  'LBL_PREVIOUS_DAY' => '前日',
  'LBL_PREVIOUS_MONTH' => '前月',
  'LBL_PREVIOUS_SHARED' => '前週',
  'LBL_PREVIOUS_WEEK' => '前週',
  'LBL_PREVIOUS_YEAR' => '前年',
  'LBL_REFRESH' => '更新',
  'LBL_REMOVE_ALL_RECURRENCES' => 'すべての発生を削除',
  'LBL_REPEAT_COUNT' => '発生数',
  'LBL_REPEAT_DOW' => '以下の日',
  'LBL_REPEAT_END' => '最後',
  'LBL_REPEAT_END_AFTER' => 'より後',
  'LBL_REPEAT_END_BY' => 'By',
  'LBL_REPEAT_INTERVAL' => 'ごと',
  'LBL_REPEAT_LIMIT_ERROR' => 'Your request was going to create more than $limit meetings<br />$limit 以上の会議の作成がリクエストされました',
  'LBL_REPEAT_OCCURRENCES' => '発生',
  'LBL_REPEAT_TAB' => '発生',
  'LBL_REPEAT_TYPE' => 'リピート',
  'LBL_REPEAT_UNTIL' => '以下まで繰り返し',
  'LBL_SAVE_BUTTON' => '保存',
  'LBL_SAVING' => '保存中.....',
  'LBL_SCHEDULED' => 'スケジュール済み',
  'LBL_SELECT_USERS' => '表示するユーザを選択',
  'LBL_SENDING_INVITES' => '保存＆招待送信中.....',
  'LBL_SEND_INVITES' => '保存＆招待送信',
  'LBL_SETTINGS' => '設定',
  'LBL_SETTINGS_CALLS_SHOW' => '電話を表示',
  'LBL_SETTINGS_DISPLAY_TIMESLOTS' => '日、週ビューにタイムスロットを表示',
  'LBL_SETTINGS_TASKS_SHOW' => 'タスクを表示',
  'LBL_SETTINGS_TIME_ENDS' => '終了時:',
  'LBL_SETTINGS_TIME_STARTS' => '開始時:',
  'LBL_SETTINGS_TITLE' => '設定',
  'LBL_SHARED' => '共有',
  'LBL_SHARED_CAL_TITLE' => '共有カレンダー',
  'LBL_STATUS' => 'ステータス',
  'LBL_STYLE_ADVANCED' => '高度な',
  'LBL_STYLE_BASIC' => '基本',
  'LBL_SUBJECT' => '件名',
  'LBL_USERS' => 'アサイン先',
  'LBL_USER_CALENDARS' => 'ユーザのカレンダー',
  'LBL_WEEK' => '週',
  'LBL_YEAR' => '年',
  'LBL_YES' => 'はい',
  'LNK_CALL_LIST' => '電話',
  'LNK_IMPORT_CALLS' => '電話のインポート',
  'LNK_IMPORT_MEETINGS' => '会議のインポート',
  'LNK_IMPORT_TASKS' => 'タスクのインポート',
  'LNK_MEETING_LIST' => '会議',
  'LNK_NEW_APPOINTMENT' => 'アポイント作成',
  'LNK_NEW_CALL' => '電話作成',
  'LNK_NEW_MEETING' => '会議作成',
  'LNK_NEW_TASK' => 'タスク作成',
  'LNK_TASK_LIST' => 'タスク',
  'LNK_VIEW_CALENDAR' => '今日',
  'NOTICE_DURATION_TIME' => '時間は0以上である必要があります',
);

