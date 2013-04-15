<?php
$module_name = 'av_Positions';
$listViewDefs [$module_name] = 
array (
  'AV_ACCOUNTS_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_AV_ACCOUNTS_NAME',
    'id' => 'ASSET_ID',
    'width' => '20%',
    'default' => true,
  ),
  'NAME' => 
  array (
    'width' => '25%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'SYMBOL' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_SYMBOL',
    'width' => '10%',
	'customCode' => '<a href=https://www.google.com/finance?q={$SYMBOL}>{$SYMBOL}</a>',
  ),
  'TYPE' => 
  array (
    'type' => 'enum',
    'default' => true,
    'label' => 'LBL_TYPE',
    'width' => '10%',
  ),
  'QUANTITY' => 
  array (
    'type' => 'decimal',
    'default' => true,
    'label' => 'LBL_QUANTITY',
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
  'PRICE_DATE' => 
  array (
    'type' => 'date',
    'default' => true,
    'label' => 'LBL_PRICE_DATE',
    'width' => '10%',
  ),
  'VALUE' => 
  array (
    'type' => 'currency',
    'align' => 'right',
    'default' => true,
    'label' => 'LBL_VALUE',
    'currency_format' => true,
    'width' => '10%',
  ),
);
?>
