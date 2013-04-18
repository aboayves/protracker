<?php
$module_name = 'av_Wills';
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
      'active_date' => 
      array (
        'type' => 'date',
        'label' => 'LBL_DOC_ACTIVE_DATE',
        'width' => '10%',
        'default' => true,
        'name' => 'active_date',
      ),
      'attorney' => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_ATTORNEY',
        'width' => '10%',
        'name' => 'attorney',
      ),
      'state_law' => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_STATE_LAW',
        'width' => '10%',
        'name' => 'state_law',
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
