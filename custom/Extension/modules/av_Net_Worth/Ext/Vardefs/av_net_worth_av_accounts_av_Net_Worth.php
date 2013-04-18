<?php
// created: 2012-05-21 22:08:25
$dictionary["av_Net_Worth"]["fields"]["av_net_worth_av_accounts"] = array (
  'name' => 'av_net_worth_av_accounts',
  'type' => 'link',
  'relationship' => 'av_net_worth_av_accounts',
  'source' => 'non-db',
  'side' => 'right',
  'vname' => 'LBL_AV_NET_WORTH_AV_ACCOUNTS_FROM_AV_ACCOUNTS_TITLE',
);

$dictionary['av_Net_Worth']['relationships']['av_net_worth_av_accounts'] = array(
 'lhs_module'=> 'av_Net_Worth',
 'lhs_table'=> 'av_net_worth',
 'lhs_key' => 'id',
 'rhs_module'=> 'av_Accounts',
 'rhs_table'=> 'av_accounts',
 'rhs_key' => 'av_net_worth_id',
 'relationship_type'=>'one-to-many'
);
