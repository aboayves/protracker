<?php
// Do not store anything in this file that is not part of the array or the hook version.  This file will	
// be automatically rebuilt in the future. 
$hook_version = 1; 
$hook_array = Array(); 

$hook_array['after_save'] = Array(); 
$hook_array['after_save'][] = Array(1, 'attach_to_group_id', 'custom/modules/Meetings/ScheduleMeeting_hook.php','ScheduleMeeting', 'assign_meeting');

$hook_array['process_record'] = Array(); 
$hook_array['process_record'][] = Array(1, 'change date color in listveiw', 'custom/modules/Meetings/processRecordLogic.php','process_record', 'process_record');


?>