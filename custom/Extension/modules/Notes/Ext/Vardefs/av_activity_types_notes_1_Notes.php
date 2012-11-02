<?php
// created: 2012-10-17 18:12:49
$dictionary["Note"]["fields"]["av_activity_types_notes_1"] = array (
  'name' => 'av_activity_types_notes_1',
  'type' => 'link',
  'relationship' => 'av_activity_types_notes_1',
  'source' => 'non-db',
  'vname' => 'LBL_AV_ACTIVITY_TYPES_NOTES_1_FROM_AV_ACTIVITY_TYPES_TITLE',
  'id_name' => 'av_activity_types_notes_1av_activity_types_ida',
);
$dictionary["Note"]["fields"]["av_activity_types_notes_1_name"] = array (
  'name' => 'av_activity_types_notes_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_AV_ACTIVITY_TYPES_NOTES_1_FROM_AV_ACTIVITY_TYPES_TITLE',
  'save' => true,
  'id_name' => 'av_activity_types_notes_1av_activity_types_ida',
  'link' => 'av_activity_types_notes_1',
  'table' => 'av_activity_types',
  'module' => 'av_Activity_Types',
  'rname' => 'name',
);
$dictionary["Note"]["fields"]["av_activity_types_notes_1av_activity_types_ida"] = array (
  'name' => 'av_activity_types_notes_1av_activity_types_ida',
  'type' => 'link',
  'relationship' => 'av_activity_types_notes_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_AV_ACTIVITY_TYPES_NOTES_1_FROM_NOTES_TITLE',
);
