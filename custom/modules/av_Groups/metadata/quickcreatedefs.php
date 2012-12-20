<?php
$module_name = 'av_Groups';
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
      'useTabs' => true,
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
            'name' => 'contacts_av_groups_2_name',
            'label' => 'LBL_CONTACTS_AV_GROUPS_2_FROM_CONTACTS_TITLE',
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
            'name' => 'contacts_av_groups_1_name',
            'label' => 'LBL_CONTACTS_AV_GROUPS_1_FROM_CONTACTS_TITLE',
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
          0 => 
          array (
            'name' => 'delivery_method',
            'comment' => '',
            'label' => 'LBL_DELIVERY_METHOD',
          ),
          1 => 
          array (
            'name' => 'av_offices_av_groups_name',
            'label' => 'LBL_RT_OFFICES_AV_GROUPS_FROM_RT_OFFICES_TITLE',
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
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'communication_type',
            'label' => 'LBL_COMMUNICATION_TYPE',
          ),
          1 => 
          array (
            'name' => 'membership_expiration_days',
            'comment' => '',
            'label' => 'LBL_MEMBERSHIP_EXPIRATION_DAYS',
          ),
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
