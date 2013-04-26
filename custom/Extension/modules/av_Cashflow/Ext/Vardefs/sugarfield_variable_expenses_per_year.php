<?php
// created: 2013-01-24 11:09:46
$dictionary["av_Cashflow"]["fields"]["variable_expenses_per_year"] = array (
	'name' => 'variable_expenses_per_year',
	'vname' => 'LBL_VARIABLE_EXPENSES_PER_YEAR',
	'type' => 'function',
	'source' => 'function',
	'function_name' => 'getYearValue',
	'function_params' => array('variable_expenses_per_month'),
	'function_params_source' => 'this',
	'function_require' => 'custom/modules/av_Cashflow/getYearValue.php',
	'len' => '26,6',
	'size' => '20',
	'align' => 'right',
	'audited' => 0,
	'required' => 0,
	'comment' => '',
	'default' => '',
	'massupdate' => True,
	'reportable' => True,
	'importable' => True,
	'duplicate_merge' => 'Enabled',
	'duplicate_merge_dom_value' => True,
	'help' => '',
	'group' => '',
);
?>
