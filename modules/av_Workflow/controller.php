<?php
require_once('include/MVC/Controller/SugarController.php');
require_once('modules/av_Workflow/TreeData.php');

class av_WorkflowController extends SugarController {
		
	function setTaskTemplateIds($tasks_templates, &$ids){
		$task_template_checked_ids = isset($_REQUEST['template_ids']) ? trim($_REQUEST['template_ids'],', ') : "";
		if($task_template_checked_ids == ""){
			$task_template_checked_ids = array();
		}else{
			$task_template_checked_ids = explode(', ', $task_template_checked_ids);
		}
		
		foreach($tasks_templates as $tasks_template){
			if(empty($task_template_checked_ids) || in_array($tasks_template['id'], $task_template_checked_ids)) {
				$ids[] = $tasks_template['id'];
				
				//Calling recursively for childrens
				if(isset($tasks_template['children']) && !empty($tasks_template['children'])){
					$this->setTaskTemplateIds($tasks_template['children'], $ids);
				}
			}
		}
	}
	
	function setTaskDates($tasks_templates, &$dates, &$daysOut, $reversed, $startStamp, $dayKeyword, $top = false){
		global $timedate;
		
		$minStamp = $startStamp;
		
		foreach($tasks_templates as $tasks_template){
			if(!isset($daysOut[$tasks_template['id']]) || empty($daysOut[$tasks_template['id']])){
				$daysOut[$tasks_template['id']] = 0;
			}
			
			$tmpStamp = $startStamp;
			
			if(!$reversed){
				if(!$top){
					$tmpStamp = strtotime("+" . $daysOut[$tasks_template['id']] . " " . $dayKeyword, $tmpStamp);
				}
			}
			
			//Calling recursively for childrens
			if(isset($tasks_template['children']) && !empty($tasks_template['children'])){
				$tmpStampRev = $this->setTaskDates($tasks_template['children'], $dates, $daysOut, $reversed, $tmpStamp, $dayKeyword);
				
				if($reversed){
					$tmpStamp = strtotime("-" . $daysOut[$tasks_template['id']] . " " . $dayKeyword, $tmpStampRev);
				}
			}
			
			//if start date is less then today
			if($tmpStamp < strtotime("now")){
				$tmpStamp = strtotime("now");
			}
			
			$time = $timedate->split_date_time($timedate->now());
			$time = $time[1];
			
			$dates[$tasks_template['id']] = date($timedate->get_date_format(), $tmpStamp) . " " . $time;
			
			//To send minimum timestamp to parent
			if($tmpStamp < $minStamp){
				$minStamp = $tmpStamp;
			}
		}
			
		return $minStamp;
	}
	
