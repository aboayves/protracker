<?php
$module_name = 'av_Workflow';
$viewdefs [$module_name] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
	 'form' =>
      array (
	  'hidden' =>
        array (
          0 => '<input type="hidden" name="template_ids" id="template_ids" value="'.$_REQUEST['template_ids'].'">',
        ),
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
	  'includes' => 
      array (
        0 => 
        array (
          'file' => 'modules/av_Workflow/awTree.js',
        ),
      ),
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
             ),
        ),
	  5 => 
        array (
          0 => 'user_3',
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
				'customCode' => '<input type="button" class="button" value="Preview Task Tree" onclick="treeHelper.loadData();" /><div id="tree_plotting_div"></div>'  
			),
		),    
	  ),
    ),
  ),
);
?>
