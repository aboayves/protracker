<?php
$module_name = 'av_Prices';
$listViewDefs [$module_name] = 
array (
  'SYMBOL' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_SYMBOL',
    'width' => '10%',
  ),
  'PRICE_DATE' => 
  array (
    'type' => 'date',
    'default' => true,
    'label' => 'LBL_PRICE_DATE',
    'width' => '10%',
  ),
  'PRICE' => 
  array (
    'type' => 'currency',
    'align' => 'right',
    'default' => true,
    'label' => 'LBL_PRICE',
    'currency_format' => true,
    'width' => '10%',
  ),
);
?>
