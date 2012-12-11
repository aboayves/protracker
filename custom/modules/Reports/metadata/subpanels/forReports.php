<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
$subpanel_layout = array(
	'top_buttons' => array(
		array('widget_class' => 'SubPanelTopCreateButton'),
		array('widget_class' => 'SubPanelTopSelectButton', 'popup_module' => 'Reports'),
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
		'edit_button' => 
		array (
			'vname' => 'LBL_EDIT_BUTTON',
			'widget_class' => 'SubPanelCstmEditRoleButton',
		 	'target' => 'Reports',
			'action' => 'EditView',
			'id_field' => 'reports_id',
			'width' => '5%',
		),
		'remove_button' => 
		array (
			'vname' => 'LBL_REMOVE',
			'widget_class' => 'SubPanelRemoveButtonAccount',
			'width' => '4%',
			'default' => true,
		),
	)	
);
?>
