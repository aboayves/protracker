<?php
	global $db, $timedate;
	$sql = "SELECT av.id, av.name, av.modified_user_id, av.created_by, av.description, av.team_id,
					av.team_set_id, av.assigned_user_id, av.dependent_varchar, av.dependent_bool,
					av.dependent_dropdown, av.value, av.account_number, av.is_closed
		   FROM accounts a
		   RIGHT JOIN av_accounts av
		   ON(av.deleted=0 AND av.account_id=a.id)
		   WHERE a.deleted=0";
	$result = $db->query($sql);
	$account_histories_records = array();
	$now = $timedate->nowDB();
	$nowDate = $timedate->nowDbDate();
	while($row = $db->fetchByAssoc($result)){
		$record = array();
		$record = $row;
		$record['id'] = create_guid();
		$record['av_accounts_id'] = $row['id'];
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