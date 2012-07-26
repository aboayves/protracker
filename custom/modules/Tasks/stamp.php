<?php
class task_status_change
{
	function stamp_completion(&$bean, $event, $arguments)
	{
		if($bean->fetched_row['status'] != $bean->status)
		{
			if($bean->status == 'Completed')
			{
				$bean->date_complete = $bean->date_modified;
			}
			else
			{
				$bean->date_complete = '';
			}
		}
	}
	function setStatus(&$bean, $event, $arguments){
		if(isset($bean->fetched_row) && $_REQUEST['subpanel_id'] == $bean->parent_tasks_id){
			global $db;
			if($bean->status != 'Completed'){
				$status = 'Pending';
			}else{
				$status = 'Not Started';
			}
			$query = 'UPDATE tasks SET parent_tasks_id ="'.$bean->id.'", status = "'.$status.'" WHERE id = "'.$bean->parent_tasks_id.'"';
			$bean->parent_tasks_id = '';
			$db->query($query);
		}
	}
}
?>