<?php
$dashletData['av_Tax_FormsDashlet']['searchFields'] = array (
  'name' => 
  array (
    'default' => '',
  ),
  'return_type' => 
  array (
    'default' => '',
  ),
  'district' => 
  array (
    'default' => '',
  ),
  'residency' => 
  array (
    'default' => '',
  ),
);
$dashletData['av_Tax_FormsDashlet']['columns'] = array (
  'name' => 
  array (
    'width' => '25%',
    'label' => 'LBL_LIST_NAME',
    'link' => true,
    'default' => true,
    'name' => 'name',
  ),
  'return_type' => 
  array (
    'type' => 'enum',
    'default' => true,
    'label' => 'LBL_RETURN_TYPE',
    'width' => '10%',
  ),
  'district' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_DISTRICT',
    'width' => '10%',
  ),
  'residency' => 
  array (
    'type' => 'enum',
    'default' => true,
    'label' => 'LBL_RESIDENCY',
    'width' => '10%',
  ),
  'date_modified' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_MODIFIED',
    'name' => 'date_modified',
    'default' => false,
  ),
  'date_entered' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_ENTERED',
    'default' => false,
    'name' => 'date_entered',
  ),
  'created_by' => 
  array (
    'width' => '8%',
    'label' => 'LBL_CREATED',
    'name' => 'created_by',
    'default' => false,
  ),
);
