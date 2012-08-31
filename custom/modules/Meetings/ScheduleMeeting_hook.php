<?php
class ScheduleMeeting
{
	function assign_meeting($bean, $event, $arguments)
	{
		 if(!empty($bean->attach_to_group_id))
		  {
			global $db;
			
			$query="SELECT rt_group_membership.parent_id, rt_group_membership.parent_type
					FROM rt_group_membership_av_groups_c
					RIGHT JOIN rt_group_membership ON (rt_group_membership.deleted=0 AND rt_group_membership.include=1 AND rt_group_membership.id = rt_group_membership_av_groups_c.rt_group_membership_av_groupsrt_group_membership_idb)
					WHERE rt_group_membership_av_groups_c.deleted=0 AND rt_group_membership_av_groups_c.rt_group_membership_av_groupsav_groups_ida='$bean->attach_to_group_id'";
			
			$members = $db->query($query);
			
			$timeDate=new TimeDate();
			$curr_time=$timeDate->nowDb();
			
			while ($member = $db->fetchByAssoc($members))
			{
				$parent_type=$member['parent_type'];
				$parent_id=$member['parent_id'];
				$newID=create_guid();
				if($parent_type=="Contacts")
				{					 
					$query="INSERT INTO meetings (`id`, `name`, `date_entered`, `date_modified`, `modified_user_id`, `created_by`, `description`, `deleted`, `assigned_user_id`, `team_id`, `team_set_id`, `location`, `password`, `join_url`, `host_url`, `creator`, `external_id`, `duration_hours`, `duration_minutes`, `date_start`, `date_end`, `parent_type`, `status`, `type`, `parent_id`, `reminder_time`, `outlook_id`, `sequence`, `email_reminder_time`, `email_reminder_sent`, `repeat_interval`, `recurring_source`, `attach_to_group_id`)
					 
					  VALUES ('$newID','$bean->name','$curr_time','$curr_time', '$bean->modified_user_id', '$bean->created_by', '$bean->description', '$bean->deleted', '$bean->assigned_user_id', '$bean->team_id', '$bean->team_set_id', '$bean->location', '$bean->password', '$bean->join_url', '$bean->host_url', '$bean->creator', '$bean->external_id', '$bean->duration_hours', '$bean->duration_minutes', '$bean->date_start', '$bean->date_end', '$bean->parent_type', '$bean->status', '$bean->type', '$bean->parent_id', '$bean->reminder_time', '$bean->outlook_id', '$bean->sequence', '$bean->email_reminder_time', '$bean->email_reminder_sent', '$bean->repeat_interval', '$bean->recurring_source', '$bean->attach_to_group_id')";
					$db->query($query);
				}
		   }
		   $bean->deleted=1;
	       SugarApplication::redirect("index.php?action=DetailView&module=av_Groups&record={$bean->attach_to_group_id}");

		exit();
  
	   }	
	}
}



?>