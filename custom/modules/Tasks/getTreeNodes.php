<?php

global $db;
$id = $_REQUEST['id'];
$name = $_REQUEST['name'];
$final['type'] = 'text';
$final['label'] = $name;
$final['expanded'] = true;
$final['children'] = getID($id, $name);

getID($id);
function getStart($id)
{
	global $db;
	$query = "SELECT id, parent_tasks_id FROM tasks WHERE id='{$id}' AND deleted=0";
	$res = $db->query($query);
	$res = $db->fetchByAssoc($res);
	if(!empty($res['parent_tasks_id']))
		getStart($res['parent_tasks_id']);
	getID($res['id']);
}
function getID($id) {
    global $db;
    $visited_child = '';
    $query = "SELECT id, name FROM tasks WHERE parent_tasks_id = '" . $id . "' AND deleted=0";
    $ids[$name] = $id;
    $result = $db->query($query);

    if ($result->num_rows > 0) {
        while ($row = $db->fetchByAssoc($result)) {
            $childs = child_parent_recursive($row['id'], $visited_child);
            $childs_array [] = array(
                'type' => 'text',
                'expanded' => true,
                'label' => $row["name"],
				'href' => "index.php?module=Tasks&action=DetailView&record={$row['id']}",
                'children' => $childs,
            );
        }
        return $childs_array;
    }
}

function child_parent_recursive($user, $visited_child) {
    global $db;
    $childs_array = '';

    if (strstr($visited_child, $user)) { // To break the loop
        return; // return if loop exist
    }
    $visited_child .= ' ' . $user; // add user to pevious list
    $sql = "SELECT id, name FROM tasks WHERE parent_tasks_id = '" . $user . "' AND deleted=0";
    $result = $db->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $db->fetchByAssoc($result)) {
            $childs = child_parent_recursive($row["id"], $visited_child); //if more child exists
            $childs_array [] = array(
                'type' => 'text',
                'expanded' => true,
                'label' => $row["name"],
				'href' => "index.php?module=Tasks&action=DetailView&record={$row['id']}",
                'children' => $childs,
            );
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