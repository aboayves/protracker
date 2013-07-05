<?php
// created: 2012-05-21 17:10:30
$dictionary["av_Accounts"]["fields"]["account_id"] = array (
  'name' => 'account_id',
  'type' => 'id',
  'relationship' => 'accounts_av_accounts',
  'module'=>'av_Accounts',
  'vname' => 'LBL_ACCOUNT_ID',
  'duplicate_merge' => 'disabled',
  'reportable' => true,
  'len' => 36,
  'size' => '20',
);
$dictionary["av_Accounts"]["fields"]["account_name"] = array (
  'name' => 'account_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNT_NAME',
  'id_name' => 'account_id',
  'module' => 'Accounts',
  'ext2' => 'Accounts',
  'studio' => 'visible',
);