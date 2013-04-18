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
        'width' => '10%',
        'default' => true,
        'id' => 'ACCOUNT_ID',
        'name' => 'accounts_name',
      ),
      'contacts_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_CONTACTS_NAME',
        'id' => 'CONTACT_ID',
        'width' => '10%',
        'default' => true,
        'name' => 'contacts_name',
      ),
      'part_a_effective_date' => 
      array (
        'type' => 'date',
        'default' => true,
        'label' => 'LBL_PART_A_EFFECTIVE_DATE',
        'width' => '10%',
        'name' => 'part_a_effective_date',
      ),
      'part_b_effective_date' => 
      array (
        'type' => 'date',
        'default' => true,
        'label' => 'LBL_PART_B_EFFECTIVE_DATE',
        'width' => '10%',
        'name' => 'part_b_effective_date',
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
