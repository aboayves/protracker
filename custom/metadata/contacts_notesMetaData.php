<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

$dictionary['contacts_notes'] = array ( 'table' => 'contacts_notes'
                                  , 'fields' => array (
       array('name' =>'id', 'type' =>'varchar', 'len'=>'36')
      , array('name' =>'notes_id', 'type' =>'varchar', 'len'=>'36')
      , array('name' =>'contacts_id', 'type' =>'varchar', 'len'=>'36')
      , array('name' => 'date_modified','type' => 'datetime')
      , array('name' =>'deleted', 'type' =>'bool', 'len'=>'1', 'required'=>false, 'default'=>'0')
                                                      )                                  , 'indices' => array (
       array('name' =>'contacts_notespk', 'type' =>'primary', 'fields'=>array('id'))
      , array('name' => 'idx_contacts_notes', 'type'=>'alternate_key', 'fields'=>array('contacts_id','notes_id'))
      , array('name' => 'idx_noteid_del_contid', 'type' => 'index', 'fields'=> array('notes_id', 'deleted', 'contacts_id'))

      )
      
 	  , 'relationships' => array ('contacts_notes' => array('lhs_module'=> 'Contacts', 'lhs_table'=> 'contacts', 'lhs_key' => 'id',
							  'rhs_module'=> 'Notes', 'rhs_table'=> 'notes', 'rhs_key' => 'id',
							  'relationship_type'=>'many-to-many',
							  'join_table'=> 'contacts_notes', 'join_key_lhs'=>'contacts_id', 'join_key_rhs'=>'notes_id'))


)
?>
