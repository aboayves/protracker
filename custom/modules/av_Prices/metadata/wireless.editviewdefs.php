<?php
$module_name = 'av_Prices';
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
          'name' => 'symbol',
          'comment' => '',
          'label' => 'LBL_SYMBOL',
        ),
      ),
      1 => 
      array (
        0 => 
        array (
          'name' => 'price_date',
          'comment' => '',
          'label' => 'LBL_PRICE_DATE',
        ),
      ),
      2 => 
      array (
        0 => 
        array (
          'name' => 'price',
          'comment' => '',
          'label' => 'LBL_PRICE',
        ),
      ),
    ),
  ),
);
?>
