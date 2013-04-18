<?php
$module_name = 'av_Gifting';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
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
  'ACCOUNTS_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_ACCOUNTS_NAME',
    'id' => 'ACCOUNT_ID',
    'width' => '10%',
    'default' => true,
  ),
  'RECIPIENT' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_RECIPIENT',
    'width' => '10%',
  ),
  'DATE_OF_GIFT' => 
  array (
    'type' => 'date',
    'default' => true,
    'label' => 'LBL_DATE_OF_GIFT',
    'width' => '10%',
  ),
  'VALUE' => 
  array (
    'type' => 'currency',
    'align' => 'right',
    'default' => true,
    'label' => 'LBL_VALUE',
    'currency_format' => true,
    'width' => '10%',
  ),
);
?>
