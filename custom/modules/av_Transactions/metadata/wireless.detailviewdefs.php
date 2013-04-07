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
          'name' => 'related_account',
          'comment' => '',
          'label' => 'LBL_RELATED_ACCOUNT',
        ),
      ),
      2 => 
      array (
        0 => 
        array (
          'name' => 'transaction_date',
          'comment' => '',
          'label' => 'LBL_TRANSACTION_DATE',
        ),
      ),
      3 => 
      array (
        0 => 
        array (
          'name' => 'type',
          'comment' => '',
          'label' => 'LBL_TYPE',
        ),
      ),
      4 => 
      array (
        0 => 
        array (
          'name' => 'status',
          'comment' => '',
          'label' => 'LBL_STATUS',
        ),
      ),
      5 => 
      array (
        0 => 
        array (
          'name' => 'amount',
          'comment' => '',
          'label' => 'LBL_AMOUNT',
        ),
      ),
      6 => 
      array (
        0 => 
        array (
          'name' => 'net_amount',
          'comment' => '',
          'label' => 'LBL_NET_AMOUNT',
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
