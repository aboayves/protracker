<?php
$module_name = 'av_Goals';
$listViewDefs [$module_name] = 
array (
  'ACCOUNTS_AV_GOALS_1_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_ACCOUNTS_AV_GOALS_1_FROM_ACCOUNTS_TITLE',
    'id' => 'ACCOUNTS_AV_GOALS_1ACCOUNTS_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'NAME' => 
  array (
    'width' => '10%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'TARGET_DATE' => 
  array (
    'type' => 'date',
    'default' => true,
    'label' => 'LBL_TARGET_DATE',
    'width' => '10%',
  ),
  'PROGRESS' => 
  array (
    'type' => 'currency',
    'default' => true,
    'label' => 'LBL_PROGRESS',
    'currency_format' => true,
    'width' => '10%',
  ),
  'TYPE' => 
  array (
    'type' => 'enum',
    'default' => true,
    'label' => 'LBL_TYPE',
    'width' => '10%',
  ),
  'AMOUNT' => 
  array (
    'type' => 'currency',
    'default' => true,
    'label' => 'LBL_AMOUNT',
    'currency_format' => true,
    'width' => '10%',
  ),
  'DESCRIPTION' => 
  array (
    'type' => 'text',
    'label' => 'LBL_DESCRIPTION',
    'sortable' => false,
    'width' => '40%',
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
