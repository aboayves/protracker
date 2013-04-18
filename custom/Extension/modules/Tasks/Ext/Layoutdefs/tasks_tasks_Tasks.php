<?php
 // created: 2012-04-30 16:26:21
$layout_defs["Tasks"]["subpanel_setup"]['parent_tasks'] = array (
  'order' => 100,
  'module' => 'Tasks',
  'subpanel_name' => 'ForTasks',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_CHILD_TASKS',
  'get_subpanel_data' => 'parent_tasks',
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
