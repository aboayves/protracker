<?php
 // created: 2012-08-09 15:46:04
$layout_defs["av_Offices"]["subpanel_setup"]['av_offices_av_groups'] = array (
  'order' => 100,
  'module' => 'av_Groups',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_AV_OFFICES_AV_GROUPS_FROM_AV_GROUPS_TITLE',
  'get_subpanel_data' => 'av_offices_av_groups',
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
