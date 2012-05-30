<?php
$viewdefs ['Project'] = 
array (
  'QuickCreate' => 
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
      'useTabs' => true,
    ),
    'panels' => 
    array (
      'lbl_project_information' => 
      array (
        0 => 
        array (
          0 => 'name',
          1 => 'status',
        ),
        1 => 
        array (
          0 => 'priority',
          1 => 'estimated_start_date',
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'description',
          ),
          1 => 'estimated_end_date',
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'project_manager_c',
            'studio' => 'visible',
            'label' => 'LBL_PROJECT_MANAGER',
          ),
          1 => 
          array (
            'name' => 'billing_type_c',
            'studio' => 'visible',
            'label' => 'LBL_BILLING_TYPE',
          ),
        ),
        4 => 
        array (
          0 => '',
          1 => 
          array (
            'name' => 'service_c',
            'studio' => 'visible',
            'label' => 'LBL_SERVICE',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'owner_test',
            'label' => 'LBL_OWNER_TEST',
          ),
          1 => 
          array (
            'name' => 'is_template',
            'comment' => 'Should be checked if the project is a template',
            'label' => 'LBL_IS_TEMPLATE',
          ),
        ),
      ),
    ),
  ),
);
?>
