<?php
 // created: 2012-07-07 08:04:53
$layout_defs["Tasks"]["subpanel_setup"]['tasks_tasks_1tasks_ida'] = array (
  'order' => 100,
  'module' => 'Tasks',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_TASKS_TASKS_1_FROM_TASKS_R_TITLE',
  'get_subpanel_data' => 'tasks_tasks_1tasks_ida',
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
