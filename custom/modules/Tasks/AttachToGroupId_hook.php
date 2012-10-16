<?php
class AttachToGroupId
{
	function assign_members($bean, $event, $arguments)
	{
		 if(empty($bean->fetched_row['id']) && !empty($bean->attach_to_group_id))
		  {
			global $db, $timedate;
			
			$query="SELECT rt.parent_id, rt.parent_type	FROM av_group_membership AS rt WHERE rt.deleted=0 AND rt.av_groups_id='{$bean->attach_to_group_id}' AND rt.include=1";
			
			$members = $db->query($query);
			
			$curr_time=$timedate->nowDb();
			
			while ($member = $db->fetchByAssoc($members))
			{
				$parent_type=$member['parent_type'];
				$parent_id=$member['parent_id'];
				$newID=create_guid();
			    $query="INSERT INTO tasks (id,name,date_entered,date_modified,modified_user_id,created_by, description, deleted, assigned_user_id, team_id, team_set_id, status, date_due_flag, date_due, date_start_flag, date_start, parent_type,parent_id, contact_id, priority,dd2, dd1, closed_status, parent_tasks_id, category, date_complete, alow_asigne_to_modify, private, notify_child_completion, attach_to_group_id )
				  VALUES ('{$newID}','{$bean->name}','{$curr_time}','{$curr_time}', '{$bean->modified_user_id}', '{$bean->created_by}', '{$bean->description}', '{$bean->deleted}', '{$bean->assigned_user_id}', '{$bean->team_id}', '{$bean->team_set_id}',  '{$bean->status}', '{$bean->date_due_flag}', '{$bean->date_due}', '{$bean->date_start_flag}', '{$bean->date_start}', '{$parent_type}', '{$parent_id}', '{$bean->contact_id}' , '{$bean->priority}' ,'{$bean->dd2}', '{$bean->dd1}', '{$bean->closed_status}', '{$bean->parent_tasks_id}', '{$bean->category}', '{$bean->date_complete}', '{$bean->alow_asigne_to_modify}', '{$bean->private}', '{$bean->notify_child_completion}', '{$bean->attach_to_group_id}')";
				$db->query($query);
		   }
		   $bean->deleted=1;
	       SugarApplication::redirect("index.php?action=DetailView&module=av_Groups&record={$bean->attach_to_group_id}");
		exit();
  
	   }	
	}
}



?>