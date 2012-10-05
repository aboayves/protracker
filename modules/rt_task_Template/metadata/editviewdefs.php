<?php
$module_name = 'rt_task_Template';
$viewdefs [$module_name] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
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
	            array( 
                     array ('file' => 'modules/rt_task_Template/custom_javascript.js')
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
          0 => 
          array (
            'name' => 'team_name',
            'displayParams' => 
            array (
              'display' => true,
            ),
          ),
          1 => '',
        ),
        2 => 
        array (
          0 => 'description',
          1 => 
          array (
            'name' => 'task_category',
            'studio' => 'visible',
            'label' => 'LBL_TASK_CATEGORY',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'assign_to',
            'studio' => 'visible',
            'label' => 'LBL_ASSIGN_TO',
			 'displayParams' =>  
            array ( 
              'javascript' => 'onchange="customHide(this.value);"', 
            ), 
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
            'name' => 'rt_workflow_name',
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
            'name' => 'on_task_list',
            'label' => 'LBL_ON_TASK_LIST',
          ),
          1 => '',
        ),
      ),
    ),
  ),
);
?>