	function action_assign(){
		global $db, $current_user, $timedate;
		
		if(empty($_REQUEST['record']) && isset($_REQUEST['workflow_id']) && !empty($_REQUEST['workflow_id'])){
			$this->bean->id = $_REQUEST['record'] = $_REQUEST['workflow_id'];
			$this->bean->name = $_REQUEST['workflow'];
		}else{
			$this->bean->workflow_id = $this->bean->id;
			$this->bean->workflow = $this->bean->name;
		}
			
		if(isset($_REQUEST['parent_id']) && !empty($_REQUEST['parent_id'])){
			$ids = array();
			$dates = array();
			$daysOut = array();
			$array_new_ids = array();
			$members_new_ids = array();
			
			//=========================== flags to load additional assign info ==========================
			$clientRec = false;
			$coClientRec = false;
			$assignedToRec = false;
			
			//=============================== Geting task templates =====================================
			
			$tasks_templates = array();
			
			if(!empty($this->bean->id)){
				$tasks_templates = TreeData::getData($this->bean->id);
			}
		
			if(isset($tasks_templates['children']) && !empty($tasks_templates['children'])){
				$this->setTaskTemplateIds($tasks_templates['children'], $ids);
			}
			
			$sql = "SELECT ".
						"id, name, date_entered, date_modified, assign_to, relate_to, ".
						"modified_user_id, created_by, description, ".
						"team_id, team_set_id, assigned_user_id, task_category as 'category', ".
						"private, notify_child_completion, on_task_list, client_task, parent_tasks_id, days_out ".
					"FROM ".
						"av_task_template ".
					"WHERE ".
						"id IN ('" . implode("','", $ids) . "')";
					
			$result = $db->query($sql);
			while($row = $db->fetchByAssoc($result)){
				if(!isset($array_new_ids[$row['id']])){
					$array_new_ids[$row['id']] = create_guid();
				}
				
				if(!isset($daysOut[$row['id']])){
					$daysOut[$row['id']] = intval($row['days_out']);
				}
				
				$taskTemplateRecords[] = $row;
				
				//=========================== Setting flags to load additional info =====================
				if($row['relate_to'] == "Client") $clientRec = true;
				if($row['relate_to'] == "Co_client") $coClientRec = true;
				if($row['assign_to'] == "Assigned_User") $assignedToRec = true;
			}
			
			//=============================== Selecting assigned user of related_to selected ============
			$pri_cont_assigned_type = $_REQUEST['parent_type'];
			$pri_cont_assigned_id = $_REQUEST['parent_id'];
			$pri_cont_assigned_user = $current_user->id;
			
			if($_REQUEST['parent_type'] == "Accounts" && $clientRec){
				$sql = "SELECT contacts.id, contacts.assigned_user_id FROM contacts ".
						"INNER JOIN accounts_contacts_1_c ON contacts.id = accounts_contacts_1_c.accounts_contacts_1contacts_idb AND accounts_contacts_1_c.deleted = '0' AND accounts_contacts_1_c.accounts_contacts_1accounts_ida = '" . $_REQUEST['parent_id'] . "' ".
						"WHERE contacts.contact_priority = 'Primary' AND contacts.deleted='0'";
				$result = $db->query($sql);
				if($row = $db->fetchByAssoc($result)){
					$pri_cont_assigned_type = 'Contacts';
					$pri_cont_assigned_id = $row['id'];
					$pri_cont_assigned_user = $row['assigned_user_id'];
				}
			}
			
			$sec_cont_assigned_type = $_REQUEST['parent_type'];
			$sec_cont_assigned_id = $_REQUEST['parent_id'];
			$sec_cont_assigned_user = $current_user->id;
			
			if($_REQUEST['parent_type'] == "Accounts" && $coClientRec){
				$sql = "SELECT contacts.id, contacts.assigned_user_id FROM contacts ".
						"INNER JOIN accounts_contacts_1_c ON contacts.id = accounts_contacts_1_c.accounts_contacts_1contacts_idb AND accounts_contacts_1_c.deleted = '0' AND accounts_contacts_1_c.accounts_contacts_1accounts_ida = '" . $_REQUEST['parent_id'] . "' ".
						"WHERE contacts.contact_priority = 'Secondary' AND contacts.deleted='0'";
				$result = $db->query($sql);
				if($row = $db->fetchByAssoc($result)){
					$sec_cont_assigned_type = 'Contacts';
					$sec_cont_assigned_id = $row['id'];
					$sec_cont_assigned_user = $row['assigned_user_id'];
				}
			}
			//=============================== Selecting assigned user of related_to selected ============
			$parent_assigned_user = $current_user->id;
			
			if($assignedToRec){
				$sql = "SELECT assigned_user_id FROM " . strtolower($_REQUEST['parent_type']) . " WHERE id='" . $_REQUEST['parent_id'] . "'";
				$result = $db->query($sql);
				if($row = $db->fetchByAssoc($result)){
					$parent_assigned_user = $row['assigned_user_id'];
				}
			}
			
			//=============================== Getting start dates =======================================
			if(isset($tasks_templates['children']) && !empty($tasks_templates['children'])){
				$reversed = (isset($_REQUEST['workflow_counts_down_to_target_date']) && !empty($_REQUEST['workflow_counts_down_to_target_date']));
				$dayKeyword = (isset($_REQUEST['skip_weekends_holidays']) && !empty($_REQUEST['skip_weekends_holidays'])) ? "weekdays" : "days";
				
				//Handling date_start
				if(!isset($_REQUEST['start_date']) || empty($_REQUEST['start_date'])){
					$_REQUEST['start_date'] = $timedate->nowDate();
				}
				
				$startStamp = strtotime($timedate->to_db_date($_REQUEST['start_date'], false));
				
				//=========================== if start date is less then today ==========================
				if($startStamp < strtotime("now")){
					$startStamp = strtotime("now");
				}
				
				$this->setTaskDates($tasks_templates['children'], $dates, $daysOut, $reversed, $startStamp, $dayKeyword, true);
			}
			
			//=============================== Creating records ==========================================
			foreach($taskTemplateRecords as $record){
				if(empty($record['parent_tasks_id'])){
					$record['status'] = 'Not Started';
				}else{
					$record['status'] = 'Pending';
				}
								
				//=========================== Making SQL statement =======================================
				$record['parent_type'] = $_REQUEST['parent_type'];
				$record['parent_id'] = $_REQUEST['parent_id'];
				if(isset($record['days_out'])){
					unset($record['days_out']);
				}
				
				//=========================== Attaching to project from request ==========================
				if(isset($_REQUEST['add_to_project_id']) && !empty($_REQUEST['add_to_project_id'])){
					$record['project_id'] = $_REQUEST['add_to_project_id'];
				}
				
				//=========================== Adding calculated start date ===============================
				if(isset($dates[$record['id']]) && !empty($dates[$record['id']])){
					$record['date_due'] = $timedate->to_db($dates[$record['id']]);
				}
				
				//=========================== Assigning Parent record ====================================
				switch($record['relate_to']){
					case "Client":
						$record['parent_type'] = $pri_cont_assigned_type;
						$record['parent_id'] = $pri_cont_assigned_id;
					break;
					case "Co_client":
						$record['parent_type'] = $sec_cont_assigned_type;
						$record['parent_id'] = $sec_cont_assigned_id;
					break;
					
					case "Related_To":
					default:
						$record['parent_type'] = $_REQUEST['parent_type'];
						$record['parent_id'] = $_REQUEST['parent_id'];
	
					break;
				}
				
				//=========================== Assigning user =============================================
				switch($record['assign_to']){
					case "Assigned_User":
						$record['assigned_user_id'] = $parent_assigned_user;
						
						if($_REQUEST['parent_type'] == "Accounts"){
							if($record['relate_to'] == "Client"){
								$record['assigned_user_id'] = $pri_cont_assigned_user;
							}else if($record['relate_to'] == "Co_client"){
								$record['assigned_user_id'] = $sec_cont_assigned_user;
							}
						}
					break;
					
					case "Project_Manager":
						$record['assigned_user_id'] = $_REQUEST['project_manager_id'];
					break;
					
					case "Specific_User":
						$record['assigned_user_id'] = $record['assigned_user_id'];
					break;
					
					case "User_1":
						$record['assigned_user_id'] = $_REQUEST['user_1_id'];
					break;
					
					case "User_2":
						$record['assigned_user_id'] = $_REQUEST['user_2_id'];
					break;
					
					case "User_3":
						$record['assigned_user_id'] = $_REQUEST['user_3_id'];
					break;
					
					case "Current_User":
					default:
						$record['assigned_user_id'] = $current_user->id;
					break;
				}
				
				if(empty($record['assigned_user_id'])){
					$record['assigned_user_id'] = $current_user->id;
				}
				
				unset($record['assign_to']);
				unset($record['relate_to']);
				
				//==================Adjusting ids according to new UUIDs ===================================
				$record['id'] = $array_new_ids[$record['id']];
				if(!empty($record['parent_tasks_id'])){
					$record['parent_tasks_id'] = $array_new_ids[$record['parent_tasks_id']];
				}
				
				if($_REQUEST['assign_to_members'] == '1' && $record['parent_type'] == "av_Groups"){
					//Assigning to members
					$this->assignToMembers($record, $members_new_ids, $array_new_ids);
				}else{
					//Assigning to record
					$keys = implode(',' , array_keys($record));
					$values = implode("','" , array_values($record));
					if(!empty($values)){
						$values = "'" . $values . "'";
					}
					
					$query = "INSERT INTO tasks (" . $keys . ") VALUES (" . $values . ")";
					$db->query($query, true);
				}
			}
			SugarApplication::redirect('index.php?module=av_Workflow&action=DetailView&record='.$this->bean->id);
		}
		
		$this->view = "assign";
	}
	
