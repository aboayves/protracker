<?php
$module_name = 'av_Long_Term_Care_Insurance';
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
      0 => 'document_name',
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
