<?php
 // created: 2012-10-24 20:45:06
$layout_defs["Accounts"]["subpanel_setup"]['accounts_av_payments_1'] = array (
  'order' => 100,
  'module' => 'av_Payments',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_ACCOUNTS_AV_PAYMENTS_1_FROM_AV_PAYMENTS_TITLE',
  'get_subpanel_data' => 'accounts_av_payments_1',
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
