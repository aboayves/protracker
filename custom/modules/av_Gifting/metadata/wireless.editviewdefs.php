<?php
$module_name = 'av_Gifting';
$viewdefs [$module_name] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
      'maxColumns' => '1',
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
      0 => 
      array (
        0 => 'name',
      ),
      1 => 
      array (
        0 => 
        array (
          'name' => 'recipient',
          'comment' => '',
          'label' => 'LBL_RECIPIENT',
        ),
      ),
      2 => 
      array (
        0 => 
        array (
          'name' => 'contacts_name',
          'label' => 'LBL_CONTACTS_NAME',
        ),
      ),
      3 => 
      array (
        0 => 
        array (
          'name' => 'accounts_name',
          'label' => 'LBL_ACCOUNTS_NAME',
        ),
      ),
      4 => 
      array (
        0 => 
        array (
          'name' => 'date_of_gift',
          'comment' => '',
          'label' => 'LBL_DATE_OF_GIFT',
        ),
      ),
      5 => 
      array (
        0 => 
        array (
          'name' => 'value',
          'comment' => '',
          'label' => 'LBL_VALUE',
        ),
      ),
      6 => 
      array (
        0 => 
        array (
          'name' => 'is_709_required',
          'comment' => '',
          'label' => 'LBL_IS_709_REQUIRED',
        ),
      ),
      7 => 
      array (
        0 => 
        array (
          'name' => 'date_709_filed',
          'comment' => '',
          'label' => 'LBL_DATE_709_FILED',
        ),
      ),
      8 => 
      array (
        0 => 
        array (
          'name' => 'date_crummey_sent',
          'comment' => '',
          'label' => 'LBL_DATE_CRUMMEY_SENT',
        ),
      ),
    ),
  ),
);
?>
