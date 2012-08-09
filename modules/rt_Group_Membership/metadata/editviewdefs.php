<?php
$module_name = 'rt_Group_Membership';
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
          1 => 'parent_name',
        ),
        1 => 
        array (
          0 => 'rt_group_membership_av_groups_name',
          1 => 'include',
        ),
        2 => 
        array (
          0 => 'date_add_to_grp',
          1 => 'delivery_method',
        ),
        3 => 
        array (
          0 => 'opted_out',
          1 => 'expiration_date',
        ),
        4 => 
        array (
          0 => 'comments',
          1 => 'envelope',
        ),
      ),
    ),
  ),
);
?>
