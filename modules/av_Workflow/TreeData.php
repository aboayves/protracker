<?php
class TreeData{
	public static function getData($wfID, $wfName = '') {
		$added_nodes = array($wfID);
		$tree = array();
		
		$tree['id'] = $wfID;
		$tree['html'] = $wfName;
		$tree['type'] = 'HTML';
		$tree['href'] = "index.php?module=av_Workflow&action=DetailView&record={$wfID}";
		$tree['expanded'] = true;
		$tree['children'] = TreeData::getChilds($wfID, $added_nodes, true);
		return $tree;
	}
	
	private static function getChilds($id, &$added_nodes = array(), $fromWF = false) {
		global $db, $users, $timedate;
		
		$field = 'parent_tasks_id';
		if($fromWF){
			$field = 'av_Workflow_id';
		}
		
		$sql = "SELECT id, name, subject, task_category, assign_to, days_out FROM av_task_template WHERE {$field} = '{$id}' AND deleted=0";
		$result = $db->query($sql);
		$childs_array = array();
		while ($row = $db->fetchByAssoc($result)){
			if(!in_array($row['id'], $added_nodes)){
				$added_nodes[] = $row['id'];
			
				$node = array();
				$node['id'] = $row['id'];
				$node['html'] ='<table><tr><td width="80">Name</td><td>'.$row['name'].
				                '</td></tr><tr><td>Category</td><td>'.$row['task_category'].
								'</td></tr><tr><td>Subject</td><td>'.$row['subject'].
								'</td></tr><tr><td> Assign To</td><td>'.$row['assign_to'].
								'</td></tr><tr><td>Days Out</td><td>'.$row['days_out'].
								'<input type="hidden" value="'.$row['id'].'"'.
								'</td></tr></table>';
				$node['type'] = 'HTML';
				$node['highlightState']='1';
				$node['href'] = "index.php?module=av_Task_Template&action=DetailView&record={$row['id']}";
				$node['expanded'] = true;
				$node['children'] = TreeData::getChilds($row['id'], $added_nodes);
			
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
		}
	
	}
		return $childs_array;
	}
}
?>