<?php
 // created: 2012-10-17 18:13:37
$layout_defs["av_Activity_Types"]["subpanel_setup"]['av_activity_types_tasks_1'] = array (
  'order' => 100,
  'module' => 'Tasks',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_AV_ACTIVITY_TYPES_TASKS_1_FROM_TASKS_TITLE',
  'get_subpanel_data' => 'av_activity_types_tasks_1',
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
