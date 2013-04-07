<?php
$module_name = 'av_Tax_Returns';
$listViewDefs [$module_name] = 
array (
  'TAX_YEAR' => 
  array (
    'type' => 'int',
    'default' => true,
    'label' => 'LBL_TAX_YEAR',
    'width' => '5%',
    'disable_num_format' => true,
    'link' => true,
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
    'label' => 'LBL_AV_TAX_FORMS_NAME',
    'id' => 'TAX_FORM_ID',
    'width' => '20%',
    'default' => true,
	'link' => true,
  ),
  'RETURN_TYPE' => 
  array (
    'type' => 'enum',
    'default' => true,
    'label' => 'LBL_RETURN_TYPE',
    'width' => '10%',
  ),
  'RESIDENCY' => 
  array (
    'type' => 'enum',
    'default' => false,
    'label' => 'LBL_RESIDENCY',
    'width' => '10%',
  ),
  'FILING_STATUS' => 
  array (
    'type' => 'enum',
    'default' => false,
    'label' => 'LBL_FILING_STATUS',
    'width' => '10%',
  ),
  'DISTRICT' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_DISTRICT',
    'width' => '10%',
  ),
);
?>