	function assignToMembers($tempData, &$newIds, &$ids){
		global $db;
		
		$SQL = "SELECT rt.parent_id, rt.parent_type FROM av_group_membership AS rt WHERE rt.deleted=0 AND rt.av_groups_id='{$tempData['parent_id']}' AND rt.include=1";
		$res = $db->query($SQL);
		while ($row = $db->fetchByAssoc($res)){
			$taskData = $tempData;
			
			if(!isset($newIds[$row['parent_id']])){
				$newIds[$row['parent_id']] = array();
				
				foreach($ids as $id){
					$newIds[$row['parent_id']][$id] = create_guid();
				}
			}
			
			$taskData['id'] = $newIds[$row['parent_id']][$taskData['id']];
			if(!empty($taskData['parent_tasks_id'])){
				$taskData['parent_tasks_id'] = $newIds[$row['parent_id']][$taskData['parent_tasks_id']];
			}
		
			$taskData['parent_type'] = $row['parent_type'];
			$taskData['parent_id'] = $row['parent_id'];
			
			$keys = implode(',' , array_keys($taskData));
			$values = implode("','" , array_values($taskData));
			if(!empty($values)){
				$values = "'" . $values . "'";
			}
			
			$query = "INSERT INTO tasks (" . $keys . ") VALUES (" . $values . ")";
			$db->query($query, true);
	   }
	}
	
