<?php
$popupMeta = array (
    'moduleMain' => 'av_Tax_Forms',
    'varName' => 'av_Tax_Forms',
    'orderBy' => 'av_tax_forms.name',
    'whereClauses' => array (
  'name' => 'av_tax_forms.name',
  'return_type' => 'av_tax_forms.return_type',
  'district' => 'av_tax_forms.district',
  'residency' => 'av_tax_forms.residency',
),
    'searchInputs' => array (
  1 => 'name',
  4 => 'return_type',
  5 => 'district',
  6 => 'residency',
),
    'searchdefs' => array (
  'name' => 
  array (
    'name' => 'name',
    'width' => '10%',
  ),
  'return_type' => 
  array (
    'type' => 'enum',
    'label' => 'LBL_RETURN_TYPE',
    'width' => '10%',
    'name' => 'return_type',
  ),
  'district' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_DISTRICT',
    'width' => '10%',
    'name' => 'district',
  ),
  'residency' => 
  array (
    'type' => 'enum',
    'label' => 'LBL_RESIDENCY',
    'width' => '10%',
    'name' => 'residency',
  ),
),
);
