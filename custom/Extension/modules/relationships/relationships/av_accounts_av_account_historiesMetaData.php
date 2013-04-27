<?php
// created: 2012-05-14 16:00:23
$dictionary["av_accounts_av_account_histories"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'av_accounts_av_account_histories' => 
    array (
      'lhs_module' => 'av_Accounts',
      'lhs_table' => 'av_accounts',
      'lhs_key' => 'id',
      'rhs_module' => 'av_Account_Histories',
      'rhs_table' => 'av_account_histories',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'av_accounts_av_account_histories_c',
      'join_key_lhs' => 'av_accounts_av_account_historiesav_accounts_ida',
      'join_key_rhs' => 'av_accounts_av_account_historiesav_account_histories_idb',
    ),
  ),
  'table' => 'av_accounts_av_account_histories_c',
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
      'name' => 'av_accounts_av_account_historiesav_accounts_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'av_accounts_av_account_historiesav_account_histories_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'av_accounts_av_account_historiesspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'av_accounts_av_account_histories_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'av_accounts_av_account_historiesav_accounts_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'av_accounts_av_account_histories_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'av_accounts_av_account_historiesav_account_histories_idb',
      ),
    ),
  ),
);