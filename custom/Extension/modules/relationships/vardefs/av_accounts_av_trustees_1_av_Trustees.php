<?php
// created: 2012-10-18 01:17:49
$dictionary["av_Trustees"]["fields"]["av_accounts_av_trustees_1"] = array (
  'name' => 'av_accounts_av_trustees_1',
  'type' => 'link',
  'relationship' => 'av_accounts_av_trustees_1',
  'source' => 'non-db',
  'vname' => 'LBL_AV_ACCOUNTS_AV_TRUSTEES_1_FROM_AV_ACCOUNTS_TITLE',
  'id_name' => 'av_accounts_av_trustees_1av_accounts_ida',
);
$dictionary["av_Trustees"]["fields"]["av_accounts_av_trustees_1_name"] = array (
  'name' => 'av_accounts_av_trustees_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_AV_ACCOUNTS_AV_TRUSTEES_1_FROM_AV_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'av_accounts_av_trustees_1av_accounts_ida',
  'link' => 'av_accounts_av_trustees_1',
  'table' => 'av_accounts',
  'module' => 'av_Accounts',
  'rname' => 'name',
);
$dictionary["av_Trustees"]["fields"]["av_accounts_av_trustees_1av_accounts_ida"] = array (
  'name' => 'av_accounts_av_trustees_1av_accounts_ida',
  'type' => 'link',
  'relationship' => 'av_accounts_av_trustees_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_AV_ACCOUNTS_AV_TRUSTEES_1_FROM_AV_TRUSTEES_TITLE',
);
