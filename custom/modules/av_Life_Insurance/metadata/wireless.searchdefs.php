<?php
$module_name = 'av_Life_Insurance';
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
      'term' => 
      array (
        'type' => 'int',
        'default' => true,
        'label' => 'LBL_TERM',
        'width' => '10%',
        'name' => 'term',
      ),
      'death_benefit' => 
      array (
        'type' => 'currency',
        'align' => 'right',
        'default' => true,
        'label' => 'LBL_DEATH_BENEFIT',
        'currency_format' => true,
        'width' => '10%',
        'name' => 'death_benefit',
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
