<?php
// created: 2012-10-15 02:06:07
$dictionary["av_Activity_Types"]["fields"]["notes_av_activity_types_1"] = array (
  'name' => 'notes_av_activity_types_1',
  'type' => 'link',
  'relationship' => 'notes_av_activity_types_1',
  'source' => 'non-db',
  'vname' => 'LBL_NOTES_AV_ACTIVITY_TYPES_1_FROM_NOTES_TITLE',
  'id_name' => 'notes_av_activity_types_1notes_ida',
);
$dictionary["av_Activity_Types"]["fields"]["notes_av_activity_types_1_name"] = array (
  'name' => 'notes_av_activity_types_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_NOTES_AV_ACTIVITY_TYPES_1_FROM_NOTES_TITLE',
  'save' => true,
  'id_name' => 'notes_av_activity_types_1notes_ida',
  'link' => 'notes_av_activity_types_1',
  'table' => 'notes',
  'module' => 'Notes',
  'rname' => 'name',
);
$dictionary["av_Activity_Types"]["fields"]["notes_av_activity_types_1notes_ida"] = array (
  'name' => 'notes_av_activity_types_1notes_ida',
  'type' => 'link',
  'relationship' => 'notes_av_activity_types_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_NOTES_AV_ACTIVITY_TYPES_1_FROM_AV_ACTIVITY_TYPES_TITLE',
);
