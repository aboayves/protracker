<?php
global $db, $timedate;
$now = $timedate->nowDB();
$id = $_REQUEST['record'];
$sql = "
UPDATE av_groups SET lastupdated='{$now}' WHERE id='{$id}' AND deleted=0 LIMIT 1;";
$db->query($sql);

$sql = "UPDATE av_group_membership SET deleted=1 WHERE av_groups_id='{$id}'";
$db->query($sql);
$sql = "
SELECT reports_id, saved_reports.module 
FROM av_groups_reports 
LEFT JOIN saved_reports ON (saved_reports.id=reports_id AND saved_reports.deleted=0) 
WHERE av_groups_id='{$id}' AND av_groups_reports.deleted=0";
$result = $db->query($sql);
$ajaxData=array('accounts'=>array(), 'contacts'=>array());
while($report = $db->fetchByAssoc($result))
{
	$ajaxData[strtolower($report['module'])][] = $report['reports_id'];
}
ob_clean();
echo json_encode($ajaxData);
die();


//TODO::Drop all relationships for clients and contacts

//TODO::select all the related reports

//TODO::run the js functions for selecting and running the reports


?>