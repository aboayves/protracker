<?php

global $db, $current_user, $timedate;
$id = $_REQUEST['id'];
$name = $_REQUEST['name'];
$final = array();

$GLOBALS['users'] = getUserList();
$final = getStart($id);

function getUserList()
{
	global $db;
	$users=array();
	$users_res = $db->query("SELECT id, first_name, last_name FROM users WHERE deleted=0");
	while($user = $db->fetchByAssoc($users_res))
	{
		$user['full_name'] = $user['first_name'].' '.$user['last_name'];
		$users[$user['id']] = $user;
	}
	return $users;
}

function getStart($id, $visited_parent=array()){
	global $db, $final, $users, $timedate;
	
	$visited_parent[] = $id;
	
	$query = "SELECT id, name, status, parent_tasks_id, assigned_user_id, date_due, IF(date_due < now() AND status != 'Completed', 1, 0) as over_due FROM tasks WHERE id='{$id}' AND deleted=0";
	$res = $db->query($query);
	$row = $db->fetchByAssoc($res);
	if(!empty($row['parent_tasks_id']) && !in_array($row['parent_tasks_id'], $visited_parent)){
		return getStart($row['parent_tasks_id'], $visited_parent);
	}else{
		$tree = array();
		
		$tree['labelStyle'] = "ygtvlabel";
			
		if($row['status'] == 'Not Started' || $row['status'] == 'In Progress'){
			$tree['labelStyle'] .= " active_task";
		}else if($row['status'] == 'Completed'){
			$tree['labelStyle'] .= " completed_task";
		}
		
		if($row['over_due'] == '1'){
			$tree['labelStyle'] .= " overdue_task";
		}
		
		$tree['id'] = $row['id'];
		$tree['label'] = $row['name'];
		$tree['type'] = 'text';
		$tree['href'] = "index.php?module=Tasks&action=DetailView&record={$row['id']}";
		$tree['title'] = "Assignee: ".get_assigned_user_name($row['assigned_user_id'])." | Due: ".$timedate->to_display_date_time($row['date_due']);
		$tree['expanded'] = true;
		$tree['children'] = build_child_tree($row['id'], array($row['id']));
		
		$hidePending = isset($_REQUEST['pending_only']) && $_REQUEST['pending_only'] == '1';
		$hideOld = isset($_REQUEST['more_then_90']) && $_REQUEST['more_then_90'] == '1';
		
		if($hidePending || $hideOld){
			if(!empty($tree['children'])){
				hideTasks($hidePending, $hideOld, $tree['children']);
			}
		}
		
		return $tree;
	}
}

function hideTasks($hidePending = false, $hideOld = false, &$children = array()){
	if(!empty($children)){
		foreach($children as $k => $child){
			if(!empty($child['children'])){
				hideTasks($hidePending, $hideOld, $child['children']);
			}
			
			//Hiding if have empty children
			if(
				empty($child['children']) &&
				(
					($hidePending && ($child['status'] == 'Pending' || $child['status'] == 'Pending Input')) ||
					($hideOld && $child['old_task'] == '1')
				)
			){
				unset($children[$k]);
			}
		}
		
		//reorganising array
		$tmp = $children;
		$children = array();
		foreach($tmp as $c){
			$children[] = $c;
		}
	}
}

function build_child_tree($id, $added_nodes = array()) {
    global $db, $users, $timedate;
    
	$sql = "SELECT ".
				"id, name, status, parent_tasks_id, assigned_user_id, date_due, ".
				"IF(date_due < now() AND status != 'Completed', 1, 0) as over_due, ".
				"IF(date_due <= DATE_SUB(NOW(), INTERVAL 90 DAY), 1, 0) as old_task ".
			"FROM tasks WHERE parent_tasks_id = '{$id}' AND deleted=0";
    $result = $db->query($sql);

	$childs_array = array();
	while ($row = $db->fetchByAssoc($result)){
		if(!in_array($row['id'], $added_nodes)){
			$added_nodes[] = $row['id'];
		
			$node = array();
			
			$node['labelStyle'] = "ygtvlabel";
			
			if($row['status'] == 'Not Started' || $row['status'] == 'In Progress'){
				$node['labelStyle'] .= " active_task";
			}else if($row['status'] == 'Completed'){
				$node['labelStyle'] .= " completed_task";
			}
			
			if($row['over_due'] == '1'){
				$node['labelStyle'] .= " overdue_task";
			}
			
			$node['id'] = $row['id'];
			$node['label'] = $row['name'];
			$node['old_task'] = $row['old_task'];
			$node['status'] = $row['status'];
			$node['type'] = 'text';
			$node['href'] = "index.php?module=Tasks&action=DetailView&record={$row['id']}";
			$node['title'] = "Assignee: ".get_assigned_user_name($row['assigned_user_id'])." | Due: ".$timedate->to_display_date_time($row['date_due']);
			$node['expanded'] = true;
			$node['children'] = build_child_tree($row['id'], $added_nodes);
			
			$childs_array[] = $node;
		}
	}
	
    return $childs_array;
}

if($_REQUEST['included']===true)
{
	echo "
	<script type='text/javascript'>
		tree_data1 = ".json_encode($final).";
	</script>";
}
else
{
	ob_clean();
	echo json_encode($final);
	exit();
}

?>