<?php
$hook_version = 1;
$hook_array = Array();
$hook_array['after_save'] = Array();
$hook_array['after_save'][] = Array(1,'DocumentHooks', 'custom/modules/Documents/DocumentsHook.php', 'DocumentsHook', 'SaveDocument');

$hook_array['process_record'] = Array(); 
$hook_array['process_record'][] = Array(1, 'List View Source', 'custom/modules/Documents/DocumentsHook.php','DocumentsHook', 'ListViewSource');

?>