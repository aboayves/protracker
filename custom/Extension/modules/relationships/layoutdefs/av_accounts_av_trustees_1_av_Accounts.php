<?php
 // created: 2012-10-18 01:17:48
$layout_defs["av_Accounts"]["subpanel_setup"]['av_accounts_av_trustees_1'] = array (
  'order' => 100,
  'module' => 'av_Trustees',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_AV_ACCOUNTS_AV_TRUSTEES_1_FROM_AV_TRUSTEES_TITLE',
  'get_subpanel_data' => 'av_accounts_av_trustees_1',
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
