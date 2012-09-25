<?php
require_once('include/MVC/Controller/SugarController.php');
require_once('modules/rt_Workflow/TreeData.php');

class rt_WorkflowController extends SugarController {
		
	function setTaskTemplateIds($tasks_templates, &$ids){
		foreach($tasks_templates as $tasks_template){
			$ids[] = $tasks_template['id'];
			
			//Calling recursively for childrens
			if(isset($tasks_template['children']) && !empty($tasks_template['children'])){
				$this->setTaskTemplateIds($tasks_template['children'], $ids);
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
		global $db;
			
		if(isset($_REQUEST['parent_id']) && !empty($_REQUEST['parent_id'])){
			$ids = array();
			$dates = array();
			$daysOut = array();
			
			$tasks_templates = TreeData::getData($this->bean->id);
			if(isset($tasks_templates['children']) && !empty($tasks_templates['children'])){
				$this->setTaskTemplateIds($tasks_templates['children'], $ids);
			}
			
			$sql = "SELECT ".
						"id, name, date_entered, date_modified, ".
						"modified_user_id, created_by, description, ".
						"team_id, team_set_id, assigned_user_id, task_category as 'category', ".
						"private, notify_child_completion, assigned_to_client, parent_tasks_id, days_out ".
					"FROM ".
						"rt_task_template ".
					"WHERE ".
						"id IN ('" . implode("','", $ids) . "')";
					
			$result=$db->query($sql);
			while($row = $db->fetchByAssoc($result)){
				if(!isset($array_new_ids[$row['id']])){
					$array_new_ids[$row['id']] = create_guid();
				}
				
				if(!isset($daysOut[$row['id']])){
					$daysOut[$row['id']] = intval($row['days_out']);
				}
				
				$taskTemplateRecords[] = $row;
			}
			
			if(isset($tasks_templates['children']) && !empty($tasks_templates['children'])){
				$reversed = (isset($_REQUEST['workflow_counts_down_to_target_date']) && !empty($_REQUEST['workflow_counts_down_to_target_date']));
				$dayKeyword = (isset($_REQUEST['skip_weekends_holidays']) && !empty($_REQUEST['skip_weekends_holidays'])) ? "weekdays" : "days";
				$startStamp = (isset($_REQUEST['start_date']) && !empty($_REQUEST['start_date'])) ? strtotime($_REQUEST['start_date']) : strtotime("now");
				//if start date is less then today
				if($startStamp < strtotime("now")){
					$startStamp = strtotime("now");
				}
				
				$this->setTaskDates($tasks_templates['children'], $dates, $daysOut, $reversed, $startStamp, $dayKeyword, true);
			}
			
			foreach($taskTemplateRecords as $record){
				if(empty($record['parent_tasks_id'])){
					$status='Not Started';
				}else{
					$status='Pending';
				}
								
				//Making SQL statement
				$record['parent_type'] = $_REQUEST['parent_type'];
				$record['parent_id'] = $_REQUEST['parent_id'];
				if(isset($record['days_out'])){
					unset($record['days_out']);
				}
				
				//Attaching to project from request
				if(isset($_REQUEST['add_to_project_id']) && !empty($_REQUEST['add_to_project_id'])){
					$record['project_id'] = $_REQUEST['add_to_project_id'];
				}
				
				//Adding calculated start date
				if(isset($dates[$record['id']]) && !empty($dates[$record['id']])){
					$record['date_start'] = $dates[$record['id']];
				}
				
				//Adjusting ids
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
			
			SugarApplication::redirect('index.php?module=rt_Workflow&action=DetailView&record='.$this->bean->id);
		}
		
		$this->view = "assign";
	}
}

?>