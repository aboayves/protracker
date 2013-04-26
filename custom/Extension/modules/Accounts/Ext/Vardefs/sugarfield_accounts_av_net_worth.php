<?php
// created: 2012-05-21 17:10:30
$dictionary["Account"]["fields"]["accounts_av_net_worth"] = array (
  'name' => 'accounts_av_net_worth',
  'type' => 'link',
  'relationship' => 'accounts_av_net_worth',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_AV_NET_WORTH',
);
$dictionary['Account']['relationships']['accounts_av_net_worth'] = array(
 'lhs_module'=> 'Accounts',
 'lhs_table'=> 'accounts',
 'lhs_key' => 'id',
 'rhs_module'=> 'av_Net_Worth',
 'rhs_table'=> 'av_net_worth',
 'rhs_key' => 'accounts_id',
 'relationship_type'=>'one-to-many'
);