<?php
// created: 2012-12-17 11:48:55
$dictionary["av_Accounts"]["fields"]["av_account_owners_av_accounts"] = array (
	'name' => 'av_account_owners_av_accounts',
	'type' => 'link',
	'relationship' => 'av_account_owners_av_accounts',
	'source' => 'non-db',
	'side' => 'right',
	'vname' => 'LBL_AV_ACCOUNT_OWNERS',
);
$dictionary["av_Accounts"]["relationships"]["av_account_owners_av_accounts"] = array (
	'lhs_module' => 'av_Accounts',
	'lhs_table' => 'av_accounts',
	'lhs_key' => 'id',
	'rhs_module' => 'av_Account_Owners',
	'rhs_table' => 'av_account_owners',
	'rhs_key' => 'av_accounts_id',
	'relationship_type' => 'one-to-many',
);
?>
