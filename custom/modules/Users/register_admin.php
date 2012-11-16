<?php
	require_once('modules/Configurator/Configurator.php'); 
	include("restclient.php");
	global $sugar_config;
	 
	$parameters = array( 
			'site_url' => $sugar_config['site_url'],
			'instanceKey' => $sugar_config['instanceKey']
			);
	$api = new RestClient();
	$result = $api->post($sugar_config['restServerURL']."/sugars", $parameters);
	if($api->httpCode == '201') {
		$configurator = new Configurator(); 
		if (!isset($configurator->config['instanceKey'])) 
		   $configurator->config['instanceKey'] = '9999';
		if (!isset($configurator->config['restServerURL'])) 
		   $configurator->config['restServerURL'] = $_REQUEST['rest_url']; 	   
		$configurator->handleOverride();
		$bean = BeanFactory::getBean("Users", '1');
		$parameters = array( 
				'user_name' => $bean->user_name,
				'site_url' => $sugar_config['site_url'],
				'instanceKey' => $sugar_config['instanceKey']
				);
		$result = $api->post($sugar_config['restServerURL']."/users", $parameters);
		if($api->httpCode == '201'){
			SugarApplication::appendErrorMessage('You are successfully registered in Unified Login');
			SugarApplication::redirect("index.php?module=Administration&action=index");
		}
		elseif($api->httpCode == '409'){
			SugarApplication::appendErrorMessage('Error:Already registered in Unified Login');
			SugarApplication::redirect("index.php?module=Administration&action=index");
		}
	}
	else {
		SugarApplication::appendErrorMessage('Error:Unable to write in Config');
		SugarApplication::redirect("index.php?module=Administration&action=index");
	}
	
?>