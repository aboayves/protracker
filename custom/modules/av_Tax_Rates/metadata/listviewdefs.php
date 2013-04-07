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
	'disable_num_format' => true,
  ),
  'FILING_STATUS' => 
  array (
    'type' => 'enum',
    'default' => true,
    'label' => 'LBL_FILING_STATUS',
    'width' => '10%',
	'link' => true,
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
  'DATE_MODIFIED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_MODIFIED',
    'width' => '10%',
    'default' => false,
  ),
  'DATE_ENTERED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_ENTERED',
    'width' => '10%',
    'default' => false,
  ),
);
?>
