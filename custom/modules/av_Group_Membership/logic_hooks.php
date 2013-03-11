<?php
$hook_version = 1; 
$hook_array = Array(); 
// position, file, function 
$hook_array['before_save'] = Array(); 
$hook_array['before_save'][] = Array(1, 'before save things to do', 'custom/modules/av_Group_Membership/av_Group_MembershipHook.php','av_Group_MembershipHook', 'beforeSaveThingsToDo');


?>