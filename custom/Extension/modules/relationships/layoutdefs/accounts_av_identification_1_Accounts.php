<?php
 // created: 2012-10-14 16:31:53
$layout_defs["Accounts"]["subpanel_setup"]['accounts_av_identification_1'] = array (
  'order' => 100,
  'module' => 'av_Identification',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_ACCOUNTS_AV_IDENTIFICATION_1_FROM_AV_IDENTIFICATION_TITLE',
  'get_subpanel_data' => 'accounts_av_identification_1',
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
