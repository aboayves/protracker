<?php
// created: 2012-11-09 02:55:08
$dictionary["av_life_insurance_av_commissions_1"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'av_life_insurance_av_commissions_1' => 
    array (
      'lhs_module' => 'av_Life_Insurance',
      'lhs_table' => 'av_life_insurance',
      'lhs_key' => 'id',
      'rhs_module' => 'av_Commissions',
      'rhs_table' => 'av_commissions',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'av_life_insurance_av_commissions_1_c',
      'join_key_lhs' => 'av_life_insurance_av_commissions_1av_life_insurance_ida',
      'join_key_rhs' => 'av_life_insurance_av_commissions_1av_commissions_idb',
    ),
  ),
  'table' => 'av_life_insurance_av_commissions_1_c',
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
      'name' => 'av_life_insurance_av_commissions_1av_life_insurance_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'av_life_insurance_av_commissions_1av_commissions_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'av_life_insurance_av_commissions_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'av_life_insurance_av_commissions_1_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'av_life_insurance_av_commissions_1av_life_insurance_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'av_life_insurance_av_commissions_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'av_life_insurance_av_commissions_1av_commissions_idb',
      ),
    ),
  ),
);