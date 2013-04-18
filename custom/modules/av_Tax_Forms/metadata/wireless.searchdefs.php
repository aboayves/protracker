<?php
$module_name = 'av_Tax_Forms';
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
