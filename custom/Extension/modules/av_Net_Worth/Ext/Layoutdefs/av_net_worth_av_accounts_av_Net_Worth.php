<?php
$layout_defs["av_Net_Worth"]["subpanel_setup_disabled"]['av_net_worth_av_accounts'] = array (
  'order' => 100,
  'module' => 'av_Accounts',
  'subpanel_name' => 'av_Net_Worth_subpanel_av_net_worth_av_accounts',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_AV_NET_WORTH_AV_ACCOUNTS_FROM_AV_ACCOUNTS_TITLE',
  'get_subpanel_data' => 'av_net_worth_av_accounts',
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
