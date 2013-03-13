<?php
$module_name = 'av_Net_Worth';
$listViewDefs [$module_name] = 
array (
  'ACCOUNTS_NAME' => 
  array (
    'link' => true,
    'label' => 'LBL_ACCOUNTS_NAME',
    'id' => 'ACCOUNTS_ID',
    'width' => '15%',
    'default' => true,
  ),
  'GRAND_TOTAL' => 
  array (
    'type' => 'text',
    'label' => 'LBL_GRAND_TOTAL',
    'width' => '15%',
    'default' => true,
	'customCode' =>format_number('{$GRAND_TOTAL}', NULL, 0),
  ),
  'NET_WORTH_DATE' => 
  array (
    'type' => 'date',
    'default' => true,
    'label' => 'LBL_NET_WORTH_DATE',
    'width' => '10%',
  ),
  'MANAGED_ASSETS' => 
  array (
    'type' => 'text',
    'label' => 'LBL_MANAGED_ASSETS',
    'width' => '15%',
    'default' => true,
  ),
  'DATE_MODIFIED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_MODIFIED',
    'width' => '10%',
    'default' => true,
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '12%',
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
