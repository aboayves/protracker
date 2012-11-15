<?php
$module_name = 'av_Tax_Returns';
$viewdefs [$module_name] = 
array (
  'EditView' => 
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
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 'name',
          1 => 'assigned_user_name',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'team_name',
            'displayParams' => 
            array (
              'display' => true,
            ),
          ),
        ),
        2 => 
        array (
          0 => 'description',
          1 => 
          array (
            'name' => 'accounts_av_tax_returns_1_name',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'accounts_av_tax_returns_2_name',
          ),
          1 => 
          array (
            'name' => 'av_tax_returns_av_tax_forms_1_name',
          ),
        ),
      ),
    ),
  ),
);
?>
