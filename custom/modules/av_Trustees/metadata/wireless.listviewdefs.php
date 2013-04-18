<?php
$module_name = 'av_Trustees';
$listViewDefs [$module_name] = 
array (
  'AV_ACCOUNTS_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_AV_ACCOUNTS_NAME',
    'id' => 'ASSET_ID',
    'width' => '10%',
    'default' => true,
  ),
  'CONTACTS_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_CONTACTS_NAME',
    'id' => 'TRUSTEE_ID',
    'width' => '10%',
    'default' => true,
  ),
  'TYPE' => 
  array (
    'type' => 'enum',
    'default' => true,
    'label' => 'LBL_TYPE',
    'width' => '10%',
  ),
  'OK_TO_SPEAK_TO' => 
  array (
    'type' => 'bool',
    'default' => true,
    'label' => 'LBL_OK_TO_SPEAK_TO',
    'width' => '10%',
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'default' => false,
  ),
  'TEAM_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_TEAM',
    'default' => false,
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
