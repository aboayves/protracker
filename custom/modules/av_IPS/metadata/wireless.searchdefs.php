<?php
$module_name = 'av_IPS';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'ips_date' => 
      array (
        'type' => 'date',
        'default' => true,
        'label' => 'LBL_IPS_DATE',
        'width' => '10%',
        'name' => 'ips_date',
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
      'document_name' => 
      array (
        'name' => 'document_name',
        'default' => true,
        'width' => '10%',
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
