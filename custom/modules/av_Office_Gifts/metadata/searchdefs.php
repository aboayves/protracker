<?php
$module_name = 'av_Office_Gifts';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'gift_date' => 
      array (
        'type' => 'date',
        'default' => true,
        'label' => 'LBL_GIFT_DATE',
        'width' => '10%',
        'name' => 'gift_date',
      ),
      'accounts_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_ACCOUNTS_NAME',
        'id' => 'ACCOUNT_ID',
        'width' => '10%',
        'default' => true,
        'name' => 'accounts_name',
      ),
      'description' => 
      array (
        'type' => 'text',
        'label' => 'LBL_DESCRIPTION',
        'sortable' => false,
        'width' => '10%',
        'default' => true,
        'name' => 'description',
      ),
    ),
    'advanced_search' => 
    array (
      'gift_date' => 
      array (
        'type' => 'date',
        'default' => true,
        'label' => 'LBL_GIFT_DATE',
        'width' => '10%',
        'name' => 'gift_date',
      ),
      'accounts_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_ACCOUNTS_NAME',
        'width' => '10%',
        'default' => true,
        'id' => 'ACCOUNT_ID',
        'name' => 'accounts_name',
      ),
      'contacts_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_CONTACTS_NAME',
        'id' => 'CONTACT_ID',
        'width' => '10%',
        'default' => true,
        'name' => 'contacts_name',
      ),
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'description' => 
      array (
        'type' => 'text',
        'label' => 'LBL_DESCRIPTION',
        'sortable' => false,
        'width' => '10%',
        'default' => true,
        'name' => 'description',
      ),
      'value' => 
      array (
        'type' => 'currency',
        'default' => true,
        'label' => 'LBL_VALUE',
        'currency_format' => true,
        'width' => '10%',
        'name' => 'value',
      ),
    ),
  ),
  'templateMeta' => 
  array (
    'maxColumns' => '3',
    'maxColumnsBasic' => '4',
    'widths' => 
    array (
      'label' => '10',
      'field' => '30',
    ),
  ),
);
?>
