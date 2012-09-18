<?php
class TreeData{
	public static function getData($wfID, $wfName){
		$tree = array();
		
		$tree['id'] = $wfID;
		$tree['label'] = $wfName;
		$tree['type'] = 'text';
		$tree['href'] = "index.php?module=rt_Workflow&action=DetailView&record={$wfID}";
		$tree['expanded'] = true;
		$tree['children'] = TreeData::getChilds($wfID, array($wfID), true);
		
		return $tree;
	}
	
	private static function getChilds($id, $added_nodes = array(), $fromWF = false) {
		global $db, $users, $timedate;
		
		$field = 'parent_tasks_id';
		if($fromWF){
			$field = 'rt_workflow_id';
		}
		
		$sql = "SELECT id, name FROM rt_task_template WHERE {$field} = '{$id}' AND deleted=0";
		$result = $db->query($sql);
	
		$childs_array = array();
		while ($row = $db->fetchByAssoc($result)){
			if(!in_array($row['id'], $added_nodes)){
				$added_nodes[] = $row['id'];
			
				$node = array();
				$node['id'] = $row['id'];
				$node['label'] = $row['name'];
				$node['type'] = 'text';
				$node['href'] = "index.php?module=rt_task_Template&action=DetailView&record={$row['id']}";
				$node['expanded'] = true;
				$node['children'] = TreeData::getChilds($row['id'], $added_nodes);
				
				$childs_array[] = $node;
			}
		}
		
		return $childs_array;
	}
}

ob_clean();
echo json_encode(TreeData::getData($this->bean->id, $this->bean->name));
exit();
?>