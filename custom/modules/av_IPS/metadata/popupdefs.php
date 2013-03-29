<?php
$popupMeta = array (
    'moduleMain' => 'av_IPS',
    'varName' => 'av_IPS',
    'orderBy' => 'av_ips.name',
    'whereClauses' => array (
  'ips_date' => 'av_ips.ips_date',
  'accounts_name' => 'av_ips.accounts_name',
  'document_name' => 'av_ips.document_name',
),
    'searchInputs' => array (
  4 => 'ips_date',
  5 => 'accounts_name',
  6 => 'document_name',
),
    'searchdefs' => array (
  'ips_date' => 
  array (
    'type' => 'date',
    'label' => 'LBL_IPS_DATE',
    'width' => '10%',
    'name' => 'ips_date',
  ),
  'accounts_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_ACCOUNTS_NAME',
    'id' => 'ACCOUNT_ID',
    'width' => '10%',
    'name' => 'accounts_name',
  ),
  'document_name' => 
  array (
    'name' => 'document_name',
    'width' => '10%',
  ),
),
);
