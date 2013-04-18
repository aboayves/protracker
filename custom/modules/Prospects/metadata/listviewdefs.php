<?php
$listViewDefs ['Prospects'] = 
array (
  'FULL_NAME' => 
  array (
    'width' => '20%',
    'label' => 'LBL_LIST_NAME',
    'link' => true,
    'related_fields' => 
    array (
      0 => 'first_name',
      1 => 'last_name',
    ),
    'orderBy' => 'last_name',
    'default' => true,
  ),
  'EMAIL1' => 
  array (
    'width' => '20%',
    'label' => 'LBL_LIST_EMAIL_ADDRESS',
    'sortable' => false,
    'link' => false,
    'default' => true,
  ),
  'PHONE_HOME' => 
  array (
    'type' => 'phone',
    'label' => 'LBL_HOME_PHONE',
    'width' => '10%',
    'default' => true,
  ),
  'PHONE_WORK' => 
  array (
    'width' => '10%',
    'label' => 'LBL_LIST_PHONE',
    'link' => false,
    'default' => true,
  ),
  'PHONE_MOBILE' => 
  array (
    'type' => 'phone',
    'label' => 'LBL_MOBILE_PHONE',
    'width' => '10%',
    'default' => true,
  ),
  'PRIMARY_ADDRESS_CITY' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_PRIMARY_ADDRESS_CITY',
    'width' => '10%',
    'default' => true,
  ),
  'PRIMARY_ADDRESS_STATE' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_PRIMARY_ADDRESS_STATE',
    'width' => '10%',
    'default' => true,
  ),
  'DATE_ENTERED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_ENTERED',
    'width' => '10%',
    'default' => false,
  ),
  'DO_NOT_EMAIL' => 
  array (
    'type' => 'bool',
    'default' => false,
    'label' => 'LBL_DO_NOT_EMAIL',
    'width' => '10%',
  ),
  'DO_NOT_CALL' => 
  array (
    'type' => 'bool',
    'default' => false,
    'label' => 'LBL_DO_NOT_CALL',
    'width' => '10%',
  ),
  'BIRTHDATE' => 
  array (
    'type' => 'date',
    'label' => 'LBL_BIRTHDATE',
    'width' => '10%',
    'default' => false,
  ),
  'PHONE_OTHER' => 
  array (
    'type' => 'phone',
    'label' => 'LBL_OTHER_PHONE',
    'width' => '10%',
    'default' => false,
  ),
  'PHONE_FAX' => 
  array (
    'type' => 'phone',
    'label' => 'LBL_FAX_PHONE',
    'width' => '10%',
    'default' => false,
  ),
  'TITLE' => 
  array (
    'width' => '20%',
    'label' => 'LBL_LIST_TITLE',
    'link' => false,
    'default' => false,
  ),
);
?>
