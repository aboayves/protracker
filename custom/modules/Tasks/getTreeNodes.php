<?php

global $db, $current_user, $timedate;

$id = $_REQUEST['id'];
$name = $_REQUEST['name'];
$final = array();

if(!isset($_REQUEST['included'])){
	$_SESSION['pending_only'] = $_REQUEST['pending_only'];
	$_SESSION['more_then_90'] = $_REQUEST['more_then_90'];
}

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
	global $db, $final, $users, $timedate, $app_list_strings;
	
	$visited_parent[] = $id;
	
	$query = "SELECT ".
					"id, name, status, parent_tasks_id, assigned_user_id, date_due, ".
					"IF(date_due IS NOT NULL AND TRIM(date_due) != '' AND date_due != '0000-00-00 00:00:00' AND date_due < now() AND status != 'Completed', 1, 0) as over_due ".
			"FROM tasks ".
			"WHERE id='{$id}' AND deleted=0";
	$res = $db->query($query);
	$row = $db->fetchByAssoc($res);
	if(!empty($row['parent_tasks_id']) && !in_array($row['parent_tasks_id'], $visited_parent)){
		return getStart($row['parent_tasks_id'], $visited_parent);
	}else{
		$tree = array();
		
		$tree['contentStyle'] = "ygtvhtml";
			
		if($row['status'] == 'Not Started' || $row['status'] == 'In Progress'){
			$tree['contentStyle'] = " active_task";
		}else if($row['status'] == 'Completed'){
			$tree['contentStyle'] = " completed_task";
		}
		
		if($row['over_due'] == '1'){
			$tree['contentStyle'] = " overdue_task";
		}
			
		if(!empty($row['date_due'])){
			if($row['date_due'] == '0000-00-00 00:00:00'){
				$row['date_due'] = '';
			}else{
				$row['date_due'] = $timedate->to_display_date_time($row['date_due']);
			}
		}
		
		$row['category'] = $app_list_strings['task_category_list'][$row['category']];
		
		$tree['id'] = $row['id'];
		$tree['label'] = $row['name'];
		$tree['html'] = "<table>
							<tr>
								<th id='name' title='Name'>Name</th>
								<th width='200px' title='Category'>Category</th>
								<th width='180px' title='Assignee'>Assignee</th>
								<th width='135px' title='Due Date'>Due Date</th>
							</tr>
							<tr>
								<td id='name' title='Name' ><div class={$tree['contentStyle']}><a href='index.php?module=Tasks&action=DetailView&record={$row['id']}'>{$row['name']}</a></div></td>
								<td width='200px' title='Category'>{$row['category']}</td>
								<td width='180px' title='Assignee'>".get_assigned_user_name($row['assigned_user_id'])."</td>
								<td width='135px' title='Due Date'>".$row['date_due']."</td>
							</tr>
						 </table>";
		$tree['type'] = 'HTML';
		$tree['href'] = "index.php?module=Tasks&action=DetailView&record={$row['id']}";
		$tree['title'] = "Assignee: ".get_assigned_user_name($row['assigned_user_id'])." | Due: ".$row['date_due'];
		$tree['expanded'] = true;
		$tree['children'] = build_child_tree($row['id'], array($row['id']));
		
		$hidePending = isset($_SESSION['pending_only']) && $_SESSION['pending_only'] == '1';
		$hideOld = isset($_SESSION['more_then_90']) && $_SESSION['more_then_90'] == '1';
		
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
		$tmp = $children;
		$children = array();
		
		foreach($tmp as $child){
			if(!empty($child['children'])){
				hideTasks($hidePending, $hideOld, $child['children']);
			}
			
			//Hiding if have empty children
			if(!(
				empty($child['children']) &&
				(
					($hidePending && ($child['status'] == 'Pending' || $child['status'] == 'Pending Input')) ||
					($hideOld && $child['old_task'] == '1')
				)
			)){
				$children[] = $child;
			}
		}
	}
}

function build_child_tree($id, $added_nodes = array()) {
    global $db, $users, $timedate, $app_list_strings;
    
	$sql = "SELECT ".
				"id, name, status, category, parent_tasks_id, assigned_user_id, date_due, ".
				"IF(date_due IS NOT NULL AND TRIM(date_due) != '' AND date_due != '0000-00-00 00:00:00' AND date_due < now() AND status != 'Completed', 1, 0) as over_due, ".
				"IF(date_due <= DATE_SUB(NOW(), INTERVAL 90 DAY) OR date_due >= DATE_ADD(NOW(), INTERVAL 90 DAY), 1, 0) as old_task ".
			"FROM tasks WHERE parent_tasks_id = '{$id}' AND deleted=0";
    $result = $db->query($sql);

	$childs_array = array();
	while ($row = $db->fetchByAssoc($result)){
		if(!in_array($row['id'], $added_nodes)){
			$added_nodes[] = $row['id'];
		
			$node = array();
			
			$node['contentStyle'] = "ygtvhtml";
			
			if($row['status'] == 'Not Started' || $row['status'] == 'In Progress'){
				$node['contentStyle'] = " active_task";
			}else if($row['status'] == 'Completed'){
				$node['contentStyle'] = " completed_task";
			}
			if($row['over_due'] == '1'){
				$node['contentStyle'] = " overdue_task";
			}
			if(!empty($row['date_due'])){
				if($row['date_due'] == '0000-00-00 00:00:00'){
					$row['date_due'] = '';
				}else{
					$row['date_due'] = $timedate->to_display_date_time($row['date_due']);
				}
			}
			
			$row['category'] = $app_list_strings['task_category_list'][$row['category']];
			
			$node['id'] = $row['id'];
			$node['label'] = $row['name'];
			$node['html'] = "<table>
								<tr>
									<td id='name' title='Name' ><div class={$node['contentStyle']}><a href='index.php?module=Tasks&action=DetailView&record={$row['id']}'>{$row['name']}</a></div></td>
									<td width='200px' title='Category'>{$row['category']}</td>
									<td width='180px' title='Assignee'>".get_assigned_user_name($row['assigned_user_id'])."</td>
									<td width='135px' title='Due Date'>".$row['date_due']."</td>
								</tr>
							</table>";
			$node['old_task'] = $row['old_task'];
			$node['status'] = $row['status'];
			$node['type'] = 'HTML';
			$node['href'] = "index.php?module=Tasks&action=DetailView&record={$row['id']}";
			$node['title'] = "Assignee: ".get_assigned_user_name($row['assigned_user_id'])." | Due: " . $row['date_due'];
			$node['expanded'] = true;
			$node['children'] = build_child_tree($row['id'], $added_nodes);
			
			$childs_array[] = $node;
		}
	}
	
    return $childs_array;
}

$GLOBALS['users'] = getUserList();
$final = getStart($id);

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