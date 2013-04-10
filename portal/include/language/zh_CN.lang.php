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

	

$app_list_strings = array (
  'account_type_dom' => 
  array (
    '' => '',
    'Analyst' => '分析师',
    'Competitor' => '竞争者',
    'Customer' => '客户',
    'Integrator' => '整合商',
    'Investor' => '投资者',
    'Other' => '其它',
    'Partner' => '合作伙伴',
    'Press' => '媒体',
    'Prospect' => '潜在客户',
    'Reseller' => '代理商',
  ),
  'activity_dom' => 
  array (
    'Call' => '电话',
    'Email' => '电子邮件',
    'Meeting' => '会议',
    'Note' => '备忘录',
    'Task' => '任务',
  ),
  'bopselect_type_dom' => 
  array (
    'Equals' => '等于',
  ),
  'bselect_type_dom' => 
  array (
    'bool_false' => '否',
    'bool_true' => '是',
  ),
  'bug_priority_dom' => 
  array (
    'High' => '高',
    'Low' => '低',
    'Medium' => '中',
    'Urgent' => '紧急',
  ),
  'bug_resolution_dom' => 
  array (
    '' => '',
    'Accepted' => '已接受',
    'Duplicate' => '重复',
    'Fixed' => '固定',
    'Invalid' => '无效',
    'Later' => '以后',
    'Out of Date' => '过期',
  ),
  'bug_status_dom' => 
  array (
    'Assigned' => '已分配',
    'Closed' => '结束',
    'New' => '新增',
    'Pending' => '未决定',
    'Rejected' => '拒绝',
  ),
  'bug_type_dom' => 
  array (
    'Defect' => '问题',
    'Feature' => '特性',
  ),
  'call_direction_dom' => 
  array (
    'Inbound' => '打入',
    'Outbound' => '打出',
  ),
  'call_status_dom' => 
  array (
    'Held' => '完成',
    'Not Held' => '未开始',
    'Planned' => '已计划',
  ),
  'campaign_status_dom' => 
  array (
    '' => '',
    'Active' => '启用',
    'Complete' => '完成',
    'In Queue' => '队列中',
    'Inactive' => '停用',
    'Planning' => '计划中',
    'Sending' => '发送中',
  ),
  'campaign_type_dom' => 
  array (
    '' => '',
    'Email' => '电子邮件',
    'Mail' => '邮件',
    'Print' => '打印',
    'Radio' => '广播',
    'Telesales' => '电话销售',
    'Television' => '电视',
    'Web' => '网络',
  ),
  'campainglog_activity_type_dom' => 
  array (
    '' => '',
    'contact' => '新增联系人',
    'invalid email' => '退信，无效的邮箱',
    'lead' => '潜在客户已创建',
    'link' => '链接点击',
    'removed' => '可退出',
    'send error' => '退信，其它',
    'targeted' => '尝试发送/发送消息',
    'viewed' => '已查看的信息',
  ),
  'campainglog_target_type_dom' => 
  array (
    'Contacts' => '联系人档案',
    'Leads' => '潜在客户',
    'Prospects' => '目标',
    'Users' => '用户',
  ),
  'case_priority_dom' => 
  array (
    'P1' => '高',
    'P2' => '中',
    'P3' => '低',
  ),
  'case_relationship_type_dom' => 
  array (
    '' => '',
    'Alternate Contact' => '其他联系人',
    'Primary Contact' => '主要联系人',
  ),
  'case_status_dom' => 
  array (
    'Assigned' => '已分配',
    'Closed' => '结束',
    'Duplicate' => '重复',
    'New' => '新增',
    'Pending Input' => '等待输入',
    'Rejected' => '拒绝',
  ),
  'checkbox_dom' => 
  array (
    '' => '',
    1 => '是',
    2 => '否',
  ),
  'contract_expiration_notice_dom' => 
  array (
    1 => '1天',
    3 => '3天',
    5 => '5天',
    7 => '1星期',
    14 => '2周',
    21 => '3周',
    31 => '1月',
  ),
  'contract_payment_frequency_dom' => 
  array (
    'halfyearly' => '每半年',
    'monthly' => '每月',
    'quarterly' => '每季度',
    'yearly' => '每年',
  ),
  'contract_status_dom' => 
  array (
    'inprogress' => '处理中',
    'notstarted' => '未开始',
    'signed' => '已签署',
  ),
  'cselect_type_dom' => 
  array (
    'Does not Equal' => '不等于',
    'Equals' => '是',
  ),
  'document_category_dom' => 
  array (
    '' => '',
    'Knowledege Base' => '知识库',
    'Marketing' => '市场营销',
    'Sales' => '销售',
  ),
  'document_status_dom' => 
  array (
    'Active' => '启用',
    'Draft' => '草稿',
    'Expired' => '有效期',
    'FAQ' => '常见问题',
    'Pending' => '未决定',
    'Under Review' => '审查中',
  ),
  'document_subcategory_dom' => 
  array (
    '' => '',
    'FAQ' => '常见问题',
    'Marketing Collateral' => '市场营销',
    'Product Brochures' => '产品资料',
  ),
  'document_template_type_dom' => 
  array (
    '' => '',
    'eula' => '最终用户许可协议',
    'license' => '许可证协议',
    'mailmerge' => '邮件合并',
    'nda' => '保密协议',
  ),
  'dom_cal_month_long' => 
  array (
    1 => '一月',
    2 => '二月',
    3 => '三月',
    4 => '四月',
    5 => '五月',
    6 => '六月',
    7 => '七月',
    8 => '八月',
    9 => '九月',
    10 => '十月',
    11 => '十一月',
    12 => '十二月',
  ),
  'dom_email_bool' => 
  array (
    'bool_false' => '否',
    'bool_true' => '是',
  ),
  'dom_email_distribution' => 
  array (
    '' => '--无--',
    'direct' => '直接指派',
    'leastBusy' => '最不忙碌',
    'roundRobin' => '循环',
  ),
  'dom_email_editor_option' => 
  array (
    '' => '默认电子邮件格式',
    'html' => 'HTML电子邮件',
    'plain' => '纯文本电子邮件',
  ),
  'dom_email_errors' => 
  array (
    1 => '直接指派项目时只能选择一个用户。',
    2 => '直接指派项目时只能指派选择的项目。',
  ),
  'dom_email_link_type' => 
  array (
    '' => '系统默认邮件客户端',
    'mailto' => '外部邮件客户端',
    'sugar' => 'SugarCRM邮件客户端',
  ),
  'dom_email_server_type' => 
  array (
    '' => '--无--',
    'imap' => 'IMAP',
    'pop3' => 'POP3',
  ),
  'dom_email_status' => 
  array (
    'archived' => '已存档',
    'closed' => '关闭',
    'draft' => '草稿',
    'read' => '已阅读',
    'replied' => '已回复',
    'send_error' => '发送错误',
    'sent' => '已发送',
    'unread' => '未阅读',
  ),
  'dom_email_types' => 
  array (
    'archived' => '已存档',
    'draft' => '草稿',
    'inbound' => '进往',
    'out' => '已发送',
  ),
  'dom_int_bool' => 
  array (
    1 => '是',
  ),
  'dom_mailbox_type' => 
  array (
    'bounce' => '处理退信',
    'bug' => '新增缺陷',
    'contact' => '新增联系人',
    'pick' => '新增[任何]',
    'sales' => '新增潜在客户',
    'support' => '新增支持',
    'task' => '新增任务',
  ),
  'dom_meeting_accept_options' => 
  array (
    'accept' => '接受',
    'decline' => '拒绝',
    'tentative' => '搁置',
  ),
  'dom_meeting_accept_status' => 
  array (
    'accept' => '已接受',
    'decline' => '拒绝',
    'none' => '无',
    'tentative' => '搁置',
  ),
  'dom_report_types' => 
  array (
    'detailed_summary' => '细节合计',
    'summary' => '合计',
    'tabular' => '行与列',
  ),
  'dom_switch_bool' => 
  array (
    '' => '否',
    'off' => '否',
    'on' => '是',
  ),
  'dom_timezones' => 
  array (
    -12 => '(GMT–12) 国际日期线以西',
    -11 => '(GMT-11) 中途岛萨摩亚',
    -10 => '(GMT–10) 夏威夷',
    -9 => '(GMT–9) 阿拉斯加',
    -8 => '(GMT–8) 旧金山',
    -7 => '(GMT–7) 凤凰',
    -6 => '(GMT-6) 萨斯喀彻温',
    -5 => '(GMT–5) 纽约',
    -4 => '(GMT–4) 圣地亚哥',
    -3 => '(GMT–3) 布宜诺斯艾利斯',
    -2 => '(GMT-2) 中大西洋',
    -1 => '(GMT-1) 亚述尔群岛',
    1 => '(GMT+1) 马德里',
    2 => '(GMT+2) 雅典',
    3 => '(GMT+3) 莫斯科',
    4 => '(GMT+4 )喀布尔',
    5 => '(GMT+5) 叶卡特琳堡',
    6 => '(GMT+6) 阿斯塔纳',
    7 => '(GMT+7) 曼谷',
    8 => '(GMT+8) 珀斯',
    9 => '(GMT+9) 汉城',
    10 => '(GMT+10) 布里斯班',
    11 => '(GMT+11) 索罗门群岛',
    12 => '(GMT+12) 奥克兰',
  ),
  'dom_timezones_extra' => 
  array (
    -12 => '(GMT-12) 国际日期线以西',
    -11 => '(GMT-11) 中途岛，萨摩亚',
    -10 => '(GMT-10) 夏威夷',
    -9 => '(GMT-9) 阿拉斯加',
    -8 => '(GMT-8) 太平洋标准时间',
    -7 => '(GMT-7) 美国山区时区',
    -6 => '(GMT-6) 美国中央时区',
    -5 => '(GMT-5) 美国东部时区',
    -4 => '(GMT-4) 圣地亚哥',
    -3 => '(GMT-3) 布宜诺斯艾利斯',
    -2 => '(GMT-2) 中大西洋',
    -1 => '(GMT-1) 亚述尔群岛',
    1 => '(GMT+1) 马德里',
    2 => '(GMT+2) 雅典',
    3 => '(GMT+3)莫斯科',
    4 => '(GMT+4) 喀布尔',
    5 => '(GMT+5) 叶卡特琳堡',
    6 => '(GMT+6) 阿斯塔纳',
    7 => '(GMT+7) 曼谷',
    8 => '(GMT+8) 珀斯',
    9 => '(GMT+9) 汉城',
    10 => '(GMT+10) 布里斯班',
    11 => '(GMT+11) 索罗门群岛',
    12 => '(GMT+12) 奥克兰',
  ),
  'dselect_type_dom' => 
  array (
    'Does not Equal' => '不等于',
    'Equals' => '是',
    'Less Than' => '少于',
    'More Than' => '多于',
  ),
  'dtselect_type_dom' => 
  array (
    'Less Than' => '少于',
    'More Than' => '多于',
  ),
  'duration_intervals' => 
  array (
    15 => '15',
    30 => '30',
    45 => '45',
  ),
  'email_marketing_status_dom' => 
  array (
    '' => '',
    'active' => '启用',
    'inactive' => '禁用',
  ),
  'employee_status_dom' => 
  array (
    'Active' => '启用',
    'Leave of Absence' => '离职',
    'Terminated' => '终止',
  ),
  'forecast_schedule_status_dom' => 
  array (
    'Active' => '启用',
    'Inactive' => '停用',
  ),
  'forecast_type_dom' => 
  array (
    'Direct' => '直接',
    'Rollup' => '上滚',
  ),
  'industry_dom' => 
  array (
    '' => '',
    'Apparel' => '服裝',
    'Banking' => '银行',
    'Biotechnology' => '生物技术',
    'Chemicals' => '化学化工',
    'Communications' => '通讯',
    'Construction' => '建筑',
    'Consulting' => '咨询',
    'Education' => '教育',
    'Electronics' => '电子',
    'Energy' => '能源',
    'Engineering' => '工程设计',
    'Entertainment' => '文化',
    'Environmental' => '环境保护',
    'Finance' => '金融',
    'Government' => '政府机构',
    'Healthcare' => '卫生保健',
    'Hospitality' => '医疗机构',
    'Insurance' => '保险',
    'Machinery' => '机械',
    'Manufacturing' => '生产企业',
    'Media' => '医院',
    'Not For Profit' => '非盈利机构',
    'Other' => '其它',
    'Recreation' => '娱乐',
    'Retail' => '零售',
    'Shipping' => '海运',
    'Technology' => '技术',
    'Telecommunications' => '电信',
    'Transportation' => '运输',
    'Utilities' => '公用事业',
  ),
  'language_pack_name' => 'US英文',
  'layouts_dom' => 
  array (
    'Invoice' => '发票',
    'Standard' => '建议',
    'Terms' => '付款条件',
  ),
  'lead_source_dom' => 
  array (
    '' => '',
    'Cold Call' => '意外来访',
    'Conference' => '会议',
    'Direct Mail' => '直邮',
    'Email' => '电子邮件',
    'Employee' => '员工',
    'Existing Customer' => '现有客户',
    'Other' => '其它',
    'Partner' => '合作者',
    'Public Relations' => '公共关系',
    'Self Generated' => '自产',
    'Trade Show' => '展览',
    'Web Site' => '网站',
    'Word of mouth' => '他人介紹',
  ),
  'lead_status_dom' => 
  array (
    '' => '',
    'Assigned' => '已分配',
    'Converted' => '已转换',
    'Dead' => '终止',
    'In Process' => '处理中',
    'New' => '新增',
    'Recycled' => '已重复',
  ),
  'lead_status_noblank_dom' => 
  array (
    'Assigned' => '已分配',
    'Converted' => '已转化',
    'Dead' => '已死',
    'In Process' => '处理中',
    'New' => '新增',
    'Recycled' => '已回收',
  ),
  'meeting_status_dom' => 
  array (
    'Held' => '完成',
    'Not Held' => '未开始',
    'Planned' => '已计划',
  ),
  'messenger_type_dom' => 
  array (
    '' => '',
    'AOL' => 'AOL',
    'MSN' => 'MSN',
    'Yahoo!' => '雅虎！',
  ),
  'moduleList' => 
  array (
    'Bugs' => '缺陷追踪',
    'Cases' => '客户反馈',
    'FAQ' => '常见问题',
    'Home' => '首页',
    'KBDocuments' => '知识库',
    'Newsletters' => '列表',
    'Notes' => '备忘录',
    'Teams' => '团队',
    'Users' => '用户',
  ),
  'moduleListSingular' => 
  array (
    'Bugs' => '缺陷追踪',
    'Cases' => '客户反馈',
    'Home' => '首页',
    'Notes' => '备忘录',
    'Teams' => '团队',
    'Users' => '用户',
  ),
  'mselect_type_dom' => 
  array (
    'Equals' => '是',
    'in' => '是一个于',
  ),
  'notifymail_sendtype' => 
  array (
    'SMTP' => 'SMTP',
  ),
  'opportunity_relationship_type_dom' => 
  array (
    '' => '',
    'Business Decision Maker' => '商业决策者',
    'Business Evaluator' => '商业评估者',
    'Executive Sponsor' => '主管助理',
    'Influencer' => '影响者',
    'Other' => '其它',
    'Primary Decision Maker' => '主要决策人',
    'Technical Decision Maker' => '技术决策者',
    'Technical Evaluator' => '技术评估人',
  ),
  'opportunity_type_dom' => 
  array (
    '' => '',
    'Existing Business' => '已有生意',
    'New Business' => '新生意',
  ),
  'order_stage_dom' => 
  array (
    'Cancelled' => '已取消',
    'Confirmed' => '已确认',
    'On Hold' => '等待',
    'Pending' => '未决定',
    'Shipped' => '已发货',
  ),
  'payment_terms' => 
  array (
    '' => '',
    'Net 15' => '货到15天付款',
    'Net 30' => '货到30天付款',
  ),
  'pricing_formula_dom' => 
  array (
    'Fixed' => '固定价格',
    'IsList' => '和单价相同',
    'PercentageDiscount' => '折扣单价',
    'PercentageMarkup' => '超过成本销价',
    'ProfitMargin' => '利润率',
  ),
  'product_category_dom' => 
  array (
    '' => '',
    'Accounts' => '客户',
    'Activities' => '活动',
    'Bug Tracker' => '缺陷追踪',
    'Calendar' => '日程安排',
    'Calls' => '电话',
    'Campaigns' => '市场活动',
    'Cases' => '客户反馈',
    'Contacts' => '联系人档案',
    'Currencies' => '货币',
    'Dashboard' => '统计图',
    'Documents' => '文档',
    'Emails' => '电子邮件',
    'Feeds' => '记录',
    'Forecasts' => '销售预测',
    'Help' => '帮助',
    'Home' => '首页',
    'Leads' => '潜在客户',
    'Meetings' => '会议',
    'Notes' => '备忘录',
    'Opportunities' => '商业机会',
    'Outlook Plugin' => 'Outlook插件',
    'Product Catalog' => '产品目录',
    'Products' => '产品',
    'Projects' => '项目',
    'Quotes' => '报价',
    'RSS' => 'RSS',
    'Releases' => '版本',
    'Studio' => '工作室',
    'Upgrade' => '更新',
    'Users' => '用户',
  ),
  'product_status_dom' => 
  array (
    'Orders' => '已订购',
    'Quotes' => '报价',
    'Ship' => '已发货',
  ),
  'product_status_quote_key' => '报价',
  'product_template_status_dom' => 
  array (
    'Available' => '有库存',
    'Unavailable' => '已脱销',
  ),
  'project_task_priority_options' => 
  array (
    'High' => '高',
    'Low' => '低',
    'Medium' => '中',
  ),
  'project_task_status_options' => 
  array (
    'Completed' => '完成',
    'Deferred' => '延期',
    'In Progress' => '处理中',
    'Not Started' => '未开始',
    'Pending Input' => '等待输入',
  ),
  'project_task_utilization_options' => 
  array (
    25 => '25',
    50 => '50',
    75 => '75',
    100 => '100',
  ),
  'prospect_list_type_dom' => 
  array (
    'default' => '默认',
    'exempt' => '阻止列表 – 根据编号',
    'exempt_address' => '阻止列表 – 根据电子邮件地址',
    'exempt_domain' => '阻止列表 – 根据域',
    'seed' => '种子',
    'test' => '测试',
  ),
  'query_calc_oper_dom' => 
  array (
    '*' => '(X)乘',
    '+' => '(+)加',
    '-' => '(-)减',
    '/' => '(/)除',
  ),
  'quote_relationship_type_dom' => 
  array (
    '' => '',
    'Business Decision Maker' => '商业决策者',
    'Business Evaluator' => '商业评估者',
    'Executive Sponsor' => '主管助理',
    'Influencer' => '影响者',
    'Other' => '其它',
    'Primary Decision Maker' => '主要决策人',
    'Technical Decision Maker' => '技术决策者',
    'Technical Evaluator' => '技术评估人',
  ),
  'quote_stage_dom' => 
  array (
    'Closed Accepted' => '谈成结束',
    'Closed Dead' => '未成结束',
    'Closed Lost' => '丢单结束',
    'Confirmed' => '已确认',
    'Delivered' => '已交付',
    'Draft' => '草稿',
    'Negotiation' => '谈判',
    'On Hold' => '等待',
  ),
  'quote_type_dom' => 
  array (
    'Orders' => '已订购',
    'Quotes' => '报价',
  ),
  'record_type_display' => 
  array (
    'Accounts' => '客户',
    'Bugs' => '缺陷',
    'Cases' => '客户反馈',
    'Contacts' => '联系人档案',
    'Leads' => '潜在客户',
    'Opportunities' => '商业机会',
    'ProductTemplates' => '产品目录',
    'Project' => '项目管理',
    'ProjectTask' => '项目任务',
    'Quotes' => '报价',
    'Tasks' => '任务',
  ),
  'record_type_display_notes' => 
  array (
    'Accounts' => '客户',
    'Bugs' => '缺陷追踪',
    'Calls' => '电话',
    'Cases' => '用户反馈',
    'Contacts' => '联系人',
    'Contracts' => '合同',
    'Emails' => '电子邮件',
    'Leads' => '潜在客户',
    'Meetings' => '会议',
    'Opportunities' => '商业机会',
    'ProductTemplates' => '产品目录',
    'Products' => '产品',
    'Project' => '项目管理',
    'ProjectTask' => '项目任务',
    'Quotes' => '报价',
  ),
  'reminder_max_time' => '3600',
  'reminder_time_options' => 
  array (
    60 => '提前1分钟',
    300 => '提前5分钟',
    600 => '提前10分钟',
    900 => '提前15分钟',
    1800 => '提前30分钟',
    3600 => '提前1小时',
  ),
  'sales_probability_dom' => 
  array (
    'Closed Lost' => '',
    'Closed Won' => '100',
    'Id. Decision Makers' => '40',
    'Needs Analysis' => '25',
    'Negotiation/Review' => '80',
    'Perception Analysis' => '50',
    'Proposal/Price Quote' => '65',
    'Prospecting' => '10',
    'Qualification' => '20',
    'Value Proposition' => '30',
  ),
  'sales_stage_dom' => 
  array (
    'Closed Lost' => '丢单结束',
    'Closed Won' => '谈成结束',
    'Id. Decision Makers' => '辨识决策者',
    'Needs Analysis' => '需要分析',
    'Negotiation/Review' => '谈判/回顾',
    'Perception Analysis' => '感觉分析',
    'Proposal/Price Quote' => '建议/出价',
    'Prospecting' => '销售前景',
    'Qualification' => '资格合格',
    'Value Proposition' => '价值陈述',
  ),
  'salutation_dom' => 
  array (
    '' => '',
    'Dr.' => '博士',
    'Mr.' => '先生',
    'Mrs.' => '女士',
    'Ms.' => '小姐',
    'Prof.' => '教授',
  ),
  'schedulers_times_dom' => 
  array (
    'completed' => '已完成',
    'failed' => '失败',
    'in progress' => '处理中',
    'no curl' => '未运行:没有可利用的cURL',
    'not run' => '超时, 没有被执行',
    'ready' => '就绪',
  ),
  'source_dom' => 
  array (
    '' => '',
    'Forum' => '论坛',
    'InboundEmail' => '电子邮件',
    'Internal' => '内部',
    'Web' => '网络',
  ),
  'support_term_dom' => 
  array (
    '+1 year' => '一年',
    '+2 years' => '二年',
    '+6 months' => '半年',
  ),
  'task_priority_dom' => 
  array (
    'High' => '高',
    'Low' => '低',
    'Medium' => '中',
  ),
  'task_status_dom' => 
  array (
    'Completed' => '完成',
    'Deferred' => '延期',
    'In Progress' => '处理中',
    'Not Started' => '未开始',
    'Pending Input' => '等待输入',
  ),
  'tax_class_dom' => 
  array (
    'Non-Taxable' => '不含税',
    'Taxable' => '含税',
  ),
  'tselect_type_dom' => 
  array (
    14440 => '4小时',
    28800 => '8小时',
    43200 => '12小时',
    86400 => '1天',
    172800 => '2天',
    259200 => '3天',
    345600 => '4天',
    432000 => '5天',
    604800 => '1周',
    1209600 => '2周',
    1814400 => '3周',
    2592000 => '30天',
    5184000 => '60天',
    7776000 => '90天',
    10368000 => '120天',
    12960000 => '150天',
    15552000 => '180天',
  ),
  'user_status_dom' => 
  array (
    'Active' => '启用',
    'Inactive' => '停用',
  ),
  'wflow_action_datetime_type_dom' => 
  array (
    'Existing Value' => '已有值',
    'Triggered Date' => '触发日期',
  ),
  'wflow_action_type_dom' => 
  array (
    'new' => '新增记录',
    'update' => '更新记录',
    'update_rel' => '更新相关记录',
  ),
  'wflow_address_type_dom' => 
  array (
    'bcc' => '密送:',
    'cc' => '抄送:',
    'to' => '收件人:',
  ),
  'wflow_address_type_invite_dom' => 
  array (
    'bcc' => '密送:',
    'cc' => '抄送:',
    'invite_only' => '(仅邀请)',
    'to' => '收件人:',
  ),
  'wflow_address_type_to_only_dom' => 
  array (
    'to' => '收件人:',
  ),
  'wflow_adv_enum_type_dom' => 
  array (
    'advance' => '向前移动下拉框通过',
    'retreat' => '向后移动下拉框通过',
  ),
  'wflow_adv_team_type_dom' => 
  array (
    'current_team' => '已登录用户的团队',
    'team_id' => '当前触发记录的团队',
  ),
  'wflow_adv_user_type_dom' => 
  array (
    'assigned_user_id' => '被指派触发记录的用户',
    'created_by' => '创建触发记录的用户',
    'current_user' => '当前用户',
    'modified_user_id' => '最后修改触发记录的用户',
  ),
  'wflow_alert_type_dom' => 
  array (
    'Email' => '电子邮件',
    'Invite' => '邀请',
  ),
  'wflow_array_type_dom' => 
  array (
    'future' => '新值',
    'past' => '旧值',
  ),
  'wflow_fire_order_dom' => 
  array (
    'actions_alerts' => '行动后警告',
    'alerts_actions' => '警告后行动',
  ),
  'wflow_record_type_dom' => 
  array (
    'All' => '新增和存在的记录',
    'New' => '新增',
    'Update' => '只有存在的记录',
  ),
  'wflow_rel_type_dom' => 
  array (
    'all' => '所有相关的',
    'filter' => '和过滤器相关的',
  ),
  'wflow_relate_type_dom' => 
  array (
    'Manager' => '用户管理人',
    'Self' => '用户',
  ),
  'wflow_relfilter_type_dom' => 
  array (
    'all' => '所有相关的',
    'any' => '任何有相关的',
  ),
  'wflow_set_type_dom' => 
  array (
    'Advanced' => '高级选项',
    'Basic' => '基本选项',
  ),
  'wflow_source_type_dom' => 
  array (
    'Custom Template' => '自定义模版',
    'Normal Message' => '正常消息',
    'System Default' => '系统默认',
  ),
  'wflow_type_dom' => 
  array (
    'Normal' => '正常',
    'Time' => '时间间隔',
  ),
  'wflow_user_type_dom' => 
  array (
    'current_user' => '当前用户',
    'rel_user' => '相关用户',
    'rel_user_custom' => '相关自定义用户',
    'specific_role' => '指定角色',
    'specific_team' => '指定团队',
    'specific_user' => '指定用户',
  ),
);

