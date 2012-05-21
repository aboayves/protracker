<?php
// created: 2012-04-25 23:02:45
$dictionary["av_Net_Worth"]["fields"]["av_accounts_av_net_worth"] = array (
  'name' => 'av_accounts_av_net_worth',
  'type' => 'link',
  'relationship' => 'av_accounts_av_net_worth',
  'source' => 'non-db',
  'vname' => 'LBL_AV_NET_WORTH_AV_ACCOUNTS_FROM_AV_ACCOUNTS_TITLE',
  'id_name' => 'av_accounts_av_net_worth_av_accounts_ida',
);
$dictionary["av_Net_Worth"]["fields"]["av_net_worth_av_accounts_name"] = array (
  'name' => 'av_net_worth_av_accounts_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_AV_NET_WORTH_AV_ACCOUNTS_FROM_AV_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'av_accounts_av_net_worth_av_accounts_ida',
  'link' => 'av_accounts_av_net_worth',
  'table' => 'av_accounts',
  'module' => 'av_Accounts',
  'rname' => 'name',
);
$dictionary["av_Net_Worth"]["fields"]["av_accounts_av_net_worth_av_accounts_ida"] = array (
  'name' => 'av_accounts_av_net_worth_av_accounts_ida',
  'type' => 'link',
  'relationship' => 'av_accounts_av_net_worth',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_AV_NET_WORTH_AV_ACCOUNTS_FROM_AV_ACCOUNTS_TITLE',
);
