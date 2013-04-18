<?php
$module_name = 'av_Trusts';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'document_name' => 
      array (
        'name' => 'document_name',
        'default' => true,
        'width' => '10%',
      ),
      'type' => 
      array (
        'type' => 'enum',
        'default' => true,
        'label' => 'LBL_TYPE',
        'width' => '10%',
        'name' => 'type',
      ),
      'active_date' => 
      array (
        'type' => 'date',
        'label' => 'LBL_DOC_ACTIVE_DATE',
        'width' => '10%',
        'default' => true,
        'name' => 'active_date',
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
