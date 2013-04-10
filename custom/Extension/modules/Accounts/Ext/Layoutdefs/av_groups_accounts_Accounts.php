<?php
 // created: 2012-04-25 15:09:32
$layout_defs["Accounts"]["subpanel_setup"]['av_groups_accounts'] = array (
  'order' => 100,
  'module' => 'av_Groups',
  'subpanel_name' => 'forAccounts',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_AV_GROUPS_ACCOUNTS_FROM_AV_GROUPS_TITLE',
  'get_subpanel_data' => 'av_groups_accounts',
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
