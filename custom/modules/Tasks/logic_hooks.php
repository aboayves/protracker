<?php
// Do not store anything in this file that is not part of the array or the hook version.  This file will	
// be automatically rebuilt in the future. 
 $hook_version = 1; 
$hook_array = Array(); 
// position, file, function 
$hook_array['before_save'] = Array(); 
$hook_array['before_save'][] = Array(1, 'workflow', 'include/workflow/WorkFlowHandler.php','WorkFlowHandler', 'WorkFlowHandler'); 
$hook_array['before_save'][] = Array(1, 'tasks_status_change_file', 'custom/modules/Tasks/TasksHook.php','TasksHook', 'stamp_completion');
$hook_array['before_save'][] = Array(2, 'tasks_status_change_file', 'custom/modules/Tasks/TasksHook.php','TasksHook', 'setStatus');
$hook_array['after_save'] = Array(); 
$hook_array['after_save'][] = Array(2, 'tasks_status_activate_file', 'custom/modules/Tasks/TasksHook.php','TasksHook', 'activate_child');
$hook_array['before_save'][] = Array(1, 'assign members', 'custom/modules/Tasks/TasksHook.php','TasksHook', 'assign_members');

$hook_array['after_retrieve'] = Array(); 
$hook_array['after_retrieve'][] = Array(1, 'dirty fix for the task-task 1-M relationship for parent_tasks_id.', 'custom/modules/Tasks/TasksHook.php','TasksHook', 'fix_parent_id'); 

$hook_array['process_record'] = Array(); 
$hook_array['process_record'][] = Array(1, 'change date color in listveiw', 'custom/modules/Tasks/TasksHook.php','TasksHook', 'processRecord');


?>