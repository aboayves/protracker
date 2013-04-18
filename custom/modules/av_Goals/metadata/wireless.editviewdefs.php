<?php
$module_name = 'av_Goals';
$viewdefs [$module_name] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
      'maxColumns' => '1',
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
      0 => 
      array (
        0 => 
        array (
          'name' => 'accounts_name',
          'label' => 'LBL_ACCOUNTS_NAME',
        ),
      ),
      1 => 
      array (
        0 => 'name',
      ),
      2 => 
      array (
        0 => 
        array (
          'name' => 'type',
          'comment' => '',
          'label' => 'LBL_TYPE',
        ),
      ),
      3 => 
      array (
        0 => 
        array (
          'name' => 'amount',
          'comment' => '',
          'label' => 'LBL_AMOUNT',
        ),
      ),
      4 => 
      array (
        0 => 
        array (
          'name' => 'progress',
          'comment' => '',
          'label' => 'LBL_PROGRESS',
        ),
      ),
      5 => 
      array (
        0 => 
        array (
          'name' => 'target_date',
          'comment' => '',
          'label' => 'LBL_TARGET_DATE',
        ),
      ),
    ),
  ),
);
?>
