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
  'date_modified' => 
  array (
    'default' => '',
  ),
  'modified_by_name' => 
  array (
    'default' => '',
  ),
  'team_name' => 
  array (
    'default' => '',
  ),
);
$dashletData['NotesDashlet']['columns'] = array (
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
  'av_activity_types_notes_1_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_AV_ACTIVITY_TYPES_NOTES_1_FROM_AV_ACTIVITY_TYPES_TITLE',
    'id' => 'AV_ACTIVITY_TYPES_NOTES_1AV_ACTIVITY_TYPES_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'name' => 
  array (
    'width' => '40%',
    'label' => 'LBL_LIST_SUBJECT',
    'link' => true,
    'default' => true,
    'name' => 'name',
  ),
  'filename' => 
  array (
    'width' => '20%',
    'label' => 'LBL_LIST_FILENAME',
    'default' => true,
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
  'modified_by_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_MODIFIED_BY',
    'id' => 'MODIFIED_USER_ID',
    'width' => '10%',
    'default' => true,
    'name' => 'modified_by_name',
  ),
  'date_modified' => 
  array (
    'width' => '20%',
    'label' => 'LBL_DATE_MODIFIED',
    'link' => false,
    'default' => true,
    'name' => 'date_modified',
  ),
  'date_entered' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_ENTERED',
    'width' => '10%',
    'default' => false,
    'name' => 'date_entered',
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
  ),
  'on_report_card' => 
  array (
    'type' => 'bool',
    'default' => false,
    'label' => 'LBL_ON_REPORT_CARD',
    'width' => '10%',
  ),
);
