<?php
$module_name = 'av_Groups';
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
      'useTabs' => true,
      'syncDetailEditViews' => true,
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 'name',
        ),
        1 => 
        array (
          0 => 'communication_type',
          1 => 'membership_expiration_days',
        ),
        2 => 
        array (
          0 => 'delivery_method',
          1 => 'assigned_user_name',
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'av_offices_av_groups_name',
            'studio' => 'visible',
            'label' => 'LBL_OFFICE',
          ),
        ),
        6 => 
        array (
          0 => 'description',
          1 => 
          array (
            'name' => 'contacts_av_groups_1_name',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'contacts_av_groups_2_name',
          ),
        ),
      ),
    ),
  ),
);
?>
