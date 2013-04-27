<?php
// created: 2012-05-21 17:10:30
$dictionary["accounts_av_accounts"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'accounts_av_accounts' => 
    array (
      'lhs_module' => 'Accounts',
      'lhs_table' => 'accounts',
      'lhs_key' => 'id',
      'rhs_module' => 'av_Accounts',
      'rhs_table' => 'av_accounts',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'accounts_av_accounts_c',
      'join_key_lhs' => 'accounts_av_accountsaccounts_ida',
      'join_key_rhs' => 'accounts_av_accountsav_accounts_idb',
    ),
  ),
  'table' => 'accounts_av_accounts_c',
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
      'name' => 'accounts_av_accountsaccounts_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'accounts_av_accountsav_accounts_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'accounts_av_accountsspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'accounts_av_accounts_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'accounts_av_accountsaccounts_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'accounts_av_accounts_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'accounts_av_accountsav_accounts_idb',
      ),
    ),
  ),
);