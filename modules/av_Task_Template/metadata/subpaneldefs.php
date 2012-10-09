<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

$layout_defs['av_Task_Template'] = array(
	'subpanel_setup' => array(
		'parent_tasks_template' => array(
			'order' => 100,
			'module' => 'av_Task_Template',
			'subpanel_name' => 'default',
			'sort_order' => 'asc',
			'sort_by' => 'id',
			'title_key' => 'LBL_CHILD_TASKS',
			'get_subpanel_data' => 'parent_tasks_template',
			'top_buttons' => 
			array (
				0 => 
				array (
					'widget_class' => 'SubPanelTopButtonQuickCreate',
				),
				1 => 
				array (
					'widget_class' => 'SubPanelTopSelectButton',
					'mode' => 'MultiSelect',
				),
			),
		),

	),
);
?>
