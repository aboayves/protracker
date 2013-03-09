<?php
$module_name = 'av_Services';
$listViewDefs [$module_name] = 
array (
  'ACCOUNTS_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_ACCOUNTS_NAME',
    'id' => 'ACCOUNT_ID',
    'width' => '10%',
    'default' => true,
  ),
  'SERVICE_TYPE' => 
  array (
    'type' => 'enum',
    'default' => true,
    'label' => 'LBL_SERVICE_TYPE',
    'width' => '10%',
  ),
  'FREQUENCY' => 
  array (
    'type' => 'enum',
    'default' => true,
    'label' => 'LBL_FREQUENCY',
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
);
?>
