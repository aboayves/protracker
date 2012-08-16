<?php
$hook_version = 1; 
$hook_array = Array(); 
// position, file, function  
$hook_array['after_retrieve'] = Array(); 
//$hook_array['after_retrieve'][] = Array(1, 'make html for relationship fields', 'custom/modules/rt_Group_Membership/theHook4rt_Group_Membership.php','theHook4rt_Group_Membership', 'fetchOtherValues'); 
$hook_array['before_save'] = Array(); 
$hook_array['before_save'][] = Array(1, 'before save things to do', 'custom/modules/rt_Group_Membership/theHook4rt_Group_Membership.php','theHook4rt_Group_Membership', 'beforeSaveThingsToDo'); 
$hook_array['after_save'] = Array(); 
//$hook_array['after_save'][] = Array(1, 'after save things to do', 'custom/modules/rt_Group_Membership/theHook4rt_Group_Membership.php','theHook4rt_Group_Membership', 'afterSaveThingsToDo'); 


?>