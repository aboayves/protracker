<?php
 // created: 2012-10-18 02:28:59
$layout_defs["av_Accounts"]["subpanel_setup"]['av_accounts_av_positions_1'] = array (
  'order' => 100,
  'module' => 'av_Positions',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_AV_ACCOUNTS_AV_POSITIONS_1_FROM_AV_POSITIONS_TITLE',
  'get_subpanel_data' => 'av_accounts_av_positions_1',
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
