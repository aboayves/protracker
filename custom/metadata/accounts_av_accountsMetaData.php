<?php
// created: 2012-05-21 17:10:30
$dictionary["accounts_av_accounts"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => false,
  'relationships' => 
  array (
    'accounts_av_accounts' => 
    array (
      'lhs_module' => 'Accounts',
      'lhs_table' => 'accounts',
      'lhs_key' => 'id',
      'rhs_module' => 'av_Accounts',
      'rhs_table' => 'av_accounts',
      'rhs_key' => 'account_id',
      'relationship_type' => 'one-to-many',
    ),
  ),
);