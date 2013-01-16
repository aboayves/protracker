<?php
$hook_array['after_relationship_add'] = Array();
$hook_array['after_relationship_add'][] = Array(1, 'populateMembers', 'custom/modules/av_Groups/theHook4populateMembers.php', 'PopulateMembers', 'populateMembersFunc');
$hook_array['before_save'] = Array();
$hook_array['before_save'][] = Array(1, 'update_last_date_hook', 'custom/modules/av_Groups/update_last_date_hook.php', 'update_last_date', 'update_last_date_fun');
?>