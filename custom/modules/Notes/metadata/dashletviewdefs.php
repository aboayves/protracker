<?php
$dashletData['NotesDashlet']['searchFields'] = array (
  'date_entered' => 
  array (
    'default' => '',
  ),
  'name' => 
  array (
    'default' => '',
  ),
  'av_activity_types_notes_1_name' => 
  array (
    'default' => '',
  ),
);
$dashletData['NotesDashlet']['columns'] = array (
  'date_entered' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_ENTERED',
    'width' => '10%',
    'default' => true,
    'name' => 'date_entered',
  ),
  'parent_name' => 
  array (
    'width' => '20%',
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
  'name' => 
  array (
    'width' => '40%',
    'label' => 'LBL_LIST_SUBJECT',
    'link' => true,
    'default' => true,
    'name' => 'name',
  ),
  'av_activity_types_notes_1_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_AV_ACTIVITY_TYPES_NOTES_1_FROM_AV_ACTIVITY_TYPES_TITLE',
    'id' => 'AV_ACTIVITY_TYPES_NOTES_1AV_ACTIVITY_TYPES_IDA',
    'width' => '10%',
    'default' => true,
    'name' => 'av_activity_types_notes_1_name',
  ),
  'assigned_user_name' => 
  array (
    'link' => true,
    'type' => 'relate',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'id' => 'ASSIGNED_USER_ID',
    'width' => '10%',
    'default' => true,
  ),
  'team_name' => 
  array (
    'width' => '2%',
    'label' => 'LBL_LIST_TEAM',
    'default' => false,
    'name' => 'team_name',
  ),
  'created_by_name' => 
  array (
    'type' => 'relate',
    'label' => 'LBL_CREATED_BY',
    'width' => '10%',
    'default' => false,
    'name' => 'created_by_name',
  ),
  'filename' => 
  array (
    'width' => '20%',
    'label' => 'LBL_LIST_FILENAME',
    'default' => false,
    'type' => 'file',
    'related_fields' => 
    array (
      0 => 'file_url',
      1 => 'id',
      2 => 'doc_id',
      3 => 'doc_type',
    ),
    'displayParams' => 
    array (
      'module' => 'Notes',
    ),
    'name' => 'filename',
  ),
  'date_modified' => 
  array (
    'width' => '20%',
    'label' => 'LBL_DATE_MODIFIED',
    'link' => false,
    'default' => false,
    'name' => 'date_modified',
  ),
  'modified_by_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_MODIFIED_BY',
    'id' => 'MODIFIED_USER_ID',
    'width' => '10%',
    'default' => false,
    'name' => 'modified_by_name',
  ),
  'contact_name' => 
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
    'name' => 'contact_name',
  ),
  'on_meeting_agenda' => 
  array (
    'type' => 'bool',
    'default' => false,
    'label' => 'LBL_ON_MEETING_AGENDA',
    'width' => '10%',
    'name' => 'on_meeting_agenda',
  ),
  'on_report_card' => 
  array (
    'type' => 'bool',
    'default' => false,
    'label' => 'LBL_ON_REPORT_CARD',
    'width' => '10%',
    'name' => 'on_report_card',
  ),
);
