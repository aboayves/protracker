<?php
$module_name = 'av_Social_Security';
$listViewDefs [$module_name] = 
array (
  'YEAR_OF_ESTIMATE' => 
  array (
    'type' => 'int',
    'default' => true,
    'label' => 'LBL_YEAR_OF_ESTIMATE',
    'width' => '5%',
    'link' => 'true',
	'disable_num_format' => '1',
  ),
  'ACCOUNTS_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_ACCOUNTS_NAME',
    'id' => 'ACCOUNT_ID',
    'width' => '10%',
    'default' => true,
  ),
  'CONTACTS_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_CONTACTS_NAME',
    'id' => 'CONTACT_ID',
    'width' => '10%',
    'default' => true,
  ),
  'RETIREMENT_AT_AGE_62' => 
  array (
    'type' => 'currency',
    'default' => true,
    'label' => 'LBL_RETIREMENT_AT_AGE_62',
    'currency_format' => true,
    'width' => '10%',
  ),
  'RETIREMENT_AT_AGE_67' => 
  array (
    'type' => 'currency',
    'default' => true,
    'label' => 'LBL_RETIREMENT_AT_AGE_67',
    'currency_format' => true,
    'width' => '10%',
  ),
  'RETIREMENT_AT_AGE_70' => 
  array (
    'type' => 'currency',
    'default' => true,
    'label' => 'LBL_RETIREMENT_AT_AGE_70',
    'currency_format' => true,
    'width' => '10%',
  ),
  'TEAM_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_TEAM',
    'default' => false,
  ),
);
?>
