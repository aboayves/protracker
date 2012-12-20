<?php
$module_name = 'av_Transactions';
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
          0 => 'name',
        ),
        1 => 
        array (
        ),
        2 => 
        array (
        ),
        3 => 
        array (
        ),
        4 => 
        array (
          1 => 
          array (
            'name' => 'state',
            'comment' => '',
            'label' => 'LBL_STATE',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'federal_withholding_percent',
            'comment' => '',
            'label' => 'LBL_FEDERAL_WITHHOLDING_PERCENT',
          ),
          1 => 
          array (
            'name' => 'state_withholding_percent',
            'comment' => '',
            'label' => 'LBL_STATE_WITHHOLDING_PERCENT',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'federal_withholding_amount',
            'comment' => '',
            'label' => 'LBL_FEDERAL_WITHHOLDING_AMOUNT',
          ),
          1 => 
          array (
            'name' => 'state_withholding_amount',
            'comment' => '',
            'label' => 'LBL_STATE_WITHHOLDING_AMOUNT',
          ),
        ),
        7 => 
        array (
        ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'account_number',
            'comment' => '',
            'label' => 'LBL_ACCOUNT_NUMBER',
          ),
        ),
        9 => 
        array (
          0 => 'description',
        ),
        10 => 
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
