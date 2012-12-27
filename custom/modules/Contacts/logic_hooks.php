<?php
// Do not store anything in this file that is not part of the array or the hook version.  This file will	
// be automatically rebuilt in the future. 
 $hook_version = 1; 
$hook_array = Array(); 
// position, file, function 
$hook_array['before_save'] = Array(); 
$hook_array['before_save'][] = Array(1, 'Contacts push feed', 'modules/Contacts/SugarFeeds/ContactFeed.php','ContactFeed', 'pushFeed'); 

$hook_array['before_save'][] = Array(2, 'Customised Contact Hook', 'custom/modules/Contacts/ContactHook.php','ContactHook', 'beforeSave'); 
$hook_array['process_record'] = Array();
$hook_array['process_record'][] = Array(2, 'delete_multiple_record_contact', 'custom/modules/Contacts/delete_multiple_record_contact.php', 'delete_multiple_record_contact', 'delete_multiple_record_contact_fun');
?>