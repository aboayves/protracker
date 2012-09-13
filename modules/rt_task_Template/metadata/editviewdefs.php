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
            'name' => 'waiting_for',
            'studio' => 'visible',
            'label' => 'LBL_WAITING_FOR',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'workflow',
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
    ),
  ),
);
?>
