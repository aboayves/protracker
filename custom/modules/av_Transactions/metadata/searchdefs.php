<?php
$module_name = 'av_Transactions';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'transaction_date' => 
      array (
        'type' => 'date',
        'default' => true,
        'label' => 'LBL_TRANSACTION_DATE',
        'width' => '10%',
        'name' => 'transaction_date',
      ),
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
      'type' => 
      array (
        'type' => 'enum',
        'default' => true,
        'label' => 'LBL_TYPE',
        'width' => '10%',
        'name' => 'type',
      ),
    ),
    'advanced_search' => 
    array (
      'transaction_date' => 
      array (
        'type' => 'date',
        'default' => true,
        'label' => 'LBL_TRANSACTION_DATE',
        'width' => '10%',
        'name' => 'transaction_date',
      ),
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
      'type' => 
      array (
        'type' => 'enum',
        'default' => true,
        'label' => 'LBL_TYPE',
        'width' => '10%',
        'name' => 'type',
      ),
      'source' => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_SOURCE',
        'width' => '10%',
        'name' => 'source',
      ),
      'status' => 
      array (
        'type' => 'enum',
        'default' => true,
        'label' => 'LBL_STATUS',
        'width' => '10%',
        'name' => 'status',
      ),
      'related_account' => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_RELATED_ACCOUNT',
        'width' => '10%',
        'name' => 'related_account',
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
