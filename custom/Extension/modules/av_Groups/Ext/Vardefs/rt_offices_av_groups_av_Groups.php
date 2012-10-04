<?php
// created: 2012-08-09 15:46:05
$dictionary["av_Groups"]["fields"]["rt_offices_av_groups"] = array (
  'name' => 'rt_offices_av_groups',
  'type' => 'link',
  'relationship' => 'rt_offices_av_groups',
  'source' => 'non-db',
  'vname' => 'LBL_RT_OFFICES_AV_GROUPS_FROM_RT_OFFICES_TITLE',
  'id_name' => 'rt_offices_av_groupsrt_offices_ida',
);
$dictionary["av_Groups"]["fields"]["rt_offices_av_groups_name"] = array (
  'name' => 'rt_offices_av_groups_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_RT_OFFICES_AV_GROUPS_FROM_RT_OFFICES_TITLE',
  'save' => true,
  'id_name' => 'rt_offices_av_groupsrt_offices_ida',
  'link' => 'rt_offices_av_groups',
  'table' => 'rt_offices',
  'module' => 'rt_Offices',
  'rname' => 'name',
);
$dictionary["av_Groups"]["fields"]["rt_offices_av_groupsrt_offices_ida"] = array (
  'name' => 'rt_offices_av_groupsrt_offices_ida',
  'type' => 'link',
  'relationship' => 'rt_offices_av_groups',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_RT_OFFICES_AV_GROUPS_FROM_AV_GROUPS_TITLE',
);
