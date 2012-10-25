<?php
// created: 2012-10-23 16:44:49
$dictionary["av_Transactions"]["fields"]["av_accounts_av_transactions_1"] = array (
  'name' => 'av_accounts_av_transactions_1',
  'type' => 'link',
  'relationship' => 'av_accounts_av_transactions_1',
  'source' => 'non-db',
  'vname' => 'LBL_AV_ACCOUNTS_AV_TRANSACTIONS_1_FROM_AV_ACCOUNTS_TITLE',
  'id_name' => 'av_accounts_av_transactions_1av_accounts_ida',
);
$dictionary["av_Transactions"]["fields"]["av_accounts_av_transactions_1_name"] = array (
  'name' => 'av_accounts_av_transactions_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_AV_ACCOUNTS_AV_TRANSACTIONS_1_FROM_AV_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'av_accounts_av_transactions_1av_accounts_ida',
  'link' => 'av_accounts_av_transactions_1',
  'table' => 'av_accounts',
  'module' => 'av_Accounts',
  'rname' => 'name',
);
$dictionary["av_Transactions"]["fields"]["av_accounts_av_transactions_1av_accounts_ida"] = array (
  'name' => 'av_accounts_av_transactions_1av_accounts_ida',
  'type' => 'link',
  'relationship' => 'av_accounts_av_transactions_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_AV_ACCOUNTS_AV_TRANSACTIONS_1_FROM_AV_TRANSACTIONS_TITLE',
);
