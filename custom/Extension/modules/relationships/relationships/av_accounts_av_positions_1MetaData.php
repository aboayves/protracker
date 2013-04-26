<?php
// created: 2012-10-18 02:28:59
$dictionary["av_accounts_av_positions_1"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'av_accounts_av_positions_1' => 
    array (
      'lhs_module' => 'av_Accounts',
      'lhs_table' => 'av_accounts',
      'lhs_key' => 'id',
      'rhs_module' => 'av_Positions',
      'rhs_table' => 'av_positions',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'av_accounts_av_positions_1_c',
      'join_key_lhs' => 'av_accounts_av_positions_1av_accounts_ida',
      'join_key_rhs' => 'av_accounts_av_positions_1av_positions_idb',
    ),
  ),
  'table' => 'av_accounts_av_positions_1_c',
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
      'name' => 'av_accounts_av_positions_1av_accounts_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'av_accounts_av_positions_1av_positions_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'av_accounts_av_positions_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'av_accounts_av_positions_1_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'av_accounts_av_positions_1av_accounts_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'av_accounts_av_positions_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'av_accounts_av_positions_1av_positions_idb',
      ),
    ),
  ),
);