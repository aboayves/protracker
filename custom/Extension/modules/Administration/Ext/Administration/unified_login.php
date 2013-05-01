<?php 
require_once('modules/ACLRoles/ACLRole.php');

global $db, $current_user;
$admin_option_defs = array();
$admin_option_defs['UnifiedLogin'] = array(
'themes/default/images/WorkFlow.gif', 'LBL_UNIFIED_LOGIN', 'LBL_REG_UNIFIED_LOGIN', 'javascript:dialogForURL();');
$admin_option_defs['UpdateAccountHistory'] = array(
'custom/themes/default/images/av_Account_Histories.gif', 'LBL_UPDATE_ACCOUNT_HISTORY', 'LBL_REG_UPDATE_ACCOUNT_HISTORY', 'javascript:window.open("index.php?module=av_Account_Histories&action=create_account_history_record");void(0);');
// Loop through the menus and add to the Users group
foreach ($admin_group_header as $key => $values)
{
	if ($values[0] == 'LBL_ADMINISTRATION_HOME_TITLE')
	{
		$admin_group_header[$key][3]['Administration']['UnifiedLogin'] = $admin_option_defs['UnifiedLogin'];
		$admin_group_header[$key][3]['Administration']['UpdateAccountHistory'] = $admin_option_defs['UpdateAccountHistory'];
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
$sql = "
SELECT acl_roles.id, name 
FROM acl_roles 
LEFT JOIN acl_roles_users 
	ON ( acl_roles_users.deleted = 0 AND acl_roles.id = acl_roles_users.role_id ) 
WHERE 
	acl_roles.deleted ='0' 
	AND acl_roles_users.user_id='{$current_user->id}'
";
$res = $db->query($sql);
$row = $db->fetchByAssoc($res);

if($row['id'] == "")
{
	$row['id'] =  "reserved_standard";
	
}

$admin_role_options = array(
		"reserved_standard"=>array(
		
			"av_Account_Types"=>array(
				'av_Account_Types',
				translate('av_Account_Types', 'LBL_MODULE_NAME'),
				'Manage Account Types',
				'./index.php?module=av_Account_Types&action=index'
			),
			"av_Prices"=>array(
				'av_Prices',
				translate('av_Prices', 'LBL_MODULE_NAME'),
				'Manage Prices',
				'./index.php?module=av_Prices&action=index'
			),
			"av_Activity_Types"=>array(
				'av_Activity_Types',
				translate('av_Activity_Types', 'LBL_MODULE_NAME'),
				'Manage Activity Types',
				'./index.php?module=av_Account_Types&action=index'
			),
			"av_Group_Types"=>array(
				'av_Group_Types',
				translate('av_Group_Types', 'LBL_MODULE_NAME'),
				'Manage Group Types',
				'./index.php?module=av_Group_Types&action=index'
			),
			"ContractTypes"=>array(
				'Contracts',
				translate('ContractTypes', 'LBL_MODULE_NAME'),
				'Contract types',
				'./index.php?module=ContractTypes&action=index'
			),
			"av_Client_Types"=>array(
				'av_Client_Types',
				translate('av_Client_Types', 'LBL_MODULE_NAME'),
				'Manage Client Types',
				'./index.php?module=av_Client_Types&action=index'
			),
			
			"av_Contact_Types"=>array(
				'av_Contact_Types',
				translate('av_Contact_Types', 'LBL_MODULE_NAME'),
				'Manage Contact Types',
				'./index.php?module=av_Contact_Types&action=index'
			),
			"av_Tax_Rates"=>array(
				'av_Tax_Rates',
				translate('av_Tax_Rates', 'LBL_MODULE_NAME'),
				'Manage Tax Rates',
				'./index.php?module=av_Tax_Rates&action=index'
			),
			"av_Tax_Forms"=>array(
				'av_Tax_Forms',
				translate('av_Tax_Forms', 'LBL_MODULE_NAME'),
				'Manage Tax Forms',
				'./index.php?module=av_Tax_Forms&action=index'
			),
			"av_Fee_Schedules"=>array(
				'av_Fee_Schedule',
				translate('av_Fee_Schedule', 'LBL_MODULE_NAME'),
				'Manage Fee Schedules',
				'./index.php?module=av_Fee_Schedules&action=index'
			),
			"av_Commission_Schedules"=>array(
				'av_Commission_Schedules',
				translate('av_Commission_Schedules', 'LBL_MODULE_NAME'),
				'Manage Commission Schedules',
				'./index.php?module=av_Commission_Schedules&action=index'
			),
			"Import"=>array(
				'Import',
				translate('Import', 'LBL_MODULE_NAME'),
				'Import Wizard',
				'./index.php?module=Import&action=step1&import_module=Administration'
			),	
			"Import_Orion_PV"=>array(
				'Import',
				'Orion Import',
				'Import Orion AdvisorLynx Portfolio Values',
				'./index.php?module=Import&action=step1&import_module=av_Account_Histories&source=reserved_orion_import_pv'
			),
			"av_Account_Histories"=>array(
				'av_Account_Histories',
				'Record Account Status For All Clients',
				'Record Account History For Each Client\'s Account',
				'javascript:window.open("index.php?module=av_Account_Histories&action=create_account_history_record");void(0);'
			),
		),
		"reserved_professional"=>array(
			"av_Account_Types"=>array(
				'av_Account_Types',
				translate('av_Account_Types', 'LBL_MODULE_NAME'),
				'Manage Account Types',
				'./index.php?module=av_Account_Types&action=index'
			),
			"av_Prices"=>array(
				'av_Prices',
				translate('av_Prices', 'LBL_MODULE_NAME'),
				'Manage Prices',
				'./index.php?module=av_Prices&action=index'
			),
			"av_Activity_Types"=>array(
				'av_Activity_Types',
				translate('av_Activity_Types', 'LBL_MODULE_NAME'),
				'Manage Activity Types',
				'./index.php?module=av_Account_Types&action=index'
			),
			"av_Group_Types"=>array(
				'av_Group_Types',
				translate('av_Group_Types', 'LBL_MODULE_NAME'),
				'Manage Group Types',
				'./index.php?module=av_Group_Types&action=index'
			),
			"ContractTypes"=>array(
				'Contracts',
				translate('ContractTypes', 'LBL_MODULE_NAME'),
				'Contract types',
				'./index.php?module=ContractTypes&action=index'
			),
			"av_Client_Types"=>array(
				'av_Client_Types',
				translate('av_Client_Types', 'LBL_MODULE_NAME'),
				'Manage Client Types',
				'./index.php?module=av_Client_Types&action=index'
			),
			
			"av_Contact_Types"=>array(
				'av_Contact_Types',
				translate('av_Contact_Types', 'LBL_MODULE_NAME'),
				'Manage Contact Types',
				'./index.php?module=av_Contact_Types&action=index'
			),
			"av_Tax_Rates"=>array(
				'av_Tax_Rates',
				translate('av_Tax_Rates', 'LBL_MODULE_NAME'),
				'Manage Tax Rates',
				'./index.php?module=av_Tax_Rates&action=index'
			),
			"av_Tax_Forms"=>array(
				'av_Tax_Forms',
				translate('av_Tax_Forms', 'LBL_MODULE_NAME'),
				'Manage Tax Forms',
				'./index.php?module=av_Tax_Forms&action=index'
			),
			"av_Fee_Schedules"=>array(
				'av_Fee_Schedule',
				translate('av_Fee_Schedule', 'LBL_MODULE_NAME'),
				'Manage Fee Schedules',
				'./index.php?module=av_Fee_Schedules&action=index'
			),
			"av_Commission_Schedules"=>array(
				'av_Commission_Schedules',
				translate('av_Commission_Schedules', 'LBL_MODULE_NAME'),
				'Manage Commission Schedules',
				'./index.php?module=av_Commission_Schedules&action=index'
			),
			"Import"=>array(
				'Import',
				translate('Import', 'LBL_MODULE_NAME'),
				'Import Wizard',
				'./index.php?module=Import&action=step1&import_module=Administration'
			),
			"Import_Orion_PV"=>array(
				'Import',
				'Orion Import',
				'Import Orion AdvisorLynx Portfolio Values',
				'./index.php?module=Import&action=step1&import_module=av_Account_Histories&source=reserved_orion_import_pv'
			),
			"av_Custom_Fields"=>array(
				'av_Custom_Fields',
				translate('av_Custom_Fields', 'LBL_MODULE_NAME'),
				'Manage Custom Fields',
				'./index.php?module=av_Custom_Fields&action=index'
			),
			"SugarFeed"=>array(
				'icon_SugarFeed',
				translate('SugarFeed', 'LBL_MODULE_NAME'),
				'Manage Activity Stream',
				'./index.php?module=SugarFeed&action=AdminSettings'
			),
			"Configurator"=>array(
				'icon_AdminPDF',
				translate('Configurator', 'LBL_MODULE_NAME'),
				'PDF',
				'./index.php?module=Configurator&action=SugarpdfSettings'
			),
			"Users"=>array(
				'Users',
				translate('Users', 'LBL_MODULE_NAME'),
				'Users',
				'./index.php?module=Users&action=index'
			),	
			"Teams"=>array(
				'Teams',
				translate('Teams', 'LBL_MODULE_NAME'),
				'Teams',
				'./index.php?module=Teams&action=index'
			),
			"av_Account_Histories"=>array(
				'av_Account_Histories',
				'Create Account History Records',
				'Create Account History Records For All Clients',
				'javascript:window.open("index.php?module=av_Account_Histories&action=create_account_history_record");void(0);'
			),
		),
		"reserved_enterprise"=>array(
			"av_Account_Types"=>array(
				'av_Account_Types',
				translate('av_Account_Types', 'LBL_MODULE_NAME'),
				'Manage Account Types',
				'./index.php?module=av_Account_Types&action=index'
			),
			"av_Prices"=>array(
				'av_Prices',
				translate('av_Prices', 'LBL_MODULE_NAME'),
				'Manage Prices',
				'./index.php?module=av_Prices&action=index'
			),
			"av_Activity_Types"=>array(
				'av_Activity_Types',
				translate('av_Activity_Types', 'LBL_MODULE_NAME'),
				'Manage Activity Types',
				'./index.php?module=av_Account_Types&action=index'
			),
			"av_Group_Types"=>array(
				'av_Group_Types',
				translate('av_Group_Types', 'LBL_MODULE_NAME'),
				'Manage Group Types',
				'./index.php?module=av_Group_Types&action=index'
			),
			"contract_type_management"=>array(
				'Contracts',
				'LBL_MANAGE_CONTRACTEMPLATES_TITLE',
				'LBL_CONTRACT_TYPES',
				'./index.php?module=ContractTypes&action=index'
			),
			"av_Client_Types"=>array(
				'av_Client_Types',
				translate('av_Client_Types', 'LBL_MODULE_NAME'),
				'Manage Client Types',
				'./index.php?module=av_Client_Types&action=index'
			),
			"av_Contact_Types"=>array(
				'av_Contact_Types',
				translate('av_Contact_Types', 'LBL_MODULE_NAME'),
				'Manage Contact Types',
				'./index.php?module=av_Contact_Types&action=index'
			),
			"av_Tax_Rates"=>array(
				'av_Tax_Rates',
				translate('av_Tax_Rates', 'LBL_MODULE_NAME'),
				'Manage Tax Rates',
				'./index.php?module=av_Tax_Rates&action=index'
			),
			"av_Tax_Forms"=>array(
				'av_Tax_Forms',
				translate('av_Tax_Forms', 'LBL_MODULE_NAME'),
				'Manage Tax Forms',
				'./index.php?module=av_Tax_Forms&action=index'
			),
			"av_Fee_Schedules"=>array(
				'av_Fee_Schedule',
				translate('av_Fee_Schedule', 'LBL_MODULE_NAME'),
				'Manage Fee Schedules',
				'./index.php?module=av_Fee_Schedules&action=index'
			),
			"av_Commission_Schedules"=>array(
				'av_Commission_Schedules',
				translate('av_Commission_Schedules', 'LBL_MODULE_NAME'),
				'Manage Commission Schedules',
				'./index.php?module=av_Commission_Schedules&action=index'
			),
			"Import"=>array(
				'Import',
				translate('Import', 'LBL_MODULE_NAME'),
				'Import Wizard',
				'./index.php?module=Import&action=step1&import_module=Administration'
			),
			"Import_Orion_PV"=>array(
				'Import',
				'Orion Import',
				'Import Orion AdvisorLynx Portfolio Values',
				'./index.php?module=Import&action=step1&import_module=av_Account_Histories&source=reserved_orion_import_pv'
			),
			"av_Custom_Fields"=>array(
				'av_Custom_Fields',
				translate('av_Custom_Fields', 'LBL_MODULE_NAME'),
				'Manage Custom Fields',
				'./index.php?module=av_Custom_Fields&action=index'
			),
			"SugarFeed"=>array(
				'icon_SugarFeed',
				translate('SugarFeed', 'LBL_MODULE_NAME'),
				'Manage Activity Stream',
				'./index.php?module=SugarFeed&action=AdminSettings'
			),
			"Configurator"=>array(
				'icon_AdminPDF',
				translate('Configurator', 'LBL_MODULE_NAME'),
				'PDF',
				'./index.php?module=Configurator&action=SugarpdfSettings'
			),
			"Users"=>array(
				'Users',
				translate('Users', 'LBL_MODULE_NAME'),
				'Users',
				'./index.php?module=Users&action=index'
			),	
			"Teams"=>array(
				'Teams',
				translate('Teams', 'LBL_MODULE_NAME'),
				'Teams',
				'./index.php?module=Teams&action=index'
			),
			"ACLRoles"=>array(
				'ACLRoles',
				translate('ACLRoles', 'LBL_MODULE_NAME'),
				'Role Management',
				'./index.php?module=ACLRoles&action=index'
			),
			"dropdowneditor"=>array(
				'Dropdown',
				'LBL_DROPDOWN_EDITOR',
				'DESC_DROPDOWN_EDITOR',
				'./index.php?module=ModuleBuilder&action=index&type=dropdowns'
			),
			"mass_Email_config"=>array(
				'EmailMan',
				'LBL_MASS_EMAIL_CONFIG_TITLE',
				'LBL_MASS_EMAIL_CONFIG_DESC',
				'./index.php?module=EmailMan&action=config'
			),
			"mass_Email"=>array(
				'EmailMan',
				'LBL_MASS_EMAIL_MANAGER_TITLE',
				'LBL_MASS_EMAIL_MANAGER_DESC',
				'./index.php?module=EmailMan&action=index'
			),
			"mailboxes"=>array(
				'InboundEmail',
				'LBL_MANAGE_MAILBOX',
				'LBL_MAILBOX_DESC',
				'./index.php?module=InboundEmail&action=index'
			),
			"timeperiod_management"=>array(
				'TimePeriods',
				'LBL_MANAGE_TIMEPERIODS_TITLE',
				'LBL_MANAGE_TIMEPERIODS',
				'./index.php?module=TimePeriods&action=ListView'
			),
			"connector_settings"=>array(
				'icon_Connectors',
				'LBL_CONNECTOR_SETTINGS',
				'LBL_CONNECTOR_SETTINGS_DESC',
				'./index.php?module=Connectors&action=ConnectorSettings'
			),
			
			"product_types"=>array(
				'Product_Types',
				'LBL_PRODUCT_TYPES_TITLE',
				'LBL_PRODUCT_TYPES',
				'./index.php?module=ProductTypes&action=index'
			),
			"product_categories"=>array(
				'Product_Categories',
				'LBL_PRODUCT_CATEGORIES_TITLE',
				'LBL_PRODUCT_CATEGORIES',
				'./index.php?module=ProductCategories&action=index'
			),
			"av_Account_Histories"=>array(
				'av_Account_Histories',
				'Create Account History Records',
				'Create Account History Records For All Clients',
				'javascript:window.open("index.php?module=av_Account_Histories&action=create_account_history_record");void(0);'
			),
		),
) ;
$option_module_groups = array(
		"av_Account_Types"=>"Administration",
		"av_Activity_Types"=>"Administration",
		"av_Group_Types"=>"Administration",
		"av_Contact_Types"=>"Administration",
		"contract_type_management"=>"Administration",
		"av_Client_Types"=>"Administration",
		"ContractTypes"=>"Administration",
		"Import"=>"Administration",
		"Import_Orion_PV"=>"Administration",
		"av_Custom_Fields"=>"Administration",
		"SugarFeed"=>"Administration",
		"Configurator"=>"Administration",
		"Users"=>"Users",
		"Teams"=>"Users",
		"ACLRoles"=>"Users",
		"dropdowneditor"=>"Administration",
		"mass_Email_config"=>"Emails",
		"mass_Email"=>"Emails",
		"mailboxes"=>"Emails",
		"timeperiod_management"=>"Forecasts",
		"connector_settings"=>"Administration",
		"av_Prices"=>"Administration",
		"av_Tax_Rates"=>"Administration",
		"av_Tax_Forms"=>"Administration",
		"av_Fee_Schedules"=>"Administration",
		"av_Commission_Schedules"=>"Administration",
		"product_types"=>"Products",
		"product_categories"=>"Products"
);


	  
if(!isset($_REQUEST['show_all']) || empty($_REQUEST['show_all'])){
		$admin_option_defs = array();
	$admin_group_header = array();
	foreach($admin_role_options[$row['id']] as $key=>$options){
		$admin_option_defs [$option_module_groups[$key]][$key] = $options;
	}
	$admin_group_header[] = array('ProTracker Administration - '.$row['name'], '', false, $admin_option_defs, 'Change Dropdown Options, Item Types and other Settings');
	
	
}
else if(!empty($row['name']) && !empty($admin_role_options[$row['name']])){

//$admin_group_header[] = array('ProTracker Administration - '.$row['name'], '', false, $admin_option_defs, 'Change Dropdown Options, Item Types and other Settings');

/*	$admin_group_header = array();
	
	//Protracker Admin
	$admin_option_defs = array();
	$admin_option_defs['Administration']['av_Account_Types'] = array(
		'av_Account_Types',
		translate('av_Account_Types', 'LBL_MODULE_NAME'),
		'Manage Account Types',
		'./index.php?module=av_Account_Types&action=index'
	);
	
	$admin_option_defs['Administration']['av_Activity_Types'] = array(
		'av_Activity_Types',
		translate('av_Activity_Types', 'LBL_MODULE_NAME'),
		'Manage Activity Types',
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
	$admin_group_header[] = array('ProTracker Administration - '.$row['name'], '', false, $admin_option_defs, 'Change Dropdown Options, Item Types and other Settings');
*/}




?>