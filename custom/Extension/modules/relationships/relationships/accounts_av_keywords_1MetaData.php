<?php
// created: 2012-10-14 16:27:51
$dictionary["accounts_av_keywords_1"] = array (
  'true_relationship_type' => 'many-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'accounts_av_keywords_1' => 
    array (
      'lhs_module' => 'Accounts',
      'lhs_table' => 'accounts',
      'lhs_key' => 'id',
      'rhs_module' => 'av_Keywords',
      'rhs_table' => 'av_keywords',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'accounts_av_keywords_1_c',
      'join_key_lhs' => 'accounts_av_keywords_1accounts_ida',
      'join_key_rhs' => 'accounts_av_keywords_1av_keywords_idb',
    ),
  ),
  'table' => 'accounts_av_keywords_1_c',
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
      'name' => 'accounts_av_keywords_1accounts_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'accounts_av_keywords_1av_keywords_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'accounts_av_keywords_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'accounts_av_keywords_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'accounts_av_keywords_1accounts_ida',
        1 => 'accounts_av_keywords_1av_keywords_idb',
      ),
    ),
  ),
);