<?php
 // created: 2012-05-14 16:00:23
$layout_defs["av_Accounts"]["subpanel_setup"]['av_accounts_av_account_histories'] = array (
  'order' => 100,
  'module' => 'av_Account_Histories',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_AV_ACCOUNTS_AV_ACCOUNT_HISTORIES_FROM_AV_ACCOUNT_HISTORIES_TITLE',
  'get_subpanel_data' => 'av_accounts_av_account_histories',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);
