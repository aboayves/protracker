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
  'ERR_DELETE_RECORD' => '必须指定记录编号才能删除客户。',
  'ERR_EMPLOYEE_NAME_EXISTS_1' => '员工姓名',
  'ERR_EMPLOYEE_NAME_EXISTS_2' => '已经存在。不允许重复员工名字。员工的名字必须是唯一的。',
  'ERR_LAST_ADMIN_1' => '员工姓名 "',
  'ERR_LAST_ADMIN_2' => '”是最后一个有管理员权限的员工。至少有个一个员工是管理员。',
  'LBL_ADDRESS' => '地址',
  'LBL_ADDRESS_CITY' => '地址 城市',
  'LBL_ADDRESS_COUNTRY' => '地址 国家',
  'LBL_ADDRESS_INFORMATION' => '地址 信息',
  'LBL_ADDRESS_POSTALCODE' => '地址 邮政编码',
  'LBL_ADDRESS_STATE' => '地址 州/区',
  'LBL_ADDRESS_STREET' => '地址 街道',
  'LBL_ADMIN' => '管理员:',
  'LBL_ANY_ADDRESS' => '任何地址:',
  'LBL_ANY_EMAIL' => '任何电子邮件:',
  'LBL_ANY_PHONE' => '任何电话:',
  'LBL_AUTHENTICATE_ID' => '授权ID',
  'LBL_CITY' => '城市:',
  'LBL_COUNTRY' => '国家:',
  'LBL_CREATED_BY_NAME' => '创建由',
  'LBL_CREATE_USER_BUTTON_KEY' => 'N',
  'LBL_CREATE_USER_BUTTON_LABEL' => '新增用户',
  'LBL_CREATE_USER_BUTTON_TITLE' => '新增用户',
  'LBL_CURRENCY' => '货币:',
  'LBL_DATE_ENTERED' => '输入日期',
  'LBL_DATE_FORMAT' => '日期格式:',
  'LBL_DATE_MODIFIED' => '修改日期',
  'LBL_DEFAULT_TEAM' => '默认团队:',
  'LBL_DEFAULT_TEAM_TEXT' => '为新记录选择默认团队',
  'LBL_DELETED' => '删除',
  'LBL_DELETE_EMPLOYEE_CONFIRM' => '您确定要删除这名员工吗？',
  'LBL_DELETE_USER_CONFIRM' => '这名员工同是系统用户。如果删除这名员工的记录，同时会删除相关联的用户记录，并且这个相关联用户将无法继续登录。现在您确定要执行删除这名员工的记录吗？',
  'LBL_DEPARTMENT' => '部门:',
  'LBL_DESCRIPTION' => '描述',
  'LBL_EMAIL' => '电子邮箱地址:',
  'LBL_EMAIL_LINK_TYPE' => '电子邮件客户',
  'LBL_EMAIL_LINK_TYPE_HELP' => '<b>Sugar 邮件客户:</b>使用Sugar程序给邮件客户发邮件.<br><b>外部邮件客户:</b>使用Sugar程序以外的工具给邮件客户发邮件，例如Microsoft Outlook.',
  'LBL_EMPLOYEE' => '员工:',
  'LBL_EMPLOYEE_INFORMATION' => '员工信息',
  'LBL_EMPLOYEE_NAME' => '员工姓名:',
  'LBL_EMPLOYEE_SETTINGS' => '员工设置',
  'LBL_EMPLOYEE_STATUS' => '员工状态:',
  'LBL_ERROR' => '错误:',
  'LBL_EXT_AUTHENTICATE' => '外部授权',
  'LBL_FAVORITE_COLOR' => '喜欢的颜色:',
  'LBL_FAX' => '传真',
  'LBL_FAX_PHONE' => '传真',
  'LBL_FF_CLEAR' => '清除',
  'LBL_FIRST_NAME' => '名:',
  'LBL_GROUP' => '组用户',
  'LBL_GROUP_USER' => '团队用户',
  'LBL_HOME_PHONE' => '家庭电话:',
  'LBL_IS_ADMIN' => '是否管理员',
  'LBL_LANGUAGE' => '语言:',
  'LBL_LAST_NAME' => '姓:',
  'LBL_LIST_ACCEPT_STATUS' => '接受状态',
  'LBL_LIST_ADMIN' => '管理员',
  'LBL_LIST_DEPARTMENT' => '部门',
  'LBL_LIST_DESCRIPTION' => '说明',
  'LBL_LIST_EMAIL' => '电子邮件',
  'LBL_LIST_EMPLOYEE_NAME' => '员工姓名',
  'LBL_LIST_EMPLOYEE_STATUS' => '员工状态',
  'LBL_LIST_FORM_TITLE' => '员工',
  'LBL_LIST_LAST_NAME' => '姓',
  'LBL_LIST_NAME' => '名称',
  'LBL_LIST_PRIMARY_PHONE' => '常用电话',
  'LBL_LIST_REPORTS_TO_NAME' => '汇报给',
  'LBL_LIST_USER_NAME' => '用户名',
  'LBL_LOGIN' => '登陆',
  'LBL_MESSENGER_ID' => '即时通讯名称:',
  'LBL_MESSENGER_TYPE' => '即使通讯类型:',
  'LBL_MOBILE_PHONE' => '移动电话:',
  'LBL_MODIFIED_BY' => '修改人',
  'LBL_MODIFIED_BY_ID' => '由ID修改',
  'LBL_MODULE_NAME' => '员工',
  'LBL_MODULE_TITLE' => '员工: 首页',
  'LBL_MY_TEAMS' => '我的团队',
  'LBL_NAME' => '姓名:',
  'LBL_NEW_EMPLOYEE_BUTTON_KEY' => 'N',
  'LBL_NEW_EMPLOYEE_BUTTON_LABEL' => '新增员工',
  'LBL_NEW_EMPLOYEE_BUTTON_TITLE' => '新增员工',
  'LBL_NEW_FORM_TITLE' => '新增员工',
  'LBL_NOTES' => '备忘录:',
  'LBL_OFFICE_PHONE' => '办公室电话:',
  'LBL_ONLY_ACTIVE' => '启用的员工',
  'LBL_OTHER' => '其他:',
  'LBL_OTHER_EMAIL' => '其他电子邮件:',
  'LBL_OTHER_PHONE' => '其他:',
  'LBL_PASSWORD' => '密码:',
  'LBL_PHOTO' => '照片',
  'LBL_PICTURE_FILE' => '图片',
  'LBL_PORTAL_ONLY' => '仅门户用户',
  'LBL_PORTAL_ONLY_USER' => '应用程序界面的门户站点',
  'LBL_POSTAL_CODE' => '邮编:',
  'LBL_PRIMARY_ADDRESS' => '主要地址:',
  'LBL_PSW_MODIFIED' => '最后更改的密码',
  'LBL_RECEIVE_NOTIFICATIONS' => '分配时邮件通知',
  'LBL_REPORTS_TO' => '汇报给:',
  'LBL_REPORTS_TO_NAME' => '报告给',
  'LBL_RESET_PREFERENCES' => '恢复默认值',
  'LBL_SAVED_SEARCH' => '布局选项',
  'LBL_SEARCH_FORM_TITLE' => '查找员工',
  'LBL_SELECT' => '选择',
  'LBL_SHOW_ON_EMPLOYEES' => '显示雇员记录',
  'LBL_STATE' => '省份:',
  'LBL_STATUS' => '状态',
  'LBL_SUGAR_LOGIN' => '是Sugar用户',
  'LBL_SYSTEM_GENERATED_PASSWORD' => '系统生成密码',
  'LBL_THEME' => '主题:',
  'LBL_TIMEZONE' => '当前时间:',
  'LBL_TIME_FORMAT' => '时间格式:',
  'LBL_TITLE' => '职称:',
  'LBL_USER_HASH' => '密码',
  'LBL_USER_NAME' => '用户名:',
  'LBL_USER_TYPE' => '用户类型',
  'LBL_WORK_PHONE' => '工作电话:',
  'LNK_EDIT_TABS' => '编辑标签',
  'LNK_EMPLOYEE_LIST' => '查看员工',
  'LNK_NEW_EMPLOYEE' => '新增员工',
  'NTC_REMOVE_TEAM_MEMBER_CONFIRMATION' => '您确定要移除这个员工吗?',
);

