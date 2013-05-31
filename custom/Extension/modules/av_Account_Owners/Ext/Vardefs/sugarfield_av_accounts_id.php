<?php
// created: 2012-12-17 11:48:55
$dictionary["av_Account_Owners"]["fields"]["av_accounts_id"] = array (
	'name' => 'av_accounts_id',
	'rname' => 'id',
	'vname' => 'LBL_AV_ACCOUNTS_ID',
	'type' => 'id',
	'table' => 'av_accounts',
	'isnull' => 'true',
	'module' => 'av_Accounts',
	'dbtype' => 'id',
	'required' => true,
	'massupdate' => false,
	'reportable' => true,
	'importable' => false,
	'duplicate_merge' => 'disabled',
);
$dictionary["av_Account_Owners"]["fields"]["av_accounts_name"] = array (
	'required' => false,
	'source' => 'non-db',
	'name' => 'av_accounts_name',
	'vname' => 'LBL_AV_ACCOUNTS_NAME',
	'type' => 'relate',
	'rname' => 'name',
	'id_name' => 'av_accounts_id',
	'link' => 'av_account_owners_av_accounts',
	'table' => 'av_accounts',
	'isnull' => 'true',
	'module' => 'av_Accounts',
);

?>
