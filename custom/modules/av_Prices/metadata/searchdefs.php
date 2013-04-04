<?php
$module_name = 'av_Prices';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'symbol' => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_SYMBOL',
        'width' => '10%',
        'name' => 'symbol',
      ),
      'price_date' => 
      array (
        'type' => 'date',
        'default' => true,
        'label' => 'LBL_PRICE_DATE',
        'width' => '10%',
        'name' => 'price_date',
      ),
      'price' => 
      array (
        'type' => 'currency',
        'align' => 'right',
        'default' => true,
        'label' => 'LBL_PRICE',
        'currency_format' => true,
        'width' => '10%',
        'name' => 'price',
      ),
    ),
    'advanced_search' => 
    array (
      'symbol' => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_SYMBOL',
        'width' => '10%',
        'name' => 'symbol',
      ),
      'price_date' => 
      array (
        'type' => 'date',
        'default' => true,
        'label' => 'LBL_PRICE_DATE',
        'width' => '10%',
        'name' => 'price_date',
      ),
      'price' => 
      array (
        'type' => 'currency',
        'align' => 'right',
        'default' => true,
        'label' => 'LBL_PRICE',
        'currency_format' => true,
        'width' => '10%',
        'name' => 'price',
      ),
    ),
  ),
  'templateMeta' => 
  array (
    'maxColumns' => '3',
    'maxColumnsBasic' => '4',
    'widths' => 
    array (
      'label' => '10',
      'field' => '30',
    ),
  ),
);
?>
