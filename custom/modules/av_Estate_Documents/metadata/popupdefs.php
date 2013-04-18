<?php
$popupMeta = array (
    'moduleMain' => 'av_Estate_Documents',
    'varName' => 'av_Estate_Documents',
    'orderBy' => 'av_estate_documents.name',
    'whereClauses' => array (
  'document_name' => 'av_estate_documents.document_name',
  'type' => 'av_estate_documents.type',
  'active_date' => 'av_estate_documents.active_date',
),
    'searchInputs' => array (
  4 => 'document_name',
  5 => 'type',
  6 => 'active_date',
),
    'searchdefs' => array (
  'document_name' => 
  array (
    'name' => 'document_name',
    'width' => '10%',
  ),
  'type' => 
  array (
    'type' => 'enum',
    'label' => 'LBL_TYPE',
    'width' => '10%',
    'name' => 'type',
  ),
  'active_date' => 
  array (
    'name' => 'active_date',
    'width' => '10%',
  ),
),
);
