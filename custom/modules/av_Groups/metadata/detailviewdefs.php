<?php
// created: 2013-04-10 13:54:26
$viewdefs['av_Groups']['DetailView'] = array (
  'templateMeta' => 
  array (
    'form' => 
    array (
      'buttons' => 
      array (
        0 => 'EDIT',
        1 => 'DUPLICATE',
        2 => 'DELETE',
        3 => 'FIND_DUPLICATES',
      ),
    ),
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
    'tabDefs' => 
    array (
      'DEFAULT' => 
      array (
        'newTab' => true,
        'panelDefault' => 'expanded',
      ),
      'LBL_EDITVIEW_PANEL1' => 
      array (
        'newTab' => true,
        'panelDefault' => 'expanded',
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
          'name' => 'office_c',
          'studio' => 'visible',
          'label' => 'LBL_OFFICE',
        ),
        1 => 
        array (
          'name' => 'category_c',
          'studio' => 'visible',
          'label' => 'LBL_CATEGORY',
        ),
      ),
      2 => 
      array (
        0 => 
        array (
          'name' => 'status_c',
          'studio' => 'visible',
          'label' => 'LBL_STATUS',
        ),
        1 => 
        array (
          'name' => 'last_checked_c',
          'label' => 'LBL_LAST_CHECKED',
        ),
      ),
      3 => 
      array (
        0 => 
        array (
          'name' => 'priority_c',
          'studio' => 'visible',
          'label' => 'LBL_PRIORITY',
        ),
        1 => 
        array (
          'name' => 'broadcast_group_c',
          'label' => 'LBL_BROADCAST_GROUP',
        ),
      ),
      4 => 
      array (
        0 => 'description',
      ),
    ),
    'lbl_editview_panel1' => 
    array (
      0 => 
      array (
        0 => 
        array (
          'name' => 'leader_c',
          'studio' => 'visible',
          'label' => 'LBL_LEADER',
        ),
        1 => 
        array (
          'name' => 'alternate_leader_c',
          'studio' => 'visible',
          'label' => 'LBL_ALTERNATE_LEADER',
        ),
      ),
    ),
  ),
);