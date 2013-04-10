<?php
// Do not store anything in this file that is not part of the array or the hook version.  This file will	
// be automatically rebuilt in the future. 
 $hook_version = 1; 
$hook_array = Array(); 
// position, file, function 
$hook_array['before_save'] = Array(); 
$hook_array['before_save'][] = Array(1, 'Contacts push feed', 'modules/Contacts/SugarFeeds/ContactFeed.php','ContactFeed', 'pushFeed'); 
$hook_array['after_ui_frame'] = Array(); 
$hook_array['process_record'] = Array(); 
$hook_array['process_record'][] = Array(1, 'make html for relationship fields', 'custom/modules/Contacts/theHook4Contacts.php','theHook4Contacts', 'makeHTML4RelateFields'); 



?>