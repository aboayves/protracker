<?php
$listViewDefs ['Notes'] = 
array (
  'DATE_ENTERED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_ENTERED',
    'width' => '10%',
    'default' => true,
  ),
  'PARENT_NAME' => 
  array (
    'width' => '12%',
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
  'NAME' => 
  array (
    'width' => '20%',
    'label' => 'LBL_LIST_SUBJECT',
    'link' => true,
    'default' => true,
  ),
  'AV_ACTIVITY_TYPES_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_AV_ACTIVITY_TYPES_NAME',
    'id' => 'ACTIVITY_TYPE_ID',
    'width' => '10%',
    'default' => true,
  ),
  'FILE_URL' => 
  array (
    'type' => 'function',
    'label' => 'LBL_FILE_URL',
    'width' => '10%',
    'default' => false,
  ),
  'ON_FINANCIAL_PLAN' => 
  array (
    'type' => 'bool',
    'default' => false,
    'label' => 'LBL_ON_FINANCIAL_PLAN',
    'width' => '10%',
  ),
  'CONTACT_NAME' => 
  array (
    'width' => '20%',
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
  'PORTAL_FLAG' => 
  array (
    'type' => 'bool',
    'label' => 'LBL_PORTAL_FLAG',
    'width' => '10%',
    'default' => false,
  ),
  'FILENAME' => 
  array (
    'width' => '15%',
    'label' => 'LBL_LIST_FILENAME',
    'default' => false,
    'type' => 'file',
    'related_fields' => 
    array (
      0 => 'file_url',
      1 => 'id',
    ),
    'displayParams' => 
    array (
      'module' => 'Notes',
    ),
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'link' => true,
    'type' => 'relate',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'id' => 'ASSIGNED_USER_ID',
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
  'DATE_MODIFIED' => 
  array (
    'width' => '10%',
    'label' => 'LBL_DATE_MODIFIED',
    'link' => false,
    'default' => false,
  ),
  'ON_REPORT_CARD' => 
  array (
    'type' => 'bool',
    'default' => false,
    'label' => 'LBL_ON_REPORT_CARD',
    'width' => '10%',
  ),
  'TEAM_NAME' => 
  array (
    'width' => '2%',
    'label' => 'LBL_LIST_TEAM',
    'default' => false,
  ),
  'CREATED_BY_NAME' => 
  array (
    'type' => 'relate',
    'label' => 'LBL_CREATED_BY',
    'width' => '10%',
    'default' => false,
    'related_fields' => 
    array (
      0 => 'created_by',
    ),
  ),
  'MODIFIED_BY_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_MODIFIED_BY',
    'id' => 'MODIFIED_USER_ID',
    'width' => '10%',
    'default' => false,
  ),
);
?>
