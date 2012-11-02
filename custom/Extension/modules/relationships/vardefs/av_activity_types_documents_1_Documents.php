<?php
// created: 2012-10-17 18:16:04
$dictionary["Document"]["fields"]["av_activity_types_documents_1"] = array (
  'name' => 'av_activity_types_documents_1',
  'type' => 'link',
  'relationship' => 'av_activity_types_documents_1',
  'source' => 'non-db',
  'vname' => 'LBL_AV_ACTIVITY_TYPES_DOCUMENTS_1_FROM_AV_ACTIVITY_TYPES_TITLE',
  'id_name' => 'av_activity_types_documents_1av_activity_types_ida',
);
$dictionary["Document"]["fields"]["av_activity_types_documents_1_name"] = array (
  'name' => 'av_activity_types_documents_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_AV_ACTIVITY_TYPES_DOCUMENTS_1_FROM_AV_ACTIVITY_TYPES_TITLE',
  'save' => true,
  'id_name' => 'av_activity_types_documents_1av_activity_types_ida',
  'link' => 'av_activity_types_documents_1',
  'table' => 'av_activity_types',
  'module' => 'av_Activity_Types',
  'rname' => 'name',
);
$dictionary["Document"]["fields"]["av_activity_types_documents_1av_activity_types_ida"] = array (
  'name' => 'av_activity_types_documents_1av_activity_types_ida',
  'type' => 'link',
  'relationship' => 'av_activity_types_documents_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_AV_ACTIVITY_TYPES_DOCUMENTS_1_FROM_DOCUMENTS_TITLE',
);
