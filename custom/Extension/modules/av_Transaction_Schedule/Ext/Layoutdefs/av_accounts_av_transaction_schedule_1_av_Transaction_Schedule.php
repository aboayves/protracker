<?php
 // created: 2012-10-23 17:32:41
$layout_defs["av_Transaction_Schedule"]["subpanel_setup"]['av_accounts_av_transaction_schedule_1'] = array (
  'order' => 100,
  'module' => 'av_Accounts',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_AV_ACCOUNTS_AV_TRANSACTION_SCHEDULE_1_FROM_AV_ACCOUNTS_TITLE',
  'get_subpanel_data' => 'av_accounts_av_transaction_schedule_1',
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
