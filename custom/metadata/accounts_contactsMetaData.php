<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

$dictionary['accounts_contacts'] = array(
	'table' => 'accounts_contacts', 
	'fields' => array (
		array('name' => 'id', 'type' =>'varchar', 'len'=>'36'), 
		array('name' => 'contact_id', 'type' =>'varchar', 'len'=>'36'), 
		array('name' => 'account_id', 'type' =>'varchar', 'len'=>'36'),
		array('name' => 'contact_type', 'type' =>'varchar', 'len'=>'100'), 
		array('name' => 'date_modified','type' => 'datetime'), 
		array('name' => 'deleted', 'type' =>'bool', 'len'=>'1', 'required'=>false, 'default'=>'0')
	), 
	'indices' => array (
		array('name' => 'accounts_contactspk', 'type' =>'primary', 'fields'=>array('id')), 
		array('name' => 'idx_account_contact', 'type'=>'alternate_key', 'fields'=>array('account_id','contact_id')), 
		array('name' => 'idx_contid_del_accid', 'type' => 'index', 'fields'=> array('contact_id', 'deleted', 'account_id'))
	), 
	'relationships' => array (
		'accounts_contacts' => array(
			'lhs_module'=> 'Accounts', 
			'lhs_table'=> 'accounts', 
			'lhs_key' => 'id',
			'rhs_module'=> 'Contacts', 
			'rhs_table'=> 'contacts', 
			'rhs_key' => 'id',
			'relationship_type'=>'many-to-many',
			'join_table'=> 'accounts_contacts', 
			'join_key_lhs'=>'account_id', 
			'join_key_rhs'=>'contact_id'
		),
		'accounts_contacts_primary' => array(
			'lhs_module'=> 'Accounts', 
			'lhs_table'=> 'accounts', 
			'lhs_key' => 'id',
			'rhs_module'=> 'Contacts', 
			'rhs_table'=> 'contacts', 
			'rhs_key' => 'id',
			'relationship_type'=>'many-to-many',
			'join_table'=> 'accounts_contacts', 
			'join_key_lhs'=>'account_id', 
			'join_key_rhs'=>'contact_id',
			'relationship_role_column'=>'contact_type',
			'relationship_role_column_value'=>'Primary'
		),
		'accounts_contacts_secondary' => array(
			'lhs_module'=> 'Accounts', 
			'lhs_table'=> 'accounts', 
			'lhs_key' => 'id',
			'rhs_module'=> 'Contacts', 
			'rhs_table'=> 'contacts', 
			'rhs_key' => 'id',
			'relationship_type'=>'many-to-many',
			'join_table'=> 'accounts_contacts', 
			'join_key_lhs'=>'account_id', 
			'join_key_rhs'=>'contact_id',
			'relationship_role_column'=>'contact_type',
			'relationship_role_column_value'=>'Secondary'
		),
	)
);

?>