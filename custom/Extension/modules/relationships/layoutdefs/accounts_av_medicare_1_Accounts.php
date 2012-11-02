<?php
 // created: 2012-10-23 20:11:06
$layout_defs["Accounts"]["subpanel_setup"]['accounts_av_medicare_1'] = array (
  'order' => 100,
  'module' => 'av_Medicare',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_ACCOUNTS_AV_MEDICARE_1_FROM_AV_MEDICARE_TITLE',
  'get_subpanel_data' => 'accounts_av_medicare_1',
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
