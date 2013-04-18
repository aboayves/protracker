<?php
$module_name = 'av_Positions';
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
            'name' => 'av_accounts_name',
            'label' => 'LBL_AV_ACCOUNTS_NAME',
          ),
          1 => 
          array (
            'name' => 'source',
            'comment' => '',
            'label' => 'LBL_SOURCE',
          ),
        ),
        1 => 
        array (
          0 => 'name',
          1 => 
          array (
            'name' => 'symbol',
            'comment' => '',
            'label' => 'LBL_SYMBOL',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'type',
            'comment' => '',
            'label' => 'LBL_TYPE',
          ),
          1 => 
          array (
            'name' => 'quantity',
            'comment' => '',
            'label' => 'LBL_QUANTITY',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'price_date',
            'comment' => '',
            'label' => 'LBL_PRICE_DATE',
          ),
          1 => 
          array (
            'name' => 'price',
            'comment' => '',
            'label' => 'LBL_PRICE',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'value',
            'comment' => '',
            'label' => 'LBL_VALUE',
          ),
          1 => '',
        ),
        5 => 
        array (
          0 => 'description',
          1 => '',
        ),
        6 => 
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
