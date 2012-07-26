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
		global $db;
		//this is true and weirdly going to be the parent bean (left) of the 1-M relationship
		if(is_array($bean->fetched_row) && $_REQUEST['subpanel_id'] == $bean->parent_tasks_id)
		{
			
			$status = '';
			if($bean->status != 'Completed')
			{
				$status = ", status = 'Pending' ";
			}
			$query = "UPDATE tasks SET parent_tasks_id ='{$bean->id}' {$status} WHERE id = '{$bean->parent_tasks_id}'";
			$db->query($query);
			$bean->parent_tasks_id = $bean->fetched_row['parent_tasks_id'];
		}
		else	//create scenario
		{
			$query = "SELECT status FROM tasks WHERE deleted=0 AND id='{$bean->parent_tasks_id}' LIMIT 1";
			$parent_task = $db->query($query);
			$parent_task = $db->fetchByAssoc($parent_task);
			if($parent_task['status']!='Completed')
			{
				$bean->status = 'Pending';
			}
		}
	}
}
?>