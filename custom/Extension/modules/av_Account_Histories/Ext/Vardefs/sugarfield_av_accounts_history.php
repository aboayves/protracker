<?php
// created: 2012-05-21 17:10:30
$dictionary["av_Account_Histories"]["fields"]["av_accounts_id"] = array (
  'name' => 'av_accounts_id',
  'type' => 'id',
  'relationship' => 'av_account_histories_av_accounts',
  'module'=>'av_Account_Histories',
  'duplicate_merge' => 'disabled',
  'len' => 36,
  'size' => '20',
);
$dictionary["av_Accounts"]["fields"]["av_accounts_name"] = array (
  'name' => 'av_accounts_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_AV_ACCOUNTS_FROM_ACCOUNTS_TITLE',
  'id_name' => 'av_accounts_id',
  'module' => 'av_Accounts',
  'studio' => 'visible',
);