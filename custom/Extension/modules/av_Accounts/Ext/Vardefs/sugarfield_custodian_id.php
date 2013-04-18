<?php
// created: 2013-04-04 11:08:53
$dictionary["av_Accounts"]["fields"]["custodian_id"] = array (
	'name' => 'custodian_id',
	'rname' => 'id',
	'vname' => 'LBL_CUSTODIAN_ID',
	'type' => 'id',
	'table' => 'av_companies',
	'isnull' => 'true',
	'module' => 'av_Companies',
	'dbtype' => 'id',
	'required' => false,
	'massupdate' => false,
	'reportable' => false,
	'importable' => false,
	'duplicate_merge' => 'disabled',
);
$dictionary["av_Accounts"]["fields"]["custodian_id_name"] = array (
	'required' => false,
	'source' => 'non-db',
	'name' => 'custodian_id_name',
	'vname' => 'LBL_CUSTODIAN_ID_NAME',
	'type' => 'relate',
	'rname' => 'name',
	'id_name' => 'custodian_id',
	'join_name' => 'av_companies',
	'link' => 'custodian_id_av_companies',
	'table' => 'av_companies',
	'isnull' => 'true',
	'module' => 'av_Companies',
);
$dictionary["av_Accounts"]["fields"]["av_companies_custodian_id"] = array (
	'name' => 'av_companies_custodian_id',
	'type' => 'link',
	'relationship' => 'custodian_id_av_companies',
	'module' => 'av_Companies',
	'bean_name' => 'av_Companies',
	'source' => 'non-db',
	'vname' => 'LBL_AV_COMPANIES',
);
$dictionary["av_Accounts"]["relationships"]["custodian_id_av_companies"] = array (
	'lhs_module' => 'av_Accounts',
	'lhs_table' => 'av_accounts',
	'lhs_key' => 'custodian_id',
	'rhs_module' => 'av_Companies',
	'rhs_table' => 'av_companies',
	'rhs_key' => 'id',
	'relationship_type' => 'one-to-many',
);
?>
