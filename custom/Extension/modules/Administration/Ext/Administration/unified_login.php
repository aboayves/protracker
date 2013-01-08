<?php
$admin_option_defs = array();
$admin_option_defs['UnifiedLogin'] = array(
'themes/default/images/WorkFlow.gif', 'LBL_UNIFIED_LOGIN', 'LBL_REG_UNIFIED_LOGIN', 'javascript:dialogForURL();');
// Loop through the menus and add to the Users group
foreach ($admin_group_header as $key => $values)
{
	if ($values[0] == 'LBL_ADMINISTRATION_HOME_TITLE')
	{
		$admin_group_header[$key][3]['Administration']['UnifiedLogin'] = $admin_option_defs['UnifiedLogin'];
	}
}
echo '<div id="dialogForURL" title="Register for unified login" style="display:none"><br/><br/>
		  <form name="input" action="index.php?module=Users&action=register_admin" method="POST">
			  Server URL: <input type="text" id="rest_url" name="rest_url"/> &nbsp;
			  <input type="submit" id="create_admin" name="create_admin" value="Register"/>
		  </form>
	 </div>';
echo '<script type="text/javascript">
		function dialogForURL()
		{
			 $( "#dialogForURL" ).dialog({ width: 430 });
		}
		
      </script>';
	  
if(!isset($_REQUEST['show_all']) || empty($_REQUEST['show_all'])){
	$admin_option_defs=array();
	
	$admin_option_defs['Administration']['av_Account_Types'] = array(
		'av_Account_Types',
		translate('av_Account_Types', 'LBL_MODULE_NAME'),
		'Manage account types',
		'./index.php?module=av_Account_Types&action=index'
	);
	
	$admin_option_defs['Administration']['av_Activity_Types'] = array(
		'av_Activity_Types',
		translate('av_Activity_Types', 'LBL_MODULE_NAME'),
		'Manage activity types',
		'./index.php?module=av_Activity_Types&action=index'
	);
	
	$admin_option_defs['Administration']['av_Keywords'] = array(
		'av_Keywords',
		translate('av_Keywords', 'LBL_MODULE_NAME'),
		'Manage keywords',
		'./index.php?module=av_Keywords&action=index'
	);
	
	$admin_option_defs['Administration']['av_Custom_Fields'] = array(
		'av_Custom_Fields',
		translate('av_Custom_Fields', 'LBL_MODULE_NAME'),
		'Manage custom fields',
		'./index.php?module=av_Custom_Fields&action=index'
	);
	
	$admin_option_defs['Administration']['dropdowneditor'] = array(
		'Dropdown',
		'LBL_DROPDOWN_EDITOR',
		'DESC_DROPDOWN_EDITOR',
		'./index.php?module=ModuleBuilder&action=index&type=dropdowns'
	);
	
	$admin_group_header = array(
		array('ProTracker Administration', '', false, $admin_option_defs, 'Change Dropdown Options, Item Types and other Settings')
	);
}
?>