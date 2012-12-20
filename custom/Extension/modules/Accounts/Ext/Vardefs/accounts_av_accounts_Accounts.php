<?php
// created: 2012-05-21 17:10:30
$dictionary["Account"]["fields"]["accounts_av_accounts"] = array (
  'name' => 'accounts_av_accounts',
  'type' => 'link',
  'relationship' => 'accounts_av_accounts',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_AV_ACCOUNTS_FROM_AV_ACCOUNTS_TITLE',
);
$dictionary['Account']['relationships']['accounts_av_accounts'] = array(
 'lhs_module'=> 'Accounts',
 'lhs_table'=> 'accounts',
 'lhs_key' => 'id',
 'rhs_module'=> 'av_Accounts',
 'rhs_table'=> 'av_accounts',
 'rhs_key' => 'accounts_id',
 'relationship_type'=>'one-to-many'
);
