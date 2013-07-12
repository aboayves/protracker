<?php
// created: 2012-12-16 22:47:15
$dictionary["av_Account_Types"]["fields"]["av_accounts_av_account_types"] = array (
	'name' => 'av_accounts_av_account_types',
	'type' => 'link',
	'relationship' => 'av_accounts_av_account_types',
	'source' => 'non-db',
	'side' => 'right',
	'vname' => 'LBL_AV_ACCOUNTS',
);
$dictionary["av_Account_Types"]["relationships"]["av_accounts_av_account_types"] = array (
	'lhs_module' => 'av_Account_Types',
	'lhs_table' => 'av_account_types',
	'lhs_key' => 'id',
	'rhs_module' => 'av_Accounts',
	'rhs_table' => 'av_accounts',
	'rhs_key' => 'account_type_id',
	'relationship_type' => 'one-to-many',
);
?>
