<?php
 // created: 2012-10-18 01:40:20
$layout_defs["av_Accounts"]["subpanel_setup"]['av_accounts_av_beneficiaries_1'] = array (
  'order' => 100,
  'module' => 'av_Beneficiaries',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_AV_ACCOUNTS_AV_BENEFICIARIES_1_FROM_AV_BENEFICIARIES_TITLE',
  'get_subpanel_data' => 'av_accounts_av_beneficiaries_1',
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
