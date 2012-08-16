<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

class SugarWidgetSubPanelTopButtonQuickCreateGroupMembershipFromClients extends SugarWidgetSubPanelTopButtonQuickCreate
{
	function &_get_form($defines, $additionalFormFields = null)
	{
		global $app_strings;
		global $currentModule;
		$this->module = $defines['module'];
		$this->form_value = "Create";
		$button = parent::_get_form($defines, $additionalFormFields = null);

		$button .= "<input type='hidden' name='name' value='{$defines['focus']->name}' />\n";
		$button .= "<input type='hidden' name='envelope' value='{$defines['focus']->envelope}' />" . "\n";

		return $button;
	}
}
?>
