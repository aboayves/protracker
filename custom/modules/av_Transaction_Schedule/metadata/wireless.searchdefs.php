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
    'advanced_search' => 
    array (
      0 => 'name',
    ),
  ),
  'templateMeta' => 
  array (
    'maxColumns' => '1',
    'widths' => 
    array (
      'label' => '10',
      'field' => '30',
    ),
  ),
);
?>
