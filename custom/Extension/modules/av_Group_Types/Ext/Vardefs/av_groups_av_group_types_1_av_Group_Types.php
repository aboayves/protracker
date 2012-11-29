<?php
// created: 2012-11-16 01:44:42
$dictionary["av_Group_Types"]["fields"]["av_groups_av_group_types_1"] = array (
  'name' => 'av_groups_av_group_types_1',
  'type' => 'link',
  'relationship' => 'av_groups_av_group_types_1',
  'source' => 'non-db',
  'vname' => 'LBL_AV_GROUPS_AV_GROUP_TYPES_1_FROM_AV_GROUPS_TITLE',
  'id_name' => 'av_groups_av_group_types_1av_groups_ida',
);
$dictionary["av_Group_Types"]["fields"]["av_groups_av_group_types_1_name"] = array (
  'name' => 'av_groups_av_group_types_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_AV_GROUPS_AV_GROUP_TYPES_1_FROM_AV_GROUPS_TITLE',
  'save' => true,
  'id_name' => 'av_groups_av_group_types_1av_groups_ida',
  'link' => 'av_groups_av_group_types_1',
  'table' => 'av_groups',
  'module' => 'av_Groups',
  'rname' => 'name',
);
$dictionary["av_Group_Types"]["fields"]["av_groups_av_group_types_1av_groups_ida"] = array (
  'name' => 'av_groups_av_group_types_1av_groups_ida',
  'type' => 'link',
  'relationship' => 'av_groups_av_group_types_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_AV_GROUPS_AV_GROUP_TYPES_1_FROM_AV_GROUP_TYPES_TITLE',
);
