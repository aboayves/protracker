<?php
$module_name = 'av_Estate_Admin';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '15%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'ACCOUNTANT' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_ACCOUNTANT',
    'width' => '10%',
  ),
  'ATTORNEY' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_ATTORNEY',
    'width' => '10%',
  ),
  'CONTACTS_AV_ESTATE_ADMIN_1_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_CONTACTS_AV_ESTATE_ADMIN_1_FROM_CONTACTS_TITLE',
    'id' => 'CONTACTS_AV_ESTATE_ADMIN_1CONTACTS_IDA',
    'width' => '15%',
    'default' => true,
  ),
  'ACCOUNTS_AV_ESTATE_ADMIN_1_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_ACCOUNTS_AV_ESTATE_ADMIN_1_FROM_ACCOUNTS_TITLE',
    'id' => 'ACCOUNTS_AV_ESTATE_ADMIN_1ACCOUNTS_IDA',
    'width' => '15%',
    'default' => true,
  ),
  'DESCRIPTION' => 
  array (
    'type' => 'text',
    'label' => 'LBL_DESCRIPTION',
    'sortable' => false,
    'width' => '20%',
    'default' => true,
  ),
  'DATE_OF_DEATH' => 
  array (
    'type' => 'date',
    'default' => true,
    'label' => 'LBL_DATE_OF_DEATH',
    'width' => '10%',
  ),
  'EIN' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_EIN',
    'width' => '10%',
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => false,
  ),
  'TEAM_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_TEAM',
    'default' => false,
  ),
);
?>
