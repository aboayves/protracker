<?php
// created: 2012-05-21 17:10:30
$dictionary["account_av_account_histories"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => false,
  'relationships' => 
  array (
    'account_av_account_histories' => 
    array (
      'lhs_module' => 'Accounts',
      'lhs_table' => 'accounts',
      'lhs_key' => 'id',
      'rhs_module' => 'av_Account_Histories',
      'rhs_table' => 'av_account_histories',
      'rhs_key' => 'av_accounts_id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'av_accounts',
      'join_key_lhs' => 'account_id',
      'join_key_rhs' => 'id',
    ),
  ),
  'table' => 'av_accounts',
);