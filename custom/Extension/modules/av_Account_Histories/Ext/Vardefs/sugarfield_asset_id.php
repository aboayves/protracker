<?php
// created: 2012-12-17 14:29:48
$dictionary["av_Account_Histories"]["fields"]["asset_id"] = array (
	'name' => 'asset_id',
	'rname' => 'id',
	'vname' => 'LBL_ASSET_ID',
	'type' => 'id',
	'table' => 'av_accounts',
	'isnull' => 'true',
	'module' => 'av_Accounts',
	'dbtype' => 'id',
	'required' => true,
	'massupdate' => false,
	'reportable' => false,
	'importable' => false,
	'duplicate_merge' => 'disabled',
);
$dictionary["av_Account_Histories"]["fields"]["av_accounts_name"] = array (
	'required' => false,
	'source' => 'non-db',
	'name' => 'av_accounts_name',
	'vname' => 'LBL_AV_ACCOUNTS_NAME',
	'type' => 'relate',
	'rname' => 'name',
	'id_name' => 'asset_id',
	'join_name' => 'av_accounts',
	'link' => 'av_accounts',
	'table' => 'av_accounts',
	'isnull' => 'true',
	'module' => 'av_Accounts',
);
$dictionary["av_Account_Histories"]["fields"]["av_accounts"] = array (
	'name' => 'av_accounts',
	'type' => 'link',
	'relationship' => 'av_account_histories_av_accounts',
	'module' => 'av_Accounts',
	'bean_name' => 'av_Accounts',
	'source' => 'non-db',
	'vname' => 'LBL_AV_ACCOUNTS',
);
$dictionary["av_Account_Histories"]["relationships"]["av_account_histories_av_accounts"] = array (
	'lhs_module' => 'av_Account_Histories',
	'lhs_table' => 'av_account_histories',
	'lhs_key' => 'asset_id',
	'rhs_module' => 'av_Accounts',
	'rhs_table' => 'av_accounts',
	'rhs_key' => 'id',
	'relationship_type' => 'one-to-many',
);
?>
