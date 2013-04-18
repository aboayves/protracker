<?php
$module_name = 'av_Workflow';
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
          1 => 'assigned_user_name',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'related_to',
            'studio' => 'visible',
            'label' => 'LBL_RELATED_TO',
          ),
          1 => 
          array (
            'name' => 'av_activity_types_name',
            'label' => 'LBL_AV_ACTIVITY_TYPES_NAME',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'project_manager',
            'studio' => 'visible',
            'label' => 'LBL_PROJECT_MANAGER',
          ),
          1 => 
          array (
            'name' => 'workflow',
            'studio' => 'visible',
            'label' => 'LBL_MODULE_NAME',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'user_1',
            'studio' => 'visible',
            'label' => 'LBL_USER_1',
          ),
          1 => 
          array (
            'name' => 'start_date',
            'studio' => 'visible',
            'label' => 'LBL_START_DATE',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'user_2',
            'studio' => 'visible',
            'label' => 'LBL_USER_2',
          ),
          1 => 
          array (
            'name' => 'skip_weekends_holidays',
            'studio' => 'visible',
            'label' => 'LBL_SKIP_WEEKENDS_HOLIDAYS',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'user_3',
            'studio' => 'visible',
            'label' => 'LBL_USER_3',
          ),
          1 => 
          array (
            'name' => 'workflow_counts_down_to_target_date',
            'studio' => 'visible',
            'label' => 'LBL_WORKFLOW_COUNTS_DOWN_TO_TARGET_DATE',
          ),
        ),
        6 => 
        array (
          0 => 'description',
        ),
        7 => 
        array (
          0 => '',
          1 => 
          array (
            'name' => 'team_name',
            'displayParams' => 
            array (
              'display' => true,
            ),
          ),
        ),
        8 => 
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
