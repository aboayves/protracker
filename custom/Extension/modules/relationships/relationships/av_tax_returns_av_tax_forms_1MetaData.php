<?php
// created: 2012-11-09 20:11:04
$dictionary["av_tax_returns_av_tax_forms_1"] = array (
  'true_relationship_type' => 'one-to-one',
  'from_studio' => true,
  'relationships' => 
  array (
    'av_tax_returns_av_tax_forms_1' => 
    array (
      'lhs_module' => 'av_Tax_Returns',
      'lhs_table' => 'av_tax_returns',
      'lhs_key' => 'id',
      'rhs_module' => 'av_Tax_Forms',
      'rhs_table' => 'av_tax_forms',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'av_tax_returns_av_tax_forms_1_c',
      'join_key_lhs' => 'av_tax_returns_av_tax_forms_1av_tax_returns_ida',
      'join_key_rhs' => 'av_tax_returns_av_tax_forms_1av_tax_forms_idb',
    ),
  ),
  'table' => 'av_tax_returns_av_tax_forms_1_c',
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
      'name' => 'av_tax_returns_av_tax_forms_1av_tax_returns_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'av_tax_returns_av_tax_forms_1av_tax_forms_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'av_tax_returns_av_tax_forms_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'av_tax_returns_av_tax_forms_1_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'av_tax_returns_av_tax_forms_1av_tax_returns_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'av_tax_returns_av_tax_forms_1_idb2',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'av_tax_returns_av_tax_forms_1av_tax_forms_idb',
      ),
    ),
  ),
);