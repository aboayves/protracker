<?php
$popupMeta = array (
    'moduleMain' => 'av_Social_Security',
    'varName' => 'av_Social_Security',
    'orderBy' => 'av_social_security.name',
    'whereClauses' => array (
  'year_of_estimate' => 'av_social_security.year_of_estimate',
  'accounts_name' => 'av_social_security.accounts_name',
  'contacts_name' => 'av_social_security.contacts_name',
),
    'searchInputs' => array (
  4 => 'year_of_estimate',
  5 => 'accounts_name',
  6 => 'contacts_name',
),
    'searchdefs' => array (
  'year_of_estimate' => 
  array (
    'type' => 'int',
    'label' => 'LBL_YEAR_OF_ESTIMATE',
    'width' => '10%',
    'name' => 'year_of_estimate',
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
  'contacts_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_CONTACTS_NAME',
    'id' => 'CONTACT_ID',
    'width' => '10%',
    'name' => 'contacts_name',
  ),
),
);
