<?php
$dashletData['av_BeneficiariesDashlet']['searchFields'] = array (
  'date_entered' => 
  array (
    'default' => '',
  ),
  'date_modified' => 
  array (
    'default' => '',
  ),
  'team_id' => 
  array (
    'default' => '',
  ),
  'assigned_user_id' => 
  array (
    'type' => 'assigned_user_name',
    'default' => 'Kathy Grant',
  ),
);
$dashletData['av_BeneficiariesDashlet']['columns'] = array (
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
  'name' => 
  array (
    'width' => '40%',
    'label' => 'LBL_LIST_NAME',
    'link' => true,
    'default' => true,
    'name' => 'name',
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
  'date_modified' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_MODIFIED',
    'name' => 'date_modified',
    'default' => false,
  ),
  'modified_by_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_MODIFIED_NAME',
    'id' => 'MODIFIED_USER_ID',
    'width' => '10%',
    'default' => false,
    'name' => 'modified_by_name',
  ),
  'date_entered' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_ENTERED',
    'default' => false,
    'name' => 'date_entered',
  ),
  'created_by' => 
  array (
    'width' => '8%',
    'label' => 'LBL_CREATED',
    'name' => 'created_by',
    'default' => false,
  ),
  'created_by_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_CREATED',
    'id' => 'CREATED_BY',
    'width' => '10%',
    'default' => false,
    'name' => 'created_by_name',
  ),
  'assigned_user_name' => 
  array (
    'width' => '8%',
    'label' => 'LBL_LIST_ASSIGNED_USER',
    'name' => 'assigned_user_name',
    'default' => false,
  ),
  'percent' => 
  array (
    'type' => 'int',
    'default' => false,
    'label' => 'LBL_PERCENT',
    'width' => '10%',
    'name' => 'percent',
  ),
  'team_name' => 
  array (
    'width' => '15%',
    'label' => 'LBL_LIST_TEAM',
    'name' => 'team_name',
    'default' => false,
  ),
  'per_stirpes' => 
  array (
    'type' => 'bool',
    'default' => false,
    'label' => 'LBL_PER_STIRPES',
    'width' => '10%',
    'name' => 'per_stirpes',
  ),
  'description' => 
  array (
    'type' => 'text',
    'label' => 'LBL_DESCRIPTION',
    'sortable' => false,
    'width' => '10%',
    'default' => false,
    'name' => 'description',
  ),
);
