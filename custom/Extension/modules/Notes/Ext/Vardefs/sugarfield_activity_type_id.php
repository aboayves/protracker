<?php
// created: 2012-12-17 16:09:32
$dictionary["Note"]["fields"]["activity_type_id"] = array (
	'name' => 'activity_type_id',
	'rname' => 'id',
	'vname' => 'LBL_ACTIVITY_TYPE_ID',
	'type' => 'id',
	'table' => 'av_activity_types',
	'isnull' => 'true',
	'module' => 'av_Activity_Types',
	'dbtype' => 'id',
	'required' => false,
	'massupdate' => false,
	'reportable' => false,
	'importable' => false,
	'duplicate_merge' => 'disabled',
);
$dictionary["Note"]["fields"]["av_Activity_Types_name"] = array (
	'required' => false,
	'source' => 'non-db',
	'name' => 'av_Activity_Types_name',
	'vname' => 'LBL_AV_ACTIVITY_TYPES_NAME',
	'type' => 'relate',
	'rname' => 'name',
	'id_name' => 'activity_type_id',
	'join_name' => 'av_activity_types',
	'link' => 'av_activity_types',
	'table' => 'av_activity_types',
	'isnull' => 'true',
	'module' => 'av_Activity_Types',
);
$dictionary["Note"]["fields"]["av_activity_types"] = array (
	'name' => 'av_activity_types',
	'type' => 'link',
	'relationship' => 'note_av_activity_types',
	'module' => 'av_Activity_Types',
	'bean_name' => 'av_Activity_Types',
	'source' => 'non-db',
	'vname' => 'LBL_AV_ACTIVITY_TYPES',
);
$dictionary["Note"]["relationships"]["note_av_activity_types"] = array (
	'lhs_module' => 'Notes',
	'lhs_table' => 'notes',
	'lhs_key' => 'activity_type_id',
	'rhs_module' => 'av_Activity_Types',
	'rhs_table' => 'av_activity_types',
	'rhs_key' => 'id',
	'relationship_type' => 'one-to-many',
);
?>
