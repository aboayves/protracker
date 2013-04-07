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
);
?>
