<?php
	global $db, $timedate;
	$sql="SELECT av_accounts.id 
		  FROM accounts 
		  RIGHT JOIN av_accounts
		  ON(av_accounts.deleted=0 AND av_accounts.accounts_id=accounts.id)
		  WHERE accounts.deleted=0";
	$result = $db->query($sql);
	$account_histories_records = array();
	$now = $timedate->nowDB();
	$nowDate = $timedate->nowDbDate();
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
		$record['date_entered'] = $now;
		$record['date_modified'] = $now;
		$record['value_date'] = $nowDate;
		$account_histories_records[] = $record;
	}
	$keys = implode(',' , array_keys($account_histories_records[0]));
	$query = "INSERT INTO av_account_histories (" . $keys . ") VALUES";
	foreach($account_histories_records as $data){
		$values = implode("','" , array_values($data));
		if(!empty($values)){
			$values = "'" . $values . "'";
		}
		$query .= "(" . $values . "),";
	}
	$query = rtrim($query, ",");
	if($db->query($query, true)){
		echo 'Account history records for all clients are updated.';
	}else{
		echo 'There is no records to update or there is something wrong.';
	}
	die();
?>