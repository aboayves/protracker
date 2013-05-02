<?php
// created: 2013-05-02 13:59:41
$dictionary["av_Net_Worth"]["fields"]["account_id"] = array (
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
$dictionary["av_Net_Worth"]["fields"]["account_id_name"] = array (
	'required' => false,
	'source' => 'non-db',
	'name' => 'account_id_name',
	'vname' => 'LBL_ACCOUNT_ID_NAME',
	'type' => 'relate',
	'rname' => 'name',
	'id_name' => 'account_id',
	'join_name' => 'accounts',
	'link' => 'account_id_accounts',
	'table' => 'accounts',
	'isnull' => 'true',
	'module' => 'Accounts',
);
$dictionary["av_Net_Worth"]["fields"]["accounts_account_id"] = array (
	'name' => 'accounts_account_id',
	'type' => 'link',
	'relationship' => 'account_id_accounts',
	'module' => 'Accounts',
	'bean_name' => 'Accounts',
	'source' => 'non-db',
	'vname' => 'LBL_ACCOUNTS',
);
$dictionary["av_Net_Worth"]["relationships"]["account_id_accounts"] = array (
	'lhs_module' => 'av_Net_Worth',
	'lhs_table' => 'av_net_worth',
	'lhs_key' => 'account_id',
	'rhs_module' => 'Accounts',
	'rhs_table' => 'accounts',
	'rhs_key' => 'id',
	'relationship_type' => 'one-to-many',
);
?>
