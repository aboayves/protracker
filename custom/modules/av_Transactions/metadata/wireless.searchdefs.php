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
      'related_account' => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_RELATED_ACCOUNT',
        'width' => '10%',
        'name' => 'related_account',
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
