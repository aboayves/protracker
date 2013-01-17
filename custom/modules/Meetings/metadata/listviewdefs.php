<?php
$listViewDefs ['Meetings'] = 
array (
  'SET_COMPLETE' => 
  array (
    'width' => '3%',
    'label' => 'LBL_LIST_CLOSE',
    'link' => true,
    'sortable' => false,
    'default' => true,
    'related_fields' => 
    array (
      0 => 'status',
    ),
  ),
  'SET_ACCEPT_LINKS' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_ACCEPT_LINK',
    'width' => '3%',
    'default' => true,
  ),
  'JOIN_MEETING' => 
  array (
    'width' => '2%',
    'label' => 'LBL_LIST_JOIN_MEETING',
    'link' => true,
    'sortable' => false,
    'default' => true,
    'related_fields' => 
    array (
      0 => 'join_url',
      1 => 'host_url',
    ),
    'noHeader' => true,
  ),
  'NAME' => 
  array (
    'width' => '20%',
    'label' => 'LBL_LIST_SUBJECT',
    'link' => true,
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
  'DATE_START' => 
  array (
    'width' => '12%',
    'label' => 'LBL_LIST_DATE',
    'link' => false,
    'default' => true,
    'related_fields' => 
    array (
      0 => 'time_start',
    ),
  ),
  'LOCATION' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_LOCATION',
    'width' => '10%',
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
  'DATE_MODIFIED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_MODIFIED',
    'width' => '10%',
    'default' => true,
  ),
  'TEAM_NAME' => 
  array (
    'width' => '2%',
    'label' => 'LBL_LIST_TEAM',
    'default' => false,
  ),
  'DIRECTION' => 
  array (
    'type' => 'enum',
    'label' => 'LBL_LIST_DIRECTION',
    'width' => '10%',
    'default' => false,
  ),
  'CONTACT_NAME' => 
  array (
    'width' => '12%',
    'label' => 'LBL_LIST_CONTACT',
    'link' => true,
    'id' => 'CONTACT_ID',
    'module' => 'Contacts',
    'default' => false,
    'ACLTag' => 'CONTACT',
  ),
  'STATUS' => 
  array (
    'width' => '10%',
    'label' => 'LBL_LIST_STATUS',
    'link' => false,
    'default' => false,
  ),
  'DATE_ENTERED' => 
  array (
    'width' => '10%',
    'label' => 'LBL_DATE_ENTERED',
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
  'ACCEPT_STATUS' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_ACCEPT_STATUS',
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
  'CREATED_BY_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_CREATED',
    'id' => 'CREATED_BY',
    'width' => '10%',
    'default' => false,
  ),
  'DURATION' => 
  array (
    'type' => 'enum',
    'label' => 'LBL_DURATION',
    'width' => '10%',
    'default' => false,
  ),
  'DURATION_HOURS' => 
  array (
    'type' => 'int',
    'label' => 'LBL_DURATION_HOURS',
    'width' => '10%',
    'default' => false,
  ),
  'DURATION_MINUTES' => 
  array (
    'type' => 'int',
    'label' => 'LBL_DURATION_MINUTES',
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
);
?>
