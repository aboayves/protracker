<?php
class TreeData{
	public static function getData($projectID, $projectName = '') {
		$added_nodes = array($projectID);
		$tree = array();
		
		$tree['id'] = $projectID;
		$tree['type'] = 'HTML';
		$tree['html'] = '<div style="background-color:#fff">'.$projectName.'</div>';
		$tree['label'] = $projectName;
		$tree['href'] = "index.php?module=Project&action=DetailView&record={$projectID}";
		$tree['expanded'] = true;
		$tree['children'] = TreeData::getChilds($projectID, $added_nodes, $projectID, $projectName, true);
		return $tree;
	}
	
	private static function getChilds($id, &$added_nodes = array(), $projectID, $projectName, $fromProject = false) {
		global $db, $app_list_strings, $timedate;
		
		$field = 'tasks.parent_tasks_id';
		$addWhere = "";
		if($fromProject){
			$field = 'tasks.project_id';
			$addWhere = " AND (tasks.parent_tasks_id IS NULL OR TRIM(tasks.parent_tasks_id)='')";
		}
		
		$sql = "SELECT tasks.id, tasks.name, tasks.category, assigned_user_id, date_due
				FROM tasks
				WHERE {$field} = '{$id}' AND tasks.deleted=0" . $addWhere;
		$result = $db->query($sql);
		$childs_array = array();
		$assign_to_default_value='';
		while ($row = $db->fetchByAssoc($result)){
			if(!in_array($row['id'], $added_nodes)){
				$added_nodes[] = $row['id'];
				$row['category'] = $app_list_strings['task_category_list'][$row['category']];	
				$node = array();
				$node['id'] = $row['id'];
				$node['type'] = 'html';
				$node['html'] = "<table>";
				if(count($added_nodes) == 2){
					$node['html'] .= "<tr>
									<th id='name' title='Name'>Name</th>
									<th width='200px' title='Category'>Category</th>
									<th width='180px' title='Assignee'>Assignee</th>
									<th width='135px' title='Due Date'>Due Date</th>
									</tr>";
				}
				$node['html'] .= "<tr>
								<td id='name' title='Name' style='cursor:pointer;' onclick=\"window.location='index.php?module=Tasks&action=DetailView&record={$row['id']}';\" ><div class={$tree['contentStyle']}><a >{$row['name']}</a></div></td>
								<td width='200px' title='Category'>{$row['category']}</td>
								<td width='180px' title='Assignee'>".get_assigned_user_name($row['assigned_user_id'])."</td>
								<td width='135px' title='Due Date'>".$timedate->to_display_date_time($row['date_due'])."</td>
							</tr>
						 </table>";
				$node['label'] = $row['name'];
				$node['href'] = "index.php?module=Tasks&action=DetailView&record={$row['id']}";
				$node['expanded'] = true;
				$node['children'] = TreeData::getChilds($row['id'], $added_nodes, $projectID, $projectName, false);
			
				$childs_array[] = $node;
				
			}
		}
		
		return $childs_array;
	}
}
?>