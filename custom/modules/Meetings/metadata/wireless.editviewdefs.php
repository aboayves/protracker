<?php
$viewdefs ['Meetings'] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
      'maxColumns' => '1',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'useTabs' => false,
    ),
    'panels' => 
    array (
      0 => 
      array (
        0 => 
        array (
          'name' => 'parent_name',
          'label' => 'LBL_LIST_RELATED_TO',
        ),
      ),
      1 => 
      array (
        0 => 'assigned_user_name',
      ),
      2 => 
      array (
        0 => 
        array (
          'name' => 'name',
          'displayParams' => 
          array (
            'required' => true,
            'wireless_edit_only' => true,
          ),
        ),
      ),
      3 => 
      array (
        0 => 'date_start',
      ),
      4 => 
      array (
        0 => 
        array (
          'name' => 'date_end',
          'comment' => 'Date meeting ends',
          'label' => 'LBL_DATE_END',
        ),
      ),
      5 => 
      array (
        0 => 
        array (
          'name' => 'av_activity_types_name',
          'label' => 'LBL_AV_ACTIVITY_TYPES_NAME',
        ),
      ),
      6 => 
      array (
        0 => 'status',
      ),
      7 => 
      array (
        0 => 
        array (
          'name' => 'location',
          'comment' => 'Meeting location',
          'label' => 'LBL_LOCATION',
        ),
      ),
      8 => 
      array (
        0 => 'description',
      ),
    ),
  ),
);
?>
