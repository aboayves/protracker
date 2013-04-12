<?php
$dashletData['AccountsDashlet']['searchFields'] = array (
  'name' => 
  array (
    'default' => '',
  ),
  'av_client_types_name' => 
  array (
    'default' => '',
  ),
  'email1' => 
  array (
    'default' => '',
  ),
  'assigned_user_name' => 
  array (
    'default' => '',
  ),
);
$dashletData['AccountsDashlet']['columns'] = array (
  'name' => 
  array (
    'width' => '40%',
    'label' => 'LBL_LIST_ACCOUNT_NAME',
    'link' => true,
    'default' => true,
    'name' => 'name',
  ),
  'av_client_types_name' => 
  array (
    'type' => 'relate_cstm',
    'link' => 'av_client_types',
    'label' => 'LBL_AV_CLIENT_TYPES_NAME',
    'width' => '10%',
    'default' => true,
  ),
  'primary_contact_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_PRIMARY_CONTACT_NAME',
    'id' => 'PRIMARY_CONTACT_ID',
    'width' => '10%',
    'default' => true,
  ),
  'secondary_contact_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_CO_CLIENT_CONTACT_NAME',
    'id' => 'SECONDARY_CONTACT_ID',
    'width' => '10%',
    'default' => true,
  ),
  'email1' => 
  array (
    'width' => '8%',
    'label' => 'LBL_EMAIL_ADDRESS_PRIMARY',
    'name' => 'email1',
    'default' => true,
  ),
  'assigned_user_name' => 
  array (
    'width' => '8%',
    'label' => 'LBL_LIST_ASSIGNED_USER',
    'name' => 'assigned_user_name',
    'default' => true,
  ),
  'phone_fax' => 
  array (
    'width' => '8%',
    'label' => 'LBL_PHONE_FAX',
    'name' => 'phone_fax',
    'default' => false,
  ),
  'billing_address_country' => 
  array (
    'width' => '8%',
    'label' => 'LBL_BILLING_ADDRESS_COUNTRY',
    'default' => false,
    'name' => 'billing_address_country',
  ),
  'phone_office' => 
  array (
    'width' => '15%',
    'label' => 'LBL_LIST_PHONE',
    'default' => false,
    'name' => 'phone_office',
  ),
  'website' => 
  array (
    'width' => '8%',
    'label' => 'LBL_WEBSITE',
    'default' => false,
    'name' => 'website',
  ),
  'phone_alternate' => 
  array (
    'width' => '8%',
    'label' => 'LBL_OTHER_PHONE',
    'name' => 'phone_alternate',
    'default' => false,
  ),
  'billing_address_city' => 
  array (
    'width' => '8%',
    'label' => 'LBL_BILLING_ADDRESS_CITY',
    'name' => 'billing_address_city',
    'default' => false,
  ),
  'billing_address_street' => 
  array (
    'width' => '8%',
    'label' => 'LBL_BILLING_ADDRESS_STREET',
    'name' => 'billing_address_street',
    'default' => false,
  ),
  'billing_address_state' => 
  array (
    'width' => '8%',
    'label' => 'LBL_BILLING_ADDRESS_STATE',
    'name' => 'billing_address_state',
    'default' => false,
  ),
  'billing_address_postalcode' => 
  array (
    'width' => '8%',
    'label' => 'LBL_BILLING_ADDRESS_POSTALCODE',
    'name' => 'billing_address_postalcode',
    'default' => false,
  ),
  'shipping_address_city' => 
  array (
    'width' => '8%',
    'label' => 'LBL_SHIPPING_ADDRESS_CITY',
    'name' => 'shipping_address_city',
    'default' => false,
  ),
  'shipping_address_street' => 
  array (
    'width' => '8%',
    'label' => 'LBL_SHIPPING_ADDRESS_STREET',
    'name' => 'shipping_address_street',
    'default' => false,
  ),
  'shipping_address_state' => 
  array (
    'width' => '8%',
    'label' => 'LBL_SHIPPING_ADDRESS_STATE',
    'name' => 'shipping_address_state',
    'default' => false,
  ),
  'shipping_address_postalcode' => 
  array (
    'width' => '8%',
    'label' => 'LBL_SHIPPING_ADDRESS_POSTALCODE',
    'name' => 'shipping_address_postalcode',
    'default' => false,
  ),
  'shipping_address_country' => 
  array (
    'width' => '8%',
    'label' => 'LBL_SHIPPING_ADDRESS_COUNTRY',
    'name' => 'shipping_address_country',
    'default' => false,
  ),
  'parent_name' => 
  array (
    'width' => '15%',
    'label' => 'LBL_MEMBER_OF',
    'sortable' => false,
    'name' => 'parent_name',
    'default' => false,
  ),
  'date_entered' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_ENTERED',
    'name' => 'date_entered',
    'default' => false,
  ),
  'date_modified' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_MODIFIED',
    'name' => 'date_modified',
    'default' => false,
  ),
  'created_by' => 
  array (
    'width' => '8%',
    'label' => 'LBL_CREATED',
    'name' => 'created_by',
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
