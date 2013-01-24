<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

class SugarWidgetSubPanelCstmEditAccount extends SugarWidgetSubPanelEditButton
{
	function displayList($layout_def)
	{
		global $app_strings;
        global $subpanel_item_count;
		$unique_id = $layout_def['subpanel_id']."_edit_".$subpanel_item_count; //bug 51512
        $onclick ='';
		$formname = "formformaccounts_av_accounts";

		$onclick = "document.forms['{$formname}'].record.value='{$layout_def['fields']['ID']}';";
		$onclick .= "document.forms['{$formname}'].action.value='SubpanelEdits';";
		$onclick .= "retValz = SUGAR.subpanelUtils.sendAndRetrieve('" . $formname
			. "', 'subpanel_" . $layout_def['subpanel_id'] . "', '" . addslashes($app_strings['LBL_LOADING'])
			. "', '" . $layout_def['subpanel_id'] . "');";
		$onclick .= "document.forms['{$formname}'].record.value='';retValz;return false;";


		if($layout_def['EditView'] && $this->isQuickCreateValid($layout_def['module'],$layout_def['subpanel_id'])){
			return '<a href="#" class="listViewTdToolsS1" id="'.$unique_id .'" onclick="' . $onclick . '">' .
                      $app_strings['LNK_EDIT'] .'</a>';
		}else
        if($layout_def['EditView']) {
			return "<a href='#' onMouseOver=\"javascript:subp_nav('".$layout_def['module']."', '".$layout_def['fields']['ID']."', 'e', this"
			. (empty($layout_def['linked_field']) ? "" : ", '{$layout_def['linked_field']}'") . ");\""
			. " onFocus=\"javascript:subp_nav('".$layout_def['module']."', '".$layout_def['fields']['ID']."', 'e', this"
			. (empty($layout_def['linked_field']) ? "" : ", '{$layout_def['linked_field']}'") . ");\""
			. " class='listViewTdToolsS1' id=\"$unique_id\">". $app_strings['LNK_EDIT'] .'</a>';
		}

        return '';
    }
}

?>