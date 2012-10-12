<?php
class TreeData{
	public static function getData($wfID, $wfName = '') {
		$added_nodes = array($wfID);
		$tree = array();
		
		$tree['id'] = $wfID;
		$tree['html'] = $wfName;
		$tree['type'] = 'HTML';
		$tree['label'] = $wfName;
		$tree['href'] = "index.php?module=av_Workflow&action=DetailView&record={$wfID}";
		$tree['expanded'] = true;
		$tree['children'] = TreeData::getChilds($wfID, $added_nodes, $wfID, $wfName, true);
		return $tree;
	}
	
	private static function getChilds($id, &$added_nodes = array(), $wfID, $wfName, $fromWF = false) {
		global $db, $users, $timedate, $app_list_strings;
		
		$field = 'parent_tasks_id';
		$addWhere = "";
		if($fromWF){
			$field = 'av_Workflow_id';
			$addWhere = " AND (parent_tasks_id IS NULL OR TRIM(parent_tasks_id)='')";
		}
		
		$sql = "SELECT id, name, subject, task_category, assign_to, days_out FROM av_task_template WHERE {$field} = '{$id}' AND deleted=0" . $addWhere;
		$result = $db->query($sql);
		$childs_array = array();
		while ($row = $db->fetchByAssoc($result)){
			if(!in_array($row['id'], $added_nodes)){
				$added_nodes[] = $row['id'];
			
				$node = array();
				$node['id'] = $row['id'];
				$node['html'] ="<table><tr><td id='name' title='Name' >{$row['name']}</td>
				                <td width='250px' title='Subject'>{$row['subject']}</td>
								<td width='200px' title='Category'>{$row['task_category']}</td>
								<td width='125px' title='Assign To'>{$app_list_strings['task_assign_to_list'][$row['assign_to']]}</td>
								<td width='60px' title='Days Out'>{$row['days_out']}
								<input type='hidden' value={$row['id']}</td>
								</tr></table>";
				$node['type'] = 'HTML';
				$node['label'] = $row['name'];
				$node['highlightState']='1';
				$node['href'] = "index.php?module=av_Task_Template&action=DetailView&record={$row['id']}&av_Workflow_id={$wfID}&av_Workflow_name={$wfName}";
				$node['expanded'] = true;
				$node['children'] = TreeData::getChilds($row['id'], $added_nodes, $wfID, $wfName);
			
				$childs_array[] = $node;
				
			}
		}
		foreach ($childs_array as $child) {
			if(empty($child['children']) && !$fromWF) {
		        $node = array();
				$node['id'] = '';
				$node['html'] ='Parent Node';
				$node['type'] = 'HTML';
				$node['highlightState']='1';
				$node['href'] = "";
				$node['expanded'] = true;
				
		        $childs_array[] = $node;
				break;
			}
	
		}
		
		return $childs_array;
	}
}
?>