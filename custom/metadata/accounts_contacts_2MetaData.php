<?php
// created: 2012-11-27 22:30:44
$dictionary["accounts_contacts_2"] = array (
  'true_relationship_type' => 'one-to-one',
  'from_studio' => true,
  'relationships' => 
  array (
    'accounts_contacts_2' => 
    array (
      'lhs_module' => 'Accounts',
      'lhs_table' => 'accounts',
      'lhs_key' => 'id',
      'rhs_module' => 'Contacts',
      'rhs_table' => 'contacts',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'accounts_contacts_2_c',
      'join_key_lhs' => 'accounts_contacts_2accounts_ida',
      'join_key_rhs' => 'accounts_contacts_2contacts_idb',
    ),
  ),
  'table' => 'accounts_contacts_2_c',
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
      'name' => 'accounts_contacts_2accounts_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'accounts_contacts_2contacts_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'accounts_contacts_2spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'accounts_contacts_2_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'accounts_contacts_2accounts_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'accounts_contacts_2_idb2',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'accounts_contacts_2contacts_idb',
      ),
    ),
  ),
);