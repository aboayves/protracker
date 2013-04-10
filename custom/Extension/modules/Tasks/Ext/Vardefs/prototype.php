<?php

$dictionary["Task"]["fields"]["dd1"] = array (
    'required' => false,
    'name' => 'dd1',
    'vname' => 'LBL_DD1',
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
    'options' => 'dd1_list',
    'dependency' => false,
    'calculated' => false,
    );

$dictionary["Task"]["fields"]["dd2"] = array (
    'required' => false,
    'name' => 'dd2',
    'vname' => 'LBL_DD2',
    'type' => 'enum',
    'massupdate' => 0,
    'comments' => '',
    'help' => 'Setting "Ready to Start" will trigger alert',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => false,
    'reportable' => true,
    'len' => 100,
    'size' => '20',
    'options' => 'dd2_list',
    'dependency' => false,
    'calculated' => false,
    );

$dictionary["Task"]["fields"]["closed_status"] = array (
    'name' => 'closed_status',
    'type' => 'bool',
    'required' => false,
    'vname' => 'LBL_CLOSED_STATUS',
    'audited' => true,
    'reportable' => true,
    'help' => '',
    'comments' => '',
    'default' => NULL,
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'dependency' => 'equal($dd2,"sample7")',
);

?>
