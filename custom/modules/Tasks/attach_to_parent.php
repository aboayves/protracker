<?php
/* Assigning Child Tasks to Parent Tasks */
global $db;
if($_REQUEST['id'])
{
    $query_select = "SELECT parent_tasks_id FROM tasks WHERE id = '{$_REQUEST['id']}' AND deleted=0 LIMIT 1 ";
    $parent = $db->query($query_select);
    $parent = $db->fetchByAssoc($parent);
    $parentTaskID = $parent['parent_tasks_id'];
//    if(!empty($parentTaskID))
	{
        $query_update = "UPDATE tasks SET parent_tasks_id = '{$parentTaskID}' WHERE parent_tasks_id = '{$_REQUEST['id']}'";
        $db->query($query_update);
    }
	$query_delete = "UPDATE tasks SET deleted = 1 WHERE id = '".$_REQUEST['id']."'";
	$db->query($query_delete);
}
exit();
?>