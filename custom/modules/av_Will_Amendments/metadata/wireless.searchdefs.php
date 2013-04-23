<?php
$module_name = 'av_Will_Amendments';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'will_id_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_WILL_ID_NAME',
        'id' => 'WILL_ID',
        'width' => '10%',
        'default' => true,
        'name' => 'will_id_name',
      ),
      'document_name' => 
      array (
        'name' => 'document_name',
        'default' => true,
        'width' => '10%',
      ),
      'amendment_number' => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_AMENDMENT_NUMBER',
        'width' => '10%',
        'name' => 'amendment_number',
      ),
      'active_date' => 
      array (
        'type' => 'date',
        'label' => 'LBL_DOC_ACTIVE_DATE',
        'width' => '10%',
        'default' => true,
        'name' => 'active_date',
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
