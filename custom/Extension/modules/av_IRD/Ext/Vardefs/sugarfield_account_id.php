<?php
// created: 2012-12-18 23:57:56
$dictionary["av_IRD"]["fields"]["account_id"] = array (
	'name' => 'account_id',
	'rname' => 'id',
	'vname' => 'LBL_ACCOUNT_ID',
	'type' => 'id',
	'table' => 'accounts',
	'isnull' => 'true',
	'module' => 'Accounts',
	'dbtype' => 'id',
	'required' => false,
	'massupdate' => false,
	'reportable' => false,
	'importable' => false,
	'duplicate_merge' => 'disabled',
);
$dictionary["av_IRD"]["fields"]["accounts_name"] = array (
	'required' => false,
	'source' => 'non-db',
	'name' => 'accounts_name',
	'vname' => 'LBL_ACCOUNTS_NAME',
	'type' => 'relate',
	'rname' => 'name',
	'id_name' => 'account_id',
	'join_name' => 'accounts',
	'link' => 'account_av_ird',
	'table' => 'accounts',
	'isnull' => 'true',
	'module' => 'Accounts',
);
?>
