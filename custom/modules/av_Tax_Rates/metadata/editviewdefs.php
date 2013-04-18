<?php
$module_name = 'av_Tax_Rates';
$viewdefs [$module_name] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
      'maxColumns' => '2',
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
      'syncDetailEditViews' => true,
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'tax_year',
            'comment' => '',
            'label' => 'LBL_TAX_YEAR',
          ),
          1 => 
          array (
            'name' => 'filing_status',
            'comment' => '',
            'label' => 'LBL_FILING_STATUS',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'low_range',
            'comment' => '',
            'label' => 'LBL_LOW_RANGE',
          ),
          1 => 
          array (
            'name' => 'high_range',
            'comment' => '',
            'label' => 'LBL_HIGH_RANGE',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'tax_rate',
            'comment' => '',
            'label' => 'LBL_TAX_RATE',
          ),
          1 => '',
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'date_entered',
            'comment' => 'Date record created',
            'label' => 'LBL_DATE_ENTERED',
          ),
          1 => 
          array (
            'name' => 'date_modified',
            'comment' => 'Date record last modified',
            'label' => 'LBL_DATE_MODIFIED',
          ),
        ),
      ),
    ),
  ),
);
?>
