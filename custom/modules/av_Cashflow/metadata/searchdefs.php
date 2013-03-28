<?php
$module_name = 'av_Cashflow';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'year' => 
      array (
        'type' => 'int',
        'default' => true,
        'label' => 'LBL_YEAR',
        'width' => '10%',
        'name' => 'year',
      ),
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
    ),
    'advanced_search' => 
    array (
      0 => 'document_name',
      1 => 'category_id',
      2 => 'subcategory_id',
      3 => 'active_date',
      4 => 'exp_date',
      5 => 
      array (
        'name' => 'favorites_only',
        'label' => 'LBL_FAVORITES_FILTER',
        'type' => 'bool',
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
