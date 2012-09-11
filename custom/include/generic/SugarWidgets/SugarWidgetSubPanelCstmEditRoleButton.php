<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

class SugarWidgetSubPanelCstmEditRoleButton extends SugarWidgetSubPanelEditButton
{
	function displayHeaderCell(&$layout_def)
	{
		return '&nbsp;';
	}

	function displayList(&$layout_def)
	{
		global $app_strings;
        global $subpanel_item_count;
        $unique_id = $layout_def['subpanel_id']."_edit_".$subpanel_item_count; //bug 51512
	
		$href = 'index.php?module=' . $layout_def['target']
			. '&action=' . $layout_def['action']
			. '&record=' . $layout_def['fields'][strtoupper($layout_def['id_field'])]
			. '&return_module=' . $_REQUEST['module']
			. '&return_action=' . 'DetailView'
			. '&return_id=' . $_REQUEST['record'];
			
		//based on listview since that lets you select records
		if($layout_def['ListView']){
			return '<a href="' . $href . '"'
				. "id=\"$unique_id\""
				. 'class="listViewTdToolsS1">' . $app_strings['LNK_EDIT'] .'</a>&nbsp;';
		}else{
			return '';
		}
	}
}

?>