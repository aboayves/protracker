<?php
// created: 2012-05-21 21:59:02
$dictionary["accounts_av_net_worth"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => false,
  'relationships' => 
  array (
    'accounts_av_net_worth' => 
    array (
      'lhs_module' => 'Accounts',
      'lhs_table' => 'accounts',
      'lhs_key' => 'id',
      'rhs_module' => 'av_Net_Worth',
      'rhs_table' => 'av_net_worth',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'accounts_av_net_worth_c',
      'join_key_lhs' => 'accounts_av_net_worthaccounts_ida',
      'join_key_rhs' => 'accounts_av_net_worthav_net_worth_idb',
    ),
  ),
  'table' => 'accounts_av_net_worth_c',
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
      'name' => 'accounts_av_net_worthaccounts_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'accounts_av_net_worthav_net_worth_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'accounts_av_net_worthspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'accounts_av_net_worth_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'accounts_av_net_worthaccounts_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'accounts_av_net_worth_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'accounts_av_net_worthav_net_worth_idb',
      ),
    ),
  ),
);