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
          1 => 'assigned_user_name',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'contacts_av_groups_1_name',
          ),
          1 => 
          array (
            'name' => 'priority',
            'comment' => '',
            'label' => 'LBL_PRIORITY',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'contacts_av_groups_2_name',
          ),
          1 => 
          array (
            'name' => 'document_path',
            'comment' => '',
            'label' => 'LBL_DOCUMENT_PATH',
          ),
        ),
        3 => 
        array (
          0 => 'description',
        ),
        4 => 
        array (
          0 => 'delivery_method',
          1 => 
          array (
            'name' => 'av_offices_av_groups_name',
            'studio' => 'visible',
            'label' => 'LBL_OFFICE',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'status',
            'comment' => '',
            'label' => 'LBL_STATUS',
          ),
          1 => 
          array (
            'name' => 'broadcast_group_c',
            'label' => 'LBL_BROADCAST_GROUP',
          ),
        ),
        6 => 
        array (
          0 => 'communication_type',
          1 => 'membership_expiration_days',
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'date_checked',
            'comment' => '',
            'label' => 'LBL_DATE_CHECKED',
          ),
          1 => 
          array (
            'name' => 'team_name',
            'displayParams' => 
            array (
              'display' => true,
            ),
          ),
        ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'date_entered',
            'comment' => 'Date record created',
            'label' => 'LBL_DATE_ENTERED',
          ),
          1 => 
          array (
            'name' => 'date_modified',
            'comment' => 'Date record last modified',
            'label' => 'LBL_DATE_MODIFIED',
          ),
        ),
      ),
    ),
  ),
);
?>
