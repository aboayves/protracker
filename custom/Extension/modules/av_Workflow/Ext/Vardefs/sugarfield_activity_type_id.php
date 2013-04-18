<?php
// created: 2013-01-22 13:23:46
$dictionary["av_Workflow"]["fields"]["activity_type_id"] = array (
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
$dictionary["av_Workflow"]["fields"]["av_activity_types_name"] = array (
	'required' => false,
	'source' => 'non-db',
	'name' => 'av_activity_types_name',
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
$dictionary["av_Workflow"]["fields"]["av_activity_types"] = array (
	'name' => 'av_activity_types',
	'type' => 'link',
	'relationship' => 'av_workflow_av_activity_types',
	'module' => 'av_Activity_Types',
	'bean_name' => 'av_Activity_Types',
	'source' => 'non-db',
	'vname' => 'LBL_AV_ACTIVITY_TYPES',
);
$dictionary["av_Workflow"]["relationships"]["av_workflow_av_activity_types"] = array (
	'lhs_module' => 'av_Workflow',
	'lhs_table' => 'av_workflow',
	'lhs_key' => 'activity_type_id',
	'rhs_module' => 'av_Activity_Types',
	'rhs_table' => 'av_activity_types',
	'rhs_key' => 'id',
	'relationship_type' => 'one-to-many',
);
?>
