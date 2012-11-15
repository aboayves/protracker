<?php
$module_name = 'av_Office_Gifts';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '20%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'GIFT_DATE' => 
  array (
    'type' => 'date',
    'default' => true,
    'label' => 'LBL_GIFT_DATE',
    'width' => '8%',
  ),
  'DESCRIPTION' => 
  array (
    'type' => 'text',
    'label' => 'LBL_DESCRIPTION',
    'sortable' => false,
    'width' => '20%',
    'default' => true,
  ),
  'VALUE' => 
  array (
    'type' => 'currency',
    'default' => true,
    'label' => 'LBL_VALUE',
    'currency_format' => true,
    'width' => '8%',
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => true,
  ),
  'TEAM_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_TEAM',
    'default' => false,
  ),
  'DATE_ENTERED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_ENTERED',
    'width' => '10%',
    'default' => false,
  ),
  'CREATED_BY_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_CREATED',
    'id' => 'CREATED_BY',
    'width' => '10%',
    'default' => false,
  ),
  'DATE_MODIFIED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_MODIFIED',
    'width' => '10%',
    'default' => false,
  ),
  'MODIFIED_BY_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_MODIFIED_NAME',
    'id' => 'MODIFIED_USER_ID',
    'width' => '10%',
    'default' => false,
  ),
  'ACCOUNTS_AV_OFFICE_GIFTS_1_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_ACCOUNTS_AV_OFFICE_GIFTS_1_FROM_ACCOUNTS_TITLE',
    'id' => 'ACCOUNTS_AV_OFFICE_GIFTS_1ACCOUNTS_IDA',
    'width' => '10%',
    'default' => false,
  ),
  'CONTACTS_AV_OFFICE_GIFTS_1_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_CONTACTS_AV_OFFICE_GIFTS_1_FROM_CONTACTS_TITLE',
    'id' => 'CONTACTS_AV_OFFICE_GIFTS_1CONTACTS_IDA',
    'width' => '10%',
    'default' => false,
  ),
);
?>
