<?php
$listViewDefs ['Meetings'] = 
array (
  'DATE_START' => 
  array (
    'type' => 'datetimecombo',
    'label' => 'LBL_DATE',
    'width' => '10%',
    'default' => true,
  ),
  'DURATION' => 
  array (
    'type' => 'enum',
    'label' => 'LBL_DURATION',
    'width' => '10%',
    'default' => true,
  ),
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'AV_ACTIVITY_TYPES_NAME' => 
  array (
    'type' => 'relate_cstm',
    'link' => 'av_activity_types',
    'label' => 'LBL_AV_ACTIVITY_TYPES_NAME',
    'width' => '10%',
    'default' => true,
  ),
  'LOCATION' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_LOCATION',
    'width' => '10%',
    'default' => true,
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'default' => true,
  ),
);
?>