	function action_gettreedata(){
		echo json_encode(TreeData::getData($this->bean->id, $this->bean->name));
		exit();
	}
	
	function action_getwftreedata(){
		global $current_user, $db;
		
		if(empty($_REQUEST['record']) && isset($_REQUEST['workflow_id']) && !empty($_REQUEST['workflow_id'])){
			$this->bean->id = $_REQUEST['record'] = $_REQUEST['workflow_id'];
			$this->bean->name = $_REQUEST['workflow'];
		}
		
		$pri_cont_assigned_user = "";
		$sec_cont_assigned_user = "";
		$parent_assigned_user = "";
		
		if(isset($_REQUEST['parent_type']) && !empty($_REQUEST['parent_type']) && isset($_REQUEST['parent_id']) && !empty($_REQUEST['parent_id'])){
			if($_REQUEST['parent_type'] == "Accounts"){
				$sql = "SELECT users.first_name, users.last_name FROM contacts ".
						"LEFT JOIN users ON contacts.assigned_user_id=users.id AND users.deleted='0' ".
						"INNER JOIN accounts_contacts_1_c ON contacts.id = accounts_contacts_1_c.accounts_contacts_1contacts_idb AND accounts_contacts_1_c.deleted = '0' AND accounts_contacts_1_c.accounts_contacts_1accounts_ida = '" . $_REQUEST['parent_id'] . "' ".
						"WHERE contacts.contact_priority = 'Primary' AND contacts.deleted='0'";
				$result = $db->query($sql);
				if($row = $db->fetchByAssoc($result)){
					$pri_cont_assigned_user = trim($row['first_name'] . " " . $row['last_name']);
				}
				
				$sql = "SELECT users.first_name, users.last_name FROM contacts ".
						"LEFT JOIN users ON contacts.assigned_user_id=users.id AND users.deleted='0' ".
						"INNER JOIN accounts_contacts_1_c ON contacts.id = accounts_contacts_1_c.accounts_contacts_1contacts_idb AND accounts_contacts_1_c.deleted = '0' AND accounts_contacts_1_c.accounts_contacts_1accounts_ida = '" . $_REQUEST['parent_id'] . "' ".
						"WHERE contacts.contact_priority = 'Secondary' AND contacts.deleted='0'";
				$result = $db->query($sql);
				if($row = $db->fetchByAssoc($result)){
					$sec_cont_assigned_user = trim($row['first_name'] . " " . $row['last_name']);
				}
			}
			
		
			$sql = "SELECT users.first_name, users.last_name FROM " . strtolower($_REQUEST['parent_type']) . 
				   " LEFT JOIN users ON " . strtolower($_REQUEST['parent_type']) .".assigned_user_id=users.id AND users.deleted='0'".
				   " WHERE " . strtolower($_REQUEST['parent_type']) .".id='" . $_REQUEST['parent_id'] . "'";
			$result = $db->query($sql);
			if($row = $db->fetchByAssoc($result)){
				$parent_assigned_user = trim($row['first_name'] . " " . $row['last_name']);
			}
		}
				
		$users = array(
			'parent_assigned_user' => !empty($parent_assigned_user)? $parent_assigned_user : $current_user->name,
			'pri_cont_assigned_user' => !empty($pri_cont_assigned_user)? $pri_cont_assigned_user : $current_user->name,
			'sec_cont_assigned_user' => !empty($sec_cont_assigned_user)? $sec_cont_assigned_user : $current_user->name,
			'project_manager' => (isset($_REQUEST['project_manager']) && !empty($_REQUEST['project_manager'])) ? $_REQUEST['project_manager']: $current_user->name,
			'user_1' => (isset($_REQUEST['user_1']) && !empty($_REQUEST['user_1'])) ? $_REQUEST['user_1']: $current_user->name,
			'user_2' => (isset($_REQUEST['user_2']) && !empty($_REQUEST['user_2'])) ? $_REQUEST['user_2']: $current_user->name,
			'user_3' => (isset($_REQUEST['user_3']) && !empty($_REQUEST['user_3'])) ? $_REQUEST['user_3']: $current_user->name
		);
		
		$treeData = array();
		
		if(!empty($this->bean->id)){
			$treeData = TreeData::getData($this->bean->id, $this->bean->name, $users);
		}
		//Unset from Request IDs
		$allowedIds = isset($_REQUEST['template_ids']) ? trim($_REQUEST['template_ids'],', ') : "";
		if($allowedIds == ""){
			$allowedIds = array();
		}else{
			$allowedIds = explode(', ', $allowedIds);
		}
		
		if(isset($treeData['children']) && !empty($treeData['children'])){
			//------------------------- Handling dates --------------------------------------------
			global $timedate;
			
			$ids = array();
			$dates = array();
			$daysOut = array();
			
			if(isset($treeData['children']) && !empty($treeData['children'])){
				$this->setTaskTemplateIds($treeData['children'], $ids);
			}
			
			$sql = "SELECT ".
						"id, name, date_entered, date_modified, assign_to, relate_to, ".
						"modified_user_id, created_by, description, ".
						"team_id, team_set_id, assigned_user_id, task_category as 'category', ".
						"private, notify_child_completion, on_task_list, client_task, parent_tasks_id, days_out ".
					"FROM ".
						"av_task_template ".
					"WHERE ".
						"id IN ('" . implode("','", $ids) . "')";
					
			$result = $db->query($sql);
			while($row = $db->fetchByAssoc($result)){
				if(!isset($daysOut[$row['id']])){
					$daysOut[$row['id']] = intval($row['days_out']);
				}
			}
			
			if(!isset($_REQUEST['start_date']) || empty($_REQUEST['start_date'])){
				$_REQUEST['start_date'] = $timedate->nowDate();
			}
				
			$startStamp = strtotime($timedate->to_db_date($_REQUEST['start_date'], false));
			
			//=========================== if start date is less then today ==========================
			if($startStamp < strtotime("now")){
				$startStamp = strtotime("now");
			}
			
			$reversed = (isset($_REQUEST['workflow_counts_down_to_target_date']) && !empty($_REQUEST['workflow_counts_down_to_target_date']));
			$dayKeyword = (isset($_REQUEST['skip_weekends_holidays']) && !empty($_REQUEST['skip_weekends_holidays'])) ? "weekdays" : "days";
			
			$this->setTaskDates($treeData['children'], $dates, $daysOut, $reversed, $startStamp, $dayKeyword, true);
			$this->filterTasks($treeData['children'], $allowedIds, $dates);
		}
		
		echo json_encode($treeData);
		exit();
	}
	
	function filterTasks(&$childs, &$ids, &$dates){
		global $timedate;
		
		$tmp = $childs;
		$childs = array();
		foreach($tmp as $child){
			if(empty($ids) || in_array($child['id'], $ids)) {
				//Calling recursively for childrens
				if(isset($child['children']) && !empty($child['children'])){
					$this->filterTasks($child['children'], $ids, $dates);
				}
				
				$date = explode(' ',$dates[$child['id']]);
				
				$child['html'] = str_replace('DAYS_OUT', $date[0], $child['html']);	
				$childs[] = $child;				
			}
		}
	}
}

?>