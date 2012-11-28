<?php
$module_name = 'av_Beneficiaries';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'current_user_only' => 
      array (
        'name' => 'current_user_only',
        'label' => 'LBL_CURRENT_USER_FILTER',
        'type' => 'bool',
        'default' => true,
        'width' => '10%',
      ),
      'favorites_only' => 
      array (
        'name' => 'favorites_only',
        'label' => 'LBL_FAVORITES_FILTER',
        'type' => 'bool',
        'default' => true,
        'width' => '10%',
      ),
      'av_accounts_av_beneficiaries_1_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_AV_ACCOUNTS_AV_BENEFICIARIES_1_FROM_AV_ACCOUNTS_TITLE',
        'id' => 'AV_ACCOUNTS_AV_BENEFICIARIES_1AV_ACCOUNTS_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'av_accounts_av_beneficiaries_1_name',
      ),
      'contacts_av_beneficiaries_1_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_CONTACTS_AV_BENEFICIARIES_1_FROM_CONTACTS_TITLE',
        'id' => 'CONTACTS_AV_BENEFICIARIES_1CONTACTS_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'contacts_av_beneficiaries_1_name',
      ),
      'type' => 
      array (
        'type' => 'enum',
        'default' => true,
        'label' => 'LBL_TYPE',
        'width' => '10%',
        'name' => 'type',
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
    'advanced_search' => 
    array (
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'current_user_only' => 
      array (
        'label' => 'LBL_CURRENT_USER_FILTER',
        'type' => 'bool',
        'default' => true,
        'width' => '10%',
        'name' => 'current_user_only',
      ),
      'favorites_only' => 
      array (
        'name' => 'favorites_only',
        'label' => 'LBL_FAVORITES_FILTER',
        'type' => 'bool',
        'default' => true,
        'width' => '10%',
      ),
      'av_accounts_av_beneficiaries_1_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_AV_ACCOUNTS_AV_BENEFICIARIES_1_FROM_AV_ACCOUNTS_TITLE',
        'width' => '10%',
        'default' => true,
        'id' => 'AV_ACCOUNTS_AV_BENEFICIARIES_1AV_ACCOUNTS_IDA',
        'name' => 'av_accounts_av_beneficiaries_1_name',
      ),
      'contacts_av_beneficiaries_1_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_CONTACTS_AV_BENEFICIARIES_1_FROM_CONTACTS_TITLE',
        'width' => '10%',
        'default' => true,
        'id' => 'CONTACTS_AV_BENEFICIARIES_1CONTACTS_IDA',
        'name' => 'contacts_av_beneficiaries_1_name',
      ),
      'type' => 
      array (
        'type' => 'enum',
        'default' => true,
        'label' => 'LBL_TYPE',
        'width' => '10%',
        'name' => 'type',
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
      'date_verified' => 
      array (
        'type' => 'date',
        'default' => true,
        'label' => 'LBL_DATE_VERIFIED',
        'width' => '10%',
        'name' => 'date_verified',
      ),
      'created_by' => 
      array (
        'type' => 'assigned_user_name',
        'label' => 'LBL_CREATED',
        'width' => '10%',
        'default' => true,
        'name' => 'created_by',
      ),
      'modified_user_id' => 
      array (
        'type' => 'assigned_user_name',
        'label' => 'LBL_MODIFIED',
        'width' => '10%',
        'default' => true,
        'name' => 'modified_user_id',
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
