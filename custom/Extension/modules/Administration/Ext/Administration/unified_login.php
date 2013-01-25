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
	$admin_group_header = array();
	
	//Protracker Admin
	$admin_option_defs = array();
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
	
	$admin_option_defs['Administration']['av_Fee_Schedules'] = array(
		'av_Fee_Schedules',
		translate('av_Fee_Schedules', 'LBL_MODULE_NAME'),
		'Manage Fee Schedules',
		'./index.php?module=av_Fee_Schedules&action=index'
	);
	
	$admin_option_defs['Administration']['av_Commission_Schedules'] = array(
		'av_Commission_Schedules',
		translate('av_Commission_Schedules', 'LBL_MODULE_NAME'),
		'Manage Commission Schedules',
		'./index.php?module=av_Commission_Schedules&action=index'
	);
	
	$admin_option_defs['Administration']['dropdowneditor'] = array(
		'Dropdown',
		'LBL_DROPDOWN_EDITOR',
		'DESC_DROPDOWN_EDITOR',
		'./index.php?module=ModuleBuilder&action=index&type=dropdowns'
	);
	
	//$admin_group_header[] = array('ProTracker Administration', '', false, $admin_option_defs, 'Change Dropdown Options, Item Types and other Settings');
	
	//Users Admin
	//$admin_option_defs = array();
	$admin_option_defs['Users']['user_management'] = array(
		'Users',
		'LBL_MANAGE_USERS_TITLE',
		'LBL_MANAGE_USERS',
		'./index.php?module=Users&action=index'
	);
	
	$admin_option_defs['Users']['roles_management'] = array(
		'Roles',
		'LBL_MANAGE_ROLES_TITLE',
		'LBL_MANAGE_ROLES',
		'./index.php?module=ACLRoles&action=index'
	);
	
	$admin_option_defs['Users']['teams_management'] = array(
		'Teams',
		'LBL_MANAGE_TEAMS_TITLE',
		'LBL_MANAGE_TEAMS',
		'./index.php?module=Teams&action=index'
	);
	
	//$admin_group_header[] = array('LBL_USERS_TITLE','',false,$admin_option_defs, 'LBL_USERS_DESC');
	
	//system.
	//$admin_option_defs = array();
	$admin_option_defs['Administration']['connector_settings'] = array(
		'icon_Connectors',
		'LBL_CONNECTOR_SETTINGS',
		'LBL_CONNECTOR_SETTINGS_DESC',
		'./index.php?module=Connectors&action=ConnectorSettings'
	);
	
	$admin_option_defs['Administration']['feed_settings'] = array(
		'icon_SugarFeed',
		'LBL_SUGARFEED_SETTINGS',
		'LBL_SUGARFEED_SETTINGS_DESC',
		'./index.php?module=SugarFeed&action=AdminSettings'
	);
	
	$admin_option_defs['Administration']['import'] = array(
		'Import',
		'LBL_IMPORT_WIZARD',
		'LBL_IMPORT_WIZARD_DESC',
		'./index.php?module=Import&action=step1&import_module=Administration'
	);
	
	$admin_option_defs['Administration']['sugarpdf'] = array(
		'icon_AdminPDF',
		'LBL_SUGARPDF_SETTINGS',
		'LBL_SUGARPDF_SETTINGS_DESC',
		'./index.php?module=Configurator&action=SugarpdfSettings'
	);
	
	//$admin_group_header[]= array('LBL_ADMINISTRATION_HOME_TITLE','',false,$admin_option_defs, 'LBL_ADMINISTRATION_HOME_DESC');
	
	//email manager.
	//$admin_option_defs = array();
	$admin_option_defs['Emails']['mass_Email_config'] = array(
		'EmailMan',
		'LBL_MASS_EMAIL_CONFIG_TITLE',
		'LBL_MASS_EMAIL_CONFIG_DESC',
		'./index.php?module=EmailMan&action=config'
	);
	
	$admin_option_defs['Emails']['mailboxes'] = array(
		'InboundEmail',
		'LBL_MANAGE_MAILBOX',
		'LBL_MAILBOX_DESC',
		'./index.php?module=InboundEmail&action=index'
	);
	
	$admin_option_defs['Campaigns']['mass_Email'] = array(
		'EmailMan',
		'LBL_MASS_EMAIL_MANAGER_TITLE',
		'LBL_MASS_EMAIL_MANAGER_DESC',
		'./index.php?module=EmailMan&action=index'
	);
	
	//$admin_group_header[] = array('LBL_EMAIL_TITLE','',false,$admin_option_defs, 'LBL_EMAIL_DESC');
	
	//product catalog.
	//$admin_option_defs = array();
	$admin_option_defs['Products']['product_catalog'] = array(
		'Products',
		'LBL_PRODUCTS_TITLE',
		'LBL_PRODUCTS',
		'./index.php?module=ProductTemplates&action=ListView'
	);
	
	$admin_option_defs['Products']['product_categories'] = array(
		'Product_Categories',
		'LBL_PRODUCT_CATEGORIES_TITLE',
		'LBL_PRODUCT_CATEGORIES',
		'./index.php?module=ProductCategories&action=index'
	);
	
	$admin_option_defs['Products']['product_types'] = array(
		'Product_Types',
		'LBL_PRODUCT_TYPES_TITLE',
		'LBL_PRODUCT_TYPES',
		'./index.php?module=ProductTypes&action=index'
	);
	
	//$admin_group_header[] = array('LBL_PRICE_LIST_TITLE','',false,$admin_option_defs, 'LBL_PRICE_LIST_DESC');
	
	//Forecasting
	//$admin_option_defs = array();
	$admin_option_defs['Forecasts']['timeperiod_management'] = array(
		'TimePeriods',
		'LBL_MANAGE_TIMEPERIODS_TITLE',
		'LBL_MANAGE_TIMEPERIODS',
		'./index.php?module=TimePeriods&action=ListView'
	);
	
	//$admin_group_header[] = array('LBL_FORECAST_TITLE','',false,$admin_option_defs, 'LBL_FORECAST_DESC');
	
	//Contracts
	//$admin_option_defs = array();
	$admin_option_defs['Contracts']['contract_type_management'] = array(
		'Contracts',
		'LBL_MANAGE_CONTRACTEMPLATES_TITLE',
		'LBL_CONTRACT_TYPES',
		'./index.php?module=ContractTypes&action=index'
	);
	
	//$admin_group_header[] = array($app_list_strings['moduleList']['Contracts'],'',false,$admin_option_defs, 'LBL_CONTRACT_DESC');
	
	$admin_group_header[] = array('ProTracker Administration', '', false, $admin_option_defs, 'Change Dropdown Options, Item Types and other Settings');
}
?>