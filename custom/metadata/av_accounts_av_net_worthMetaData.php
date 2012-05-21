<?php
// created: 2012-04-25 23:02:45
$dictionary["av_accounts_av_net_worth"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => false,
  'relationships' => 
  array (
    'av_accounts_av_net_worth' => 
    array (
      'lhs_module' => 'av_Accounts',
      'lhs_table' => 'av_accounts',
      'lhs_key' => 'id',
      'rhs_module' => 'av_Net_Worth',
      'rhs_table' => 'av_net_worth',
      'rhs_key' => 'id',
      'relationship_type' => 'one-to-many',
      'join_table' => 'av_accounts_av_net_worth',
      'join_key_lhs' => 'av_accounts_av_net_worth_av_accounts_ida',
      'join_key_rhs' => 'av_accounts_av_net_worth_av_net_worth_idb',
    ),
  ),
  'table' => 'av_accounts_av_net_worth',
  'fields' => 
  array (
    0 => 
    array (
      'name' => 'id',
      'type' => 'varchar',
      'len' => 36,
    ),
    1 => 
    array (
      'name' => 'date_modified',
      'type' => 'datetime',
    ),
    2 => 
    array (
      'name' => 'deleted',
      'type' => 'bool',
      'len' => '1',
      'default' => '0',
      'required' => true,
    ),
    3 => 
    array (
      'name' => 'av_accounts_av_net_worth_av_accounts_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'av_accounts_av_net_worth_av_net_worth_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'av_net_worth_av_accountsspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'av_net_worth_av_accounts_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'av_accounts_av_net_worth_av_accounts_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'av_net_worth_av_accounts_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'av_accounts_av_net_worth_av_net_worth_idb',
      ),
    ),
  ),
);