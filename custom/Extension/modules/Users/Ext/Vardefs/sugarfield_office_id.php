<?php
// created: 2013-04-24 10:15:29
$dictionary["User"]["fields"]["office_id"] = array (
	'name' => 'office_id',
	'rname' => 'id',
	'vname' => 'LBL_OFFICE_ID',
	'type' => 'id',
	'table' => 'av_offices',
	'isnull' => 'true',
	'module' => 'av_Offices',
	'dbtype' => 'id',
	'required' => false,
	'massupdate' => false,
	'reportable' => false,
	'importable' => false,
	'duplicate_merge' => 'disabled',
);
$dictionary["User"]["fields"]["office_id_name"] = array (
	'required' => false,
	'source' => 'non-db',
	'name' => 'office_id_name',
	'vname' => 'LBL_OFFICE_ID_NAME',
	'type' => 'relate',
	'rname' => 'name',
	'id_name' => 'office_id',
	'join_name' => 'av_offices',
	'link' => 'office_id_av_offices',
	'table' => 'av_offices',
	'isnull' => 'true',
	'module' => 'av_Offices',
);
$dictionary["User"]["fields"]["av_offices_office_id"] = array (
	'name' => 'av_offices_office_id',
	'type' => 'link',
	'relationship' => 'office_id_av_offices',
	'module' => 'av_Offices',
	'bean_name' => 'av_Offices',
	'source' => 'non-db',
	'vname' => 'LBL_AV_OFFICES',
);
$dictionary["User"]["relationships"]["office_id_av_offices"] = array (
	'lhs_module' => 'Users',
	'lhs_table' => 'users',
	'lhs_key' => 'office_id',
	'rhs_module' => 'av_Offices',
	'rhs_table' => 'av_offices',
	'rhs_key' => 'id',
	'relationship_type' => 'one-to-many',
);
?>
