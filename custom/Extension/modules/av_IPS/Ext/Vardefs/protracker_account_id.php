<?php
// created: 2012-12-19 21:08:45
$dictionary["av_IPS"]["fields"]["account_id"] = array (
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
$dictionary["av_IPS"]["fields"]["Accounts_name"] = array (
	'required' => false,
	'source' => 'non-db',
	'name' => 'Accounts_name',
	'vname' => 'LBL_ACCOUNTS_NAME',
	'type' => 'relate',
	'rname' => 'name',
	'id_name' => 'account_id',
	'join_name' => 'accounts',
	'link' => 'accounts',
	'table' => 'accounts',
	'isnull' => 'true',
	'module' => 'Accounts',
);
$dictionary["av_IPS"]["fields"]["accounts"] = array (
	'name' => 'accounts',
	'type' => 'link',
	'relationship' => 'av_ips_accounts',
	'module' => 'Accounts',
	'bean_name' => 'Accounts',
	'source' => 'non-db',
	'vname' => 'LBL_ACCOUNTS',
);
$dictionary["av_IPS"]["relationships"]["av_ips_accounts"] = array (
	'lhs_module' => 'av_IPS',
	'lhs_table' => 'av_ips',
	'lhs_key' => 'account_id',
	'rhs_module' => 'Accounts',
	'rhs_table' => 'accounts',
	'rhs_key' => 'id',
	'relationship_type' => 'one-to-many',
);
?>
