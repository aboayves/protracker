<?php
$module_name = 'av_Tax_Rates';
$viewdefs [$module_name] = 
array (
  'DetailView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'buttons' => 
        array (
          0 => 'EDIT',
          1 => 'DUPLICATE',
          2 => 'DELETE',
        ),
      ),
      'maxColumns' => '1',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'useTabs' => false,
    ),
    'panels' => 
    array (
      0 => 
      array (
        0 => 
        array (
          'name' => 'tax_year',
          'comment' => '',
          'label' => 'LBL_TAX_YEAR',
        ),
      ),
      1 => 
      array (
        0 => 
        array (
          'name' => 'filing_status',
          'comment' => '',
          'label' => 'LBL_FILING_STATUS',
        ),
      ),
      2 => 
      array (
        0 => 
        array (
          'name' => 'low_range',
          'comment' => '',
          'label' => 'LBL_LOW_RANGE',
        ),
      ),
      3 => 
      array (
        0 => 
        array (
          'name' => 'high_range',
          'comment' => '',
          'label' => 'LBL_HIGH_RANGE',
        ),
      ),
      4 => 
      array (
        0 => 
        array (
          'name' => 'tax_rate',
          'comment' => '',
          'label' => 'LBL_TAX_RATE',
        ),
      ),
    ),
  ),
);
?>
