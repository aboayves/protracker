<?php
$popupMeta = array (
    'moduleMain' => 'av_Trust_Amendments',
    'varName' => 'av_Trust_Amendments',
    'orderBy' => 'av_trust_amendments.name',
    'whereClauses' => array (
  'trust_id_name' => 'av_trust_amendments.trust_id_name',
  'document_name' => 'av_trust_amendments.document_name',
  'amendment_number' => 'av_trust_amendments.amendment_number',
  'active_date' => 'av_trust_amendments.active_date',
),
    'searchInputs' => array (
  4 => 'trust_id_name',
  5 => 'document_name',
  6 => 'amendment_number',
  7 => 'active_date',
),
    'searchdefs' => array (
  'trust_id_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_TRUST_ID_NAME',
    'id' => 'TRUST_ID',
    'width' => '10%',
    'name' => 'trust_id_name',
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
