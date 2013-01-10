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
				$customSet = "";
				$redirect = "";
				if($_REQUEST['action'] == 'delete'){
					$customSet = " status='Active', deleted=0 ";
					$redirect = "index.php?module=Users&action=DetailView&record={$bean->id}";
				}else if($_REQUEST['action'] != 'delete' && $bean->status == 'Inactive'){
					$customSet = " status='Active' ";
						unset($_REQUEST['action']);
						unset($_REQUEST['new_password']);
						unset($_REQUEST['confirm_new_password']);
						foreach($_REQUEST as $key=>$value){ 
							$fields_string .= $key.'='.$value.'&';
						}
						rtrim($fields_string,'&');
					$redirect = "index.php?module=Users&action=EditView&".$fields_string;
				}
				SugarApplication::appendErrorMessage('Unable to complete requested action. Either the instance key or site URL is invalid.');
				$sql="UPDATE users SET".$customSet."WHERE id='{$bean->id}'";
				$db->query($sql);
				SugarApplication::redirect($redirect);
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
		if(!empty($bean->user_name) && !empty($bean->fetched_row['user_name']) && $bean->user_name != $bean->fetched_row['user_name']){
			$parameters = array( 
				'previous_user_name' =>$bean->fetched_row['user_name'],
				'user_name' => $bean->user_name,
				'site_url' => $sugar_config['site_url'],
				'instanceKey' => md5($sugar_config['instanceKey'])
			);
			$api->post($sugar_config['restServerURL']."/users", $parameters);
			if($api->httpCode == '403'){
				SugarApplication::appendErrorMessage('Unable to complete requested action. Either the instance key or site URL is invalid.');
				SugarApplication::redirect("index.php?module=Users&action=EditView&record={$bean->id}");
			}
		}
		if(empty($bean->id) || ($bean->status!=$bean->fetched_row['status'] && $bean->status=='Active')){
			$response = $api->get($sugar_config['restServerURL']."/users/".$bean->user_name);
			unset($_REQUEST['action']);
			unset($_REQUEST['new_password']);
			unset($_REQUEST['confirm_new_password']);
			foreach($_REQUEST as $key=>$value){ 
				$fields_string .= $key.'='.$value.'&';
			}
			rtrim($fields_string,'&');
			if($api->httpCode == '200'){
				SugarApplication::appendErrorMessage('Unable to complete requested action. The user name already exists.');
				$bean->deleted=1;
				SugarApplication::redirect("index.php?module=Users&action=EditView&".$fields_string);
			}
			else if($api->httpCode == '404'){
				$result = $api->post($sugar_config['restServerURL']."/users", $parameters);
				if($api->httpCode == '403'){
					SugarApplication::appendErrorMessage('Unable to complete requested action. Either the instance key or site URL is invalid.');
					$bean->deleted=1;
					SugarApplication::redirect("index.php?module=Users&action=EditView&".$fields_string);
				}
			}
		}
	}
}
?>