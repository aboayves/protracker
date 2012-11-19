<?php
	require_once('modules/Configurator/Configurator.php'); 
	include("restclient.php");
	global $sugar_config, $db;
	$instance_key=create_guid();
	$parameters = array( 
						'site_url' => $sugar_config['site_url'],
						'instanceKey' => md5($instance_key)
						);
	$api = new RestClient();
	$result = $api->post($_REQUEST['rest_url']."/sugars", $parameters);
	if($api->httpCode == '201')
	{
		$configurator = new Configurator(); 
	    $configurator->config['instanceKey'] = $instance_key;
	    $configurator->config['restServerURL'] = $_REQUEST['rest_url']; 	   
		$configurator->handleOverride();
		$bean = BeanFactory::getBean("Users", '1');
		$parameters = array( 
							'user_name' => $bean->email1,
							'site_url' => $sugar_config['site_url'],
							'instanceKey' => md5($sugar_config['instanceKey'])
							);
		$result = $api->post($sugar_config['restServerURL']."/users", $parameters);
		if($api->httpCode == '201')
		{
			$sql="UPDATE users SET user_name='{$bean->email1}' WHERE id='{$bean->id}'";
			$db->query($sql, true);
			SugarApplication::appendErrorMessage('You are successfully registered in Unified Login');
			SugarApplication::appendErrorMessage('Your username has been updated to your email i.e.'.$bean->email1);
			SugarApplication::redirect("index.php?module=Administration&action=index");
		}
		elseif($api->httpCode == '409')
		{
			SugarApplication::appendErrorMessage('Error:Already registered in Unified Login');
			SugarApplication::redirect("index.php?module=Administration&action=index");
		}
		else
		{
			SugarApplication::appendErrorMessage('Error:Could not registered in Unified Login');
			SugarApplication::redirect("index.php?module=Administration&action=index");
		}
	}
	else 
	{
		SugarApplication::appendErrorMessage('Error:Unable to write in Config');
		SugarApplication::redirect("index.php?module=Administration&action=index");
	}
	
?>