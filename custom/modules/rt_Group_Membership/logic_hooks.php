<?php
$hook_version = 1; 
$hook_array = Array(); 
// position, file, function 
$hook_array['before_save'] = Array(); 
$hook_array['before_save'][] = Array(1, 'before save things to do', 'custom/modules/rt_Group_Membership/theHook4rt_Group_Membership.php','theHook4rt_Group_Membership', 'beforeSaveThingsToDo');


?>