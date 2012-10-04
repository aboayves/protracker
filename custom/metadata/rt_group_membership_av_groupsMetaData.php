<?php
// created: 2012-08-09 15:46:02
$dictionary["rt_group_membership_av_groups"] = array (
  'table' => 'rt_group_membership',
  'relationships' => 
  array (
    'av_groups_contacts' => 
    array (
      'lhs_module' => 'av_Groups',
      'lhs_table' => 'av_groups',
      'lhs_key' => 'id',
      'rhs_module' => 'Contacts',
      'rhs_table' => 'contacts',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'rt_group_membership',
      'join_key_lhs' => 'av_groups_id',
      'join_key_rhs' => 'parent_id',
	  'relationship_role_column'=>'parent_type',
	  'relationship_role_column_value'=>'Contacts'
    ),
	'av_groups_accounts' => 
    array (
      'lhs_module' => 'av_Groups',
      'lhs_table' => 'av_groups',
      'lhs_key' => 'id',
      'rhs_module' => 'Accounts',
      'rhs_table' => 'accounts',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'rt_group_membership',
      'join_key_lhs' => 'av_groups_id',
      'join_key_rhs' => 'parent_id',
	  'relationship_role_column'=>'parent_type',
	  'relationship_role_column_value'=>'Accounts'
    ),
  ),
);