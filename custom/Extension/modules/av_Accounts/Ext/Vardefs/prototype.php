<?php

$dictionary["av_Accounts"]["fields"]["dependent_dropdown"] = array (
    'required' => false,
    'name' => 'dependent_dropdown',
    'vname' => 'LBL_DEPENDENT_DROPDOWN',
    'type' => 'enum',
    'massupdate' => 0,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => false,
    'reportable' => true,
    'len' => 100,
    'size' => '20',
    'options' => 'dependent_dropdown_list',
    'dependency' => false,
    'calculated' => false,
    'default' => '',
    );

$dictionary["av_Accounts"]["fields"]["dependent_bool"] = array (
    'name' => 'dependent_bool',
    'type' => 'bool',
    'required' => false,
    'vname' => 'LBL_DEPENDENT_BOOL',
    'audited' => true,
    'reportable' => true,
    'help' => '',
    'comments' => '',
    'default' => NULL,
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'dependency' => 'equal($dependent_dropdown,"val1")',
    );

$dictionary['av_Accounts']['fields']['dependent_varchar'] = array(
    'name' => 'dependent_varchar',
    'vname' => 'LBL_DEPENDENT_VARCHAR',
    'type' => 'varchar',
    'len' => 255,
    'size'  => 25,
    'required' => false,
    'default' => NULL,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'audited' => true,
    'reportable' => true,
    'dependency' => 'equal($dependent_dropdown,"val2")',
    );

$dictionary["av_Accounts"]["fields"]["value"] = array (
    'required' => false,
    'name' => 'value',
    'vname' => 'LBL_VALUE',
    'type' => 'currency',
    'massupdate' => 0,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => false,
    'reportable' => true,
    'len' => 26,
    'size' => '20',
    );

?>
