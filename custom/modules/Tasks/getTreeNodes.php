<?php

global $db;
$id = $_REQUEST['id'];
$name = $_REQUEST['name'];
$final['type'] = 'text';
$final['label'] = $name;
$final['expanded'] = true;
$final['children'] = getID($id, $name);

function getID($id) {
    global $db;
    $visited_child = '';
    $query = "SELECT id, name FROM tasks WHERE parent_tasks_id = '" . $id . "'";
    $ids[$name] = $id;
    $result = $db->query($query);

    if ($result->num_rows > 0) {
        while ($row = $db->fetchByAssoc($result)) {
            $childs = child_parent_recursive($row['id'], $visited_child);
            $childs_array [] = array(
                'type' => 'text',
                'expanded' => true,
                'label' => $row["name"],
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
    $sql = "SELECT id, name FROM tasks WHERE parent_tasks_id = '" . $user . "'";
    $result = $db->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $db->fetchByAssoc($result)) {
            $childs = child_parent_recursive($row["users_child_id"], $visited_child); //if more child exists
            $childs_array [] = array(
                'type' => 'text',
                'expanded' => true,
                'label' => $row["name"],
                'children' => $childs,
            );
        }
    }
    return $childs_array;
}

ob_clean();
echo json_encode($final);
exit();
?>