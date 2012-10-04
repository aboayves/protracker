<?php
class theHook4rt_Group_Membership{
	function beforeSaveThingsToDo(&$bean, $event, $arguments){
		global $db, $timedate;
		
		if(empty($bean->date_entered)){
			$bean->date_entered = $timedate->nowDb();
		}
		
		$bean->date_add_to_grp = $bean->date_entered;
		
		if(empty($bean->expiration_date)){
			$sql = "SELECT membership_expiration_days FROM av_groups WHERE id = '{$bean->av_groups_id}' AND deleted=0 LIMIT 1";
			$result = $db->fetchByAssoc($db->query($sql));
			$xDays = is_numeric($result['membership_expiration_days'])?$result['membership_expiration_days']:0;
			
			if(intval($xDays) > 0){
				$bean->expiration_date = date("Y-m-d", strtotime(date("Y-m-d", strtotime($bean->date_entered))." +{$xDays} days"));
			}
		}
	}
}
?>