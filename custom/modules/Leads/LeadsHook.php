<?php
class LeadsHook{
	function createClientHistoryOnLeadConvert($bean, $event, $arguments){
		if(isset($_REQUEST['action']) && $_REQUEST['action'] == 'ConvertLead'){
			// Creating Tasks
			$this->createActivities($bean->id, $bean->account_id, 'tasks', 'parent_type', 'parent_id','Completed');
			//Creating Meetings
			$this->createActivities($bean->id, $bean->account_id, 'meetings', 'parent_type','parent_id', 'Held'); 
			//creating Calls
			$this->createActivities($bean->id, $bean->account_id, 'calls', 'parent_type', 'parent_id','Held'); 
			// creating Emails
			$this->createActivities($bean->id, $bean->account_id, 'emails_beans', 'bean_module', 'bean_id', '');
		}
	}
	
	//responsible to create different activity on demand......
	function createActivities($lead_id, $account_id, $activity, $parent_type, $parent_id, $status){
		global $db;
		$sql = "SELECT * FROM ".$activity." WHERE deleted=0 AND ".$parent_type."='Leads' AND 
				".$parent_id."='{$lead_id}'";
		$result = $db->query($sql);
		if($db->getRowCount($result) !=0){
			while($row = $db->fetchByAssoc($result)){
				$record = array();
				$record = $row;
				$record['id'] = create_guid();
				$record[$parent_type] = 'Accounts';
				$record[$parent_id] = $account_id;
				if($activity !='emails_beans'){
					$record['status'] = $status;
				}
				$account_histories[] = $record;
			}
			$keys = implode(',' , array_keys($account_histories[0]));
			$query = "INSERT INTO ".$activity." (" . $keys . ") VALUES";
			foreach($account_histories as $data){
				$values = implode("','" , array_values($data));
				if(!empty($values)){
					$values = "'" . $values . "'";
				}
				$query .= "(" . $values . "),";
			}
			$query = rtrim($query, ",");
			$db->query($query, true);
		}
	}
}
?>