<?php
$popupMeta = array (
    'moduleMain' => 'Calls',
    'varName' => 'Call',
    'orderBy' => 'calls.name',
    'whereClauses' => array (
  'name' => 'calls.name',
),
    'searchInputs' => array (
  0 => 'calls_number',
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
  'STATUS' => 
  array (
    'width' => '1%',
    'label' => 'LBL_STATUS',
    'link' => false,
    'default' => true,
    'name' => 'status',
  ),
  'NAME' => 
  array (
    'width' => '20%',
    'label' => 'LBL_LIST_SUBJECT',
    'link' => true,
    'default' => true,
    'name' => 'name',
  ),
  'PARENT_NAME' => 
  array (
    'width' => '15%',
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
  'DESCRIPTION' => 
  array (
    'type' => 'text',
    'label' => 'LBL_DESCRIPTION',
    'sortable' => false,
    'width' => '30%',
    'default' => true,
    'name' => 'description',
  ),
  'DATE_START' => 
  array (
    'width' => '15%',
    'label' => 'LBL_LIST_DATE',
    'link' => false,
    'default' => true,
    'related_fields' => 
    array (
      0 => 'time_start',
    ),
    'name' => 'date_start',
  ),
  'DIRECTION' => 
  array (
    'width' => '10%',
    'label' => 'LBL_LIST_DIRECTION',
    'link' => false,
    'default' => true,
    'name' => 'direction',
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '20%',
    'label' => 'LBL_LIST_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => true,
    'name' => 'assigned_user_name',
  ),
),
);
