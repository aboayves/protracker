<?php
// created: 2013-05-06 18:09:13
$subpanel_layout['list_fields'] = array (
  'name' => 
  array (
    'vname' => 'LBL_NAME',
    'widget_class' => 'SubPanelDetailViewLink',
    'width' => '20%',
    'default' => true,
  ),
  'task_category' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'vname' => 'LBL_TASK_CATEGORY',
    'width' => '12%',
    'default' => true,
  ),
  'assign_to' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'default' => true,
    'vname' => 'LBL_ASSIGN_TO',
    'width' => '12%',
  ),
  'parent_tasks_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'vname' => 'LBL_PARENT_TASKS',
    'id' => 'PARENT_TASKS_ID',
    'width' => '15%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'av_Task_Template',
    'target_record_key' => 'parent_tasks_id',
  ),
  'days_out' => 
  array (
    'type' => 'int',
    'vname' => 'LBL_DAYS_OUT',
    'width' => '8%',
    'default' => true,
  ),
  'client_task' => 
  array (
    'type' => 'bool',
    'default' => true,
    'vname' => 'LBL_CLIENT_TASK',
    'width' => '8%',
  ),
  'date_modified' => 
  array (
    'vname' => 'LBL_DATE_MODIFIED',
    'width' => '10%',
    'default' => true,
  ),
  'edit_button' => 
  array (
    'widget_class' => 'SubPanelEditButton',
    'module' => 'av_Task_Template',
    'width' => '4%',
    'default' => true,
  ),
  'remove_button' => 
  array (
    'widget_class' => 'SubPanelRemoveButton',
    'module' => 'av_Task_Template',
    'width' => '5%',
    'default' => true,
  ),
);