<?php
$module_name = 'av_Transaction_Schedule';
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
          'name' => 'av_accounts_name',
          'label' => 'LBL_AV_ACCOUNTS_NAME',
        ),
      ),
      1 => 
      array (
        0 => 
        array (
          'name' => 'transaction_type',
          'comment' => '',
          'label' => 'LBL_TRANSACTION_TYPE',
        ),
      ),
      2 => 
      array (
        0 => 
        array (
          'name' => 'transaction_frequency',
          'comment' => '',
          'label' => 'LBL_TRANSACTION_FREQUENCY',
        ),
      ),
      3 => 
      array (
        0 => 
        array (
          'name' => 'start_date',
          'comment' => '',
          'label' => 'LBL_START_DATE',
        ),
      ),
      4 => 
      array (
        0 => 
        array (
          'name' => 'next_transaction_date',
          'comment' => '',
          'label' => 'LBL_NEXT_TRANSACTION_DATE',
        ),
      ),
      5 => 
      array (
        0 => 
        array (
          'name' => 'related_account',
          'comment' => '',
          'label' => 'LBL_RELATED_ACCOUNT',
        ),
      ),
      6 => 
      array (
        0 => 
        array (
          'name' => 'amount',
          'comment' => '',
          'label' => 'LBL_AMOUNT',
        ),
      ),
      7 => 
      array (
        0 => 
        array (
          'name' => 'description',
          'comment' => 'Full text of the note',
          'label' => 'LBL_DESCRIPTION',
        ),
      ),
    ),
  ),
);
?>
