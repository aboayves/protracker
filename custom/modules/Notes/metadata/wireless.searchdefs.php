<?php
$searchdefs ['Notes'] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'date_entered' => 
      array (
        'type' => 'datetime',
        'label' => 'LBL_DATE_ENTERED',
        'width' => '10%',
        'default' => true,
        'name' => 'date_entered',
      ),
      'parent_name' => 
      array (
        'type' => 'parent',
        'label' => 'LBL_RELATED_TO',
        'width' => '10%',
        'default' => true,
        'name' => 'parent_name',
      ),
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'av_activity_types_name' => 
      array (
        'type' => 'relate_cstm',
        'link' => 'av_activity_types',
        'label' => 'LBL_AV_ACTIVITY_TYPES_NAME',
        'width' => '10%',
        'default' => true,
        'name' => 'av_activity_types_name',
      ),
      'assigned_user_name' => 
      array (
        'link' => true,
        'type' => 'relate',
        'label' => 'LBL_ASSIGNED_TO_NAME',
        'id' => 'ASSIGNED_USER_ID',
        'width' => '10%',
        'default' => true,
        'name' => 'assigned_user_name',
      ),
    ),
    'advanced_search' => 
    array (
      0 => 'name',
    ),
  ),
  'templateMeta' => 
  array (
    'maxColumns' => '1',
    'widths' => 
    array (
      'label' => '10',
      'field' => '30',
    ),
  ),
);
?>
