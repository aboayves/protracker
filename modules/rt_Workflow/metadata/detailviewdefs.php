<?php
$module_name = 'rt_Workflow';
$viewdefs [$module_name] = 
array (
  'DetailView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'buttons' => 
        array (
          0 => 'EDIT',
          1 => 'DUPLICATE',
          2 => 'DELETE',
          3 => 'FIND_DUPLICATES',
		  4 => 
		  array(
		  	'customCode' => '<input title="Assign Workflow" type="button" name="assignWorkflow" id="assignWorkflow" onClick="var _form = document.getElementById(\'formDetailView\');_form.action.value=\'assign\';SUGAR.ajaxUI.submitForm(_form);" value="Assign Workflow">'
		  ),
        ),
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
      'syncDetailEditViews' => true,
	  'includes' => 
      array (
        0 => 
        array (
          'file' => 'modules/rt_Workflow/tree.js',
        ),
		1 => 
        array (
          'file' => 'modules/rt_Workflow/delete.js',
        ),
      ),
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 'name',
          1 => 'assigned_user_name',
        ),
        1 => 
        array (
          0 => 'team_name',
          1 => 
          array (
            'name' => 'category',
            'label' => 'LBL_CATEGORY',
          ),
        ),
        2 => 
        array (
          0 => 'description',
        ),
      ),
	  'lbl_tree' =>
	  array(
		0 =>
		array(
			0 =>
			array(
				'name' => 'tree',
				'label' => 'LBL_TREE',
				'customCode' => '<div id="tree_plotting_div"></div>'  
			),
		),    
	  ),
    ),
  ),
);
?>
