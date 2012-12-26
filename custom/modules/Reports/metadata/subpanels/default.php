<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
$subpanel_layout = array(
	'top_buttons' => array(
	),
	
	'where' => '',
	
	'list_fields' => array (
		'name' => 
		array (
			'vname' => 'LBL_NAME',
			'widget_class' => 'SubPanelDetailViewLink',
			'width' => '30%',
			'default' => true,
		),
		'module' => 
		array (
			'vname' => 'LBL_REPORT_MODULE',
			'width' => '10%',
			'default' => true,
		),
		'report_type' => 
		array (
			'vname' => 'LBL_REPORT_TYPE',
			'width' => '10%',
		),
		'remove_button' => 
		array (
			'vname' => 'LBL_REMOVE',
			'widget_class' => 'SubPanelRemoveButtonReport',
			'module' => 'Reports',
			'width' => '5%',
		),
	)	
);
?>
