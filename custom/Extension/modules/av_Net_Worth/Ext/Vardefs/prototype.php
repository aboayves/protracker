<?php

$dictionary["av_Net_Worth"]["fields"]["grand_total"] = array (
    'required' => false,
    'name' => 'grand_total',
    'vname' => 'LBL_GRAND_TOTAL',
    'type' => 'currency',
    'massupdate' => 0,
    'comments' => '',
    'help' => '',
    'importable' => 'false',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => false,
    'reportable' => true,
    'len' => 26,
    'size' => '20',
    'calculated' => true,
    'formula' => 'rollupSum($av_net_worth_av_accounts,"value")',
    'enforced' => true,
    'dependency' => '',
    );

?>
