<?php
require_once('include/MVC/Controller/SugarController.php');

class rt_WorkflowController extends SugarController {

        function action_assign() 
		{
                $this->view = "assign";
				if(isset($_REQUEST['parent_type']))
				{
					global $db;
					$sql="SELECT id,name,date_entered,date_modified,modified_user_id,created_by,description,team_id,team_set_id,assigned_user_id,task_category,private,notify_child_completion,assigned_to_client,parent_tasks_id,days_out
						  FROM rt_task_template
						  WHERE rt_workflow_id='{$this->bean->id}'";
					$result=$db->query($sql);
					while($row = $db->fetchByAssoc($result))
					{
					  $taskTemplateRecords[]=$row;
					  $array_new_ids[$row['id']]=create_guid();
					}
					$array_parent_start_dates=array();
					foreach($taskTemplateRecords as $record)
					{
					if(isset($_POST['workflow_counts_down_to_target_date']))
						{
						
						}
						if(empty($record['parent_tasks_id']))
						{
							$status='Not Started';
							$start_date=$_REQUEST['start_date'];
							$start_date = date('Y-m-d', strtotime($start_date));
						}
						else
						{
							$status='Pending';
							if($record['days_out']==0)
							{
							$start_date=$array_parent_start_dates[$record['parent_tasks_id']];
							}
							else
							{
							$start_date=date('Y-m-d', strtotime(date("Y-m-d", strtotime($array_parent_start_dates[$record['parent_tasks_id']])) ."+".$record['days_out']. "  day"));
							}
							
						}
						$array_parent_start_dates[$record['id']]=$start_date;
						$query="INSERT INTO tasks(id,name,date_entered,date_modified,modified_user_id,status,created_by,description,team_id,team_set_id,assigned_user_id,category,private,notify_child_completion,assigned_to_client,parent_tasks_id,parent_id,parent_type,project_id,date_start)
								 VALUES ('{$array_new_ids[$record['id']]}','{$record['name']}','{$record['date_entered']}','{$record['date_modified']}','{$record['modified_user_id']}','{$status}','{$record['created_by']}','{$record['description']}','{$record['team_id']}','{$record['team_set_id']}','{$record['assigned_user_id']}','{$record['task_category']}','{$record['private']}','{$record['notify_child_completion']}','{$record['assigned_to_client']}','{$array_new_ids[$record['parent_tasks_id']]}','{$_REQUEST['parent_id']}','{$_REQUEST['parent_type']}','{$_REQUEST['add_to_project_id']}','{$start_date}')";
						$db->query($query);
					}
				     SugarApplication::redirect('index.php?module=rt_Workflow&action=DetailView&record='.$this->bean->id);
					
				}
        }
}

?>