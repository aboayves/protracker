<?php
// Do not store anything in this file that is not part of the array or the hook version.  This file will	
// be automatically rebuilt in the future. 
 $hook_version = 1; 
$hook_array = Array(); 
// position, file, function 
$hook_array['after_login'] = Array(); 
$hook_array['after_login'][] = Array(1, 'SugarFeed old feed entry remover', 'custom/modules/SugarFeed/SugarFeedFlushCstm.php','SugarFeedFlushCstm', 'flushStaleEntries'); 
$hook_array['after_save'][] = Array(1, 'singleSignOnHook', 'custom/modules/Users/UsersHook.php','UsersHook', 'delete_or_deactivate'); 
$hook_array['before_save'] = Array();
$hook_array['before_save'][] = Array(1, 'singleSignOnHook', 'custom/modules/Users/UsersHook.php','UsersHook', 'create_or_activate'); 

?>