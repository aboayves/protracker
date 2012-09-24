<?php
$module_name = 'rt_Workflow';
$viewdefs [$module_name] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
	 'form' =>
      array (
	   'buttons' => 
	   array(
		0 => array( 'customCode' => '<input type="button" value="Save" onclick=" _form = document.getElementById(\'EditView\');_form.action.value=\'assign\';if(check_form(\'EditView\'))SUGAR.ajaxUI.submitForm(_form);return false;" />'),
		1 => 'CANCEL',
	   ),
	   'hideAudit' => false,
	  ),
      'maxColumns' => '2',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'useTabs' => false,
      'syncDetailEditViews' => false,
	  ),
    'panels' => 
    array (
      'default' => 
      array (
       0 => 
        array (
          0 => 
          array (
            'name' => 'related_to',
          ),
		  1 => 
          array (
            'name' => 'start_date',
          ),
        ),
      1 => 
        array (
          0 => 'add_to_project',
        ),
	  2 => 
        array (
          0 => 'project_manager',
        ),
	  3 => 
        array (
          0 => 
          array (
            'name' => 'user_1',
          ),
		  1 => 
          array (
            'name' => 'skip_weekends_holidays',
          ),
        ),
	  4 => 
        array (
          0 => 
          array (
            'name' => 'user_2',
          ),
		  1 => 
          array (
            'name' => 'workflow_counts_down_to_target_date',
            'customCode'=>'<input id="workflow_counts_down_to_target_date" name="workflow_counts_down_to_target_date" type="checkbox" onclick="startToTargetDate();">',
             ),
        ),
	  5 => 
        array (
          0 => 'user_3',
        ),
      ),
    ),
  ),
);
?>
