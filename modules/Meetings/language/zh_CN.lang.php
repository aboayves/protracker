<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');


/*********************************************************************************
 * By installing or using this file, you are confirming on behalf of the entity
 * subscribed to the SugarCRM Inc. product ("Company") that Company is bound by
 * the SugarCRM Inc. Master Subscription Agreement (“MSA”), which is viewable at:
 * http://www.sugarcrm.com/master-subscription-agreement
 *
 * If Company is not bound by the MSA, then by installing or using this file
 * you are agreeing unconditionally that Company will be bound by the MSA and
 * certifying that you have authority to bind Company accordingly.
 *
 * Copyright (C) 2004-2013 SugarCRM Inc.  All rights reserved.
 ********************************************************************************/

	

$mod_strings = array (
  'ERR_DELETE_RECORD' => '必须指定记录编号才能删除会议。',
  'LBL_ACCEPT_LINK' => '接受链接',
  'LBL_ACCEPT_STATUS' => '接收状态',
  'LBL_ACCEPT_THIS' => '接受?',
  'LBL_ACCOUNT_NAME' => '客户',
  'LBL_ACTIVITIES_REPORTS' => '活动报告',
  'LBL_ADD_BUTTON' => '增加',
  'LBL_ADD_INVITEE' => '增加受邀者',
  'LBL_ADD_PARENT_INVITEE' => '添加相关用户给邀请者',
  'LBL_ASSIGNED_TO_NAME' => '指派给:',
  'LBL_CANCEL_CREATE_INVITEE' => '取消',
  'LBL_COLON' => ':',
  'LBL_CONFIRM_REMOVE_ALL_RECURRENCES' => '您确定要移除所有的重复记录吗?',
  'LBL_CONTACTS_SUBPANEL_TITLE' => '联系人',
  'LBL_CONTACT_NAME' => '联系人:',
  'LBL_CREATED_BY' => '创建者',
  'LBL_CREATED_USER' => '创建者',
  'LBL_CREATE_AND_ADD' => '创建 & 新增',
  'LBL_CREATE_CONTACT' => '作为联系人',
  'LBL_CREATE_INVITEE' => '创建受邀人',
  'LBL_CREATE_LEAD' => '作为线索',
  'LBL_CREATOR' => '会议创建者',
  'LBL_DATE' => '开始日期:',
  'LBL_DATE_END' => '截止日期',
  'LBL_DATE_END_ERROR' => '结束日期前于开始日期',
  'LBL_DATE_TIME' => '开始日期 &时间:',
  'LBL_DEFAULT_SUBPANEL_TITLE' => '会议',
  'LBL_DEL' => '删除',
  'LBL_DESCRIPTION' => '说明:',
  'LBL_DESCRIPTION_INFORMATION' => '说明信息',
  'LBL_DIRECTION' => '指引:',
  'LBL_DISPLAYED_URL' => '显示URL',
  'LBL_DURATION' => '持续时间:',
  'LBL_DURATION_HOURS' => '持续时数:',
  'LBL_DURATION_MINUTES' => '持续分钟数:',
  'LBL_EDIT_ALL_RECURRENCES' => '编辑所有事件',
  'LBL_EMAIL' => '电子邮件',
  'LBL_EMAIL_REMINDER' => '邮件提醒',
  'LBL_EMAIL_REMINDER_SENT' => '已发送的邮件提醒',
  'LBL_EMAIL_REMINDER_TIME' => '邮件提醒时间',
  'LBL_EMPTY_SEARCH_RESULT' => '很抱歉, 没有查找结果. 请创建以下一个受邀人.',
  'LBL_EXPORT_ASSIGNED_USER_ID' => '指派用户 ID',
  'LBL_EXPORT_ASSIGNED_USER_NAME' => '指派用户名',
  'LBL_EXPORT_CREATED_BY' => '以ID来创建',
  'LBL_EXPORT_DATE_END' => '结束日期和时间',
  'LBL_EXPORT_DATE_START' => '开始日期和时间',
  'LBL_EXPORT_DISPLAYED_URL' => '显示Url',
  'LBL_EXPORT_EXTERNAL_ID' => '外部 ID',
  'LBL_EXPORT_HOST_URL' => '主机Url',
  'LBL_EXPORT_JOIN_URL' => 'Url连接',
  'LBL_EXPORT_MODIFIED_USER_ID' => '以ID来修改',
  'LBL_EXPORT_PARENT_ID' => '主ID',
  'LBL_EXPORT_PARENT_TYPE' => '相关类型',
  'LBL_EXPORT_REMINDER_TIME' => '提醒时间 (分)',
  'LBL_EXTERNALID' => '外部 App 编号',
  'LBL_EXTNOSTART_HEADER' => '错误: 不能开始会议',
  'LBL_EXTNOSTART_MAIN' => '您不能开始此会议，因为您不是管理员或此会议的所有者.',
  'LBL_EXTNOT_GO_BACK' => '返回到先前的记录。',
  'LBL_EXTNOT_HEADER' => '错误: 没有邀请',
  'LBL_EXTNOT_MAIN' => '您不能参加此会议因为您没有被邀请。',
  'LBL_EXTNOT_RECORD_LINK' => '查看会议',
  'LBL_FIRST_NAME' => '名',
  'LBL_HISTORY_SUBPANEL_TITLE' => '备忘录',
  'LBL_HOST_EXT_MEETING' => '开始会议',
  'LBL_HOST_URL' => '主机URL',
  'LBL_HOURS_ABBREV' => '小时',
  'LBL_HOURS_MINS' => '(小时/分钟)',
  'LBL_INVITEE' => '受邀者',
  'LBL_JOIN_EXT_MEETING' => '参加会议',
  'LBL_LAST_NAME' => '姓',
  'LBL_LEADS_SUBPANEL_TITLE' => '潜在用户',
  'LBL_LIST_ASSIGNED_TO_NAME' => '被指派的用户',
  'LBL_LIST_CLOSE' => '关闭',
  'LBL_LIST_CONTACT' => '联系人',
  'LBL_LIST_DATE' => '开始日期',
  'LBL_LIST_DATE_MODIFIED' => '修改日期',
  'LBL_LIST_DIRECTION' => '指导',
  'LBL_LIST_DUE_DATE' => '截止日期',
  'LBL_LIST_FORM_TITLE' => '会议列表',
  'LBL_LIST_JOIN_MEETING' => '参加会议',
  'LBL_LIST_MY_MEETINGS' => '我的会议',
  'LBL_LIST_RELATED_TO' => '关联到',
  'LBL_LIST_STATUS' => '状态',
  'LBL_LIST_SUBJECT' => '主题',
  'LBL_LIST_TIME' => '开始时间',
  'LBL_LOCATION' => '地点:',
  'LBL_MEETING' => '会议:',
  'LBL_MEETING_INFORMATION' => '查看会议',
  'LBL_MINSS_ABBREV' => 'm',
  'LBL_MODIFIED_BY' => '修改人',
  'LBL_MODIFIED_USER' => '修改者',
  'LBL_MODULE_NAME' => '会议',
  'LBL_MODULE_TITLE' => '会议: 首页',
  'LBL_NAME' => '名称',
  'LBL_NEW_FORM_TITLE' => '创建安排',
  'LBL_NO_ACCESS' => '您没有权限创建 $module',
  'LBL_OUTLOOK_ID' => 'Outlook 编号',
  'LBL_PARENT_ID' => '主ID',
  'LBL_PARENT_TYPE' => '主类型',
  'LBL_PASSWORD' => '会议密码',
  'LBL_PHONE' => '客户电话:',
  'LBL_RECURRENCE' => '事件',
  'LBL_RECURRING_LIMIT_ERROR' => '这种定期召开的会议不能安排因为它超出了允许的最大复发数$limit.',
  'LBL_RECURRING_SOURCE' => '重复资源',
  'LBL_RELATED_TO' => '关联到:',
  'LBL_REMINDER' => '提醒:',
  'LBL_REMINDER_EMAIL' => '邮件',
  'LBL_REMINDER_EMAIL_ALL_INVITEES' => '所有被邀请者邮件',
  'LBL_REMINDER_POPUP' => '弹出',
  'LBL_REMINDER_TIME' => '提醒时间',
  'LBL_REMOVE' => '移除',
  'LBL_REMOVE_ALL_RECURRENCES' => '删除所有事件',
  'LBL_REPEAT_COUNT' => '重复总数',
  'LBL_REPEAT_DOW' => '重复Dow',
  'LBL_REPEAT_END' => '结束',
  'LBL_REPEAT_END_AFTER' => '之后',
  'LBL_REPEAT_END_BY' => '通过',
  'LBL_REPEAT_INTERVAL' => '重复间段',
  'LBL_REPEAT_OCCURRENCES' => '事件',
  'LBL_REPEAT_PARENT_ID' => '重复源ID',
  'LBL_REPEAT_TYPE' => '重复类型',
  'LBL_REPEAT_UNTIL' => '重复直到',
  'LBL_SCHEDULING_FORM_TITLE' => '日程安排',
  'LBL_SEARCH_BUTTON' => '查找',
  'LBL_SEARCH_FORM_TITLE' => '会议查找',
  'LBL_SEND_BUTTON_KEY' => 'I',
  'LBL_SEND_BUTTON_LABEL' => '发送邀请',
  'LBL_SEND_BUTTON_TITLE' => '发送邀请 [Alt+I]',
  'LBL_SEQUENCE' => '符合更新序列',
  'LBL_STATUS' => '状态:',
  'LBL_SUBJECT' => '主题:',
  'LBL_SYNCED_RECURRING_MSG' => '这个电话起始起始于另外一个系统并没有同步到Sugar，一旦这个电话被编辑，它不会被同步回另外一个系统。',
  'LBL_TIME' => '开始时间:',
  'LBL_TYPE' => '会议类型',
  'LBL_URL' => '开始/加入会议',
  'LBL_USERS_SUBPANEL_TITLE' => '用户',
  'LNK_IMPORT_MEETINGS' => '导入会议',
  'LNK_MEETING_LIST' => '查看会议',
  'LNK_NEW_APPOINTMENT' => '创建安排',
  'LNK_NEW_MEETING' => '安排会议',
  'NOTICE_DURATION_TIME' => '持续时间必须大于0',
  'NTC_REMOVE_INVITEE' => '您确定想要从会议移除此邀请人吗？',
);

