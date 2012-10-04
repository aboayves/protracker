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
  'ERR_DELETE_RECORD' => '您必须指定一个记录编号才能删除这个缺陷.',
  'LBL_ACCOUNTS_SUBPANEL_TITLE' => '客户',
  'LBL_ACTIVITIES_SUBPANEL_TITLE' => '活动',
  'LBL_ASSIGNED_TO_NAME' => '指派',
  'LBL_BUG' => '缺陷追踪:',
  'LBL_BUG_INFORMATION' => '缺陷概述',
  'LBL_BUG_NUMBER' => '缺陷编号:',
  'LBL_BUG_SUBJECT' => '缺陷主题:',
  'LBL_CASES_SUBPANEL_TITLE' => '客户反馈',
  'LBL_CONTACTS_SUBPANEL_TITLE' => '联系人',
  'LBL_CONTACT_BUG_TITLE' => '联系人-缺陷追踪:',
  'LBL_CONTACT_NAME' => '联系人姓名:',
  'LBL_CONTACT_ROLE' => '角色:',
  'LBL_CREATED_BY' => '创建者:',
  'LBL_DATE_CREATED' => '创建日期:',
  'LBL_DATE_LAST_MODIFIED' => '修改日期:',
  'LBL_DEFAULT_SUBPANEL_TITLE' => '缺陷追踪',
  'LBL_DESCRIPTION' => '说明:',
  'LBL_DOCUMENTS_SUBPANEL_TITLE' => '文件',
  'LBL_EXPORT_ASSIGNED_USER_ID' => '负责人ID',
  'LBL_EXPORT_ASSIGNED_USER_NAME' => '负责人用户名',
  'LBL_EXPORT_CREATED_BY' => '创建人ID',
  'LBL_EXPORT_FIXED_IN_RELEASE_NAMR' => '与显示名字绑定',
  'LBL_EXPORT_MODIFIED_USER_ID' => '修改人ID',
  'LBL_FIXED_IN_RELEASE' => '在现有版本上修复:',
  'LBL_FOUND_IN_RELEASE' => '在现有版本上创建:',
  'LBL_FOUND_IN_RELEASE_NAME' => '在显示名称中查到',
  'LBL_HISTORY_SUBPANEL_TITLE' => '历史记录',
  'LBL_INVITEE' => '联系人',
  'LBL_LIST_ACCOUNT_NAME' => '客户名称',
  'LBL_LIST_ASSIGNED_TO_NAME' => '指定使用者',
  'LBL_LIST_CONTACT_NAME' => '联系人名称',
  'LBL_LIST_EMAIL_ADDRESS' => '邮箱地址',
  'LBL_LIST_FIXED_IN_RELEASE' => '在现有版本上修复',
  'LBL_LIST_FORM_TITLE' => '缺陷列表',
  'LBL_LIST_LAST_MODIFIED' => '最新修改',
  'LBL_LIST_MY_BUGS' => '指派给我的缺陷',
  'LBL_LIST_NUMBER' => '编号.',
  'LBL_LIST_PHONE' => '联系电话',
  'LBL_LIST_PRIORITY' => '优先级',
  'LBL_LIST_RELEASE' => '版本',
  'LBL_LIST_RESOLUTION' => '分析',
  'LBL_LIST_STATUS' => '状态',
  'LBL_LIST_SUBJECT' => '主题',
  'LBL_LIST_TYPE' => '类型',
  'LBL_MODIFIED_BY' => '最新修改人:',
  'LBL_MODULE_ID' => '缺陷追踪',
  'LBL_MODULE_NAME' => '缺陷追踪',
  'LBL_MODULE_TITLE' => '缺陷追踪: 首页',
  'LBL_NEW_FORM_TITLE' => '新增缺陷',
  'LBL_NUMBER' => '编号:',
  'LBL_PORTAL_VIEWABLE' => '可视门户站点',
  'LBL_PRIORITY' => '优先级:',
  'LBL_PRODUCT_CATEGORY' => '类别:',
  'LBL_PROJECTS_SUBPANEL_TITLE' => '项目',
  'LBL_RELEASE' => '版本:',
  'LBL_RESOLUTION' => '分析:',
  'LBL_SEARCH_FORM_TITLE' => '缺陷搜索',
  'LBL_SHOW_IN_PORTAL' => '显示在门户',
  'LBL_SOURCE' => '来源:',
  'LBL_STATUS' => '状态:',
  'LBL_SUBJECT' => '主题:',
  'LBL_SYSTEM_ID' => '系统编号',
  'LBL_TYPE' => '类型:',
  'LBL_WORK_LOG' => '工作日志:',
  'LNK_BUG_LIST' => '缺陷',
  'LNK_BUG_REPORTS' => '缺陷报表',
  'LNK_IMPORT_BUGS' => '输入缺陷',
  'LNK_NEW_BUG' => '报表缺陷',
  'NTC_DELETE_CONFIRMATION' => '您确定要从缺陷中移除此联系人吗?',
  'NTC_REMOVE_ACCOUNT_CONFIRMATION' => '您确定要从这个客户中移除这个缺陷?',
  'NTC_REMOVE_INVITEE' => '您确定要从缺陷里除去这个联系人吗?',
);

