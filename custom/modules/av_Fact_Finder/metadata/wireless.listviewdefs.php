<?php
$module_name = 'av_Fact_Finder';
$listViewDefs [$module_name] = 
array (
  'FACT_FINDER_DATE' => 
  array (
    'type' => 'date',
    'default' => true,
    'label' => 'LBL_FACT_FINDER_DATE',
    'width' => '10%',
  ),
  'ACCOUNTS_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_ACCOUNTS_NAME',
    'id' => 'ACCOUNT_ID',
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
);
?>
