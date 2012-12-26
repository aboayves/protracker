<?php
$module_name = 'av_Reviews';
$listViewDefs [$module_name] = 
array (
  'REVIEW_DATE' => 
  array (
    'type' => 'date',
    'default' => true,
    'label' => 'LBL_REVIEW_DATE',
    'width' => '10%',
  ),
  'ACCOUNTS_AV_REVIEWS_1_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_ACCOUNTS_AV_REVIEWS_1_FROM_ACCOUNTS_TITLE',
    'id' => 'ACCOUNTS_AV_REVIEWS_1ACCOUNTS_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'TYPE' => 
  array (
    'type' => 'enum',
    'default' => true,
    'label' => 'LBL_TYPE',
    'width' => '10%',
  ),
  'DESCRIPTION' => 
  array (
    'type' => 'text',
    'label' => 'LBL_DESCRIPTION',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
  ),
  'SCORE' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_SCORE',
    'width' => '10%',
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => true,
  ),
  'TEAM_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_TEAM',
    'default' => false,
  ),
);
?>