$app_strings = array (
  'ERROR_FULLY_EXPIRED' => '您公司SugarCRM的许可已经超期30天以上,需要进行续费。只有管理员可以登陆。',
  'ERROR_LICENSE_EXPIRED' => '您公司SugarCRM的许可需要被更新,只有管理员可以登陆',
  'ERROR_NO_RECORD' => '检索记录出错。这条记录可能已被删除，或者您可能没有权限查看它。',
  'ERR_CREATING_FIELDS' => '填写附加细节字段错误:',
  'ERR_CREATING_TABLE' => '新增表错误:',
  'ERR_DELETE_RECORD' => '必须指定记录编号才能删除客户。',
  'ERR_EXPORT_DISABLED' => '禁止导出。',
  'ERR_EXPORT_TYPE' => '错误导出',
  'ERR_INVALID_AMOUNT' => '请输入有效金额:',
  'ERR_INVALID_DATE' => '请输入有效日期。',
  'ERR_INVALID_DATE_FORMAT' => '日期格式必须是:',
  'ERR_INVALID_DAY' => '请输入有效天数。',
  'ERR_INVALID_EMAIL_ADDRESS' => '不是有效的电子邮件地址。',
  'ERR_INVALID_HOUR' => '请输入有效小时。',
  'ERR_INVALID_MONTH' => '请输入有效月份。',
  'ERR_INVALID_REQUIRED_FIELDS' => '非法必填字段:',
  'ERR_INVALID_TIME' => '请输入有效时间。',
  'ERR_INVALID_VALUE' => '无效值:',
  'ERR_INVALID_YEAR' => '请输入有4位数。',
  'ERR_MISSING_REQUIRED_FIELDS' => '缺少必填字段:',
  'ERR_NEED_ACTIVE_SESSION' => '需要一个可用的会话来导出内容。',
  'ERR_NOTHING_SELECTED' => '继续之前请选择。',
  'ERR_OPPORTUNITY_NAME_DUPE' => '商业机会名称已存在，请输入另一个名称。',
  'ERR_OPPORTUNITY_NAME_MISSING' => '商业机会名称不能为空。请输入以下的商业机会名称。',
  'ERR_PORTAL_LOGIN_FAILED' => '无法创建 portal 登陆会话。请联系管理员。',
  'ERR_RESOURCE_MANAGEMENT_INFO' => '返回 <a href="index.php">首页</a>',
  'ERR_SELF_REPORTING' => '用户不可以给自己汇报。',
  'ERR_SQS_NO_MATCH' => '没有匹配',
  'ERR_SQS_NO_MATCH_FIELD' => '没有匹配字段:',
  'LBL_ACCOUNT' => '客户',
  'LBL_ACCOUNTS' => '客户',
  'LBL_ACCUMULATED_HISTORY_BUTTON_KEY' => 'H',
  'LBL_ACCUMULATED_HISTORY_BUTTON_LABEL' => '查看摘要',
  'LBL_ACCUMULATED_HISTORY_BUTTON_TITLE' => '查看摘要',
  'LBL_ADDITIONAL_DETAILS' => '额外细节',
  'LBL_ADDITIONAL_DETAILS_CLOSE' => '关闭',
  'LBL_ADDITIONAL_DETAILS_CLOSE_TITLE' => '关闭',
  'LBL_ADD_BUTTON' => '增加',
  'LBL_ADD_BUTTON_KEY' => 'A',
  'LBL_ADD_BUTTON_TITLE' => '新增[Alt+A]',
  'LBL_ADD_DOCUMENT' => '增加文档',
  'LBL_ADD_TO_PROSPECT_LIST_BUTTON_KEY' => 'L',
  'LBL_ADD_TO_PROSPECT_LIST_BUTTON_LABEL' => '增加到目标列表',
  'LBL_ADD_TO_PROSPECT_LIST_BUTTON_TITLE' => '增加到目标列表',
  'LBL_ADMIN' => '系统管理',
  'LBL_ALT_HOT_KEY' => 'Alt+',
  'LBL_ARCHIVE' => '存档',
  'LBL_ASSIGNED_TO' => '负责人:',
  'LBL_ASSIGNED_TO_USER' => '负责人:',
  'LBL_BACK' => '上一步',
  'LBL_BILL_TO_ACCOUNT' => '账单客户',
  'LBL_BILL_TO_CONTACT' => '账单联系人',
  'LBL_BROWSER_TITLE' => 'SugarCRM – 商业开源客户关系管理系统',
  'LBL_BUGS' => '缺陷',
  'LBL_BY' => '被',
  'LBL_CALLS' => '电话',
  'LBL_CAMPAIGNS_SEND_QUEUED' => '发送队列中的市场活动邮件',
  'LBL_CANCEL_BUTTON_KEY' => 'X',
  'LBL_CANCEL_BUTTON_LABEL' => '取消',
  'LBL_CANCEL_BUTTON_TITLE' => '取消[Alt+X]',
  'LBL_CASE' => '用户反馈',
  'LBL_CASES' => '客户反馈',
  'LBL_CHANGE_BUTTON_KEY' => 'G',
  'LBL_CHANGE_BUTTON_LABEL' => '更改',
  'LBL_CHANGE_BUTTON_TITLE' => '更改',
  'LBL_CHANGE_PASSWORD' => '修改密码',
  'LBL_CHARSET' => 'UTF-8',
  'LBL_CHECKALL' => '全选',
  'LBL_CLEARALL' => '全部清除',
  'LBL_CLEAR_BUTTON_KEY' => 'C',
  'LBL_CLEAR_BUTTON_LABEL' => '清除',
  'LBL_CLEAR_BUTTON_TITLE' => '清除',
  'LBL_CLOSEALL_BUTTON_KEY' => 'Q',
  'LBL_CLOSEALL_BUTTON_LABEL' => '全部关闭',
  'LBL_CLOSEALL_BUTTON_TITLE' => '全部关闭',
  'LBL_CLOSE_WINDOW' => '关闭窗口',
  'LBL_COMPOSE_EMAIL_BUTTON_KEY' => 'L',
  'LBL_COMPOSE_EMAIL_BUTTON_LABEL' => '撰写电子邮件',
  'LBL_COMPOSE_EMAIL_BUTTON_TITLE' => '撰写电子邮件',
  'LBL_CONTACT' => '联系人',
  'LBL_CONTACTS' => '联系人档案',
  'LBL_CONTACT_LIST' => '联系人列表',
  'LBL_CREATED' => '创建人',
  'LBL_CREATED_BY_USER' => '创建人',
  'LBL_CREATE_BUTTON_LABEL' => '新增',
  'LBL_CURRENT_USER_FILTER' => '只显示我的记录:',
  'LBL_DATE_ENTERED' => '创建日期:',
  'LBL_DATE_MODIFIED' => '最后修改:',
  'LBL_DELETE' => '删除',
  'LBL_DELETED' => '已删除',
  'LBL_DELETE_BUTTON' => '删除',
  'LBL_DELETE_BUTTON_KEY' => 'D',
  'LBL_DELETE_BUTTON_LABEL' => '删除',
  'LBL_DELETE_BUTTON_TITLE' => '删除[Alt+D]',
  'LBL_DIRECT_REPORTS' => '直接报告人',
  'LBL_DISPLAY_COLUMNS' => '显示列',
  'LBL_DONE_BUTTON_KEY' => 'X',
  'LBL_DONE_BUTTON_LABEL' => '完成',
  'LBL_DONE_BUTTON_TITLE' => '完成',
  'LBL_DST_NEEDS_FIXIN' => '应用程序需要设置夏令时时间。请转到管理员控制台下的<a href="index.php?module=Administration&action=DstFix">修复</a>链接，设置夏令时时间。',
  'LBL_DUPLICATE_BUTTON' => '复制',
  'LBL_DUPLICATE_BUTTON_KEY' => 'U',
  'LBL_DUPLICATE_BUTTON_LABEL' => '复制',
  'LBL_DUPLICATE_BUTTON_TITLE' => '复制[Alt+U]',
  'LBL_DUP_MERGE' => '发现重复',
  'LBL_EDIT_BUTTON' => '编辑',
  'LBL_EDIT_BUTTON_KEY' => 'E',
  'LBL_EDIT_BUTTON_LABEL' => '编辑',
  'LBL_EDIT_BUTTON_TITLE' => '编辑[Alt+E]',
  'LBL_EMAILS' => '电子邮件',
  'LBL_EMAIL_PDF_BUTTON_KEY' => 'M',
  'LBL_EMAIL_PDF_BUTTON_LABEL' => '以PDF格式发送电子邮件',
  'LBL_EMAIL_PDF_BUTTON_TITLE' => '以PDF格式发送电子邮件[Alt+M]',
  'LBL_EMPLOYEES' => '员工',
  'LBL_ENTER_DATE' => '输入日期',
  'LBL_EXPORT' => '导出',
  'LBL_EXPORT_ALL' => '全部导出',
  'LBL_FULL_FORM_BUTTON_KEY' => 'F',
  'LBL_FULL_FORM_BUTTON_LABEL' => '完全式',
  'LBL_FULL_FORM_BUTTON_TITLE' => '完全式',
  'LBL_HIDE' => '隐藏',
  'LBL_HIDE_COLUMNS' => '隐藏列',
  'LBL_ID' => '编号',
  'LBL_IMPORT' => '导入',
  'LBL_IMPORT_PROSPECTS' => '导入目标',
  'LBL_LAST_VIEWED' => '最近查看',
  'LBL_LEADS' => '潜在客户',
  'LBL_LISTVIEW_MASS_UPDATE_CONFIRM' => '您确定您要更新整个列表?',
  'LBL_LISTVIEW_NO_SELECTED' => '请选择至少1条记录进行操作。',
  'LBL_LISTVIEW_OPTION_CURRENT' => '当前页',
  'LBL_LISTVIEW_OPTION_ENTIRE' => '整个列表',
  'LBL_LISTVIEW_OPTION_SELECTED' => '已选择的记录',
  'LBL_LISTVIEW_SELECTED_OBJECTS' => '已选择',
  'LBL_LIST_ACCOUNT_NAME' => '客户名称',
  'LBL_LIST_ASSIGNED_USER' => '用户',
  'LBL_LIST_CONTACT_NAME' => '联系人姓名',
  'LBL_LIST_CONTACT_ROLE' => '联系人角色',
  'LBL_LIST_EMAIL' => '电子邮件',
  'LBL_LIST_NAME' => '名称',
  'LBL_LIST_OF' => '的',
  'LBL_LIST_PHONE' => '电话',
  'LBL_LIST_TEAM' => '团队',
  'LBL_LIST_USER_NAME' => '用户名',
  'LBL_LOADING' => '加载中...',
  'LBL_LOCALE_NAME_EXAMPLE_FIRST' => '约翰',
  'LBL_LOCALE_NAME_EXAMPLE_LAST' => '某',
  'LBL_LOCALE_NAME_EXAMPLE_SALUTATION' => '先生',
  'LBL_LOGIN_SESSION_EXCEEDED' => '服务器忙，请稍候重试。',
  'LBL_LOGIN_TO_ACCESS' => '请登录以访问这个区域.',
  'LBL_LOGOUT' => '注销',
  'LBL_MAILMERGE' => '邮件合并',
  'LBL_MAILMERGE_KEY' => 'M',
  'LBL_MASS_UPDATE' => '批量更新',
  'LBL_MEETINGS' => '会议',
  'LBL_MEMBERS' => '成员',
  'LBL_MODIFIED' => '修改人',
  'LBL_MODIFIED_BY_USER' => '修改人',
  'LBL_MY_ACCOUNT' => '个人信息',
  'LBL_NAME' => '名称',
  'LBL_NEW_BUTTON_KEY' => 'N',
  'LBL_NEW_BUTTON_LABEL' => '新增',
  'LBL_NEW_BUTTON_TITLE' => '新增',
  'LBL_NEXT_BUTTON_LABEL' => '下一步',
  'LBL_NONE' => '--无--',
  'LBL_NOTES' => '备忘录',
  'LBL_NO_RECORDS_FOUND' => '- 找到0条记录 -',
  'LBL_OPENALL_BUTTON_KEY' => 'O',
  'LBL_OPENALL_BUTTON_LABEL' => '全部开放',
  'LBL_OPENALL_BUTTON_TITLE' => '全部开放',
  'LBL_OPENTO_BUTTON_KEY' => 'T',
  'LBL_OPENTO_BUTTON_LABEL' => '开放到:',
  'LBL_OPENTO_BUTTON_TITLE' => '开放到:[Alt+T]',
  'LBL_OPPORTUNITIES' => '商业机会',
  'LBL_OPPORTUNITY' => '商业机会',
  'LBL_OPPORTUNITY_NAME' => '商业机会名称',
  'LBL_OR' => '或者',
  'LBL_PERCENTAGE_SYMBOL' => '%',
  'LBL_PRODUCTS' => '产品',
  'LBL_PRODUCT_BUNDLES' => '产品包',
  'LBL_PROJECTS' => '项目',
  'LBL_PROJECT_TASKS' => '项目任务',
  'LBL_QUOTES' => '报价',
  'LBL_QUOTES_SHIP_TO' => '报价运送地址',
  'LBL_QUOTE_TO_OPPORTUNITY_KEY' => 'O',
  'LBL_QUOTE_TO_OPPORTUNITY_LABEL' => '从报价创建商业机会',
  'LBL_QUOTE_TO_OPPORTUNITY_TITLE' => '从报价创建商业机会',
  'LBL_RELATED_RECORDS' => '相关记录',
  'LBL_REMOVE' => '移除',
  'LBL_REQUIRED_SYMBOL' => '*',
  'LBL_SAVED' => '已保存',
  'LBL_SAVED_LAYOUT' => '布局已被保存。',
  'LBL_SAVED_VIEWS' => '已保存的视图',
  'LBL_SAVE_BUTTON_KEY' => 'S',
  'LBL_SAVE_BUTTON_LABEL' => '保存',
  'LBL_SAVE_BUTTON_TITLE' => '保存',
  'LBL_SAVE_NEW_BUTTON_KEY' => 'V',
  'LBL_SAVE_NEW_BUTTON_LABEL' => '保存并新增',
  'LBL_SAVE_NEW_BUTTON_TITLE' => '保存并新增',
  'LBL_SAVING' => '保存中',
  'LBL_SAVING_LAYOUT' => '布局保存中...',
  'LBL_SEARCH' => '查找',
  'LBL_SEARCH_BUTTON_KEY' => 'Q',
  'LBL_SEARCH_BUTTON_LABEL' => '查找',
  'LBL_SEARCH_BUTTON_TITLE' => '查找',
  'LBL_SEARCH_CRITERIA' => '查找标准',
  'LBL_SELECT_BUTTON_KEY' => 'T',
  'LBL_SELECT_BUTTON_LABEL' => '选择',
  'LBL_SELECT_BUTTON_TITLE' => '选择',
  'LBL_SELECT_CONTACT_BUTTON_KEY' => 'T',
  'LBL_SELECT_CONTACT_BUTTON_LABEL' => '选择联系人',
  'LBL_SELECT_CONTACT_BUTTON_TITLE' => '选择联系人',
  'LBL_SELECT_REPORTS_BUTTON_LABEL' => '从报表中选择',
  'LBL_SELECT_REPORTS_BUTTON_TITLE' => '选择报表',
  'LBL_SELECT_USER_BUTTON_KEY' => 'U',
  'LBL_SELECT_USER_BUTTON_LABEL' => '选择用户',
  'LBL_SELECT_USER_BUTTON_TITLE' => '选择用户',
  'LBL_SERVER_RESPONSE_RESOURCES' => '创建这个页面的资源(查询，文件)',
  'LBL_SERVER_RESPONSE_TIME' => '服务器响应时间:',
  'LBL_SERVER_RESPONSE_TIME_SECONDS' => '秒。',
  'LBL_SHIP_TO_ACCOUNT' => '收货客户',
  'LBL_SHIP_TO_CONTACT' => '收货联系人',
  'LBL_SHORTCUTS' => '快捷方式',
  'LBL_SHOW' => '显示',
  'LBL_SQS_INDICATOR' => '',
  'LBL_STATUS' => '状态:',
  'LBL_STATUS_UPDATED' => '对于这个事件，您的状态已更新！',
  'LBL_SUBJECT' => '主题',
  'LBL_SYNC' => '同步',
  'LBL_TASKS' => '任务',
  'LBL_TEAM' => '团队:',
  'LBL_TEAMS_LINK' => '团队',
  'LBL_TEAM_ID' => '团队编号:',
  'LBL_THOUSANDS_SYMBOL' => 'K',
  'LBL_TRACK_EMAIL_BUTTON_KEY' => 'K',
  'LBL_TRACK_EMAIL_BUTTON_LABEL' => '存档电子邮件',
  'LBL_TRACK_EMAIL_BUTTON_TITLE' => '存档电子邮件',
  'LBL_UNAUTH_ADMIN' => '没有管理权限',
  'LBL_UNDELETE' => '未删除',
  'LBL_UNDELETE_BUTTON' => '未删除',
  'LBL_UNDELETE_BUTTON_LABEL' => '未删除',
  'LBL_UNDELETE_BUTTON_TITLE' => '未删除',
  'LBL_UNSYNC' => '不同步',
  'LBL_UPDATE' => '更新',
  'LBL_USERS' => '用户',
  'LBL_USERS_SYNC' => '用户同步',
  'LBL_USER_LIST' => '用户列表',
  'LBL_VIEW_BUTTON' => '查看',
  'LBL_VIEW_BUTTON_KEY' => 'V',
  'LBL_VIEW_BUTTON_LABEL' => '查看',
  'LBL_VIEW_BUTTON_TITLE' => '查看[Alt+V]',
  'LBL_VIEW_PDF_BUTTON_KEY' => 'P',
  'LBL_VIEW_PDF_BUTTON_LABEL' => '以PDF格式打印',
  'LBL_VIEW_PDF_BUTTON_TITLE' => '以PDF格式打印[Alt+P]',
  'LNK_ABOUT' => '关于',
  'LNK_ADVANCED_SEARCH' => '高级查找',
  'LNK_BASIC_SEARCH' => '基本查找',
  'LNK_DELETE' => '删除',
  'LNK_DELETE_ALL' => '删除所有记录',
  'LNK_EDIT' => '编辑',
  'LNK_GET_LATEST' => '获取最新的',
  'LNK_GET_LATEST_TOOLTIP' => '用最新版本替换',
  'LNK_HELP' => '帮助',
  'LNK_LIST_END' => '末页',
  'LNK_LIST_NEXT' => '下页',
  'LNK_LIST_PREVIOUS' => '上页',
  'LNK_LIST_RETURN' => '返回列表',
  'LNK_LIST_START' => '首页',
  'LNK_LOAD_SIGNED' => '签署',
  'LNK_LOAD_SIGNED_TOOLTIP' => '用签署文件代替',
  'LNK_PRINT' => '打印',
  'LNK_REMOVE' => '移除',
  'LNK_RESUME' => '重试',
  'LNK_VIEW_CHANGE_LOG' => '查看更改日志',
  'LOGIN_LOGO_ERROR' => '请更换SugarCRM标识。',
  'NTC_CLICK_BACK' => '请按浏览器的“返回”按钮返回，并纠正错误。',
  'NTC_DATE_FORMAT' => '(yyyy-mm-dd)',
  'NTC_DATE_TIME_FORMAT' => '(yyyy-mm-dd 24:00)',
  'NTC_DELETE_CONFIRMATION' => '您确定要删除这条记录?',
  'NTC_DELETE_CONFIRMATION_MULTIPLE' => '确定要删除所选择的记录吗?',
  'NTC_LOGIN_MESSAGE' => '请输入用户名和密码。',
  'NTC_NO_ITEMS_DISPLAY' => '无',
  'NTC_REMOVE_CONFIRMATION' => '您确定要移除这个关系吗?',
  'NTC_REQUIRED' => '表示必填字段',
  'NTC_SUPPORT_SUGARCRM' => '支持SugarCRM开源项目，通过paypal捐赠它。-它是快速、免费和安全的！',
  'NTC_TIME_FORMAT' => '(24:00)',
  'NTC_WELCOME' => '欢迎',
  'NTC_YEAR_FORMAT' => '(yyyy)',
);

