<?php
require_once('modules/Reports/SubpanelFromReports.php');
require_once('custom/modules/av_Groups/MembershipData.php');

global $db, $timedate;
$now = $timedate->nowDB();
$id = $_REQUEST['record'];
$sql = "
UPDATE av_groups SET lastupdated='{$now}' WHERE id='{$id}' AND deleted=0 LIMIT 1;";
$db->query($sql);
$sql = "UPDATE av_group_membership SET deleted=1 WHERE av_groups_id='{$id}' and deleted=0";
$db->query($sql);
$sql = "
SELECT reports_id, saved_reports.module 
FROM av_groups_reports 
RIGHT JOIN saved_reports ON (saved_reports.id=reports_id AND saved_reports.deleted=0) 
WHERE av_groups_id='{$id}' AND av_groups_reports.deleted=0";
$result = $db->query($sql);
$updated_date = $timedate->to_display_date_time($now);
$ajaxData=array('updated_date'=>$updated_date);
$saved = new SavedReport();
$membership_data_obj = new MembershipData();
$saved->disable_row_level_security = true;
$report_result_set = array();
if($db->getRowCount($result) !=0){
	while($report = $db->fetchByAssoc($result))
	{
		$saved->retrieve($report['reports_id'], false);
		$report = new SubpanelFromReports($saved);
		$report->run_query();
		$sql = $report->query_list[0];
		$result1 = $report->db->query($sql);
		$group_bean = BeanFactory::getBean('av_Groups', $_REQUEST['record']);
		
		while($row = $report->db->fetchByAssoc($result1))
		{
			$member_bean = BeanFactory::getBean($saved->module, $row['primaryid']);
			$membership_data = $membership_data_obj->calculateMembershipData($group_bean, $member_bean, $saved->module);
			$membership_data['id'] = create_guid();
			$membership_data['parent_type'] = $saved->module;
			$membership_data['parent_id'] = $row['primaryid'];
			$membership_data['av_groups_id'] = $group_bean->id;
			$i=0;
			foreach($report_result_set as $report_data){
				if(
					isset($report_data['parent_type']) && 
					isset($report_data['parent_id']) && 
					$report_data['parent_type'] == $membership_data['parent_type'] &&
					$report_data['parent_id'] == $membership_data['parent_id']
				)
				{
					$i=1;
				}
			}
			if($i==0){
				$report_result_set[] = $membership_data;
			}
		}
	}
	$keys = implode(',' , array_keys($report_result_set[0]));
			
	$query = "INSERT INTO av_group_membership (" . $keys . ") VALUES";
	foreach($report_result_set as $member){
		$values = implode("','" , array_values($member));
		if(!empty($values)){
			$values = "'" . $values . "'";
		}
		$query .= "(" . $values . "),";
	}
	$query = rtrim($query, ",");
	$db->query($query, true);
}
ob_clean();
echo json_encode($ajaxData);
die();
//initiailize reports engine with the report definition.




//TODO::Drop all relationships for clients and contacts

//TODO::select all the related reports

//TODO::run the js functions for selecting and running the reports


?>