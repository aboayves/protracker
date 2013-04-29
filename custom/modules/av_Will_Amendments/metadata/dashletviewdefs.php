<?php
$dashletData['av_Will_AmendmentsDashlet']['searchFields'] = array (
  'will_id_name' => 
  array (
    'default' => '',
  ),
  'document_name' => 
  array (
    'default' => '',
  ),
  'amendment_number' => 
  array (
    'default' => '',
  ),
  'active_date' => 
  array (
    'default' => '',
  ),
);
$dashletData['av_Will_AmendmentsDashlet']['columns'] = array (
  'will_id_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_WILL_ID_NAME',
    'id' => 'WILL_ID',
    'width' => '10%',
    'default' => true,
  ),
  'document_name' => 
  array (
    'width' => '40%',
    'label' => 'LBL_NAME',
    'link' => true,
    'default' => true,
    'name' => 'document_name',
  ),
  'amendment_number' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_AMENDMENT_NUMBER',
    'width' => '10%',
  ),
  'active_date' => 
  array (
    'type' => 'date',
    'label' => 'LBL_DOC_ACTIVE_DATE',
    'width' => '10%',
    'default' => true,
  ),
);
