<?php
$module_name = 'av_Task_Template';
$listViewDefs [$module_name] = 
array (
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
  'DESCRIPTION' => 
  array (
    'type' => 'text',
    'label' => 'LBL_DESCRIPTION',
    'sortable' => false,
    'width' => '10%',
    'default' => false,
  ),
);
?>
