<?php
$dashletData['av_PricesDashlet']['searchFields'] = array (
  'symbol' => 
  array (
    'default' => '',
  ),
  'price_date' => 
  array (
    'default' => '',
  ),
  'price' => 
  array (
    'default' => '',
  ),
);
$dashletData['av_PricesDashlet']['columns'] = array (
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
  'date_entered' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_ENTERED',
    'default' => false,
    'name' => 'date_entered',
  ),
  'date_modified' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_MODIFIED',
    'name' => 'date_modified',
    'default' => false,
  ),
  'created_by' => 
  array (
    'width' => '8%',
    'label' => 'LBL_CREATED',
    'name' => 'created_by',
    'default' => false,
  ),
);
