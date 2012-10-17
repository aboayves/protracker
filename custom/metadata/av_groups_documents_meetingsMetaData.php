<?php
// created: 2012-09-03 07:22:23
$dictionary["av_groups_documents"] = array (
  'relationships' => 
  array (
    'av_groups_documents' => 
    array (
      'lhs_module' => 'av_Groups',
      'lhs_table' => 'av_groups',
      'lhs_key' => 'id',
      'rhs_module' => 'Documents',
      'rhs_table' => 'documents',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'av_groups_documents',
      'join_key_lhs' => 'av_groups_id',
      'join_key_rhs' => 'documents_id',
    ),
  ),
  'table' => 'av_groups_documents',
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
      'name' => 'av_groups_id',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'documents_id',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'av_groups_documentsspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'av_groups_documents_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'av_groups_id',
        1 => 'documents_id',
      ),
    ),
  ),
);
?>
