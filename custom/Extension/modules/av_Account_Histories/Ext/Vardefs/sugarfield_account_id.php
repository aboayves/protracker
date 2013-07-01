<?php
// created: 2012-05-21 17:10:30
$dictionary["av_Account_Histories"]["fields"]["account_name"] = array (
  'name' => 'account_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNT_NAME',
  'id_name' => 'account_id',
  'link' => 'account_av_account_histories',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["av_Account_Histories"]["fields"]["account_id"] = array (
  'name' => 'account_id',
  'type' => 'id',
  'relationship' => 'account_av_account_histories',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_ACCOUNT_ID',
);
?>