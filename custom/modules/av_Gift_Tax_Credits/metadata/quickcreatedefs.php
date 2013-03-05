<?php
$module_name = 'av_Gift_Tax_Credits';
$viewdefs [$module_name] = 
array (
  'QuickCreate' => 
  array (
    'templateMeta' => 
    array (
      'maxColumns' => '2',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'useTabs' => false,
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 'name',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'contacts_name',
            'label' => 'LBL_CONTACTS_NAME',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'credit_amount',
            'comment' => '',
            'label' => 'LBL_CREDIT_AMOUNT',
          ),
          1 => 
          array (
            'name' => 'date_credit_used',
            'comment' => '',
            'label' => 'LBL_DATE_CREDIT_USED',
          ),
        ),
        3 => 
        array (
          0 => 'description',
        ),
      ),
    ),
  ),
);
?>
