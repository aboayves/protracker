<?php
class ReportsHook
{
	function return_to_groups_popup($bean, $event, $arguments) 
	{	
		if(strpos($_SERVER["HTTP_REFERER"], 'selected_report_module') && (strpos($_SERVER["HTTP_REFERER"], 'Contacts') || strpos($_SERVER["HTTP_REFERER"], 'Accounts') ))
		{
			$url="index.php?module=Reports&action=Popup&query=true&module_name=".$bean->module.
			     "&hide_clear_button=true&mode=Single&create=true&metadata=undefined&selected=".$bean->id;
			SugarApplication::redirect($url);  
		}
	
	}
}
?>