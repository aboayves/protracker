<?php
class ScheduleMeeting
{
	function assign_meeting($bean, $event, $arguments)
	{
		 if(!empty($bean->attach_to_group_id))
		  {
			global $db,$timedate;
			$date_modified=$timedate->nowDb();
			$query="SELECT rt.parent_id, rt.parent_type	FROM av_group_membership AS rt WHERE rt.deleted=0 AND rt.av_groups_id='{$bean->attach_to_group_id}' AND rt.include=1";
			
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