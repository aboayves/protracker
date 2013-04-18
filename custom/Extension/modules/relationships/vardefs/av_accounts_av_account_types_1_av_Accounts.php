<?php
// created: 2012-11-14 19:45:33
$dictionary["av_Accounts"]["fields"]["av_accounts_av_account_types_1"] = array (
  'name' => 'av_accounts_av_account_types_1',
  'type' => 'link',
  'relationship' => 'av_accounts_av_account_types_1',
  'source' => 'non-db',
  'vname' => 'LBL_AV_ACCOUNTS_AV_ACCOUNT_TYPES_1_FROM_AV_ACCOUNT_TYPES_TITLE',
  'id_name' => 'av_accounts_av_account_types_1av_account_types_idb',
);
$dictionary["av_Accounts"]["fields"]["av_accounts_av_account_types_1_name"] = array (
  'name' => 'av_accounts_av_account_types_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_AV_ACCOUNTS_AV_ACCOUNT_TYPES_1_FROM_AV_ACCOUNT_TYPES_TITLE',
  'save' => true,
  'id_name' => 'av_accounts_av_account_types_1av_account_types_idb',
  'link' => 'av_accounts_av_account_types_1',
  'table' => 'av_account_types',
  'module' => 'av_Account_Types',
  'rname' => 'name',
);
$dictionary["av_Accounts"]["fields"]["av_accounts_av_account_types_1av_account_types_idb"] = array (
  'name' => 'av_accounts_av_account_types_1av_account_types_idb',
  'type' => 'link',
  'relationship' => 'av_accounts_av_account_types_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_AV_ACCOUNTS_AV_ACCOUNT_TYPES_1_FROM_AV_ACCOUNT_TYPES_TITLE',
);
