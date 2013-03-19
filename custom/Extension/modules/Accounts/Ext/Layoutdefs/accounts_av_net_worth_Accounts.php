<?php
 // created: 2012-05-21 21:59:02
$layout_defs["Accounts"]["subpanel_setup"]['accounts_av_net_worth'] = array (
  'order' => 100,
  'module' => 'av_Net_Worth',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_ACCOUNTS_AV_NET_WORTH_FROM_AV_NET_WORTH_TITLE',
  'get_subpanel_data' => 'accounts_av_net_worth',
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
