<?php
$module_name = 'av_Task_Template';
$listViewDefs [$module_name] = 
array (
  'AV_ACTIVITY_TYPES_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_AV_ACTIVITY_TYPES_NAME',
    'id' => 'ACTIVITY_TYPE_ID',
    'width' => '10%',
    'default' => true,
  ),
  'TASK_CATEGORY' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_TASK_CATEGORY',
    'width' => '12%',
    'default' => true,
  ),
  'NAME' => 
  array (
    'width' => '20%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'SUBJECT' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_SUBJECT',
    'width' => '20%',
    'default' => true,
  ),
  'PARENT_TASKS_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_PARENT_TASKS',
    'id' => 'PARENT_TASKS_ID',
    'width' => '15%',
    'default' => true,
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => true,
  ),
  'DAYS_OUT' => 
  array (
    'type' => 'int',
    'label' => 'LBL_DAYS_OUT',
    'width' => '6%',
    'default' => true,
  ),
  'DATE_MODIFIED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_MODIFIED',
    'width' => '10%',
    'default' => true,
  ),
  'TEAM_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_TEAM',
    'default' => false,
  ),
  'RELATE_TO' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'default' => false,
    'label' => 'LBL_RELATE_TO',
    'width' => '10%',
  ),
  'CLIENT_TASK' => 
  array (
    'type' => 'bool',
    'default' => false,
    'label' => 'LBL_CLIENT_TASK',
    'width' => '10%',
  ),
  'ON_TASK_LIST' => 
  array (
    'type' => 'bool',
    'default' => false,
    'label' => 'LBL_ON_TASK_LIST',
    'width' => '10%',
  ),
  'DESCRIPTION' => 
  array (
    'type' => 'text',
    'label' => 'LBL_DESCRIPTION',
    'sortable' => false,
    'width' => '10%',
    'default' => false,
  ),
  'ASSIGN_TO' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'default' => false,
    'label' => 'LBL_ASSIGN_TO',
    'width' => '10%',
  ),
  'PRIORITY' => 
  array (
    'type' => 'enum',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_PRIORITY',
    'width' => '10%',
  ),
  'NOTIFY_CHILD_COMPLETION' => 
  array (
    'type' => 'bool',
    'default' => false,
    'label' => 'LBL_NOTIFY_CHILD_COMPLETION',
    'width' => '10%',
  ),
  'CREATED_BY_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_CREATED',
    'id' => 'CREATED_BY',
    'width' => '10%',
    'default' => false,
  ),
  'DATE_ENTERED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_ENTERED',
    'width' => '10%',
    'default' => false,
  ),
  'PRIVATE' => 
  array (
    'type' => 'bool',
    'default' => false,
    'label' => 'LBL_PRIVATE',
    'width' => '10%',
  ),
  'MODIFIED_BY_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_MODIFIED_NAME',
    'id' => 'MODIFIED_USER_ID',
    'width' => '10%',
    'default' => false,
  ),
);
?>
