<?php
// created: 2012-10-17 02:03:53
$dictionary["av_IPS"]["fields"]["accounts_av_ips_1"] = array (
  'name' => 'accounts_av_ips_1',
  'type' => 'link',
  'relationship' => 'accounts_av_ips_1',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_AV_IPS_1_FROM_ACCOUNTS_TITLE',
  'id_name' => 'accounts_av_ips_1accounts_ida',
);
$dictionary["av_IPS"]["fields"]["accounts_av_ips_1_name"] = array (
  'name' => 'accounts_av_ips_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_AV_IPS_1_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'accounts_av_ips_1accounts_ida',
  'link' => 'accounts_av_ips_1',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["av_IPS"]["fields"]["accounts_av_ips_1accounts_ida"] = array (
  'name' => 'accounts_av_ips_1accounts_ida',
  'type' => 'link',
  'relationship' => 'accounts_av_ips_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_ACCOUNTS_AV_IPS_1_FROM_AV_IPS_TITLE',
);
