<?php
$module_name = 'av_Tax_Estimates';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'tax_year' => 
      array (
        'type' => 'int',
        'default' => true,
        'label' => 'LBL_TAX_YEAR',
        'width' => '10%',
        'name' => 'tax_year',
      ),
      'accounts_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_ACCOUNTS_NAME',
        'id' => 'ACCOUNT_ID',
        'width' => '10%',
        'default' => true,
        'name' => 'accounts_name',
      ),
      'av_tax_forms_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_AV_TAX_FORMS_NAME',
        'id' => 'TAX_FORM_ID',
        'width' => '10%',
        'default' => true,
        'name' => 'av_tax_forms_name',
      ),
    ),
    'advanced_search' => 
    array (
      'tax_year' => 
      array (
        'type' => 'int',
        'default' => true,
        'label' => 'LBL_TAX_YEAR',
        'width' => '10%',
        'name' => 'tax_year',
      ),
      'accounts_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_ACCOUNTS_NAME',
        'width' => '10%',
        'default' => true,
        'id' => 'ACCOUNT_ID',
        'name' => 'accounts_name',
      ),
      'av_tax_forms_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_AV_TAX_FORMS_NAME',
        'width' => '10%',
        'default' => true,
        'id' => 'TAX_FORM_ID',
        'name' => 'av_tax_forms_name',
      ),
      'return_type' => 
      array (
        'type' => 'enum',
        'default' => true,
        'label' => 'LBL_RETURN_TYPE',
        'width' => '10%',
        'name' => 'return_type',
      ),
      'district' => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_DISTRICT',
        'width' => '10%',
        'name' => 'district',
      ),
      'residency' => 
      array (
        'type' => 'enum',
        'default' => true,
        'label' => 'LBL_RESIDENCY',
        'width' => '10%',
        'name' => 'residency',
      ),
    ),
  ),
  'templateMeta' => 
  array (
    'maxColumns' => '3',
    'maxColumnsBasic' => '4',
    'widths' => 
    array (
      'label' => '10',
      'field' => '30',
    ),
  ),
);
?>
