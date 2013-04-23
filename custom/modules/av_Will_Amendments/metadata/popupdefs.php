<?php
$popupMeta = array (
    'moduleMain' => 'av_Will_Amendments',
    'varName' => 'av_Will_Amendments',
    'orderBy' => 'av_will_amendments.name',
    'whereClauses' => array (
  'will_id_name' => 'av_will_amendments.will_id_name',
  'document_name' => 'av_will_amendments.document_name',
  'amendment_number' => 'av_will_amendments.amendment_number',
  'active_date' => 'av_will_amendments.active_date',
),
    'searchInputs' => array (
  4 => 'will_id_name',
  5 => 'document_name',
  6 => 'amendment_number',
  7 => 'active_date',
),
    'searchdefs' => array (
  'will_id_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_WILL_ID_NAME',
    'id' => 'WILL_ID',
    'width' => '10%',
    'name' => 'will_id_name',
  ),
  'document_name' => 
  array (
    'name' => 'document_name',
    'width' => '10%',
  ),
  'amendment_number' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_AMENDMENT_NUMBER',
    'width' => '10%',
    'name' => 'amendment_number',
  ),
  'active_date' => 
  array (
    'name' => 'active_date',
    'width' => '10%',
  ),
),
);
