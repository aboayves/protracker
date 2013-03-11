<?php
$module_name = 'av_Homeowners_Insurance';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'type' => 
      array (
        'type' => 'enum',
        'default' => true,
        'label' => 'LBL_TYPE',
        'width' => '10%',
        'name' => 'type',
      ),
      'av_companies_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_AV_COMPANIES_NAME',
        'id' => 'COMPANY_ID',
        'width' => '10%',
        'default' => true,
        'name' => 'av_companies_name',
      ),
      'policy_number' => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_POLICY_NUMBER',
        'width' => '10%',
        'name' => 'policy_number',
      ),
    ),
    'advanced_search' => 
    array (
      'type' => 
      array (
        'type' => 'enum',
        'default' => true,
        'label' => 'LBL_TYPE',
        'width' => '10%',
        'name' => 'type',
      ),
      'av_companies_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_AV_COMPANIES_NAME',
        'width' => '10%',
        'default' => true,
        'id' => 'COMPANY_ID',
        'name' => 'av_companies_name',
      ),
      'policy_number' => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_POLICY_NUMBER',
        'width' => '10%',
        'name' => 'policy_number',
      ),
      'status' => 
      array (
        'type' => 'enum',
        'default' => true,
        'label' => 'LBL_STATUS',
        'width' => '10%',
        'name' => 'status',
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
      'contacts_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_CONTACTS_NAME',
        'id' => 'OWNER_ID',
        'width' => '10%',
        'default' => true,
        'name' => 'contacts_name',
      ),
      'issue_date' => 
      array (
        'type' => 'date',
        'default' => true,
        'label' => 'LBL_ISSUE_DATE',
        'width' => '10%',
        'name' => 'issue_date',
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
