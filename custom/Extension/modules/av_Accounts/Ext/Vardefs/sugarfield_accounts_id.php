<?php
// created: 2013-05-04 23:27:18
$dictionary["av_Accounts"]["fields"]["accounts_id"] = array (
	'name' => 'accounts_id',
	'rname' => 'id',
	'vname' => 'LBL_ACCOUNTS_ID',
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
$dictionary["av_Accounts"]["fields"]["accounts_id_name"] = array (
	'required' => false,
	'source' => 'non-db',
	'name' => 'accounts_id_name',
	'vname' => 'LBL_ACCOUNTS_ID_NAME',
	'type' => 'relate',
	'rname' => 'name',
	'id_name' => 'accounts_id',
	'join_name' => 'accounts',
	'link' => 'accounts_id_accounts',
	'table' => 'accounts',
	'isnull' => 'true',
	'module' => 'Accounts',
);
$dictionary["av_Accounts"]["fields"]["accounts_accounts_id"] = array (
	'name' => 'accounts_accounts_id',
	'type' => 'link',
	'relationship' => 'accounts_id_accounts',
	'module' => 'Accounts',
	'bean_name' => 'Accounts',
	'source' => 'non-db',
	'vname' => 'LBL_ACCOUNTS',
);
$dictionary["av_Accounts"]["relationships"]["accounts_id_accounts"] = array (
	'lhs_module' => 'av_Accounts',
	'lhs_table' => 'av_accounts',
	'lhs_key' => 'accounts_id',
	'rhs_module' => 'Accounts',
	'rhs_table' => 'accounts',
	'rhs_key' => 'id',
	'relationship_type' => 'one-to-many',
);
?>
