<?php
// created: 2012-04-25 15:09:32
$dictionary["av_groups_accounts"] = array (
  'true_relationship_type' => 'many-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'av_groups_accounts' => 
    array (
      'lhs_module' => 'av_Groups',
      'lhs_table' => 'av_groups',
      'lhs_key' => 'id',
      'rhs_module' => 'Accounts',
      'rhs_table' => 'accounts',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'av_groups_accounts_c',
      'join_key_lhs' => 'av_groups_accountsav_groups_ida',
      'join_key_rhs' => 'av_groups_accountsaccounts_idb',
    ),
  ),
  'table' => 'av_groups_accounts_c',
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
      'name' => 'av_groups_accountsav_groups_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'av_groups_accountsaccounts_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
    5 => 
    array (
      'name' => 'mail',
      'type' => 'bool',
      'len' => '1',
      'default' => '0',
      'required' => true,
    ),
    6 => 
    array (
      'name' => 'email',
      'type' => 'bool',
      'len' => '1',
      'default' => '0',
      'required' => true,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'av_groups_accountsspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'av_groups_accounts_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'av_groups_accountsav_groups_ida',
        1 => 'av_groups_accountsaccounts_idb',
      ),
    ),
  ),
);