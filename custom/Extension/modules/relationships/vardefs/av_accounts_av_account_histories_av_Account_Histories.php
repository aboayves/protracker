<?php
// created: 2012-04-25 16:35:39
$dictionary["av_Account_Histories"]["fields"]["av_accounts_av_account_histories"] = array (
  'name' => 'av_accounts_av_account_histories',
  'type' => 'link',
  'relationship' => 'av_accounts_av_account_histories',
  'source' => 'non-db',
  'vname' => 'LBL_AV_ACCOUNTS_AV_ACCOUNT_HISTORIES_FROM_AV_ACCOUNTS_TITLE',
  'id_name' => 'av_accounts_av_account_historiesav_accounts_ida',
);
$dictionary["av_Account_Histories"]["fields"]["av_accounts_av_account_histories_name"] = array (
  'name' => 'av_accounts_av_account_histories_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_AV_ACCOUNTS_AV_ACCOUNT_HISTORIES_FROM_AV_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'av_accounts_av_account_historiesav_accounts_ida',
  'link' => 'av_accounts_av_account_histories',
  'table' => 'av_accounts',
  'module' => 'av_Accounts',
  'rname' => 'name',
);
$dictionary["av_Account_Histories"]["fields"]["av_accounts_av_account_historiesav_accounts_ida"] = array (
  'name' => 'av_accounts_av_account_historiesav_accounts_ida',
  'type' => 'link',
  'relationship' => 'av_accounts_av_account_histories',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_AV_ACCOUNTS_AV_ACCOUNT_HISTORIES_FROM_AV_ACCOUNT_HISTORIES_TITLE',
);
