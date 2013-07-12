<?php
// created: 2012-12-16 22:47:15
$dictionary["av_Accounts"]["fields"]["account_type_id"] = array (
	'name' => 'account_type_id',
	'type' => 'id',
	'relationship' => 'av_accounts_av_account_types',
	'module'=>'av_Account_Types',
	'vname' => 'LBL_ACCOUNT_TYPE_ID',
	'duplicate_merge' => 'disabled',
	'reportable' => true,
	'len' => 36,
	'size' => '20',
);
$dictionary["av_Accounts"]["fields"]["av_account_types_name"] = array (
	'name' => 'av_account_types_name',
	'rname' => 'name',
    'type' => 'relate',
    'source' => 'non-db',
    'vname' => 'LBL_AV_ACCOUNT_TYPES_NAME',
    'id_name' => 'account_type_id',
    'module' => 'av_Account_Types',
    'ext2' => 'av_Account_Types',
    'studio' => 'visible',
);
?>
