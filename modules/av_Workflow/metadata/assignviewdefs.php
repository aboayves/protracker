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
          0 => '<input type="hidden" name="template_ids" id="template_ids" value="' . (isset($_REQUEST['template_ids']) ? trim($_REQUEST['template_ids'],', ') : "") . '">',
        ),
	   'buttons' => 
	   array(
		0 => array( 'customCode' => '<input type="button" value="Save" onclick=" return assignWorkflow();" />'),
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
            'name' => 'assign_to_members',
          ),
        ),
      1 => 
        array (
          0 => 'add_to_project',
		  1 => 
          array (
            'name' => 'start_date',
          ),
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
		  1 => 'workflow',
        ),
      ),
    
	  'lbl_tree' =>
	  array(
		0 =>
		array(
			0 =>
			array(
				'name' => 'tree',
				'hideLabel' => true,
				'customCode' => '<div class="detail view  detail508"><input type="button" class="button" value="Preview Task Tree" onclick="treeHelper.loadData();" />&nbsp;&nbsp;<input type="button" id="reset" value="Reset" onclick="resetUser()"/><div id="tree_plotting_div"></div></div>'  
			),
		),    
	  ),
    ),
  ),
);
?>
