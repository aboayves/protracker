<?php
global $db, $timedate;
$current_date=$timedate->nowDbDate();
$query="
		SELECT av_group_membership.expiration_date, av_group_membership.id
		FROM av_group_membership
		LEFT JOIN av_groups ON ( av_groups.deleted=0 AND av_groups.id = av_group_membership.av_groups_id )
		WHERE 
			av_group_membership.deleted=0 
			AND 
			av_group_membership.av_groups_id='{$this->bean->id}' 
			AND 
			av_group_membership.include=1 
			AND 
			(
				av_group_membership.expiration_date IS NOT NULL 
				OR 
				av_group_membership.expiration_date !=''
			)
			AND 
			av_group_membership.expiration_date < '{$current_date}'
		";

$members = $db->query($query);
while ($member = $db->fetchByAssoc($members)) {	
	if($current_date>$member['expiration_date'] && !empty($member['expiration_date'])) {
		$querry="UPDATE `av_group_membership` SET `deleted`='2' where id='{$member['id']}'";
		$db->query($querry);
	}
}

SugarApplication::redirect("index.php?module=av_Groups&action=DetailView&record={$this->bean->id}");

?>