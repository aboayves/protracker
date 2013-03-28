<?php
$searchdefs ['Campaigns'] = 
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
      'campaign_type' => 
      array (
        'type' => 'enum',
        'label' => 'LBL_CAMPAIGN_TYPE',
        'width' => '10%',
        'default' => true,
        'name' => 'campaign_type',
      ),
      'status' => 
      array (
        'type' => 'enum',
        'label' => 'LBL_CAMPAIGN_STATUS',
        'width' => '10%',
        'default' => true,
        'name' => 'status',
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
