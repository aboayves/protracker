<?php
$module_name = 'av_Service_Team';
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
            'name' => 'accounts_name',
            'label' => 'LBL_ACCOUNTS_NAME',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'role',
            'comment' => '',
            'label' => 'LBL_ROLE',
          ),
        ),
        2 => 
        array (
          0 => 'assigned_user_name',
        ),
        3 => 
        array (
          0 => 'description',
        ),
      ),
    ),
  ),
);
?>
