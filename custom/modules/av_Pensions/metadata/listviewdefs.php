<?php
$module_name = 'av_Pensions';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'DESCRIPTION' => 
  array (
    'type' => 'text',
    'label' => 'LBL_DESCRIPTION',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
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
  'CONTACTS_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_CONTACTS_NAME',
    'id' => 'CONTACT_ID',
    'width' => '10%',
    'default' => true,
  ),
  'BENEFIT_START_DATE' => 
  array (
    'type' => 'date',
    'default' => true,
    'label' => 'LBL_BENEFIT_START_DATE',
    'width' => '10%',
  ),
  'SINGLE_ANNUAL_BENEFIT' => 
  array (
    'type' => 'currency',
    'align' => 'right',
    'default' => false,
    'label' => 'LBL_SINGLE_ANNUAL_BENEFIT',
    'currency_format' => true,
    'width' => '10%',
  ),
  'OTHER_BENEFITS' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_OTHER_BENEFITS',
    'width' => '10%',
  ),
  'ANNUAL_INCREASE' => 
  array (
    'type' => 'int',
    'default' => false,
    'label' => 'LBL_ANNUAL_INCREASE',
    'width' => '10%',
  ),
  'JOINT_ANNUAL_BENEFIT' => 
  array (
    'type' => 'currency',
    'align' => 'right',
    'default' => false,
    'label' => 'LBL_JOINT_ANNUAL_BENEFIT',
    'currency_format' => true,
    'width' => '10%',
  ),
  'JOINT_MONTHLY_BENEFIT' => 
  array (
    'type' => 'currency',
    'align' => 'right',
    'default' => false,
    'label' => 'LBL_JOINT_MONTHLY_BENEFIT',
    'currency_format' => true,
    'width' => '10%',
  ),
  'PERIOD_CERTAINTY' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_PERIOD_CERTAINTY',
    'width' => '10%',
  ),
  'SINGLE_MONTHLY_BENEFIT' => 
  array (
    'type' => 'currency',
    'align' => 'right',
    'default' => false,
    'label' => 'LBL_SINGLE_MONTHLY_BENEFIT',
    'currency_format' => true,
    'width' => '10%',
  ),
  'STATEMENT_DATE' => 
  array (
    'type' => 'date',
    'default' => false,
    'label' => 'LBL_STATEMENT_DATE',
    'width' => '10%',
  ),
  'SURVIVOR_BENEFITS' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_SURVIVOR_BENEFITS',
    'width' => '10%',
  ),
);
?>
