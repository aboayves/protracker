<?php
class CallsHook
{
	public function saveCalls($bean, $event, $arguments)
	{
		if(!empty($bean->attach_to_group_id))
		{
			global $db,$timedate;
			$date_modified=$timedate->nowDb();
		    $query="SELECT rt.parent_id, rt.parent_type	FROM av_group_membership AS rt WHERE rt.deleted=0 AND rt.av_groups_id='{$bean->attach_to_group_id}' AND rt.include=1";
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
			   }
			   else
			   {
				   $query="INSERT INTO calls_accounts (id,call_id,account_id,date_modified)
						   VALUES ('$newID','{$bean->id}','$parent_id','$date_modified')";
			   }
			    
			   $db->query($query);
			}
		}
	}
	function processRecord(&$bean, $event, $arguments)
    {
        if( $bean->status == 'Held'){
			$bean->date_start = "<span style='color:#000000'>".$bean->date_start."</span>";       }
    }
}
?>