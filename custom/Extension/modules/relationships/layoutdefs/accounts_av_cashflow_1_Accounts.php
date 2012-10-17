<?php
 // created: 2012-10-15 00:48:16
$layout_defs["Accounts"]["subpanel_setup"]['accounts_av_cashflow_1'] = array (
  'order' => 100,
  'module' => 'av_Cashflow',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_ACCOUNTS_AV_CASHFLOW_1_FROM_AV_CASHFLOW_TITLE',
  'get_subpanel_data' => 'accounts_av_cashflow_1',
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
