<?php
$viewdefs ['Notes'] = 
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
      0 => 
      array (
        0 => 
        array (
          'name' => 'parent_name',
          'label' => 'LBL_RELATED_TO',
        ),
      ),
      1 => 
      array (
        0 => 'assigned_user_name',
      ),
      2 => 
      array (
        0 => 'name',
      ),
      3 => 
      array (
        0 => 
        array (
          'name' => 'av_activity_types_name',
          'label' => 'LBL_AV_ACTIVITY_TYPES_NAME',
        ),
      ),
      4 => 
      array (
        0 => 
        array (
          'name' => 'description',
          'comment' => 'Full text of the note',
          'label' => 'LBL_DESCRIPTION',
        ),
      ),
      5 => 
      array (
        0 => 
        array (
          'name' => 'filename',
          'comment' => 'File name associated with the note (attachment)',
          'label' => 'LBL_FILENAME',
        ),
      ),
    ),
  ),
);
?>
