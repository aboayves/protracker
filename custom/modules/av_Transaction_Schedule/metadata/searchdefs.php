<?php
$module_name = 'av_Transaction_Schedule';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'av_accounts_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_AV_ACCOUNTS_NAME',
        'id' => 'ASSET_ID',
        'width' => '10%',
        'default' => true,
        'name' => 'av_accounts_name',
      ),
      'transaction_type' => 
      array (
        'type' => 'enum',
        'default' => true,
        'label' => 'LBL_TRANSACTION_TYPE',
        'width' => '10%',
        'name' => 'transaction_type',
      ),
      'next_transaction_date' => 
      array (
        'type' => 'date',
        'default' => true,
        'label' => 'LBL_NEXT_TRANSACTION_DATE',
        'width' => '10%',
        'name' => 'next_transaction_date',
      ),
    ),
    'advanced_search' => 
    array (
      'av_accounts_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_AV_ACCOUNTS_NAME',
        'width' => '10%',
        'default' => true,
        'id' => 'ASSET_ID',
        'name' => 'av_accounts_name',
      ),
      'transaction_type' => 
      array (
        'type' => 'enum',
        'default' => true,
        'label' => 'LBL_TRANSACTION_TYPE',
        'width' => '10%',
        'name' => 'transaction_type',
      ),
      'transaction_frequency' => 
      array (
        'type' => 'enum',
        'default' => true,
        'label' => 'LBL_TRANSACTION_FREQUENCY',
        'width' => '10%',
        'name' => 'transaction_frequency',
      ),
      'start_date' => 
      array (
        'type' => 'date',
        'default' => true,
        'label' => 'LBL_START_DATE',
        'width' => '10%',
        'name' => 'start_date',
      ),
      'next_transaction_date' => 
      array (
        'type' => 'date',
        'default' => true,
        'label' => 'LBL_NEXT_TRANSACTION_DATE',
        'width' => '10%',
        'name' => 'next_transaction_date',
      ),
      'related_account' => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_RELATED_ACCOUNT',
        'width' => '10%',
        'name' => 'related_account',
      ),
      'amount' => 
      array (
        'type' => 'currency',
        'align' => 'right',
        'default' => true,
        'label' => 'LBL_AMOUNT',
        'currency_format' => true,
        'width' => '10%',
        'name' => 'amount',
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
