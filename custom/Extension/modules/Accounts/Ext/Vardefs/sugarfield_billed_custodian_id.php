<?php
// created: 2013-04-04 11:03:29
$dictionary["Account"]["fields"]["billed_custodian_id"] = array (
	'name' => 'billed_custodian_id',
	'rname' => 'id',
	'vname' => 'LBL_BILLED_CUSTODIAN_ID',
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
$dictionary["Account"]["fields"]["billed_custodian_id_name"] = array (
	'required' => false,
	'source' => 'non-db',
	'name' => 'billed_custodian_id_name',
	'vname' => 'LBL_BILLED_CUSTODIAN_ID_NAME',
	'type' => 'relate',
	'rname' => 'name',
	'id_name' => 'billed_custodian_id',
	'join_name' => 'av_companies',
	'link' => 'billed_custodian_id_av_companies',
	'table' => 'av_companies',
	'isnull' => 'true',
	'module' => 'av_Companies',
);
$dictionary["Account"]["fields"]["av_companies_billed_custodian_id"] = array (
	'name' => 'av_companies_billed_custodian_id',
	'type' => 'link',
	'relationship' => 'billed_custodian_id_av_companies',
	'module' => 'av_Companies',
	'bean_name' => 'av_Companies',
	'source' => 'non-db',
	'vname' => 'LBL_AV_COMPANIES',
);
$dictionary["Account"]["relationships"]["billed_custodian_id_av_companies"] = array (
	'lhs_module' => 'Accounts',
	'lhs_table' => 'accounts',
	'lhs_key' => 'billed_custodian_id',
	'rhs_module' => 'av_Companies',
	'rhs_table' => 'av_companies',
	'rhs_key' => 'id',
	'relationship_type' => 'one-to-many',
);
?>
