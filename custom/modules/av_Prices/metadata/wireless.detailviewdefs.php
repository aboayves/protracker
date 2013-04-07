<?php
$module_name = 'av_Prices';
$viewdefs [$module_name] = 
array (
  'DetailView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'buttons' => 
        array (
          0 => 'EDIT',
          1 => 'DUPLICATE',
          2 => 'DELETE',
        ),
      ),
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
