<?php
$dashletData['av_Final_ArrangementsDashlet']['searchFields'] = array (
  'document_name' => 
  array (
    'default' => '',
  ),
  'accounts_name' => 
  array (
    'default' => '',
  ),
  'contacts_name' => 
  array (
    'default' => '',
  ),
  'active_date' => 
  array (
    'default' => '',
  ),
);
$dashletData['av_Final_ArrangementsDashlet']['columns'] = array (
  'document_name' => 
  array (
    'width' => '40%',
    'label' => 'LBL_NAME',
    'link' => true,
    'default' => true,
    'name' => 'document_name',
  ),
  'accounts_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_ACCOUNTS_NAME',
    'id' => 'ACCOUNT_ID',
    'width' => '10%',
    'default' => true,
  ),
  'contacts_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_CONTACTS_NAME',
    'id' => 'CONTACT_ID',
    'width' => '10%',
    'default' => true,
  ),
  'funeral_description' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_FUNERAL_DESCRIPTION',
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
