<?php
$module_name = 'av_Professionals';
$listViewDefs [$module_name] = 
array (
  'CONTACTS_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_CONTACTS_NAME',
    'id' => 'PROFESSIONAL_ID',
    'width' => '10%',
    'default' => true,
  ),
  'TYPE' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_TYPE',
    'width' => '10%',
  ),
  'ACCOUNTS_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_ACCOUNTS_NAME',
    'id' => 'ACCOUNT_ID',
    'width' => '10%',
    'default' => true,
  ),
  'OK_TO_SPEAK_TO' => 
  array (
    'type' => 'bool',
    'default' => true,
    'label' => 'LBL_OK_TO_SPEAK_TO',
    'width' => '10%',
  ),
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => false,
    'link' => true,
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => false,
  ),
  'DESCRIPTION' => 
  array (
    'type' => 'text',
    'label' => 'LBL_DESCRIPTION',
    'sortable' => false,
    'width' => '10%',
    'default' => false,
  ),
  'CC_MAIL' => 
  array (
    'type' => 'bool',
    'default' => false,
    'label' => 'LBL_CC_MAIL',
    'width' => '10%',
  ),
  'CC_STATEMENTS' => 
  array (
    'type' => 'bool',
    'default' => false,
    'label' => 'LBL_CC_STATEMENTS',
    'width' => '10%',
  ),
  'CC_REPORTS' => 
  array (
    'type' => 'bool',
    'default' => false,
    'label' => 'LBL_CC_REPORTS',
    'width' => '10%',
  ),
  'TEAM_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_TEAM',
    'default' => false,
  ),
);
?>
