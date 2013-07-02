<?php
$layout_defs['Accounts']['subpanel_setup']['activities']['collection_list']['lead_calls_history'] = array (
	'module' => 'Calls',
	'subpanel_name' => 'ForActivities',
	'get_subpanel_data' => 'function:history_all_leads_func',
	'function_parameters' => array(
		'import_function_file' => 'custom/modules/Accounts/lib/customHistorySubpanel.php',
		'account_id' => $this->_focus->id,
		'table' => 'calls',
	),
	'generate_select'=>true,
    'get_distinct_data'=> true,
);
$layout_defs['Accounts']['subpanel_setup']['activities']['collection_list']['lead_tasks_history'] = array (
	'module' => 'Tasks',
	'subpanel_name' => 'ForActivities',
	'get_subpanel_data' => 'function:history_all_leads_func',
	'function_parameters' => array(
		'import_function_file' => 'custom/modules/Accounts/lib/customHistorySubpanel.php',
		'account_id' => $this->_focus->id,
		'table' => 'tasks',
	),
	'generate_select'=>true,
    'get_distinct_data'=> true,
);
$layout_defs['Accounts']['subpanel_setup']['activities']['collection_list']['lead_meetings_history'] = array (
	'module' => 'Meetings',
	'subpanel_name' => 'ForActivities',
	'get_subpanel_data' => 'function:history_all_leads_func',
	'function_parameters' => array(
		'import_function_file' => 'custom/modules/Accounts/lib/customHistorySubpanel.php',
		'account_id' => $this->_focus->id,
		'table' => 'meetings',
	),
	'generate_select'=>true,
    'get_distinct_data'=> true,
);

