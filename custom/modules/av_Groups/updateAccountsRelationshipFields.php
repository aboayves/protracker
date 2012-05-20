<?php
global $db;
$sql="UPDATE av_groups_accounts_c SET {$_REQUEST['field']}={$_REQUEST['value']} WHERE deleted=0 AND av_groups_accountsav_groups_ida='{$_REQUEST['group_id']}' AND av_groups_accountsaccounts_idb='{$_REQUEST['account_id']}'";
$db->query($sql);
?>