<?php
// created: 2012-11-14 19:54:13
$dictionary["av_Accounts"]["fields"]["av_account_types_av_accounts_1"] = array (
  'name' => 'av_account_types_av_accounts_1',
  'type' => 'link',
  'relationship' => 'av_account_types_av_accounts_1',
  'source' => 'non-db',
  'vname' => 'LBL_AV_ACCOUNT_TYPES_AV_ACCOUNTS_1_FROM_AV_ACCOUNT_TYPES_TITLE',
  'id_name' => 'av_account_types_av_accounts_1av_account_types_ida',
);
$dictionary["av_Accounts"]["fields"]["av_account_types_av_accounts_1_name"] = array (
  'name' => 'av_account_types_av_accounts_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_AV_ACCOUNT_TYPES_AV_ACCOUNTS_1_FROM_AV_ACCOUNT_TYPES_TITLE',
  'save' => true,
  'id_name' => 'av_account_types_av_accounts_1av_account_types_ida',
  'link' => 'av_account_types_av_accounts_1',
  'table' => 'av_account_types',
  'module' => 'av_Account_Types',
  'rname' => 'name',
);
$dictionary["av_Accounts"]["fields"]["av_account_types_av_accounts_1av_account_types_ida"] = array (
  'name' => 'av_account_types_av_accounts_1av_account_types_ida',
  'type' => 'link',
  'relationship' => 'av_account_types_av_accounts_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_AV_ACCOUNT_TYPES_AV_ACCOUNTS_1_FROM_AV_ACCOUNTS_TITLE',
);
