<?php
$module_name = 'av_Task_Template';
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
      array (
        0 => 
        array (
          'file' => 'include/javascript/tiny_mce/tiny_mce.js',
        ),
        1 => 
        array (
          'file' => 'modules/av_Task_Template/custom_javascript.js',
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
            'name' => 'subject',
            'label' => 'LBL_SUBJECT',
          ),
          1 => 'assigned_user_name',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'relate_to',
            'studio' => 'visible',
            'label' => 'LBL_RELATE_TO',
          ),
          1 => 
          array (
            'name' => 'av_Activity_Types_name',
            'label' => 'LBL_AV_ACTIVITY_TYPES_NAME',
          ),
        ),
        2 => 
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
          1 => 'name',
        ),
        3 => 
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
        4 => 
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
        5 => 
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
        6 => 
        array (
          0 => '',
          1 => 'on_task_list',
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'assigned_to_client',
            'label' => 'LBL_ASSIGNED_TO_CLIENT',
          ),
          1 => 'client_task',
        ),
        8 => 
        array (
          0 => 'description',
          1 => 
          array (
            'name' => 'team_name',
            'displayParams' => 
            array (
              'display' => true,
            ),
          ),
        ),
        9 => 
        array (
          0 => 
          array (
            'name' => 'date_entered',
            'comment' => 'Date record created',
            'label' => 'LBL_DATE_ENTERED',
          ),
          1 => 
          array (
            'name' => 'date_modified',
            'comment' => 'Date record last modified',
            'label' => 'LBL_DATE_MODIFIED',
          ),
        ),
      ),
    ),
  ),
);
?>
