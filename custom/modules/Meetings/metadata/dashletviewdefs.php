<?php
$dashletData['MeetingsDashlet']['searchFields'] = array (
  'date_start' => 
  array (
    'default' => '',
  ),
  'av_activity_types_name' => 
  array (
    'default' => '',
  ),
  'name' => 
  array (
    'default' => '',
  ),
);
$dashletData['MeetingsDashlet']['columns'] = array (
  'set_complete' => 
  array (
    'width' => '1%',
    'label' => 'LBL_LIST_CLOSE',
    'default' => true,
    'sortable' => false,
    'related_fields' => 
    array (
      0 => 'status',
      1 => 'recurring_source',
    ),
    'name' => 'set_complete',
  ),
  'date_start' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE',
    'default' => true,
    'related_fields' => 
    array (
      0 => 'time_start',
    ),
    'name' => 'date_start',
  ),
  'duration' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DURATION',
    'sortable' => false,
    'related_fields' => 
    array (
      0 => 'duration_hours',
      1 => 'duration_minutes',
    ),
    'name' => 'duration',
    'default' => true,
  ),
  'parent_name' => 
  array (
    'width' => '15%',
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
  'name' => 
  array (
    'width' => '25%',
    'label' => 'LBL_SUBJECT',
    'link' => true,
    'default' => true,
    'name' => 'name',
  ),
  'join_meeting' => 
  array (
    'width' => '1%',
    'label' => 'LBL_LIST_JOIN_MEETING',
    'default' => false,
    'sortable' => false,
    'noHeader' => true,
    'related_fields' => 
    array (
      0 => 'host_url',
    ),
    'name' => 'join_meeting',
  ),
  'set_accept_links' => 
  array (
    'width' => '10%',
    'label' => 'LBL_ACCEPT_THIS',
    'sortable' => false,
    'default' => false,
    'related_fields' => 
    array (
      0 => 'status',
    ),
    'name' => 'set_accept_links',
  ),
  'status' => 
  array (
    'width' => '8%',
    'label' => 'LBL_STATUS',
    'name' => 'status',
    'default' => false,
  ),
  'type' => 
  array (
    'width' => '8%',
    'label' => 'LBL_TYPE',
    'name' => 'type',
    'default' => false,
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
  'created_by' => 
  array (
    'width' => '8%',
    'label' => 'LBL_CREATED',
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
  'team_name' => 
  array (
    'width' => '15%',
    'label' => 'LBL_LIST_TEAM',
    'name' => 'team_name',
    'default' => false,
  ),
);
