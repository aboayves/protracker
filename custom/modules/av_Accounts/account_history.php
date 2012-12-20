<?php

class checkChangeClass {
	function checkChange($bean, $event, $arguments) {
		$logHistory = true;
		
		if(is_array($bean->fetched_row) && !empty($bean->fetched_row)){
			$key_fields = array_keys($bean->fetched_row);
			$key_fields_skip = array('id_c', );
			$exempt_fields = array("date_entered");
			
			foreach($exempt_fields as $exempt){
				$exempt_pos = array_search($exempt, $key_fields);
				unset($key_fields[$exempt_pos]);
			}
			
			foreach($key_fields as $key_field){
				if(!in_array($key_field, $key_fields_skip) && $bean->$key_field != $bean->fetched_row[$key_field]){
					$logHistory = true;
					break;
				}
				$logHistory = false;
			}
		}
		
		if ($logHistory) {
			require_once("modules/av_Account_Histories/av_Account_Histories.php");
			
			$history = new av_Account_Histories();
			
			$allowedFields = $history->toArray();
			foreach($bean->toArray() as $key => $value){
				if(isset($allowedFields[$key])){
					$history->$key = $value;
				}
			}
			
			$history->id = create_guid();
			
			$history->load_relationship('av_accounts_av_account_histories');
			$history->av_accounts_av_account_histories->add($bean->id);
			$history->db->insert($history);
			
			$history->save(FALSE);
			
			$GLOBALS['log']->info("History save called");
		}
	}
	
	function stampIt($bean, $event, $arguments){
		global $db;
		// stamping the net worth history module
		$account_id = $bean->accounts_id;
		$sql = "SELECT SUM(if(av_accounts_cstm.managed_c='Yes',av_accounts.value,0)) AS managed_assets, SUM(av_accounts.value) AS current_net_worth
				FROM av_accounts
				RIGHT JOIN av_accounts_cstm
				ON
				(
					av_accounts_cstm.id_c = av_accounts.id
				)
				WHERE 
					av_accounts.deleted=0 
					AND 
					av_accounts.accounts_id='{$account_id}'
				GROUP BY av_accounts.accounts_id";
		$client_assets = $db->query($sql);
		$client_assets = $db->fetchByAssoc($client_assets);// current assets of the related client
		
		//	print "<pre>";
		//	print_r($client_assets['current_net_worth']);
		//	echo "<hr>";
		//	print_r($client_assets['managed_assets']);
		//	die();
		
		// check for duplicate networth history stamp
		$sql = "SELECT * 
				FROM av_net_worth
				WHERE
					av_net_worth.deleted = 0 AND av_net_worth.accounts_id = '{$account_id}'
				ORDER BY date_entered DESC
				LIMIT 1";
		$net_worth_history = $db->query($sql);
		$net_worth_history = $db->fetchByAssoc($net_worth_history);
		// if its not a duplicate
		if($net_worth_history['managed_assets'] != $client_assets['managed_assets'] || $net_worth_history['grand_total'] != $client_assets['current_net_worth']){
			$networth_bean = new av_Net_Worth;
			$networth_bean->name = 'Net Worth History';
			$networth_bean->grand_total = $client_assets['current_net_worth'];
			$networth_bean->managed_assets = $client_assets['managed_assets'];
			$networth_bean->accounts_av_net_worthaccounts_ida = $account_id;
			$networth_bean->save();
		}
	}
}

?>
