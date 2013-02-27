<?php
 
$dictionary['av_Keywords']['fields']['parent_name'] = array(
'required' => false,
'source' => 'non-db',
'name' => 'parent_name',
'vname' => 'LBL_FLEX_RELATE',
'type' => 'parent',
'massupdate' => 0,
'comments' => '',
'help' => '',
'importable' => 'true',
'duplicate_merge' => 'disabled',
'duplicate_merge_dom_value' => '0',
'audited' => false,
'reportable' => true,
'len' => 25,
'size' => '20',
'options' => 'av_Keywords_options',
'studio' => 'visible',
'type_name' => 'parent_type',
'id_name' => 'parent_id',
'parent_type' => 'av_Keywords_options',
);
 
$dictionary['av_Keywords']['fields']['parent_type'] = array(
'required' => false,
'name' => 'parent_type',
'vname' => 'LBL_PARENT_TYPE',
'type' => 'parent_type',
'massupdate' => 0,
'comments' => '',
'help' => '',
'importable' => 'true',
'duplicate_merge' => 'disabled',
'duplicate_merge_dom_value' => 0,
'audited' => false,
'reportable' => true,
'len' => 255,
'size' => '20',
'dbType' => 'varchar',
'studio' => 'hidden',
);
 
$dictionary['av_Keywords']['fields']['parent_id'] = array(
'required' => false,
'name' => 'parent_id',
'vname' => 'LBL_PARENT_ID',
'type' => 'id',
'massupdate' => 0,
'comments' => '',
'help' => '',
'importable' => 'true',
'duplicate_merge' => 'disabled',
'duplicate_merge_dom_value' => 0,
'audited' => false,
'reportable' => true,
'len' => 36,
'size' => '20',
);
 
$dictionary['av_Keywords']['fields']['contacts'] = array(
'name' => 'contacts',
'type' => 'link',
'relationship' => 'av_Keywords_contacts',
'module'=>'Contacts',
'bean_name'=>'Contact',
'source'=>'non-db',
'vname'=>'LBL_CONTACTS',
);
 
$dictionary['av_Keywords']['fields']['leads'] = array(
'name' => 'leads',
'type' => 'link',
'relationship' => 'av_Keywords_leads',
'module'=>'Leads',
'bean_name'=>'Lead',
'source'=>'non-db',
'vname'=>'LBL_LEADS',
);

$dictionary['av_Keywords']['fields']['accounts'] = array(
'name' => 'accounts',
'type' => 'link',
'relationship' => 'av_Keywords_accounts',
'module'=>'accounts',
'bean_name'=>'Contact',
'source'=>'non-db',
'vname'=>'LBL_accounts',
);

$dictionary['av_Keywords']['relationships']['av_Keywords_accounts'] = array(
'lhs_module'	=> 'av_Keywords',
'lhs_table'	=> 'av_Keywords',
'lhs_key'	=> 'parent_id',
'rhs_module'	=> 'accounts',
'rhs_table'	=> 'accounts',
'rhs_key'	=> 'id',
'relationship_type'	=> 'one-to-many',
'relationship_role_column'=>'parent_type',
'relationship_role_column_value'=>'accounts'
);
 
$dictionary['av_Keywords']['relationships']['av_Keywords_contacts'] = array(
'lhs_module'	=> 'av_Keywords',
'lhs_table'	=> 'av_Keywords',
'lhs_key'	=> 'parent_id',
'rhs_module'	=> 'Contacts',
'rhs_table'	=> 'contacts',
'rhs_key'	=> 'id',
'relationship_type'	=> 'one-to-many',
'relationship_role_column'=>'parent_type',
'relationship_role_column_value'=>'Contacts'
);
 
$dictionary['av_Keywords']['relationships']['av_Keywords_leads'] = array(
'lhs_module'	=> 'av_Keywords',
'lhs_table'	=> 'av_Keywords',
'lhs_key'	=> 'parent_id',
'rhs_module'	=> 'Leads',
'rhs_table'	=> 'leads',
'rhs_key'	=> 'id',
'relationship_type'	=> 'one-to-many',
'relationship_role_column'=>'parent_type',
'relationship_role_column_value'=>'Leads'
);