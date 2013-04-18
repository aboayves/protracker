<?php
 // created: 2012-10-15 02:06:07
$layout_defs["Notes"]["subpanel_setup"]['notes_av_activity_types_1'] = array (
  'order' => 100,
  'module' => 'av_Activity_Types',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_NOTES_AV_ACTIVITY_TYPES_1_FROM_AV_ACTIVITY_TYPES_TITLE',
  'get_subpanel_data' => 'notes_av_activity_types_1',
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
