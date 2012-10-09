<?php
require_once('include/utils.php'); 
require_once('include/TimeDate.php'); 
class DocumentHooks
{
	public function SaveDocument(SugarBean $bean,$event,$arguments)
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
			   $parent_id_string=substr($parent_type,0,-1).'_id';
			   $newID=create_guid();
			   $query="INSERT INTO documents_$parent_type (id,date_modified,document_id,$parent_id_string)
					   VALUES ('$newID','$date_modified','$bean->id','$parent_id')";
			   $db->query($query);
			}
		}
	}
}
?>