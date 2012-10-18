<?php
$module_name = 'av_Task_Template';
$viewdefs [$module_name] = 
array (
  'DetailView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'hidden' => 
		array(
			0 => '<input type="hidden" name="av_Workflow_id" id="av_Workflow_id" value="{$fields.av_Workflow_id.value}">',
		),
		'buttons' => 
        array (
          0 => 'EDIT',
          1 => 'DUPLICATE',
          2 => 'DELETE',
          3 => 'FIND_DUPLICATES',
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
          'file' => 'modules/av_Task_Template/tree.js',
        ),
		1 => 
        array (
          'file' => 'modules/av_Task_Template/delete.js',
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
          1 => 
          array (
            'name' => 'subject',
            'label' => 'LBL_SUBJECT',
          ),
        ),
        1 => 
        array (
          0 => 'description',
          1 => 'team_name',
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'task_category',
            'studio' => 'visible',
            'label' => 'LBL_TASK_CATEGORY',
          ),
          1 => 
          array (
            'name' => 'relate_to',
            'studio' => 'visible',
            'label' => 'LBL_RELATE_TO',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'assign_to',
            'studio' => 'visible',
            'label' => 'LBL_ASSIGN_TO',
          ),
          1 => 'assigned_user_name',
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'notify_child_completion',
            'label' => 'LBL_NOTIFY_CHILD_COMPLETION',
          ),
          1 => 
          array (
            'name' => 'priority',
            'studio' => 'visible',
            'label' => 'LBL_PRIORITY',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'private',
            'label' => 'LBL_PRIVATE',
          ),
          1 => 
          array (
            'name' => 'parent_tasks_name',
            'studio' => 'visible',
            'label' => 'LBL_PARENT_TASKS',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'av_Workflow_name',
            'studio' => 'visible',
            'label' => 'LBL_WORKFLOW',
          ),
          1 => 
          array (
            'name' => 'days_out',
            'label' => 'LBL_DAYS_OUT',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'assigned_to_client',
            'label' => 'LBL_ASSIGNED_TO_CLIENT',
          ),
          1 => '',
        ),
      ),
	  'LBL_TREE_VIEW' =>
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
