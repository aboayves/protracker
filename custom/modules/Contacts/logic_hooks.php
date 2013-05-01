<?php
// Do not store anything in this file that is not part of the array or the hook version.  This file will	
// be automatically rebuilt in the future. 
 $hook_version = 1; 
$hook_array = Array(); 
// position, file, function 
$hook_array['before_save'] = Array(); 
$hook_array['before_save'][] = Array(1, 'Contacts push feed', 'modules/Contacts/SugarFeeds/ContactFeed.php','ContactFeed', 'pushFeed'); 

$hook_array['process_record'] = Array();
$hook_array['process_record'][] = Array(2, 'delete multiple record checkbox', 'custom/modules/Contacts/ContactsHook.php', 'ContactsHook', 'delete_multiple_record');

$hook_array['after_relationship_add'] = Array(); 
$hook_array['after_relationship_add'][] = Array(1, 'hookName', 'custom/modules/Contacts/ContactsHook.php','ContactsHook', 'relatioshipAdd'); 

$hook_array['before_save'][] = Array(1, 'sync communicaton tab', 'custom/modules/Contacts/ContactsHook.php', 'ContactsHook', 'sync_communicaton_tab');
$hook_array['after_save'] = Array();
$hook_array['after_save'][] = Array(1, 'sync email address', 'custom/modules/Contacts/ContactsHook.php', 'ContactsHook', 'sync_email_address');

?>