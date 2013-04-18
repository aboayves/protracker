<?php
$module_name = 'av_Medicare';
$listViewDefs [$module_name] = 
array (
  'CLAIM_NUMBER' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_CLAIM_NUMBER',
    'width' => '10%',
  ),
  'PRESCRIPTION_PLAN' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_PRESCRIPTION_PLAN',
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
  'CONTACTS_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_CONTACTS_NAME',
    'id' => 'CONTACT_ID',
    'width' => '10%',
    'default' => true,
  ),
  'PART_A_EFFECTIVE_DATE' => 
  array (
    'type' => 'date',
    'default' => true,
    'label' => 'LBL_PART_A_EFFECTIVE_DATE',
    'width' => '10%',
  ),
  'PART_B_EFFECTIVE_DATE' => 
  array (
    'type' => 'date',
    'default' => true,
    'label' => 'LBL_PART_B_EFFECTIVE_DATE',
    'width' => '10%',
  ),
);
?>
