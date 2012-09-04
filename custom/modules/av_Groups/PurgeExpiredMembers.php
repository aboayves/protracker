<?php
global $db, $timedate;

$query="SELECT av_groups.membership_expiration_days,rt_group_membership_av_groups_c.date_modified,rt_group_membership_av_groups_c.id
	  FROM rt_group_membership_av_groups_c
	  LEFT JOIN av_groups ON (av_groups.deleted=0 AND av_groups.id = rt_group_membership_av_groups_c.rt_group_membership_av_groupsav_groups_ida)
	  RIGHT JOIN rt_group_membership ON (rt_group_membership.deleted=0 AND rt_group_membership.id = rt_group_membership_av_groups_c.rt_group_membership_av_groupsrt_group_membership_idb AND rt_group_membership.include=1)
	  WHERE rt_group_membership_av_groups_c.deleted=0 AND rt_group_membership_av_groups_c.rt_group_membership_av_groupsav_groups_ida='{$_REQUEST['record']}'";

$member = $db->query($query);
while ($member1 = $db->fetchByAssoc($member))
{	
	list($m, $d, $y) = explode("/", $timedate->nowDate());
	list($y1, $m1, $d1) = explode("-", $timedate->getDatePart($member1['date_modified']));
	$daysstart =(strtotime($y.'-'.$m.'-'.$d) - strtotime($y1.'-'.$m1.'-'.$d1)) / (60 * 60 * 24);

	if($daysstart>$member1['membership_expiration_days'])
	{
		$querry="UPDATE `rt_group_membership_av_groups_c` SET `deleted`='1' where id='{$member1['id']}'";
		$db->query($querry);
	}
}

SugarApplication::redirect("index.php?module=av_Groups&action=DetailView&record={$_REQUEST['record']}");

?>