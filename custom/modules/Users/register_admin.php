<?php
	require_once('modules/Configurator/Configurator.php'); 
	include("restclient.php");
	global $sugar_config, $db;

	$api = new RestClient();
	if(isset($_REQUEST['rest_url']) && !empty($_REQUEST['rest_url'])){
		if(!(is_writable('config_override.php'))){
			SugarApplication::appendErrorMessage('Error:Unable to write config file');
			SugarApplication::redirect("index.php?module=Administration&action=index");
		}
		else{
			$instance_key=create_guid();
			$sql = "SELECT value FROM config WHERE name='name' AND category='system'";
			$result = $db->query($sql);
			$row = $db->fetchByAssoc($result);
			$sql = "SELECT value FROM config WHERE name='subref' AND category='subref'";
			$result = $db->query($sql);
			$row1 = $db->fetchByAssoc($result);
			$parameters = array( 
					'site_url' => $sugar_config['site_url'],
					'instanceKey' => md5($instance_key),
					'company' => $row['value'],
					'subref' => $row1['value']
					);
			$result = $api->post($_REQUEST['rest_url']."/sugars", $parameters);
			if($api->httpCode == '201'){
				$configurator = new Configurator(); 
				$configurator->config['instanceKey'] = $instance_key;
				$configurator->config['restServerURL'] = $_REQUEST['rest_url']; 	   
				$configurator->handleOverride();
				$bean = BeanFactory::getBean("Users", '1');
				$parameters = array( 
									'user_name' => $bean->email1,
									'site_url' => $sugar_config['site_url'],
									'is_admin' => $bean->is_admin,
									'is_mobile_admin' => $bean->is_mobile_user,
									'product_level' => $bean->product_level,
									'instanceKey' => md5($sugar_config['instanceKey']),
									);
				$result = $api->post($sugar_config['restServerURL']."/users", $parameters);
				if($api->httpCode == '201'){
					$sql="UPDATE users SET user_name='{$bean->email1}' WHERE id='{$bean->id}'";
					$db->query($sql, true);
					SugarApplication::appendErrorMessage('Sugar has been registered Successfully');
					SugarApplication::appendErrorMessage('Username has been updated to email i.e.'.$bean->email1);
					SugarApplication::redirect("index.php?module=Administration&action=index");
				}
				elseif($api->httpCode == '409'){
					SugarApplication::appendErrorMessage('Error:User is already registered in Unified Login');
					SugarApplication::redirect("index.php?module=Administration&action=index");
				}
				else{
					SugarApplication::appendErrorMessage('Error:Could not registered in Unified Login');
					SugarApplication::redirect("index.php?module=Administration&action=index");
				}
			}
			else if($api->httpCode == '404'){
				SugarApplication::appendErrorMessage('Error:Invalid server URL or server is not responding.');
				SugarApplication::redirect("index.php?module=Administration&action=index");
			}
			else if($api->httpCode == '409'){
				SugarApplication::appendErrorMessage('Error:Unable to register Key in the server');
				SugarApplication::redirect("index.php?module=Administration&action=index");
			}
		}
	}else{
		SugarApplication::appendErrorMessage('Error:Server URL could not be empty');
		SugarApplication::redirect("index.php?module=Administration&action=index");
	}
?>