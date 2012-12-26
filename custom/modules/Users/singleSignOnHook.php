<?php
include("restclient.php");
class singleSignOnHook {
	function delete_or_deactivate($bean){
		global $sugar_config, $db;
		$parameters = array( 
		'user_name' => $bean->user_name, 
		'site_url' => $sugar_config['site_url'],
		'instanceKey' => md5($sugar_config['instanceKey'])
		);
		$api = new RestClient();
		if($_REQUEST['action'] == 'delete' || $bean->status == 'Inactive'){
			$result = $api->delete($sugar_config['restServerURL']."/users/".$bean->user_name, $parameters);
			if($api->httpCode == '403'){
				SugarApplication::appendErrorMessage('Either the instance key or site URL is invalid');
				$sql="UPDATE users SET deleted=0 WHERE id='{$bean->id}'";
				$db->query($sql);
				SugarApplication::redirect("index.php?module=Users&action=DetailView&record={$bean->id}");
			}
		}
	}
	function create_or_activate($bean){
		global $sugar_config;
		$parameters = array( 
		'user_name' => $bean->user_name, 
		'site_url' => $sugar_config['site_url'],
		'instanceKey' => md5($sugar_config['instanceKey'])
		);
		$api = new RestClient();
		if(empty($bean->id) || ($bean->status!=$bean->fetched_row['status'] && $bean->status=='Active')){
			$response = $api->get($sugar_config['restServerURL']."/users/".$bean->user_name);
			if($api->httpCode == '200'){
				SugarApplication::appendErrorMessage('The user name already exists');
				$bean->deleted=1;
				SugarApplication::redirect("index.php?module=Users&action=EditView");
			}
			else if($api->httpCode == '404'){
				$result = $api->post($sugar_config['restServerURL']."/users", $parameters);
				if($api->httpCode == '403'){
					$_POST = $_REQUEST;
					unset($_POST['action']);
					unset($_POST['new_password']);
					unset($_POST['confirm_new_password']);
					foreach($_POST as $key=>$value){ 
						$fields_string .= $key.'='.$value.'&';
					}
						rtrim($fields_string,'&');
					SugarApplication::appendErrorMessage('Either the instance key or site URL is invalid');
					$bean->deleted=1;
					SugarApplication::redirect("index.php?module=Users&action=EditView&".$fields_string);
				}
			}
		}
	}
}
?>