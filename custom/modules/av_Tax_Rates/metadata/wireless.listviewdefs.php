<?php
$module_name = 'av_Tax_Rates';
$listViewDefs [$module_name] = 
array (
  'TAX_YEAR' => 
  array (
    'type' => 'int',
    'default' => true,
    'label' => 'LBL_TAX_YEAR',
    'width' => '10%',
  ),
  'FILING_STATUS' => 
  array (
    'type' => 'enum',
    'default' => true,
    'label' => 'LBL_FILING_STATUS',
    'width' => '10%',
  ),
  'LOW_RANGE' => 
  array (
    'type' => 'currency',
    'align' => 'right',
    'default' => true,
    'label' => 'LBL_LOW_RANGE',
    'currency_format' => true,
    'width' => '10%',
  ),
  'HIGH_RANGE' => 
  array (
    'type' => 'currency',
    'align' => 'right',
    'default' => true,
    'label' => 'LBL_HIGH_RANGE',
    'currency_format' => true,
    'width' => '10%',
  ),
  'TAX_RATE' => 
  array (
    'type' => 'decimal',
    'default' => true,
    'label' => 'LBL_TAX_RATE',
    'width' => '10%',
  ),
);
?>
