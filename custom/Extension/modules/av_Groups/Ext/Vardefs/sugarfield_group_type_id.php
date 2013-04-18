<?php
// created: 2012-12-19 14:50:46
$dictionary["av_Groups"]["fields"]["group_type_id"] = array (
	'name' => 'group_type_id',
	'rname' => 'id',
	'vname' => 'LBL_GROUP_TYPE_ID',
	'type' => 'id',
	'table' => 'av_group_types',
	'isnull' => 'true',
	'module' => 'av_Group_Types',
	'dbtype' => 'id',
	'required' => false,
	'massupdate' => false,
	'reportable' => false,
	'importable' => false,
	'duplicate_merge' => 'disabled',
);
$dictionary["av_Groups"]["fields"]["av_group_types_name"] = array (
	'required' => false,
	'source' => 'non-db',
	'name' => 'av_group_types_name',
	'vname' => 'LBL_AV_GROUP_TYPES_NAME',
	'type' => 'relate_cstm',
	'rname' => 'name',
	'id_name' => 'group_type_id',
	'join_name' => 'av_group_types',
	'link' => 'av_group_types',
	'table' => 'av_group_types',
	'isnull' => 'true',
	'module' => 'av_Group_Types',
);
$dictionary["av_Groups"]["fields"]["av_group_types"] = array (
	'name' => 'av_group_types',
	'type' => 'link',
	'relationship' => 'av_groups_av_group_types',
	'module' => 'av_Group_Types',
	'bean_name' => 'av_Group_Types',
	'source' => 'non-db',
	'vname' => 'LBL_AV_GROUP_TYPES',
);
$dictionary["av_Groups"]["relationships"]["av_groups_av_group_types"] = array (
	'lhs_module' => 'av_Groups',
	'lhs_table' => 'av_groups',
	'lhs_key' => 'group_type_id',
	'rhs_module' => 'av_Group_Types',
	'rhs_table' => 'av_group_types',
	'rhs_key' => 'id',
	'relationship_type' => 'one-to-many',
);
?>
