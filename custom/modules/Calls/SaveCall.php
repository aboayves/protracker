<?php
class SaveCall
{
	public function saveCalls($bean, $event, $arguments)
	{
		if(!empty($bean->attach_to_group_id))
		{
			global $db,$timedate;
			$date_modified=$timedate->nowDb();
		    $query="SELECT rt.parent_id, rt.parent_type
					FROM rt_group_membership_av_groups_c AS ra 
					RIGHT JOIN rt_group_membership AS rt 
						ON (rt.deleted=0 AND ra.rt_group_membership_av_groupsrt_group_membership_idb=rt.id AND rt.include=1)
					WHERE ra.deleted=0 AND ra.rt_group_membership_av_groupsav_groups_ida='{$bean->attach_to_group_id}'";
			$res = $db->query($query); 
		
			while ($row = $db->fetchByAssoc($res)) 
			{
			   $parent_id=$row['parent_id'];
			   $parent_type=$row['parent_type'];
			   $newID=create_guid();
			   if($parent_type=='Contacts')
			   {
				   $query="INSERT INTO calls_contacts (id,call_id,contact_id,date_modified)
						   VALUES ('$newID','{$bean->id}','$parent_id','$date_modified')";
				   $db->query($query);
			   }
			}
		}
	}
}
?>