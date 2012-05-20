<?php
global $db;
$sql="UPDATE av_groups_contacts_c SET {$_REQUEST['field']}={$_REQUEST['value']} WHERE deleted=0 AND av_groups_contactsav_groups_ida='{$_REQUEST['group_id']}' AND av_groups_contactscontacts_idb='{$_REQUEST['contact_id']}'";
$db->query($sql);
?>