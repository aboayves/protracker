<?php
class taskhooks
{
	//dirty fix for the task-task 1-M relationship.
	function fix_parent_id(&$bean, $event, $arguments)
	{
		global $db;
		$parent_tasks_id = $db->query("
			SELECT t1.parent_tasks_id, t2.name 
			FROM tasks AS t1 
			LEFT JOIN tasks AS t2 
				ON (t2.deleted=0 AND t2.id=t1.parent_tasks_id) 
			WHERE t1.id='{$bean->id}' 
			LIMIT 1;
		");
		$parent_tasks_id = $db->fetchByAssoc($parent_tasks_id);
		$bean->parent_tasks_id = $parent_tasks_id['parent_tasks_id'];
		$bean->parent_tasks_name = $parent_tasks_id['name'];
	}
}