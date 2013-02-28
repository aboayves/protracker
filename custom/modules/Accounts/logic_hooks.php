<?php
$hook_array['process_record'] = Array();
$hook_array['process_record'][] = Array(1, 'delete multiple record checkbox', 'custom/modules/Accounts/AccountsHook.php', 'AccountsHook', 'delete_multiple_record');
$hook_array['before_save'] = Array();
$hook_array['before_save'][] = Array(1, ' sync communicaton tab', 'custom/modules/Accounts/AccountsHook.php', 'AccountsHook', 'sync_communicaton_tab');
$hook_array['after_save'] = Array();
$hook_array['after_save'][] = Array(1, ' sync email address', 'custom/modules/Accounts/AccountsHook.php', 'AccountsHook', 'sync_email_address');
?>