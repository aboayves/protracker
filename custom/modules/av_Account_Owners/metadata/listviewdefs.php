<?php
$module_name = 'av_Account_Owners';
$listViewDefs [$module_name] = 
array (
  'OWNERSHIP_PERCENT' => 
  array (
    'type' => 'decimal',
    'default' => true,
    'label' => 'LBL_OWNERSHIP_PERCENT',
    'width' => '10%',
  ),
  'AV_ACCOUNTS_NAME' => 
  array (
    'type' => 'relate',
    'label' => 'LBL_AV_ACCOUNTS_NAME',
    'width' => '10%',
    'default' => true,
  ),
);
?>
