<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

class SugarWidgetSubPanelTopButtonQuickCreateFromContactsCstm extends SugarWidgetSubPanelTopButtonQuickCreate
{
	function &_get_form($defines, $additionalFormFields = null)
	{
		global $app_strings;
		global $currentModule;
		$this->module = $defines['module'];
		$this->form_value = "Create";
		$button = parent::_get_form($defines, $additionalFormFields = null);

		$button .= "<input type='hidden' name='parent_type' value='{$defines['focus']->module_dir}' />" . "\n";
		$button .= "<input type='hidden' name='parent_name' value='{$defines['focus']->name}' />" . "\n";
		$button .= "<input type='hidden' name='parent_id' value='{$defines['focus']->id}' />" . "\n";
		$button .= "<input type='hidden' name='name' value='{$defines['focus']->salutation} {$defines['focus']->first_name} {$defines['focus']->last_name}' />" . "\n";
		$button .= "<input type='hidden' name='envelope' value='{$defines['focus']->envelope}' />" . "\n";
		$include = ($defines['focus']->email_opt_out==true) ? 0 : 1;
		$button .= "<input type='hidden' name='include' value='{$include}' />" . "\n";

		return $button;
	}
}
?>
