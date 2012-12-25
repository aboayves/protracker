<?php
$searchdefs ['Notes'] = 
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
    ),
    'advanced_search' => 
    array (
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'contact_name' => 
      array (
        'type' => 'name',
        'link' => 'contact',
        'label' => 'LBL_CONTACT_NAME',
        'width' => '10%',
        'default' => true,
        'name' => 'contact_name',
      ),
      'parent_name' => 
      array (
        'type' => 'parent',
        'label' => 'LBL_RELATED_TO',
        'width' => '10%',
        'default' => true,
        'name' => 'parent_name',
      ),
      'created_by_name' => 
      array (
        'type' => 'relate',
        'label' => 'LBL_CREATED_BY',
        'width' => '10%',
        'default' => true,
        'name' => 'created_by_name',
      ),
      'date_entered' => 
      array (
        'type' => 'datetime',
        'label' => 'LBL_DATE_ENTERED',
        'width' => '10%',
        'default' => true,
        'name' => 'date_entered',
      ),
    ),
  ),
  'templateMeta' => 
  array (
    'maxColumns' => '3',
    'widths' => 
    array (
      'label' => '10',
      'field' => '30',
    ),
  ),
);
?>
