<?php
$module_name = 'av_Tax_Estimates';
$listViewDefs [$module_name] = 
array (
  'TAX_YEAR' => 
  array (
    'type' => 'int',
    'default' => true,
    'label' => 'LBL_TAX_YEAR',
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
  'AV_TAX_FORMS_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_AV_TAX_FORMS_NAME',
    'id' => 'TAX_FORM_ID',
    'width' => '10%',
    'default' => true,
  ),
  'RETURN_TYPE' => 
  array (
    'type' => 'enum',
    'default' => true,
    'label' => 'LBL_RETURN_TYPE',
    'width' => '10%',
  ),
  'DISTRICT' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_DISTRICT',
    'width' => '10%',
  ),
);
?>
