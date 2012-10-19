<?php
require_once('include/MVC/Controller/SugarController.php');
require_once('modules/av_Workflow/TreeData.php');

class av_WorkflowController extends SugarController {
		
	function setTaskTemplateIds($tasks_templates, &$ids){
		$task_template_checked_ids = trim($_REQUEST['template_ids'],', ');
		$task_template_checked_ids = explode(', ', $task_template_checked_ids);
		
		foreach($tasks_templates as $tasks_template){
			if(in_array($tasks_template['id'], $task_template_checked_ids)) {
				$ids[] = $tasks_template['id'];
				
				//Calling recursively for childrens
				if(isset($tasks_template['children']) && !empty($tasks_template['children'])){
					$this->setTaskTemplateIds($tasks_template['children'], $ids);
				}
			}
		}
	}
	
	function setTaskDates($tasks_templates, &$dates, &$daysOut, $reversed, $startStamp, $dayKeyword, $top = false){
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
			
			$dates[$tasks_template['id']] = date('Y-m-d', $tmpStamp);
			
			//To send minimum timestamp to parent
			if($tmpStamp < $minStamp){
				$minStamp = $tmpStamp;
			}
		}
			
		return $minStamp;
	}
	
	function action_assign(){
		global $db, $current_user;
			
		if(isset($_REQUEST['parent_id']) && !empty($_REQUEST['parent_id'])){
			$ids = array();
			$dates = array();
			$daysOut = array();
			
			//=========================== flags to load additional assign info ==========================
			$clientRec = false;
			$coClientRec = false;
			$assignedToRec = false;
			
			//=============================== Geting task templates =====================================
			$tasks_templates = TreeData::getData($this->bean->id);
			if(isset($tasks_templates['children']) && !empty($tasks_templates['children'])){
				$this->setTaskTemplateIds($tasks_templates['children'], $ids);
			}
			
			$sql = "SELECT ".
						"id, name, date_entered, date_modified, assign_to, relate_to, ".
						"modified_user_id, created_by, description, ".
						"team_id, team_set_id, assigned_user_id, task_category as 'category', ".
						"private, notify_child_completion, on_task_list, parent_tasks_id, days_out ".
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
							"INNER JOIN accounts_contacts ON contacts.id = accounts_contacts.contact_id AND accounts_contacts.account_id = '" . $_REQUEST['parent_id'] . "' ".
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
							"INNER JOIN accounts_contacts ON contacts.id = accounts_contacts.contact_id AND accounts_contacts.account_id = '" . $_REQUEST['parent_id'] . "' ".
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
				$startStamp = (isset($_REQUEST['start_date']) && !empty($_REQUEST['start_date'])) ? strtotime($_REQUEST['start_date']) : strtotime("now");
				
				//=========================== if start date is less then today ==========================
				if($startStamp < strtotime("now")){
					$startStamp = strtotime("now");
				}
				
				$this->setTaskDates($tasks_templates['children'], $dates, $daysOut, $reversed, $startStamp, $dayKeyword, true);
			}
			
			//=============================== Creating records ==========================================
			foreach($taskTemplateRecords as $record){
				if(empty($record['parent_tasks_id'])){
					$status='Not Started';
				}else{
					$status='Pending';
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
					$record['date_due'] = $dates[$record['id']];
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
						
						if($record['relate_to'] == "Client"){
							$record['assigned_user_id'] = $pri_cont_assigned_user;
						}else if($record['relate_to'] == "Co_client"){
							$record['assigned_user_id'] = $sec_cont_assigned_user;
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
				
				unset($record['assign_to']);
				unset($record['relate_to']);
				
				//==================Adjusting ids according to new UUIDs ===================================
				$record['id'] = $array_new_ids[$record['id']];
				if(!empty($record['parent_tasks_id'])){
					$record['parent_tasks_id'] = $array_new_ids[$record['parent_tasks_id']];
				}
				
				$keys = implode(',' , array_keys($record));
				$values = implode("','" , array_values($record));
				if(!empty($values)){
					$values = "'" . $values . "'";
				}
				
				$query = "INSERT INTO tasks (" . $keys . ") VALUES (" . $values . ")";
				$db->query($query, true);
			}
			
			SugarApplication::redirect('index.php?module=av_Workflow&action=DetailView&record='.$this->bean->id);
		}
		
		$this->view = "assign";
	}
}

?>