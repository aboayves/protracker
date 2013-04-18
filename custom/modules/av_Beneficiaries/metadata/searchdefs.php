<?php
$module_name = 'av_Beneficiaries';
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
      'contacts_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_CONTACTS_NAME',
        'id' => 'BENEFICIARY_ID',
        'width' => '10%',
        'default' => true,
        'name' => 'contacts_name',
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
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'type' => 
      array (
        'type' => 'enum',
        'default' => true,
        'label' => 'LBL_TYPE',
        'width' => '10%',
        'name' => 'type',
      ),
      'percent' => 
      array (
        'type' => 'int',
        'default' => true,
        'label' => 'LBL_PERCENT',
        'width' => '10%',
        'name' => 'percent',
      ),
      'per_stirpes' => 
      array (
        'type' => 'bool',
        'default' => true,
        'label' => 'LBL_PER_STIRPES',
        'width' => '10%',
        'name' => 'per_stirpes',
      ),
      'date_verified' => 
      array (
        'type' => 'date',
        'default' => true,
        'label' => 'LBL_DATE_VERIFIED',
        'width' => '10%',
        'name' => 'date_verified',
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
