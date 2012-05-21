<?php
// created: 2012-05-21 17:10:30
$dictionary["av_Accounts"]["fields"]["accounts_av_accounts"] = array (
  'name' => 'accounts_av_accounts',
  'type' => 'link',
  'relationship' => 'accounts_av_accounts',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_AV_ACCOUNTS_FROM_ACCOUNTS_TITLE',
  'id_name' => 'accounts_av_accountsaccounts_ida',
);
$dictionary["av_Accounts"]["fields"]["accounts_av_accounts_name"] = array (
  'name' => 'accounts_av_accounts_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_AV_ACCOUNTS_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'accounts_av_accountsaccounts_ida',
  'link' => 'accounts_av_accounts',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["av_Accounts"]["fields"]["accounts_av_accountsaccounts_ida"] = array (
  'name' => 'accounts_av_accountsaccounts_ida',
  'type' => 'link',
  'relationship' => 'accounts_av_accounts',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_ACCOUNTS_AV_ACCOUNTS_FROM_AV_ACCOUNTS_TITLE',
);
