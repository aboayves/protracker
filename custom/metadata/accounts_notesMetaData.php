<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

$dictionary['accounts_notes'] = array (   
'table' => 'accounts_notes'
                                  , 'fields' => array (
       array('name' =>'id', 'type' =>'varchar', 'len'=>'36')
      , array('name' =>'notes_id', 'type' =>'varchar', 'len'=>'36')
      , array('name' =>'accounts_id', 'type' =>'varchar', 'len'=>'36')
      , array('name' => 'date_modified','type' => 'datetime')
      , array('name' =>'deleted', 'type' =>'bool', 'len'=>'1', 'required'=>false, 'default'=>'0')
                                                      )                                  , 'indices' => array (
       array('name' =>'accounts_notespk', 'type' =>'primary', 'fields'=>array('id'))
      , array('name' => 'idx_accounts_notes', 'type'=>'alternate_key', 'fields'=>array('accounts_id','notes_id'))
      , array('name' => 'idx_noteid_del_acctid', 'type' => 'index', 'fields'=> array('notes_id', 'deleted', 'accounts_id'))

      )
      
 	  , 'relationships' => array ('accounts_notes' => array('lhs_module'=> 'Accounts', 'lhs_table'=> 'accounts', 'lhs_key' => 'id',
							  'rhs_module'=> 'Notes', 'rhs_table'=> 'notes', 'rhs_key' => 'id',
							  'relationship_type'=>'many-to-many',
							  'join_table'=> 'accounts_notes', 'join_key_lhs'=>'accounts_id', 'join_key_rhs'=>'notes_id'))


)
?>
