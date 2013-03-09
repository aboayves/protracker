<?php
$popupMeta = array (
    'moduleMain' => 'av_Life_Insurance',
    'varName' => 'av_Life_Insurance',
    'orderBy' => 'av_life_insurance.name',
    'whereClauses' => array (
  'type' => 'av_life_insurance.type',
  'av_companies_name' => 'av_life_insurance.av_companies_name',
  'contacts_name' => 'av_life_insurance.contacts_name',
  'death_benefit' => 'av_life_insurance.death_benefit',
),
    'searchInputs' => array (
  4 => 'type',
  7 => 'av_companies_name',
  8 => 'contacts_name',
  9 => 'death_benefit',
),
    'searchdefs' => array (
  'type' => 
  array (
    'type' => 'enum',
    'label' => 'LBL_TYPE',
    'width' => '10%',
    'name' => 'type',
  ),
  'death_benefit' => 
  array (
    'type' => 'currency',
    'align' => 'right',
    'label' => 'LBL_DEATH_BENEFIT',
    'currency_format' => true,
    'width' => '10%',
    'name' => 'death_benefit',
  ),
  'av_companies_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_AV_COMPANIES_NAME',
    'id' => 'COMPANY_ID',
    'width' => '10%',
    'name' => 'av_companies_name',
  ),
  'contacts_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_CONTACTS_NAME',
    'id' => 'OWNER_ID',
    'width' => '10%',
    'name' => 'contacts_name',
  ),
),
);
