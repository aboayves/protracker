<?php
class AttachToGroupId
{
	function assign_members(SugarBean $bean)
	{
		 if(!empty($bean->attach_to_group_id))
		  {
			global $db;
			//print "<pre>";
		//	print_r($_REQUEST['description']);die();
			
			$query="SELECT parent_id,parent_type
					FROM rt_group_membership_av_groups_c
					LEFT JOIN rt_group_membership ON (rt_group_membership.deleted=0 AND rt_group_membership.include=1 AND rt_group_membership.id = rt_group_membership_av_groups_c.rt_group_membership_av_groupsrt_group_membership_idb)
					WHERE rt_group_membership_av_groups_c.deleted=0 AND rt_group_membership_av_groups_c.rt_group_membership_av_groupsav_groups_ida='$bean->attach_to_group_id'";
			
			$member = $db->query($query);			
			$timeDate=new TimeDate();
			$curr_time=$timeDate->nowDb();
			
			while ($member1 = $db->fetchByAssoc($member))
			{
				$parent_type=$member1['parent_type'];
				$parent_id=$member1['parent_id'];
				//print_r($member1);die();
				$newID=create_guid();
				if($parent_type!=NULL || $parent_type!="")
				{
					$query="INSERT INTO {$parent_type}_notes (id,notes_id,{$parent_type}_id,date_modified) VALUES ('{$newID}','{$bean->id}','{$parent_id}','{$curr_time}')";
					//echo $query."</br>";
					$db->query($query);
			
				}

			   
		   }
		   $attach_to_group_id=$bean->attach_to_group_id;
	       SugarApplication::redirect("index.php?action=DetailView&module=av_Groups&record={$attach_to_group_id}");
		exit();
  
	   }	
	}
}

?>