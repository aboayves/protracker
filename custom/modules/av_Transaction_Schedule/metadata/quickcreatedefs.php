<?php
$module_name = 'av_Transaction_Schedule';
$viewdefs [$module_name] = 
array (
  'QuickCreate' => 
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
          1 => '',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'transaction_type',
            'comment' => '',
            'label' => 'LBL_TRANSACTION_TYPE',
          ),
          1 => 
          array (
            'name' => 'transaction_frequency',
            'comment' => '',
            'label' => 'LBL_TRANSACTION_FREQUENCY',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'start_date',
            'comment' => '',
            'label' => 'LBL_START_DATE',
          ),
          1 => 
          array (
            'name' => 'next_transaction_date',
            'comment' => '',
            'label' => 'LBL_NEXT_TRANSACTION_DATE',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'related_account',
            'comment' => '',
            'label' => 'LBL_RELATED_ACCOUNT',
          ),
          1 => 
          array (
            'name' => 'related_account_number',
            'comment' => '',
            'label' => 'LBL_RELATED_ACCOUNT_NUMBER',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'amount',
            'comment' => '',
            'label' => 'LBL_AMOUNT',
          ),
          1 => '',
        ),
        5 => 
        array (
          0 => 'description',
        ),
      ),
    ),
  ),
);
?>
