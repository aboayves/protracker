<?php
$popupMeta = array (
    'moduleMain' => 'av_Tax_Rates',
    'varName' => 'av_Tax_Rates',
    'orderBy' => 'av_tax_rates.name',
    'whereClauses' => array (
  'tax_year' => 'av_tax_rates.tax_year',
  'filing_status' => 'av_tax_rates.filing_status',
),
    'searchInputs' => array (
  4 => 'tax_year',
  5 => 'filing_status',
),
    'searchdefs' => array (
  'tax_year' => 
  array (
    'type' => 'int',
    'label' => 'LBL_TAX_YEAR',
    'width' => '10%',
    'name' => 'tax_year',
  ),
  'filing_status' => 
  array (
    'type' => 'enum',
    'label' => 'LBL_FILING_STATUS',
    'width' => '10%',
    'name' => 'filing_status',
  ),
),
);
