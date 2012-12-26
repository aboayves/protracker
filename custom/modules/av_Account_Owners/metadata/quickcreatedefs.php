<?php
$module_name = 'av_Account_Owners';
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
          0 => 
          array (
            'name' => 'Contacts_name',
            'label' => 'LBL_CONTACTS_NAME',
          ),
          1 => 
          array (
            'name' => 'ownership_percent',
            'comment' => '',
            'label' => 'LBL_OWNERSHIP_PERCENT',
          ),
        ),
        1 => 
        array (
          0 => 'name',
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
