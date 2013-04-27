<?php

$hook_version = 1;

$hook_array['before_save'][] = Array(1, 'account_history', 'custom/modules/av_Accounts/av_AccountsHook.php', 'av_AccountsHook', 'checkChange');
$hook_array['after_save'][] = Array(1, 'stampIt', 'custom/modules/av_Accounts/av_AccountsHook.php', 'av_AccountsHook', 'stampIt');

$hook_array['process_record'] = Array(); 
$hook_array['process_record'][] = Array(1, 'change date color in listveiw', 'custom/modules/av_Accounts/av_AccountsHook.php','av_AccountsHook', 'processRecord');
?>
