<?php
 // created: 2012-04-25 23:02:45
$layout_defs["av_Accounts"]["subpanel_setup"]['av_accounts_av_net_worth'] = array (
  'order' => 100,
  'module' => 'av_Net_Worth',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_AV_NET_WORTH_AV_ACCOUNTS_FROM_AV_NET_WORTH_TITLE',
  'get_subpanel_data' => 'av_accounts_av_net_worth',
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
