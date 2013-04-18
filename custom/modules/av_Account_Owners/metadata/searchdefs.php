<?php
$module_name = 'av_Account_Owners';
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
        'width' => '10%',
        'label' => 'LBL_AV_ACCOUNTS_NAME',
        'id' => 'ASSET_ID',
        'default' => true,
        'name' => 'av_accounts_name',
      ),
      'contacts_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_CONTACTS_NAME',
        'id' => 'OWNER_ID',
        'width' => '10%',
        'default' => true,
        'name' => 'contacts_name',
      ),
    ),
    'advanced_search' => 
    array (
      'av_accounts_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'width' => '10%',
        'label' => 'LBL_AV_ACCOUNTS_NAME',
        'default' => true,
        'id' => 'ASSET_ID',
        'name' => 'av_accounts_name',
      ),
      'contacts_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_CONTACTS_NAME',
        'width' => '10%',
        'default' => true,
        'id' => 'OWNER_ID',
        'name' => 'contacts_name',
      ),
      'ownership_percent' => 
      array (
        'type' => 'decimal',
        'default' => true,
        'label' => 'LBL_OWNERSHIP_PERCENT',
        'width' => '10%',
        'name' => 'ownership_percent',
      ),
      'date_entered' => 
      array (
        'type' => 'datetime',
        'label' => 'LBL_DATE_ENTERED',
        'width' => '10%',
        'default' => true,
        'name' => 'date_entered',
      ),
      'date_modified' => 
      array (
        'type' => 'datetime',
        'label' => 'LBL_DATE_MODIFIED',
        'width' => '10%',
        'default' => true,
        'name' => 'date_modified',
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
