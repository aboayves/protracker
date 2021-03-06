<?php
$module_name = 'av_Will_Amendments';
$OBJECT_NAME = 'AV_WILL_AMENDMENTS';
$listViewDefs [$module_name] = 
array (
  'WILL_ID_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_WILL_ID_NAME',
    'id' => 'WILL_ID',
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
  'UPLOADFILE' => 
  array (
    'type' => 'file',
    'label' => 'LBL_FILE_UPLOAD',
    'width' => '10%',
    'default' => false,
  ),
);
?>
