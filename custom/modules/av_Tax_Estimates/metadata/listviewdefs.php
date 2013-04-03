<?php
$module_name = 'av_Tax_Estimates';
$listViewDefs [$module_name] = 
array (
  'TAX_YEAR' => 
  array (
    'type' => 'int',
    'default' => true,
    'label' => 'LBL_TAX_YEAR',
    'width' => '5%',
    'link' => true,
    'disable_num_format' => true,
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
    'width' => '25%',
    'default' => true,
  ),
  'DISTRICT' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_DISTRICT',
    'width' => '10%',
  ),
  'TEAM_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_TEAM',
    'default' => false,
  ),
  'RETURN_TYPE' => 
  array (
    'type' => 'enum',
    'default' => false,
    'label' => 'LBL_RETURN_TYPE',
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
);
?>
