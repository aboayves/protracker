<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 * The contents of this file are subject to the SugarCRM Master Subscription
 * Agreement ("License") which can be viewed at
 * http://www.sugarcrm.com/crm/en/msa/master_subscription_agreement_11_April_2011.pdf
 * By installing or using this file, You have unconditionally agreed to the
 * terms and conditions of the License, and You may not use this file except in
 * compliance with the License.  Under the terms of the license, You shall not,
 * among other things: 1) sublicense, resell, rent, lease, redistribute, assign
 * or otherwise transfer Your rights to the Software, and 2) use the Software
 * for timesharing or service bureau purposes such as hosting the Software for
 * commercial gain and/or for the benefit of a third party.  Use of the Software
 * may be subject to applicable fees and any use of the Software without first
 * paying applicable fees is strictly prohibited.  You do not have the right to
 * remove SugarCRM copyrights from the source code or user interface.
 *
 * All copies of the Covered Code must include on each user interface screen:
 *  (i) the "Powered by SugarCRM" logo and
 *  (ii) the SugarCRM copyright notice
 * in the same form as they appear in the distribution.  See full license for
 * requirements.
 *
 * Your Warranty, Limitations of liability and Indemnity are expressly stated
 * in the License.  Please refer to the License for the specific language
 * governing these rights and limitations under the License.  Portions created
 * by SugarCRM are Copyright (C) 2004-2011 SugarCRM, Inc.; All Rights Reserved.
 ********************************************************************************/




require_once('include/generic/SugarWidgets/SugarWidgetSubPanelTopButton.php');

class SugarWidgetSubPanelTopCreateFullNoteButton extends SugarWidgetSubPanelTopButton
{
	function __construct(&$layout_manager) {
		$this->title = 'Create Note or Attachment';
		$this->form_value = '  Create Note or Attachment';
		parent::SugarWidget($layout_manager);
	}
	function &_get_form($defines, $additionalFormFields = null)
	{
		global $app_strings;
		global $currentModule;

		$this->module="Notes";
		$this->subpanelDiv = "history";

		// Create the additional form fields with real values if they were not passed in
		if(empty($additionalFormFields) && $this->additional_form_fields)
		{
			foreach($this->additional_form_fields as $key=>$value)
			{
				if(!empty($defines['focus']->$value))
				{
					$additionalFormFields[$key] = $defines['focus']->$value;
				}
				else
				{
					$additionalFormFields[$key] = '';
				}
			}
		}
		//Inheriting team members from parent
		if(isset($defines['focus']->team_id))$additionalFormFields['team_id'] = $defines['focus']->team_id;
		if(isset($defines['focus']->team_set_id))$additionalFormFields['team_set_id'] = $defines['focus']->team_set_id;
		if(!empty($this->module))
		{
			$defines['child_module_name'] = $this->module;
		}
		else
		{
			$defines['child_module_name'] = $defines['module'];
		}

		if(!empty($this->subpanelDiv))
		{
			$defines['subpanelDiv'] = $this->subpanelDiv;
		}

		$defines['parent_bean_name'] = get_class( $defines['focus']);

		$form = 'form' . $defines['child_module_name'];
		$button = '<form  action="index.php" method="post" name="form" id="form' . $form . "\">\n";
		$button.= '<input type="hidden" name="module_tab"> ';
		$button.= '<input type="hidden" name="contact_role">';
		//module_button is used to override the value of module name

		if(isset($defines['focus']->name))
		{
			$button .= "<input type='hidden' name='".strtolower($defines['parent_bean_name'])."_name' value='".$defines['focus']->name."'>";
		}

		$button .= '<input type="hidden" name="isDuplicate" value="false" />';
		$button .= '<input type="hidden" name="return_module" value="' . $currentModule . "\" />\n";
		$button .= '<input type="hidden" name="return_action" value="' . $defines['action'] . "\" />\n";
		$button .= '<input type="hidden" name="return_id" value="' . $defines['focus']->id . "\" />\n";

		// TODO: move this out and get $additionalFormFields working properly
		if(empty($additionalFormFields['parent_type']))
		{
			if($defines['focus']->object_name=='Contact') {
				$additionalFormFields['parent_type'] = 'Contacts';
			}
			else {
				$additionalFormFields['parent_type'] = $defines['focus']->module_dir;
			}
		}
		if(empty($additionalFormFields['parent_name']))
		{
			if($defines['focus']->object_name=='Contact') {
				$additionalFormFields['parent_name'] = $defines['focus']->name;
				$additionalFormFields['account_name'] = $defines['focus']->account_name;
			}
			else {
				$additionalFormFields['parent_name'] = $defines['focus']->name;
			}
		}
		if(empty($additionalFormFields['parent_id']))
		{
			if($defines['focus']->object_name=='Contact') {
				$additionalFormFields['parent_id'] = $defines['focus']->id;
				$additionalFormFields['account_id'] = $defines['focus']->account_id;
			}
			else {
				$additionalFormFields['parent_id'] = $defines['focus']->id;
			}
		}

		$button .= '<input type="hidden" name="action" value="EditView" />' . "\n";
		$button .= '<input type="hidden" name="module" value="Notes" />' . "\n";


		// fill in additional form fields for all but action
		foreach($additionalFormFields as $key => $value)
		{
			if($key != 'action')
			{
				$button .= '<input type="hidden" name="' . $key . '" value="' . $value . '" />' . "\n";
			}
		}

		return $button;
	}


	function display($defines, $additionalFormFields = null)
	{
	    $focus = new Note;
		if ( !$focus->ACLAccess('EditView') ) {
		    return '';
	    }
	
		return parent::display($defines, $additionalFormFields);
	}
}
?>
