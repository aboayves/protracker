<?php
$popupMeta = array (
    'moduleMain' => 'Notes',
    'varName' => 'Note',
    'orderBy' => 'notes.name',
    'whereClauses' => array (
  'name' => 'notes.name',
  'parent_name' => 'notes.parent_name',
  'av_activity_types_notes_1_name' => 'notes.av_activity_types_notes_1_name',
  'filename' => 'notes.filename',
  'created_by_name' => 'notes.created_by_name',
  'date_entered' => 'notes.date_entered',
  'modified_by_name' => 'notes.modified_by_name',
  'date_modified' => 'notes.date_modified',
  'on_meeting_agenda' => 'notes.on_meeting_agenda',
  'on_report_card' => 'notes.on_report_card',
),
    'searchInputs' => array (
  1 => 'name',
  4 => 'parent_name',
  5 => 'av_activity_types_notes_1_name',
  6 => 'filename',
  7 => 'created_by_name',
  8 => 'date_entered',
  9 => 'modified_by_name',
  10 => 'date_modified',
  11 => 'on_meeting_agenda',
  12 => 'on_report_card',
),
    'searchdefs' => array (
  'name' => 
  array (
    'name' => 'name',
    'width' => '10%',
  ),
  'parent_name' => 
  array (
    'type' => 'parent',
    'label' => 'LBL_RELATED_TO',
    'width' => '10%',
    'name' => 'parent_name',
  ),
  'av_activity_types_notes_1_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_AV_ACTIVITY_TYPES_NOTES_1_FROM_AV_ACTIVITY_TYPES_TITLE',
    'id' => 'AV_ACTIVITY_TYPES_NOTES_1AV_ACTIVITY_TYPES_IDA',
    'width' => '10%',
    'name' => 'av_activity_types_notes_1_name',
  ),
  'filename' => 
  array (
    'name' => 'filename',
    'width' => '10%',
  ),
  'created_by_name' => 
  array (
    'type' => 'relate',
    'label' => 'LBL_CREATED_BY',
    'width' => '10%',
    'name' => 'created_by_name',
  ),
  'date_entered' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_ENTERED',
    'width' => '10%',
    'name' => 'date_entered',
  ),
  'modified_by_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_MODIFIED_BY',
    'id' => 'MODIFIED_USER_ID',
    'width' => '10%',
    'name' => 'modified_by_name',
  ),
  'date_modified' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_MODIFIED',
    'width' => '10%',
    'name' => 'date_modified',
  ),
  'on_meeting_agenda' => 
  array (
    'type' => 'bool',
    'label' => 'LBL_ON_MEETING_AGENDA',
    'width' => '10%',
    'name' => 'on_meeting_agenda',
  ),
  'on_report_card' => 
  array (
    'type' => 'bool',
    'label' => 'LBL_ON_REPORT_CARD',
    'width' => '10%',
    'name' => 'on_report_card',
  ),
),
    'listviewdefs' => array (
  'NAME' => 
  array (
    'width' => '40%',
    'label' => 'LBL_LIST_SUBJECT',
    'link' => true,
    'default' => true,
    'name' => 'name',
  ),
  'PARENT_NAME' => 
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
  'AV_ACTIVITY_TYPES_NOTES_1_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_AV_ACTIVITY_TYPES_NOTES_1_FROM_AV_ACTIVITY_TYPES_TITLE',
    'id' => 'AV_ACTIVITY_TYPES_NOTES_1AV_ACTIVITY_TYPES_IDA',
    'width' => '10%',
    'default' => true,
    'name' => 'av_activity_types_notes_1_name',
  ),
  'DATE_ENTERED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_ENTERED',
    'width' => '10%',
    'default' => true,
    'name' => 'date_entered',
  ),
  'MODIFIED_BY_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_MODIFIED_BY',
    'id' => 'MODIFIED_USER_ID',
    'width' => '10%',
    'default' => true,
    'name' => 'modified_by_name',
  ),
  'DATE_MODIFIED' => 
  array (
    'width' => '20%',
    'label' => 'LBL_DATE_MODIFIED',
    'link' => false,
    'default' => true,
    'name' => 'date_modified',
  ),
  'FILENAME' => 
  array (
    'width' => '20%',
    'label' => 'LBL_LIST_FILENAME',
    'default' => true,
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
    'name' => 'filename',
  ),
),
);
