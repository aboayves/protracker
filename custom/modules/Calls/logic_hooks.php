<?php
// Do not store anything in this file that is not part of the array or the hook version.  This file will	
// be automatically rebuilt in the future. 
 $hook_version = 1; 
$hook_array = Array(); 
// position, file, function 
$hook_array['before_save'] = Array(); 
$hook_array['before_save'][] = Array(1, 'workflow', 'include/workflow/WorkFlowHandler.php','WorkFlowHandler', 'WorkFlowHandler'); 
$hook_array['after_save'] = Array();
$hook_array['after_save'][] = Array(1,'ScheduleCall', 'custom/modules/Calls/CallsHook.php', 'CallsHook', 'saveCalls');

$hook_array['process_record'] = Array(); 
$hook_array['process_record'][] = Array(1, 'change date color in listveiw', 'custom/modules/Calls/CallsHook.php','CallsHook', 'processRecord');


?>