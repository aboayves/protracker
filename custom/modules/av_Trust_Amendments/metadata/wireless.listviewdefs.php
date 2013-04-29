<?php
$module_name = 'av_Trust_Amendments';
$OBJECT_NAME = 'AV_TRUST_AMENDMENTS';
$listViewDefs [$module_name] = 
array (
  'TRUST_ID_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_TRUST_ID_NAME',
    'id' => 'TRUST_ID',
    'width' => '10%',
    'default' => true,
  ),
  'DOCUMENT_NAME' => 
  array (
    'width' => '40%',
    'label' => 'LBL_NAME',
    'link' => true,
    'default' => true,
  ),
  'AMENDMENT_NUMBER' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_AMENDMENT_NUMBER',
    'width' => '10%',
  ),
  'ACTIVE_DATE' => 
  array (
    'width' => '10%',
    'label' => 'LBL_LIST_ACTIVE_DATE',
    'default' => true,
  ),
);
?>
