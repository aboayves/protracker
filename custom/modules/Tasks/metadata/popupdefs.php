<?php
$popupMeta = array (
    'moduleMain' => 'Tasks',
    'varName' => 'Task',
    'orderBy' => 'tasks.name',
    'whereClauses' => array (
  'name' => 'tasks.name',
),
    'searchInputs' => array (
  0 => 'tasks_number',
  1 => 'name',
  2 => 'priority',
  3 => 'status',
),
    'listviewdefs' => array (
  'SET_COMPLETE' => 
  array (
    'width' => '1%',
    'label' => 'LBL_LIST_CLOSE',
    'link' => true,
    'sortable' => false,
    'default' => true,
    'related_fields' => 
    array (
      0 => 'status',
    ),
    'name' => 'set_complete',
  ),
  'DATE_DUE' => 
  array (
    'width' => '8%',
    'label' => 'LBL_LIST_DUE_DATE',
    'link' => false,
    'default' => true,
    'name' => 'date_due',
  ),
  'PARENT_NAME' => 
  array (
    'width' => '10%',
    'label' => 'LBL_LIST_RELATED_TO',
    'dynamic_module' => 'PARENT_TYPE',
    'id' => 'PARENT_ID',
    'link' => true,
    'default' => true,
    'sortable' => false,
    'ACLTag' => 'PARENT',
    'related_fields' => 
    array (
      0 => 'parent_id',
      1 => 'parent_type',
    ),
    'name' => 'parent_name',
  ),
  'STATUS' => 
  array (
    'width' => '9%',
    'label' => 'LBL_LIST_STATUS',
    'link' => false,
    'default' => true,
    'name' => 'status',
  ),
  'PARENT_TASKS_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_PARENT_TASKS',
    'id' => 'PARENT_TASKS_ID',
    'width' => '8%',
    'default' => true,
    'name' => 'parent_tasks_name',
  ),
  'NAME' => 
  array (
    'width' => '15%',
    'label' => 'LBL_LIST_SUBJECT',
    'link' => true,
    'default' => true,
    'name' => 'name',
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '10%',
    'label' => 'LBL_LIST_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => true,
    'name' => 'assigned_user_name',
  ),
  'PERCENT_COMPLETE' => 
  array (
    'type' => 'enum',
    'default' => true,
    'label' => 'LBL_PERCENT_COMPLETE',
    'width' => '10%',
    'name' => 'percent_complete',
  ),
  'AV_ACTIVITY_TYPES_TASKS_1_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_AV_ACTIVITY_TYPES_TASKS_1_FROM_AV_ACTIVITY_TYPES_TITLE',
    'id' => 'AV_ACTIVITY_TYPES_TASKS_1AV_ACTIVITY_TYPES_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'DATE_COMPLETE' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DTE_CMP',
    'width' => '10%',
    'default' => true,
    'name' => 'date_complete',
  ),
),
);
