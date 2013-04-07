<?php
$module_name = 'av_Tax_Forms';
$viewdefs [$module_name] = 
array (
  'QuickCreate' => 
  array (
    'templateMeta' => 
    array (
      'maxColumns' => '2',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'useTabs' => false,
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 'name',
          1 => 
          array (
            'name' => 'return_type',
            'comment' => '',
            'label' => 'LBL_RETURN_TYPE',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'district',
            'comment' => '',
            'label' => 'LBL_DISTRICT',
          ),
          1 => 
          array (
            'name' => 'residency',
            'comment' => '',
            'label' => 'LBL_RESIDENCY',
          ),
        ),
        2 => 
        array (
          0 => 'description',
        ),
      ),
    ),
  ),
);
?>
