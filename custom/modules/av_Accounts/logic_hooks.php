<?php

$hook_version = 1;

$hook_array['before_save'][] = Array(1, 'account_history', 'custom/modules/av_Accounts/account_history.php', 'checkChangeClass', 'checkChange');
$hook_array['after_save'][] = Array(1, 'stampIt', 'custom/modules/av_Accounts/account_history.php', 'checkChangeClass', 'stampIt');
?>
