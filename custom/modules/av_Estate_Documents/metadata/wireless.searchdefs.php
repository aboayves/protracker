<?php
$module_name = 'av_Estate_Documents';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'document_name' => 
      array (
        'name' => 'document_name',
        'default' => true,
        'width' => '10%',
      ),
      'type' => 
      array (
        'type' => 'enum',
        'default' => true,
        'label' => 'LBL_TYPE',
        'width' => '10%',
        'name' => 'type',
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
      'attorney' => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_ATTORNEY',
        'width' => '10%',
        'name' => 'attorney',
      ),
      'agent' => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_AGENT',
        'width' => '10%',
        'name' => 'agent',
      ),
    ),
    'advanced_search' => 
    array (
      0 => 'document_name',
    ),
  ),
  'templateMeta' => 
  array (
    'maxColumns' => '1',
    'widths' => 
    array (
      'label' => '10',
      'field' => '30',
    ),
  ),
);
?>
