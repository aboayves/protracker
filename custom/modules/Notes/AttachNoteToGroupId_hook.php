<?php
class AttachToGroupId
{
	function assign_members(SugarBean $bean)
	{
		 if(!empty($bean->attach_to_group_id))
		  {
			global $db;
			
			$query="SELECT rt.parent_id, rt.parent_type	FROM av_group_membership AS rt WHERE rt.deleted=0 AND rt.av_groups_id='{$bean->attach_to_group_id}' AND rt.include=1";
			
			$member = $db->query($query);			
			$timeDate=new TimeDate();
			$curr_time=$timeDate->nowDb();
			
			while ($member1 = $db->fetchByAssoc($member))
			{
				$parent_type=strtolower($member1['parent_type']);
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