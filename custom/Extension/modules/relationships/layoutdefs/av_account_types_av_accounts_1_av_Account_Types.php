<?php
 // created: 2012-11-14 19:54:13
$layout_defs["av_Account_Types"]["subpanel_setup"]['av_account_types_av_accounts_1'] = array (
  'order' => 100,
  'module' => 'av_Accounts',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_AV_ACCOUNT_TYPES_AV_ACCOUNTS_1_FROM_AV_ACCOUNTS_TITLE',
  'get_subpanel_data' => 'av_account_types_av_accounts_1',
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
