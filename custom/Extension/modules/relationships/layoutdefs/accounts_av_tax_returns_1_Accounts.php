<?php
 // created: 2012-10-18 03:13:53
$layout_defs["Accounts"]["subpanel_setup"]['accounts_av_tax_returns_1'] = array (
  'order' => 100,
  'module' => 'av_Tax_Returns',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_ACCOUNTS_AV_TAX_RETURNS_1_FROM_AV_TAX_RETURNS_TITLE',
  'get_subpanel_data' => 'accounts_av_tax_returns_1',
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
