<?php
$module_name = 'av_Tax_Rates';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'tax_year' => 
      array (
        'type' => 'int',
        'default' => true,
        'label' => 'LBL_TAX_YEAR',
        'width' => '10%',
        'name' => 'tax_year',
      ),
      'filing_status' => 
      array (
        'type' => 'enum',
        'default' => true,
        'label' => 'LBL_FILING_STATUS',
        'width' => '10%',
        'name' => 'filing_status',
      ),
    ),
    'advanced_search' => 
    array (
      'tax_year' => 
      array (
        'type' => 'int',
        'default' => true,
        'label' => 'LBL_TAX_YEAR',
        'width' => '10%',
        'name' => 'tax_year',
      ),
      'filing_status' => 
      array (
        'type' => 'enum',
        'default' => true,
        'label' => 'LBL_FILING_STATUS',
        'width' => '10%',
        'name' => 'filing_status',
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
