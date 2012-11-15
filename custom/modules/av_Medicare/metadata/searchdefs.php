<?php
$module_name = 'av_Medicare';
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
      'current_user_only' => 
      array (
        'name' => 'current_user_only',
        'label' => 'LBL_CURRENT_USER_FILTER',
        'type' => 'bool',
        'default' => true,
        'width' => '10%',
      ),
      'favorites_only' => 
      array (
        'name' => 'favorites_only',
        'label' => 'LBL_FAVORITES_FILTER',
        'type' => 'bool',
        'default' => true,
        'width' => '10%',
      ),
      'accounts_av_medicare_1_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_ACCOUNTS_AV_MEDICARE_1_FROM_ACCOUNTS_TITLE',
        'width' => '10%',
        'default' => true,
        'id' => 'ACCOUNTS_AV_MEDICARE_1ACCOUNTS_IDA',
        'name' => 'accounts_av_medicare_1_name',
      ),
      'drug_coverage' => 
      array (
        'type' => 'enum',
        'default' => true,
        'label' => 'LBL_DRUG_COVERAGE',
        'width' => '10%',
        'name' => 'drug_coverage',
      ),
      'prescription_plan' => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_PRESCRIPTION_PLAN',
        'width' => '10%',
        'name' => 'prescription_plan',
      ),
      'date_modified' => 
      array (
        'type' => 'datetime',
        'label' => 'LBL_DATE_MODIFIED',
        'width' => '10%',
        'default' => true,
        'name' => 'date_modified',
      ),
    ),
    'advanced_search' => 
    array (
      'favorites_only' => 
      array (
        'name' => 'favorites_only',
        'label' => 'LBL_FAVORITES_FILTER',
        'type' => 'bool',
        'default' => true,
        'width' => '10%',
      ),
      'current_user_only' => 
      array (
        'label' => 'LBL_CURRENT_USER_FILTER',
        'type' => 'bool',
        'width' => '10%',
        'default' => true,
        'name' => 'current_user_only',
      ),
      'team_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_TEAMS',
        'id' => 'TEAM_ID',
        'width' => '10%',
        'default' => true,
        'name' => 'team_name',
      ),
      'name' => 
      array (
        'type' => 'name',
        'link' => true,
        'label' => 'LBL_NAME',
        'width' => '10%',
        'default' => true,
        'name' => 'name',
      ),
      'accounts_av_medicare_1_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_ACCOUNTS_AV_MEDICARE_1_FROM_ACCOUNTS_TITLE',
        'id' => 'ACCOUNTS_AV_MEDICARE_1ACCOUNTS_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'accounts_av_medicare_1_name',
      ),
      'claim_number' => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_CLAIM_NUMBER',
        'width' => '10%',
        'name' => 'claim_number',
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
      'date_modified' => 
      array (
        'type' => 'datetime',
        'label' => 'LBL_DATE_MODIFIED',
        'width' => '10%',
        'default' => true,
        'name' => 'date_modified',
      ),
      'drug_coverage' => 
      array (
        'type' => 'enum',
        'default' => true,
        'label' => 'LBL_DRUG_COVERAGE',
        'width' => '10%',
        'name' => 'drug_coverage',
      ),
      'prescription_plan' => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_PRESCRIPTION_PLAN',
        'width' => '10%',
        'name' => 'prescription_plan',
      ),
      'monthly_premium' => 
      array (
        'type' => 'currency',
        'default' => true,
        'label' => 'LBL_MONTHLY_PREMIUM',
        'currency_format' => true,
        'width' => '10%',
        'name' => 'monthly_premium',
      ),
      'description' => 
      array (
        'type' => 'text',
        'label' => 'LBL_DESCRIPTION',
        'sortable' => false,
        'width' => '10%',
        'default' => true,
        'name' => 'description',
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
