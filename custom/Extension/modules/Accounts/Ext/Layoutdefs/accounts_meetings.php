<?php
// created: 2012-09-03 07:22:23
$layout_defs["Accounts"]["subpanel_setup"]["meetings_accounts"] = array (
  'order' => 8,
  'module' => 'Meetings',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_ACCOUNTS_MEETINGS_FROM_MEETINGS_TITLE',
  'get_subpanel_data' => 'meetings_accounts',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreateCustom',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);
