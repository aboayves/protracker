<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

class SugarWidgetSubPanelTopButtonQuickCreateCustom extends SugarWidgetSubPanelTopButtonQuickCreate
{
	function &_get_form($defines, $additionalFormFields = null)
	{
		$this->module = $defines['module'];
		$this->form_value = "Create";
		
		if(isset($defines['focus']->team_id))$additionalFormFields['team_id'] = $defines['focus']->team_id;
		if(isset($defines['focus']->team_set_id))$additionalFormFields['team_set_id'] = $defines['focus']->team_set_id;
		if(isset($defines['focus']->id))$additionalFormFields['account_id'] = $defines['focus']->id;
		if(isset($defines['focus']->name))$additionalFormFields['accounts_name'] = $defines['focus']->name;

		$button = parent::_get_form($defines, $additionalFormFields);

		return $button;
	}
}
?>
