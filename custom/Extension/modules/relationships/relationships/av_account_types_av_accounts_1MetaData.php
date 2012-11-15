<?php
// created: 2012-11-14 19:54:13
$dictionary["av_account_types_av_accounts_1"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'av_account_types_av_accounts_1' => 
    array (
      'lhs_module' => 'av_Account_Types',
      'lhs_table' => 'av_account_types',
      'lhs_key' => 'id',
      'rhs_module' => 'av_Accounts',
      'rhs_table' => 'av_accounts',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'av_account_types_av_accounts_1_c',
      'join_key_lhs' => 'av_account_types_av_accounts_1av_account_types_ida',
      'join_key_rhs' => 'av_account_types_av_accounts_1av_accounts_idb',
    ),
  ),
  'table' => 'av_account_types_av_accounts_1_c',
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
      'name' => 'av_account_types_av_accounts_1av_account_types_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'av_account_types_av_accounts_1av_accounts_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'av_account_types_av_accounts_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'av_account_types_av_accounts_1_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'av_account_types_av_accounts_1av_account_types_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'av_account_types_av_accounts_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'av_account_types_av_accounts_1av_accounts_idb',
      ),
    ),
  ),
);