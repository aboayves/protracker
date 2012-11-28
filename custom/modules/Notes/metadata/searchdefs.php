<?php
$searchdefs ['Notes'] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'current_user_only' => 
      array (
        'name' => 'current_user_only',
        'label' => 'LBL_CURRENT_USER_FILTER',
        'type' => 'bool',
        'width' => '10%',
        'default' => true,
      ),
      'favorites_only' => 
      array (
        'name' => 'favorites_only',
        'label' => 'LBL_FAVORITES_FILTER',
        'type' => 'bool',
        'width' => '10%',
        'default' => true,
      ),
      'parent_name' => 
      array (
        'type' => 'parent',
        'label' => 'LBL_RELATED_TO',
        'width' => '10%',
        'default' => true,
        'name' => 'parent_name',
      ),
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
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
    ),
    'advanced_search' => 
    array (
      'current_user_only' => 
      array (
        'label' => 'LBL_CURRENT_USER_FILTER',
        'type' => 'bool',
        'width' => '10%',
        'default' => true,
        'name' => 'current_user_only',
      ),
      'favorites_only' => 
      array (
        'name' => 'favorites_only',
        'label' => 'LBL_FAVORITES_FILTER',
        'type' => 'bool',
        'width' => '10%',
        'default' => true,
      ),
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'av_activity_types_notes_1_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_AV_ACTIVITY_TYPES_NOTES_1_FROM_AV_ACTIVITY_TYPES_TITLE',
        'width' => '10%',
        'default' => true,
        'id' => 'AV_ACTIVITY_TYPES_NOTES_1AV_ACTIVITY_TYPES_IDA',
        'name' => 'av_activity_types_notes_1_name',
      ),
      'parent_name' => 
      array (
        'type' => 'parent',
        'label' => 'LBL_RELATED_TO',
        'width' => '10%',
        'default' => true,
        'name' => 'parent_name',
      ),
      'filename' => 
      array (
        'name' => 'filename',
        'default' => true,
        'width' => '10%',
      ),
      'created_by_name' => 
      array (
        'type' => 'relate',
        'label' => 'LBL_CREATED_BY',
        'width' => '10%',
        'default' => true,
        'name' => 'created_by_name',
      ),
      'date_modified' => 
      array (
        'type' => 'datetime',
        'label' => 'LBL_DATE_MODIFIED',
        'width' => '10%',
        'default' => true,
        'name' => 'date_modified',
      ),
      'created_by' => 
      array (
        'type' => 'assigned_user_name',
        'label' => 'LBL_CREATED_BY',
        'width' => '10%',
        'default' => true,
        'name' => 'created_by',
      ),
      'modified_user_id' => 
      array (
        'type' => 'assigned_user_name',
        'label' => 'LBL_MODIFIED',
        'width' => '10%',
        'default' => true,
        'name' => 'modified_user_id',
      ),
      'date_entered' => 
      array (
        'type' => 'datetime',
        'label' => 'LBL_DATE_ENTERED',
        'width' => '10%',
        'default' => true,
        'name' => 'date_entered',
      ),
      'on_meeting_agenda' => 
      array (
        'type' => 'bool',
        'default' => true,
        'label' => 'LBL_ON_MEETING_AGENDA',
        'width' => '10%',
        'name' => 'on_meeting_agenda',
      ),
      'on_report_card' => 
      array (
        'type' => 'bool',
        'default' => true,
        'label' => 'LBL_ON_REPORT_CARD',
        'width' => '10%',
        'name' => 'on_report_card',
      ),
      'team_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_TEAMS',
        'id' => 'TEAM_ID',
        'width' => '10%',
        'default' => true,
        'name' => 'team_name',
      ),
    ),
  ),
  'templateMeta' => 
  array (
    'maxColumns' => '3',
    'widths' => 
    array (
      'label' => '10',
      'field' => '30',
    ),
  ),
);
?>
