<?php
// created: 2012-12-17 22:36:45
$dictionary["Account"]["fields"]["office_id"] = array (
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
$dictionary["Account"]["fields"]["av_Offices_name"] = array (
	'required' => false,
	'source' => 'non-db',
	'name' => 'av_Offices_name',
	'vname' => 'LBL_AV_OFFICES_NAME',
	'type' => 'relate',
	'rname' => 'name',
	'id_name' => 'office_id',
	'join_name' => 'av_offices',
	'link' => 'av_offices',
	'table' => 'av_offices',
	'isnull' => 'true',
	'module' => 'av_Offices',
);
$dictionary["Account"]["fields"]["av_offices"] = array (
	'name' => 'av_offices',
	'type' => 'link',
	'relationship' => 'account_av_offices',
	'module' => 'av_Offices',
	'bean_name' => 'av_Offices',
	'source' => 'non-db',
	'vname' => 'LBL_AV_OFFICES',
);
$dictionary["Account"]["relationships"]["account_av_offices"] = array (
	'lhs_module' => 'Accounts',
	'lhs_table' => 'accounts',
	'lhs_key' => 'office_id',
	'rhs_module' => 'av_Offices',
	'rhs_table' => 'av_offices',
	'rhs_key' => 'id',
	'relationship_type' => 'one-to-many',
);
?>
