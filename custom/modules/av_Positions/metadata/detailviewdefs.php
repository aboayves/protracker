<?php
$module_name = 'av_Positions';
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
          3 => 'FIND_DUPLICATES',
        ),
      ),
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
          0 => 
          array (
            'name' => 'account_number',
            'comment' => '',
            'label' => 'LBL_ACCOUNT_NUMBER',
          ),
          1 => 
          array (
            'name' => 'security_type',
            'comment' => '',
            'label' => 'LBL_TYPE',
          ),
        ),
        2 => 
        array (
          0 => 'name',
          1 => 
          array (
            'name' => 'value',
            'comment' => '',
            'label' => 'LBL_VALUE',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'symbol',
            'comment' => '',
            'label' => 'LBL_SYMBOL',
          ),
          1 => 
          array (
            'name' => 'quantity',
            'comment' => '',
            'label' => 'LBL_QUANTITY',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'price',
            'comment' => '',
            'label' => 'LBL_PRICE',
          ),
          1 => 
          array (
            'name' => 'price_date',
            'comment' => '',
            'label' => 'LBL_PRICE_DATE',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'position_date',
            'comment' => '',
            'label' => 'LBL_POSITION_DATE',
          ),
          1 => 'description',
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'date_entered',
            'customCode' => '{$fields.date_entered.value} {$APP.LBL_BY} {$fields.created_by_name.value}',
            'label' => 'LBL_DATE_ENTERED',
          ),
          1 => 
          array (
            'name' => 'date_modified',
            'customCode' => '{$fields.date_modified.value} {$APP.LBL_BY} {$fields.modified_by_name.value}',
            'label' => 'LBL_DATE_MODIFIED',
          ),
        ),
      ),
    ),
  ),
);
?>
