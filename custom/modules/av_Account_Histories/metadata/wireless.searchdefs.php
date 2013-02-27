<?php
$module_name = 'av_Account_Histories';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'value_date' => 
      array (
        'type' => 'date',
        'default' => true,
        'label' => 'LBL_VALUE_DATE',
        'width' => '10%',
        'name' => 'value_date',
      ),
      'value' => 
      array (
        'type' => 'currency',
        'align' => 'right',
        'default' => true,
        'label' => 'LBL_VALUE',
        'currency_format' => true,
        'width' => '10%',
        'name' => 'value',
      ),
    ),
    'advanced_search' => 
    array (
      0 => 'name',
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
