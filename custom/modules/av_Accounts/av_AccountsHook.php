<?php

class av_AccountsHook {
	function checkChange($bean, $event, $arguments) 
	{
		global $db;
		$key_fields = array_keys($bean->fetched_row);
		$key_fields_skip = array('id_c', );
		$exempt_fields = array("date_entered");
		foreach($exempt_fields as $exempt){
		  $exempt_pos = array_search($exempt, $key_fields);
		  unset($key_fields[$exempt_pos]);
		}
		$changed_fields = array();
		foreach($key_fields as $key_field){
			if(!in_array($key_field, $key_fields_skip) && isset($bean->$key_field) && $bean->$key_field != $bean->fetched_row[$key_field]){
			  array_push($changed_fields, 1);
			}
		} 
		if (array_sum($changed_fields) > 0) {
			$history = new av_Account_Histories();
			$record = array();
			foreach($key_fields as $key_field){
			if(isset($history->field_defs[$key_field])){
				$record[$key_field] = $bean->fetched_row[$key_field];
			}
			}
			$record['id'] = create_guid();
			$record['av_accounts_id'] = $bean->id;
			$keys = implode(',' , array_keys($record));
			$values = implode("','" , array_values($record));
			if(!empty($values)){
				$values = "'" . $values . "'";
			}
			$sql = "INSERT INTO av_account_histories (" . $keys . ") VALUES (" . $values . ")";
			$db->query($sql, true);
		}
	}
	function stampIt($bean, $event, $arguments)
	{
		global $db;
		// stamping the net worth history module
		$sql = "
			SELECT SUM(if(av_accounts.is_aum<>0,av_accounts.value,0)) AS managed_assets, SUM(av_accounts.value) AS current_net_worth
			FROM av_accounts
			WHERE 
				av_accounts.deleted=0 
				AND 
				av_accounts.accounts_id='{$bean->accounts_id}'
			GROUP BY av_accounts.accounts_id
		";
		$client_assets = $db->query($sql);
		$client_assets = $db->fetchByAssoc($client_assets);// current assets of the related client

		// check for duplicate networth history stamp
		$sql = "
			SELECT * 
			FROM av_net_worth
			WHERE
			av_net_worth.deleted = 0 AND av_net_worth.account_id = '{$bean->accounts_id}'
			ORDER BY date_entered DESC
			LIMIT 1
		";
		$net_worth_history = $db->query($sql);
		$net_worth_history = $db->fetchByAssoc($net_worth_history);
		// if its not a duplicate
		if($net_worth_history['managed_assets'] != $client_assets['managed_assets'] || $net_worth_history['grand_total'] != $client_assets['current_net_worth'])
		{   
			$id=create_guid();
			$sql = "INSERT INTO av_net_worth (id, name, grand_total, managed_assets, net_worth_date, account_id)
					VALUES('{$id}', 'Net Worth History', '{$client_assets['current_net_worth']}', 
						  '{$client_assets['managed_assets']}', '{$bean->date_modified}', '{$bean->accounts_id}')";
			$db->query($sql, true);
		}
	}
	function processRecord($bean, $event, $arguments)
	{
		if(empty($bean->name))$bean->name='&lt;NONAME&gt;';
	}
}

?>
