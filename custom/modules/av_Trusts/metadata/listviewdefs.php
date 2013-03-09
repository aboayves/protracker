<?php
$module_name = 'av_Trusts';
$OBJECT_NAME = 'AV_TRUSTS';
$listViewDefs [$module_name] = 
array (
  'DOCUMENT_NAME' => 
  array (
    'width' => '20%',
    'label' => 'LBL_NAME',
    'link' => true,
    'default' => true,
  ),
  'TYPE' => 
  array (
    'type' => 'enum',
    'default' => true,
    'label' => 'LBL_TYPE',
    'width' => '10%',
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
  'ACTIVE_DATE' => 
  array (
    'width' => '10%',
    'label' => 'LBL_LIST_ACTIVE_DATE',
    'default' => true,
  ),
  'DATE_RECORDED' => 
  array (
    'type' => 'date',
    'default' => true,
    'label' => 'LBL_DATE_RECORDED',
    'width' => '10%',
  ),
  'UPLOADFILE' => 
  array (
    'type' => 'file',
    'label' => 'LBL_FILE_UPLOAD',
    'width' => '10%',
    'default' => false,
  ),
  'TAX_ID' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_TAX_ID',
    'width' => '10%',
  ),
  'ON_FILE' => 
  array (
    'type' => 'bool',
    'default' => false,
    'label' => 'LBL_ON_FILE',
    'width' => '10%',
  ),
  'EXP_DATE' => 
  array (
    'width' => '10%',
    'label' => 'LBL_LIST_EXP_DATE',
    'default' => false,
  ),
  'BILL_OF_SALE_DATE' => 
  array (
    'type' => 'date',
    'default' => false,
    'label' => 'LBL_BILL_OF_SALE_DATE',
    'width' => '10%',
  ),
  'DRAFTING_ATTORNEY' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_DRAFTING_ATTORNEY',
    'width' => '10%',
  ),
  'BIRTH_CERTIFICATE_ON_FILE' => 
  array (
    'type' => 'bool',
    'default' => false,
    'label' => 'LBL_BIRTH_CERTIFICATE_ON_FILE',
    'width' => '10%',
  ),
);
?>
