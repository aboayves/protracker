<?php
$dashletData['av_CompaniesDashlet']['searchFields'] = array (
  'name' => 
  array (
    'default' => '',
  ),
  'industry' => 
  array (
    'default' => '',
  ),
  'shipping_address_state' => 
  array (
    'default' => '',
  ),
);
$dashletData['av_CompaniesDashlet']['columns'] = array (
  'name' => 
  array (
    'width' => '40%',
    'label' => 'LBL_LIST_NAME',
    'link' => true,
    'default' => true,
    'name' => 'name',
  ),
  'industry' => 
  array (
    'type' => 'enum',
    'label' => 'LBL_INDUSTRY',
    'width' => '10%',
    'default' => true,
  ),
  'phone_office' => 
  array (
    'type' => 'phone',
    'label' => 'LBL_PHONE_OFFICE',
    'width' => '10%',
    'default' => true,
    'name' => 'phone_office',
  ),
  'email1' => 
  array (
    'type' => 'varchar',
    'studio' => 
    array (
      'editField' => true,
      'searchview' => false,
    ),
    'label' => 'LBL_EMAIL',
    'width' => '10%',
    'default' => true,
    'name' => 'email1',
  ),
  'shipping_address_city' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_SHIPPING_ADDRESS_CITY',
    'width' => '10%',
    'default' => true,
    'name' => 'shipping_address_city',
  ),
  'shipping_address_state' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_SHIPPING_ADDRESS_STATE',
    'width' => '10%',
    'default' => true,
    'name' => 'shipping_address_state',
  ),
  'date_modified' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_MODIFIED',
    'name' => 'date_modified',
    'default' => false,
  ),
  'date_entered' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_ENTERED',
    'default' => false,
    'name' => 'date_entered',
  ),
  'av_companies_type' => 
  array (
    'type' => 'enum',
    'label' => 'LBL_TYPE',
    'width' => '15%',
    'default' => false,
    'name' => 'av_companies_type',
  ),
  'created_by' => 
  array (
    'width' => '8%',
    'label' => 'LBL_CREATED',
    'name' => 'created_by',
    'default' => false,
  ),
  'assigned_user_name' => 
  array (
    'width' => '8%',
    'label' => 'LBL_LIST_ASSIGNED_USER',
    'name' => 'assigned_user_name',
    'default' => false,
  ),
  'team_name' => 
  array (
    'width' => '15%',
    'label' => 'LBL_LIST_TEAM',
    'name' => 'team_name',
    'default' => false,
  ),
);
