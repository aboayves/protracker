<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

class SugarWidgetSubPanelTopButtonQuickCreateFromTasksTemplateCstm extends SugarWidgetSubPanelTopButtonQuickCreate
{
	function &_get_form($defines, $additionalFormFields = null)
	{
		$this->module = $defines['module'];
		$this->form_value = "Create";
		
		if(isset($defines['focus']->id))$additionalFormFields['parent_tasks_id'] = $defines['focus']->id;
		if(isset($defines['focus']->name))$additionalFormFields['parent_tasks_name'] = $defines['focus']->name;
		if(isset($defines['focus']->av_Workflow_id))$additionalFormFields['av_Workflow_id'] = $defines['focus']->av_Workflow_id;
		if(isset($defines['focus']->av_Workflow_name))$additionalFormFields['av_Workflow_name'] = $defines['focus']->av_Workflow_name;
		
		$button = parent::_get_form($defines, $additionalFormFields);

		return $button;
	}
}
?>
