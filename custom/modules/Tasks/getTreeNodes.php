<?php

global $db, $current_user, $timedate;
$id = $_REQUEST['id'];
$name = $_REQUEST['name'];
$final = array();

$final = getStart($id);
$GLOBALS['users'] = getUserList();
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
function getStart($id)
{
	global $db, $final, $users, $timedate;
	$final = array();
	$query = "SELECT id, name, parent_tasks_id, assigned_user_id, date_due FROM tasks WHERE id='{$id}' AND deleted=0";
	$res = $db->query($query);
	$res = $db->fetchByAssoc($res);
	if(!empty($res['parent_tasks_id']))
		return getStart($res['parent_tasks_id']);
	else
	{
		$final['id'] = $res['id'];
		$final['type'] = 'text';
		$final['label'] = $res['name'];
		$final['href'] = "index.php?module=Tasks&action=DetailView&record={$res['id']}";
		$final['title'] = "Assignee: ".get_assigned_user_name($res['assigned_user_id'])." | Due: ".$timedate->to_display_date_time($res['date_due']);
		$final['expanded'] = true;
		$final['children'] = child_parent_recursive($res['id']);
		return $final;
	}
}

function child_parent_recursive($id, $visited_child = array()) {
    global $db, $users, $timedate;
    $childs_array = '';

    if (in_array($id, $visited_child)) 
	{
        return;
    }
    $visited_child[] = $id;
    $sql = "SELECT id, name, parent_tasks_id, assigned_user_id, date_due FROM tasks WHERE parent_tasks_id = '{$id}' AND deleted=0";
    $result = $db->query($sql);
	while ($row = $db->fetchByAssoc($result)) 
	{
		$childs = child_parent_recursive($row['id'], $visited_child); 
		$childs_array [] = array(
			'id' => $row['id'],
			'type' => 'text',
			'expanded' => true,
			'label' => $row['name'],
			'record_id' => $row['id'],
			'href' => "index.php?module=Tasks&action=DetailView&record={$row['id']}",
			'title' => "Assignee: ".get_assigned_user_name($row['assigned_user_id'])." | Due: ".$timedate->to_display_date_time($row['date_due']),
			'children' => $childs,
		);
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