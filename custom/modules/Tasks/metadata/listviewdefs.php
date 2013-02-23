<?php
$listViewDefs ['Tasks'] = 
array (
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
  ),
  'NAME' => 
  array (
    'width' => '15%',
    'label' => 'LBL_LIST_SUBJECT',
    'link' => true,
    'default' => true,
  ),
  'DATE_DUE' => 
  array (
    'width' => '8%',
    'label' => 'LBL_LIST_DUE_DATE',
    'link' => false,
    'default' => true,
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
  ),
  'STATUS' => 
  array (
    'width' => '15%',
    'label' => 'LBL_LIST_STATUS',
    'link' => false,
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
    'width' => '10%',
    'label' => 'LBL_LIST_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => true,
  ),
  'PERCENT_COMPLETE' => 
  array (
    'type' => 'enum',
    'default' => true,
    'label' => 'LBL_PERCENT_COMPLETE',
    'width' => '8%',
  ),
  'TEAM_NAME' => 
  array (
    'width' => '2%',
    'label' => 'LBL_LIST_TEAM',
    'default' => false,
  ),
  'CONTACT_NAME' => 
  array (
    'width' => '5%',
    'label' => 'LBL_LIST_CONTACT',
    'link' => true,
    'id' => 'CONTACT_ID',
    'module' => 'Contacts',
    'default' => false,
    'ACLTag' => 'CONTACT',
    'related_fields' => 
    array (
      0 => 'contact_id',
    ),
  ),
  'ON_REPORT_CARD' => 
  array (
    'type' => 'bool',
    'default' => false,
    'label' => 'LBL_ON_REPORT_CARD',
    'width' => '10%',
  ),
  'RESULTS' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_RESULTS',
    'width' => '10%',
  ),
  'PRIVATE' => 
  array (
    'type' => 'bool',
    'default' => false,
    'label' => 'LBL_PRIVATE',
    'width' => '10%',
  ),
  'TIME_DUE' => 
  array (
    'width' => '15%',
    'label' => 'LBL_LIST_DUE_TIME',
    'sortable' => false,
    'link' => false,
    'default' => false,
  ),
  'NOTIFY_CHILD_COMPLETION' => 
  array (
    'type' => 'bool',
    'default' => false,
    'label' => 'LBL_NOTIFY_CHILD_COMPLETION',
    'width' => '10%',
  ),
  'CATEGORY' => 
  array (
    'type' => 'enum',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_CATEGORY',
    'width' => '10%',
  ),
  'ALOW_ASIGNE_TO_MODIFY' => 
  array (
    'type' => 'bool',
    'default' => false,
    'label' => 'LBL_ALOW_ASIGNE_TO_MODIFY',
    'width' => '10%',
  ),
  'ON_TASK_LIST' => 
  array (
    'type' => 'bool',
    'label' => 'LBL_ON_TASK_LIST',
    'width' => '10%',
    'default' => false,
  ),
  'CONTACT_PHONE' => 
  array (
    'type' => 'phone',
    'studio' => 
    array (
      'listview' => true,
    ),
    'label' => 'LBL_CONTACT_PHONE',
    'width' => '10%',
    'default' => false,
  ),
  'ON_CLIENT_TASK_LIST' => 
  array (
    'type' => 'bool',
    'default' => false,
    'label' => 'LBL_ON_CLIENT_TASK_LIST',
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
  'ON_MEETING_AGENDA' => 
  array (
    'type' => 'bool',
    'default' => false,
    'label' => 'LBL_ON_MEETING_AGENDA',
    'width' => '10%',
  ),
  'ON_FINANCIAL_PLAN' => 
  array (
    'type' => 'bool',
    'default' => false,
    'label' => 'LBL_ON_FINANCIAL_PLAN',
    'width' => '10%',
  ),
  'DATE_START' => 
  array (
    'width' => '5%',
    'label' => 'LBL_LIST_START_DATE',
    'link' => false,
    'default' => false,
  ),
  'CLOSED_STATUS' => 
  array (
    'type' => 'bool',
    'default' => false,
    'label' => 'LBL_CLOSED_STATUS',
    'width' => '10%',
  ),
  'PROJECT' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_PROJECT',
    'id' => 'PROJECT_ID',
    'link' => true,
    'width' => '10%',
    'default' => false,
  ),
  'DATE_COMPLETE' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DTE_CMP',
    'width' => '10%',
    'default' => false,
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
  'PRIORITY' => 
  array (
    'type' => 'enum',
    'label' => 'LBL_PRIORITY',
    'width' => '10%',
    'default' => false,
  ),
  'DATE_MODIFIED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_MODIFIED',
    'width' => '10%',
    'default' => false,
  ),
  'DATE_ENTERED' => 
  array (
    'width' => '10%',
    'label' => 'LBL_DATE_ENTERED',
    'default' => false,
  ),
);
?>
