<?php
$dashletData['av_Trust_AmendmentsDashlet']['searchFields'] = array (
  'trust_id_name' => 
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
$dashletData['av_Trust_AmendmentsDashlet']['columns'] = array (
  'trust_id_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_TRUST_ID_NAME',
    'id' => 'TRUST_ID',
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
  'date_modified' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_MODIFIED',
    'name' => 'date_modified',
    'default' => false,
  ),
  'created_by' => 
  array (
    'width' => '8%',
    'label' => 'LBL_CREATED',
    'name' => 'created_by',
    'default' => false,
  ),
  'date_entered' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_ENTERED',
    'default' => false,
    'name' => 'date_entered',
  ),
  'assigned_user_name' => 
  array (
    'width' => '8%',
    'label' => 'LBL_LIST_ASSIGNED_USER',
    'name' => 'assigned_user_name',
    'default' => false,
  ),
  'team_name' => 
  array (
    'width' => '15%',
    'label' => 'LBL_LIST_TEAM',
    'name' => 'team_name',
    'default' => false,
  ),
);
