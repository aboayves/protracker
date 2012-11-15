<?php
 // created: 2012-11-09 03:40:17
$layout_defs["Accounts"]["subpanel_setup"]['accounts_av_fact_finder_1'] = array (
  'order' => 100,
  'module' => 'av_Fact_Finder',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_ACCOUNTS_AV_FACT_FINDER_1_FROM_AV_FACT_FINDER_TITLE',
  'get_subpanel_data' => 'accounts_av_fact_finder_1',
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
