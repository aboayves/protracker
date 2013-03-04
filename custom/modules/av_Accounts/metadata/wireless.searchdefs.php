<?php
$module_name = 'av_Accounts';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'account_number' => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_ACCOUNT_NUMBER',
        'width' => '10%',
        'name' => 'account_number',
      ),
      'av_account_types_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_AV_ACCOUNT_TYPES_NAME',
        'id' => 'ACCOUNT_TYPE_ID',
        'width' => '10%',
        'default' => true,
        'name' => 'av_account_types_name',
      ),
      'custodian' => 
      array (
        'type' => 'enum',
        'default' => true,
        'label' => 'LBL_CUSTODIAN',
        'width' => '10%',
        'name' => 'custodian',
      ),
    ),
    'advanced_search' => 
    array (
      0 => 'name',
    ),
  ),
  'templateMeta' => 
  array (
    'maxColumns' => '1',
    'widths' => 
    array (
      'label' => '10',
      'field' => '30',
    ),
  ),
);
?>
