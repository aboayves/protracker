<?php
$module_name = 'av_Account_Owners';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'av_account_owners_contacts_1_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_AV_ACCOUNT_OWNERS_CONTACTS_1_FROM_CONTACTS_TITLE',
        'id' => 'AV_ACCOUNT_OWNERS_CONTACTS_1CONTACTS_IDB',
        'width' => '10%',
        'default' => true,
        'name' => 'av_account_owners_contacts_1_name',
      ),
      'ownership_percent' => 
      array (
        'type' => 'currency',
        'default' => true,
        'label' => 'LBL_OWNERSHIP_PERCENT',
        'currency_format' => true,
        'width' => '10%',
        'name' => 'ownership_percent',
      ),
    ),
    'advanced_search' => 
    array (
      'av_account_owners_contacts_1_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_AV_ACCOUNT_OWNERS_CONTACTS_1_FROM_CONTACTS_TITLE',
        'width' => '10%',
        'default' => true,
        'id' => 'AV_ACCOUNT_OWNERS_CONTACTS_1CONTACTS_IDB',
        'name' => 'av_account_owners_contacts_1_name',
      ),
      'ownership_percent' => 
      array (
        'type' => 'currency',
        'default' => true,
        'label' => 'LBL_OWNERSHIP_PERCENT',
        'currency_format' => true,
        'width' => '10%',
        'name' => 'ownership_percent',
      ),
      'description' => 
      array (
        'type' => 'text',
        'label' => 'LBL_DESCRIPTION',
        'sortable' => false,
        'width' => '10%',
        'default' => true,
        'name' => 'description',
      ),
      'date_entered' => 
      array (
        'type' => 'datetime',
        'label' => 'LBL_DATE_ENTERED',
        'width' => '10%',
        'default' => true,
        'name' => 'date_entered',
      ),
      'created_by' => 
      array (
        'type' => 'assigned_user_name',
        'label' => 'LBL_CREATED',
        'width' => '10%',
        'default' => true,
        'name' => 'created_by',
      ),
      'date_modified' => 
      array (
        'type' => 'datetime',
        'label' => 'LBL_DATE_MODIFIED',
        'width' => '10%',
        'default' => true,
        'name' => 'date_modified',
      ),
      'modified_user_id' => 
      array (
        'type' => 'assigned_user_name',
        'label' => 'LBL_MODIFIED',
        'width' => '10%',
        'default' => true,
        'name' => 'modified_user_id',
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
