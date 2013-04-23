<?php
	global $db;
	$sql="SELECT av_accounts.id 
		  FROM accounts 
		  RIGHT JOIN av_accounts
		  ON(av_accounts.deleted=0 AND av_accounts.accounts_id=accounts.id)
		  WHERE accounts.deleted=0";
	$result = $db->query($sql);
	while($row = $db->fetchByAssoc($result)){
		$av_accounts_bean = BeanFactory::getBean("av_Accounts", $row['id']);
		$key_fields = array_keys($av_accounts_bean->fetched_row);
		$key_fields_skip = array('id_c', );
		$exempt_fields = array("date_entered");
		foreach($exempt_fields as $exempt){
		  $exempt_pos = array_search($exempt, $key_fields);
		  unset($key_fields[$exempt_pos]);
		}
		$history = new av_Account_Histories();
		$record = array();
		foreach($key_fields as $key_field){
			if(isset($history->field_defs[$key_field])){
				$record[$key_field] = $av_accounts_bean->fetched_row[$key_field];
			}
		}
		$record['id'] = create_guid();
		$record['av_accounts_id'] = $av_accounts_bean->id;
		$keys = implode(',' , array_keys($record));
		$values = implode("','" , array_values($record));
		if(!empty($values)){
			$values = "'" . $values . "'";
		}
		$sql = "INSERT INTO av_account_histories (" . $keys . ") VALUES (" . $values . ")";
		$db->query($sql, true);
	}
?>