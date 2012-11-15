<?php
$module_name = 'av_Gifting';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'date_of_gift' => 
      array (
        'type' => 'date',
        'default' => true,
        'label' => 'LBL_DATE_OF_GIFT',
        'width' => '10%',
        'name' => 'date_of_gift',
      ),
      'date_709_filed' => 
      array (
        'type' => 'date',
        'default' => true,
        'label' => 'LBL_DATE_709_FILED',
        'width' => '10%',
        'name' => 'date_709_filed',
      ),
    ),
    'advanced_search' => 
    array (
      0 => 'name',
      1 => 
      array (
        'name' => 'assigned_user_id',
        'label' => 'LBL_ASSIGNED_TO',
        'type' => 'enum',
        'function' => 
        array (
          'name' => 'get_user_array',
          'params' => 
          array (
            0 => false,
          ),
        ),
      ),
      2 => 
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
