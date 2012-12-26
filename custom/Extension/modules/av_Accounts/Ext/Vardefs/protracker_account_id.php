<?php
// created: 2012-12-16 22:47:15
$dictionary["av_Accounts"]["fields"]["account_id"] = array (
	'name' => 'account_id',
	'rname' => 'id',
	'vname' => 'LBL_ACCOUNT_ID',
	'type' => 'id',
	'table' => 'accounts',
	'isnull' => 'true',
	'module' => 'Account',
	'dbtype' => 'id',
	'required' => false,
	'massupdate' => false,
	'reportable' => false,
	'importable' => false,
	'duplicate_merge' => 'disabled',
);
$dictionary["av_Accounts"]["fields"]["Account_name"] = array (
	'required' => false,
	'source' => 'non-db',
	'name' => 'Account_name',
	'vname' => 'LBL_ACCOUNT_NAME',
	'type' => 'relate',
	'rname' => 'name',
	'id_name' => 'account_id',
	'join_name' => 'accounts',
	'link' => 'accounts',
	'table' => 'accounts',
	'isnull' => 'true',
	'module' => 'Account',
);
$dictionary["av_Accounts"]["fields"]["account"] = array (
	'name' => 'account',
	'type' => 'link',
	'relationship' => 'av_accounts_account',
	'module' => 'Account',
	'bean_name' => 'Account',
	'source' => 'non-db',
	'vname' => 'LBL_ACCOUNTS',
);
$dictionary["av_Accounts"]["relationships"]["av_accounts_account"] = array (
	'lhs_module' => 'av_Accounts',
	'lhs_table' => 'av_accounts',
	'lhs_key' => 'account_id',
	'rhs_module' => 'Account',
	'rhs_table' => 'account',
	'rhs_key' => 'id',
	'relationship_type' => 'one-to-many',
);
?>
