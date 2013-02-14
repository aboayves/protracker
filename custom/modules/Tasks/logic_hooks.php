<?php
// Do not store anything in this file that is not part of the array or the hook version.  This file will	
// be automatically rebuilt in the future. 
 $hook_version = 1; 
$hook_array = Array(); 
// position, file, function 
$hook_array['before_save'] = Array(); 
$hook_array['before_save'][] = Array(1, 'workflow', 'include/workflow/WorkFlowHandler.php','WorkFlowHandler', 'WorkFlowHandler'); 
$hook_array['before_save'][] = Array(1, 'tasks_status_change_file', 'custom/modules/Tasks/stamp.php','task_status_change', 'stamp_completion');
$hook_array['before_save'][] = Array(2, 'tasks_status_change_file', 'custom/modules/Tasks/stamp.php','task_status_change', 'setStatus');
$hook_array['after_save'] = Array(); 
$hook_array['after_save'][] = Array(2, 'tasks_status_activate_file', 'custom/modules/Tasks/stamp.php','task_status_change', 'activate_child');
$hook_array['before_save'][] = Array(1, 'attach_to_group_id', 'custom/modules/Tasks/AttachToGroupId_hook.php','AttachToGroupId', 'assign_members');

$hook_array['after_retrieve'] = Array(); 
$hook_array['after_retrieve'][] = Array(1, 'dirty fix for the task-task 1-M relationship for parent_tasks_id.', 'custom/modules/Tasks/taskhooks.php','taskhooks', 'fix_parent_id'); 

$hook_array['process_record'] = Array(); 
$hook_array['process_record'][] = Array(1, 'change date color in listveiw', 'custom/modules/Tasks/processRecordLogic.php','process_record', 'process_record');


?>