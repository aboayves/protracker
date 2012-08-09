<?php
 // created: 2012-08-09 15:46:04
$layout_defs["rt_Offices"]["subpanel_setup"]['rt_offices_av_groups'] = array (
  'order' => 100,
  'module' => 'av_Groups',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_RT_OFFICES_AV_GROUPS_FROM_AV_GROUPS_TITLE',
  'get_subpanel_data' => 'rt_offices_av_groups',
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
