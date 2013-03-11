<?php
$module_name = 'av_Medicare';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'claim_number' => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_CLAIM_NUMBER',
        'width' => '10%',
        'name' => 'claim_number',
      ),
      'prescription_plan' => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_PRESCRIPTION_PLAN',
        'width' => '10%',
        'name' => 'prescription_plan',
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
