<?php
include("restclient.php");
class singleSignOnHook {
	function delete_or_deactivate($bean){
		global $sugar_config;
		$parameters = array( 
		'user_name' => $bean->user_name, 
		'site_url' => $sugar_config['site_url'],
		'instanceKey' => $sugar_config['instanceKey']
		);
		$api = new RestClient();
		if($_REQUEST['action'] == 'delete' || $bean->status == 'Inactive'){
			$result = $api->delete($sugar_config['restServerURL']."/".$bean->user_name, $parameters);
		}
	}
	function create_or_activate($bean){
		global $sugar_config;
		$parameters = array( 
		'user_name' => $bean->user_name, 
		'site_url' => $sugar_config['site_url'],
		'instanceKey' => $sugar_config['instanceKey']
		);
		$api = new RestClient();
		if(empty($bean->id) || ($bean->status!=$bean->fetched_row['status'] && $bean->status=='Active')){
			$response = $api->get($sugar_config['restServerURL']."/".$bean->user_name);
			
			if($api->httpCode == '200'){
				SugarApplication::appendErrorMessage('The user name already exists');
				$bean->deleted=0;
			}
			else if($api->httpCode == '404'){
				$result = $api->post($sugar_config['restServerURL'], $parameters);
			}
		}
	}
}
?>