<?php
$popupMeta = array (
    'moduleMain' => 'av_Prices',
    'varName' => 'av_Prices',
    'orderBy' => 'av_prices.name',
    'whereClauses' => array (
  'symbol' => 'av_prices.symbol',
  'price_date' => 'av_prices.price_date',
  'price' => 'av_prices.price',
),
    'searchInputs' => array (
  4 => 'symbol',
  5 => 'price_date',
  6 => 'price',
),
    'searchdefs' => array (
  'symbol' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_SYMBOL',
    'width' => '10%',
    'name' => 'symbol',
  ),
  'price_date' => 
  array (
    'type' => 'date',
    'label' => 'LBL_PRICE_DATE',
    'width' => '10%',
    'name' => 'price_date',
  ),
  'price' => 
  array (
    'type' => 'currency',
    'align' => 'right',
    'label' => 'LBL_PRICE',
    'currency_format' => true,
    'width' => '10%',
    'name' => 'price',
  ),
),
);
