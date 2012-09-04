<?php
class ScheduleMeeting
{
	function assign_meeting($bean, $event, $arguments)
	{
		 if(!empty($bean->attach_to_group_id))
		  {
			global $db,$timedate;
			$date_modified=$timedate->nowDb();
			$query="SELECT rt_group_membership.parent_id, rt_group_membership.parent_type
					FROM rt_group_membership_av_groups_c
					RIGHT JOIN rt_group_membership ON (rt_group_membership.deleted=0 AND rt_group_membership.include=1 AND rt_group_membership.id = rt_group_membership_av_groups_c.rt_group_membership_av_groupsrt_group_membership_idb)
					WHERE rt_group_membership_av_groups_c.deleted=0 AND rt_group_membership_av_groups_c.rt_group_membership_av_groupsav_groups_ida='$bean->attach_to_group_id'";
			
			$res = $db->query($query);
			
			
			
			while ($row = $db->fetchByAssoc($res))
			{
				$parent_type=$row['parent_type'];
				$parent_id=$row['parent_id'];
				$newID=create_guid();
				if($parent_type=='Contacts')
				{
				$query="INSERT INTO meetings_contacts (id,date_modified,meeting_id,contact_id)
					    VALUES ('$newID','$date_modified','{$bean->id}','$parent_id')";
				}
				else
				{
				$query="INSERT INTO meetings_accounts (id,date_modified,meeting_id,account_id)
					    VALUES ('$newID','$date_modified','{$bean->id}','$parent_id')";
				}
				$db->query($query);
			
		   }
		
  
	   }	
	}
}



?>