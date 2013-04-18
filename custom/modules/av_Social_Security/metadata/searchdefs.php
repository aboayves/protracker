<?php
$module_name = 'av_Social_Security';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'year_of_estimate' => 
      array (
        'type' => 'int',
        'default' => true,
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
        'default' => true,
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
    ),
    'advanced_search' => 
    array (
      'year_of_estimate' => 
      array (
        'type' => 'int',
        'default' => true,
        'label' => 'LBL_YEAR_OF_ESTIMATE',
        'width' => '10%',
        'name' => 'year_of_estimate',
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
        'width' => '10%',
        'default' => true,
        'id' => 'CONTACT_ID',
        'name' => 'contacts_name',
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
