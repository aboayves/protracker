<?php
$dashletData['TasksDashlet']['searchFields'] = array (
  'name' => 
  array (
    'default' => '',
  ),
  'assigned_user_name' => 
  array (
    'default' => '',
  ),
  'priority' => 
  array (
    'default' => '',
  ),
  'date_due' => 
  array (
    'default' => '',
  ),
  'parent_tasks_name' => 
  array (
    'default' => '',
  ),
  'team_id' => 
  array (
    'default' => '',
  ),
  'date_entered' => 
  array (
    'default' => '',
  ),
);
$dashletData['TasksDashlet']['columns'] = array (
  'set_complete' => 
  array (
    'width' => '1%',
    'label' => 'LBL_LIST_CLOSE',
    'default' => true,
    'sortable' => false,
    'name' => 'set_complete',
  ),
  'name' => 
  array (
    'width' => '40%',
    'label' => 'LBL_SUBJECT',
    'link' => true,
    'default' => true,
    'name' => 'name',
  ),
  'parent_name' => 
  array (
    'width' => '5%',
    'label' => 'LBL_LIST_RELATED_TO',
    'sortable' => false,
    'dynamic_module' => 'PARENT_TYPE',
    'link' => true,
    'id' => 'PARENT_ID',
    'ACLTag' => 'PARENT',
    'related_fields' => 
    array (
      0 => 'parent_id',
      1 => 'parent_type',
    ),
    'default' => true,
    'name' => 'parent_name',
  ),
  'priority' => 
  array (
    'width' => '5%',
    'label' => 'LBL_PRIORITY',
    'default' => true,
    'name' => 'priority',
  ),
  'status' => 
  array (
    'width' => '5%',
    'label' => 'LBL_STATUS',
    'default' => true,
    'name' => 'status',
  ),
  'date_due' => 
  array (
    'width' => '8%',
    'label' => 'LBL_DUE_DATE',
    'default' => true,
    'name' => 'date_due',
  ),
  'av_activity_types_tasks_1_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_AV_ACTIVITY_TYPES_TASKS_1_FROM_AV_ACTIVITY_TYPES_TITLE',
    'id' => 'AV_ACTIVITY_TYPES_TASKS_1AV_ACTIVITY_TYPES_IDA',
    'width' => '10%',
    'default' => false,
  ),
  'time_start' => 
  array (
    'width' => '15%',
    'label' => 'LBL_START_TIME',
    'default' => false,
    'name' => 'time_start',
  ),
  'date_entered' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_ENTERED',
    'name' => 'date_entered',
    'default' => false,
  ),
  'date_modified' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_MODIFIED',
    'name' => 'date_modified',
    'default' => false,
  ),
  'parent_tasks_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_PARENT_TASKS',
    'id' => 'PARENT_TASKS_ID',
    'width' => '10%',
    'default' => false,
  ),
  'date_start' => 
  array (
    'width' => '8%',
    'label' => 'LBL_START_DATE',
    'default' => false,
    'name' => 'date_start',
  ),
  'created_by' => 
  array (
    'width' => '8%',
    'label' => 'Created by',
    'sortable' => false,
    'name' => 'created_by',
    'default' => false,
  ),
  'assigned_user_name' => 
  array (
    'width' => '8%',
    'label' => 'LBL_LIST_ASSIGNED_USER',
    'name' => 'assigned_user_name',
    'default' => false,
  ),
  'contact_name' => 
  array (
    'width' => '8%',
    'label' => 'LBL_LIST_CONTACT',
    'link' => true,
    'id' => 'CONTACT_ID',
    'module' => 'Contacts',
    'ACLTag' => 'CONTACT',
    'related_fields' => 
    array (
      0 => 'contact_id',
    ),
    'name' => 'contact_name',
    'default' => false,
  ),
  'date_complete' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DTE_CMP',
    'width' => '10%',
    'default' => false,
  ),
  'team_name' => 
  array (
    'width' => '15%',
    'label' => 'LBL_LIST_TEAM',
    'sortable' => false,
    'name' => 'team_name',
    'default' => false,
  ),
  'on_client_task_list' => 
  array (
    'type' => 'bool',
    'default' => false,
    'label' => 'LBL_ON_CLIENT_TASK_LIST',
    'width' => '10%',
  ),
  'on_task_list' => 
  array (
    'type' => 'bool',
    'label' => 'LBL_ON_TASK_LIST',
    'width' => '10%',
    'default' => false,
  ),
  'on_meeting_agenda' => 
  array (
    'type' => 'bool',
    'default' => false,
    'label' => 'LBL_ON_MEETING_AGENDA',
    'width' => '10%',
  ),
  'on_report_card' => 
  array (
    'type' => 'bool',
    'default' => false,
    'label' => 'LBL_ON_REPORT_CARD',
    'width' => '10%',
  ),
);
