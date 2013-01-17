<?php
// created: 2012-05-21 17:10:30
$dictionary["Note"]["fields"]["av_group_id"] = array (
  'name' => 'av_group_id',
  'type' => 'id',
  'relationship' => 'av_groups_notes',
  'len' => 36,
);
$dictionary["Note"]["fields"]["av_group_name"] = array (
  'name' => 'av_group_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_AV_GROUPS_TITLE',
  'id_name' => 'av_group_id',
  'module' => 'av_Groups',
  'studio' => 'visible',
);