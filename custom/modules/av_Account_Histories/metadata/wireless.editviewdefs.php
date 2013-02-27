<?php
$module_name = 'av_Account_Histories';
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
          'name' => 'value_date',
          'comment' => '',
          'label' => 'LBL_VALUE_DATE',
        ),
      ),
      1 => 
      array (
        0 => 
        array (
          'name' => 'value',
          'comment' => '',
          'label' => 'LBL_VALUE',
        ),
      ),
    ),
  ),
);
?>
