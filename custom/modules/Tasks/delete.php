<?php
global $db;
$id = $_REQUEST['record'];
$the_hierarchy = get_hierarchy($id);
function get_hierarchy($id)
{
	global $db;
	$task_ids = array($id, );
	$sql = "SELECT id FROM tasks WHERE parent_tasks_id='{$id}' AND deleted=0";
	$result = $db->query($sql);
	while($row = $db->fetchByAssoc($result))
	{
		$task_ids = array_merge($task_ids, get_hierarchy($row['id']));
	}
	return $task_ids;
}
if(count($the_hierarchy))
{
	$the_hierarchy = implode("', '",$the_hierarchy);
	$the_hierarchy = "'{$the_hierarchy}'";
	$sql = "UPDATE tasks SET deleted=1 WHERE id IN ({$the_hierarchy});";
	$db->query($sql);
}
// doing the post delete.. copied from the SugarController.php function post_detele
	$return_module = isset($_REQUEST['return_module']) ?
		$_REQUEST['return_module'] :
		$GLOBALS['sugar_config']['default_module'];
	$return_action = isset($_REQUEST['return_action']) ?
		$_REQUEST['return_action'] :
		$GLOBALS['sugar_config']['default_action'];
	$return_id = isset($_REQUEST['return_id']) ?
		$_REQUEST['return_id'] :
		'';
	$url = "index.php?module=".$return_module."&action=".$return_action."&record=".$return_id;

	//eggsurplus Bug 23816: maintain VCR after an edit/save. If it is a duplicate then don't worry about it. The offset is now worthless.
	if(isset($_REQUEST['offset']) && empty($_REQUEST['duplicateSave'])) {
		$url .= "&offset=".$_REQUEST['offset'];
	}
	SugarApplication::redirect($url);