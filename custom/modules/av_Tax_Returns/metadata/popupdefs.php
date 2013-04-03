<?php
$popupMeta = array (
    'moduleMain' => 'av_Tax_Returns',
    'varName' => 'av_Tax_Returns',
    'orderBy' => 'av_tax_returns.name',
    'whereClauses' => array (
  'tax_year' => 'av_tax_returns.tax_year',
  'accounts_name' => 'av_tax_returns.accounts_name',
  'av_tax_forms_name' => 'av_tax_returns.av_tax_forms_name',
  'return_type' => 'av_tax_returns.return_type',
),
    'searchInputs' => array (
  4 => 'tax_year',
  5 => 'accounts_name',
  6 => 'av_tax_forms_name',
  7 => 'return_type',
),
    'searchdefs' => array (
  'tax_year' => 
  array (
    'type' => 'int',
    'label' => 'LBL_TAX_YEAR',
    'width' => '10%',
    'name' => 'tax_year',
  ),
  'accounts_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_ACCOUNTS_NAME',
    'id' => 'ACCOUNT_ID',
    'width' => '10%',
    'name' => 'accounts_name',
  ),
  'av_tax_forms_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_AV_TAX_FORMS_NAME',
    'id' => 'TAX_FORM_ID',
    'width' => '10%',
    'name' => 'av_tax_forms_name',
  ),
  'return_type' => 
  array (
    'type' => 'enum',
    'label' => 'LBL_RETURN_TYPE',
    'width' => '10%',
    'name' => 'return_type',
  ),
),
);
