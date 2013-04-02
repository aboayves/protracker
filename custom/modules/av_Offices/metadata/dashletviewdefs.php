<?php
$dashletData['av_OfficesDashlet']['searchFields'] = array (
  'name' => 
  array (
    'default' => '',
  ),
  'office_address_city' => 
  array (
    'default' => '',
  ),
  'office_address_state' => 
  array (
    'default' => '',
  ),
);
$dashletData['av_OfficesDashlet']['columns'] = array (
  'name' => 
  array (
    'width' => '40%',
    'label' => 'LBL_LIST_NAME',
    'link' => true,
    'default' => true,
    'name' => 'name',
  ),
  'office_address_city' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_OFFICE_ADDRESS_CITY',
    'width' => '10%',
  ),
  'office_address_state' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_OFFICE_ADDRESS_STATE',
    'width' => '10%',
  ),
  'phone_office' => 
  array (
    'type' => 'phone',
    'label' => 'LBL_PHONE_OFFICE',
    'width' => '10%',
    'default' => true,
  ),
  'phone_fax' => 
  array (
    'type' => 'phone',
    'label' => 'LBL_FAX',
    'width' => '10%',
    'default' => true,
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
