<?php
// created: 2013-04-04 11:08:53
$dictionary["av_Accounts"]["fields"]["custodian_id"] = array (
	'name' => 'custodian_id',
	'vname' => 'LBL_CUSTODIAN_ID',
	'type' => 'id',
	'relationship' => 'custodian_id_av_companies',
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
	'link' => 'av_companies_custodian_id',
	'table' => 'av_companies',
	'isnull' => 'true',
	'module' => 'av_Companies',
	'ext2' => 'av_Companies',
);
?>
