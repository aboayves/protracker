<?php
$module_name = 'av_Goals';
$viewdefs [$module_name] = 
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
      'useTabs' => false,
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'accounts_name',
            'label' => 'LBL_ACCOUNTS_NAME',
          ),
          1 => 'assigned_user_name',
        ),
        1 => 
        array (
          0 => 'name',
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'target_date',
            'comment' => '',
            'label' => 'LBL_TARGET_DATE',
          ),
          1 => 
          array (
            'name' => 'amount',
            'comment' => '',
            'label' => 'LBL_AMOUNT',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'type',
            'comment' => '',
            'label' => 'LBL_TYPE',
          ),
          1 => 
          array (
            'name' => 'progress',
            'comment' => '',
            'label' => 'LBL_PROGRESS',
          ),
        ),
        4 => 
        array (
          0 => 'description',
        ),
      ),
    ),
  ),
);
?>
