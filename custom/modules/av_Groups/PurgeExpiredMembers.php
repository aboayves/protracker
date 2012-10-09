<?php
global $db, $timedate;

$query="SELECT av_groups.membership_expiration_days,av_group_membership.date_entered,av_group_membership.id
	  FROM av_group_membership
	  LEFT JOIN av_groups ON av_groups.deleted=0 AND av_groups.id = av_group_membership.av_groups_id
	  WHERE av_group_membership.deleted=0 AND av_group_membership.av_groups_id='{$_REQUEST['record']}' AND av_group_membership.include=1";

$members = $db->query($query);
while ($member = $db->fetchByAssoc($members))
{	
	list($m, $d, $y) = explode("/", $timedate->nowDate());
	list($y1, $m1, $d1) = explode("-", $timedate->getDatePart($member['date_entered']));
	$daysstart =(strtotime($y.'-'.$m.'-'.$d) - strtotime($y1.'-'.$m1.'-'.$d1)) / (60 * 60 * 24);

	if($daysstart>$member['membership_expiration_days'])
	{
		$querry="UPDATE `av_group_membership` SET `deleted`='1' where id='{$member['id']}'";
		$db->query($querry);
	}
}

SugarApplication::redirect("index.php?module=av_Groups&action=DetailView&record={$_REQUEST['record']}");

?>