<?php
// created: 2012-05-21 17:10:30
$dictionary["av_Accounts"]["fields"]["av_net_worth_id"] = array (
  'name' => 'av_net_worth_id',
  'type' => 'id',
  'relationship' => 'av_net_worth_av_accounts',
  'module'=>'av_Accounts',
  'vname' => 'LBL_AV_NET_WORTH_ID',
  'duplicate_merge' => 'disabled',
  'len' => 36,
  'size' => '20',
);
$dictionary["av_Accounts"]["fields"]["av_net_worth_name"] = array (
  'name' => 'av_net_worth_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_AV_NET_WORTH_NAME',
  'id_name' => 'av_net_worth_id',
  'module' => 'av_Net_Worth',
  'studio' => 'visible',
  'rname' => 'name',
);