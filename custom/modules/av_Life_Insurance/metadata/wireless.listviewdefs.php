<?php
$module_name = 'av_Life_Insurance';
$OBJECT_NAME = 'AV_LIFE_INSURANCE';
$listViewDefs [$module_name] = 
array (
  'TYPE' => 
  array (
    'type' => 'enum',
    'default' => true,
    'label' => 'LBL_TYPE',
    'width' => '10%',
  ),
  'DEATH_BENEFIT' => 
  array (
    'type' => 'currency',
    'align' => 'right',
    'default' => true,
    'label' => 'LBL_DEATH_BENEFIT',
    'currency_format' => true,
    'width' => '10%',
  ),
  'AV_COMPANIES_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_AV_COMPANIES_NAME',
    'id' => 'COMPANY_ID',
    'width' => '10%',
    'default' => true,
  ),
  'POLICY_NUMBER' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_POLICY_NUMBER',
    'width' => '10%',
  ),
  'CONTACTS_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_CONTACTS_NAME',
    'id' => 'OWNER_ID',
    'width' => '10%',
    'default' => true,
  ),
  'FACE_VALUE' => 
  array (
    'type' => 'currency',
    'align' => 'right',
    'default' => false,
    'label' => 'LBL_FACE_VALUE',
    'currency_format' => true,
    'width' => '10%',
  ),
  'TERM' => 
  array (
    'type' => 'int',
    'default' => false,
    'label' => 'LBL_TERM',
    'width' => '10%',
  ),
);
?>
