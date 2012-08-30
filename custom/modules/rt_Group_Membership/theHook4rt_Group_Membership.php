<?php
class theHook4rt_Group_Membership
{
	function fetchOtherValues(&$bean, $event, $arguments) 
	{
		
	}
	function beforeSaveThingsToDo(&$bean, $event, $arguments)
	{
		
	}
	function afterSaveThingsToDo(&$bean, $event, $arguments)
	{
		global $db;
		if(empty($bean->expiration_date))
		{
			$sql = "SELECT date_modified FROM rt_group_membership_av_groups_c WHERE rt_group_membership_av_groupsrt_group_membership_idb='{$bean->id}' AND deleted=0 LIMIT 1";
			$result = $db->fetchByAssoc($db->query($sql));
			$date_added = $result['date_modified'];
			
			$sql = "SELECT membership_expiration_days FROM av_groups WHERE id = '{$bean->rt_group_membership_av_groupsav_groups_ida}' AND deleted=0 LIMIT 1";
			$result = $db->query($sql);
			
			
		}
	}
}
?>