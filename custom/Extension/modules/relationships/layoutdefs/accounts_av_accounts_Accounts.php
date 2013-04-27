<?php
 // created: 2012-05-21 17:10:30
$layout_defs["Accounts"]["subpanel_setup"]['accounts_av_accounts'] = array (
  'order' => 100,
  'module' => 'av_Accounts',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_ACCOUNTS_AV_ACCOUNTS_FROM_AV_ACCOUNTS_TITLE',
  'get_subpanel_data' => 'accounts_av_accounts',
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
