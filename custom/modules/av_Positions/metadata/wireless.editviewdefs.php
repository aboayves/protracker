<?php
$module_name = 'av_Positions';
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
          'name' => 'av_accounts_name',
          'label' => 'LBL_AV_ACCOUNTS_NAME',
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
          'name' => 'symbol',
          'comment' => '',
          'label' => 'LBL_SYMBOL',
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
      ),
      4 => 
      array (
        0 => 
        array (
          'name' => 'quantity',
          'comment' => '',
          'label' => 'LBL_QUANTITY',
        ),
      ),
      5 => 
      array (
        0 => 
        array (
          'name' => 'price',
          'comment' => '',
          'label' => 'LBL_PRICE',
        ),
      ),
      6 => 
      array (
        0 => 
        array (
          'name' => 'price_date',
          'comment' => '',
          'label' => 'LBL_PRICE_DATE',
        ),
      ),
      7 => 
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
