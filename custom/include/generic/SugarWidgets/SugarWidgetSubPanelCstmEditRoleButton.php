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
		global $app_strings, $db;
        global $subpanel_item_count;
        $unique_id = $layout_def['subpanel_id']."_edit_".$subpanel_item_count; //bug 51512
		$sql ="SELECT av_group_membership.id FROM av_group_membership WHERE av_groups_id = '{$_REQUEST['record']}'
				AND parent_id='{$layout_def['fields']['ID']}' AND deleted=0 LIMIT 1";
		$group_member_id = $db->fetchByAssoc($db->query($sql));
		$href = 'index.php?module=' . $layout_def['target']
			. '&action=' . $layout_def['action']
			. '&record=' . $group_member_id['id']
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