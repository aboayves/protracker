<?php
// created: 2012-12-16 22:47:15
$dictionary["av_Accounts"]["fields"]["account_type_id"] = array (
	'name' => 'account_type_id',
	'rname' => 'id',
	'vname' => 'LBL_ACCOUNT_TYPE_ID',
	'type' => 'id',
	'table' => 'av_account_types',
	'isnull' => 'true',
	'module' => 'av_Account_Types',
	'dbtype' => 'id',
	'required' => false,
	'massupdate' => false,
	'reportable' => false,
	'importable' => false,
	'duplicate_merge' => 'disabled',
);
$dictionary["av_Accounts"]["fields"]["av_account_types_name"] = array (
	'required' => false,
	'source' => 'non-db',
	'name' => 'av_account_types_name',
	'vname' => 'LBL_AV_ACCOUNT_TYPES_NAME',
	'type' => 'relate',
	'rname' => 'name',
	'id_name' => 'account_type_id',
	'join_name' => 'av_account_types',
	'link' => 'av_account_types',
	'table' => 'av_account_types',
	'isnull' => 'true',
	'module' => 'av_Account_Types',
);
$dictionary["av_Accounts"]["fields"]["av_account_types"] = array (
	'name' => 'av_account_types',
	'type' => 'link',
	'relationship' => 'av_accounts_av_account_types',
	'module' => 'av_Account_Types',
	'bean_name' => 'av_Account_Types',
	'source' => 'non-db',
	'vname' => 'LBL_AV_ACCOUNT_TYPES',
);
$dictionary["av_Accounts"]["relationships"]["av_accounts_av_account_types"] = array (
	'lhs_module' => 'av_Accounts',
	'lhs_table' => 'av_accounts',
	'lhs_key' => 'account_type_id',
	'rhs_module' => 'av_Account_Types',
	'rhs_table' => 'av_account_types',
	'rhs_key' => 'id',
	'relationship_type' => 'one-to-many',
);
?>
