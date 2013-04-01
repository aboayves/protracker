<?php
$popupMeta = array (
    'moduleMain' => 'av_Fact_Finder',
    'varName' => 'av_Fact_Finder',
    'orderBy' => 'av_fact_finder.name',
    'whereClauses' => array (
  'name' => 'av_fact_finder.name',
  'fact_finder_date' => 'av_fact_finder.fact_finder_date',
  'accounts_name' => 'av_fact_finder.accounts_name',
),
    'searchInputs' => array (
  1 => 'name',
  4 => 'fact_finder_date',
  5 => 'accounts_name',
),
    'searchdefs' => array (
  'fact_finder_date' => 
  array (
    'type' => 'date',
    'label' => 'LBL_FACT_FINDER_DATE',
    'width' => '10%',
    'name' => 'fact_finder_date',
  ),
  'name' => 
  array (
    'name' => 'name',
    'width' => '10%',
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
),
);
