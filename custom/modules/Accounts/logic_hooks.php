<?php
$hook_array['process_record'] = Array();
$hook_array['process_record'][] = Array(1, 'delete multiple record checkbox', 'custom/modules/Accounts/AccountsHook.php', 'AccountsHook', 'delete_multiple_record');
$hook_array['before_save'] = Array();
$hook_array['before_save'][] = Array(1, ' sync communicaton tab', 'custom/modules/Accounts/AccountsHook.php', 'AccountsHook', 'sync_communicaton_tab');
$hook_array['after_save'] = Array();
$hook_array['after_save'][] = Array(1, ' sync email address', 'custom/modules/Accounts/AccountsHook.php', 'AccountsHook', 'sync_email_address');
$hook_array['after_relationship_add'] = Array();
$hook_array['after_relationship_add'][] = Array(1, 'set first contact to primary', 'custom/modules/Accounts/AccountsHook.php', 'AccountsHook', 'setFirstContactToPrimary');
$hook_array['after_relationship_add'][] = Array(2, 'clear old relationships', 'custom/modules/Accounts/AccountsHook.php', 'AccountsHook', 'clearOldRelationships');
$hook_array['before_delete'] = Array();
$hook_array['before_delete'][] = Array(1, 'delete child records', 'custom/modules/Accounts/AccountsHook.php', 'AccountsHook', 'delete_child_records');

?>