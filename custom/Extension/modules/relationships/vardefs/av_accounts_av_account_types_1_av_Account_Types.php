<?php
// created: 2012-11-14 19:45:33
$dictionary["av_Account_Types"]["fields"]["av_accounts_av_account_types_1"] = array (
  'name' => 'av_accounts_av_account_types_1',
  'type' => 'link',
  'relationship' => 'av_accounts_av_account_types_1',
  'source' => 'non-db',
  'vname' => 'LBL_AV_ACCOUNTS_AV_ACCOUNT_TYPES_1_FROM_AV_ACCOUNTS_TITLE',
  'id_name' => 'av_accounts_av_account_types_1av_accounts_ida',
);
$dictionary["av_Account_Types"]["fields"]["av_accounts_av_account_types_1_name"] = array (
  'name' => 'av_accounts_av_account_types_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_AV_ACCOUNTS_AV_ACCOUNT_TYPES_1_FROM_AV_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'av_accounts_av_account_types_1av_accounts_ida',
  'link' => 'av_accounts_av_account_types_1',
  'table' => 'av_accounts',
  'module' => 'av_Accounts',
  'rname' => 'name',
);
$dictionary["av_Account_Types"]["fields"]["av_accounts_av_account_types_1av_accounts_ida"] = array (
  'name' => 'av_accounts_av_account_types_1av_accounts_ida',
  'type' => 'link',
  'relationship' => 'av_accounts_av_account_types_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_AV_ACCOUNTS_AV_ACCOUNT_TYPES_1_FROM_AV_ACCOUNTS_TITLE',
);
