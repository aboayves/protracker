<?php
$module_name = 'av_Beneficiaries';
$viewdefs [$module_name] = 
array (
  'DetailView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'buttons' => 
        array (
          0 => 'EDIT',
          1 => 'DUPLICATE',
          2 => 'DELETE',
        ),
      ),
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
        0 => 
        array (
          'name' => 'av_accounts_name',
          'label' => 'LBL_AV_ACCOUNTS_NAME',
        ),
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
        0 => 'name',
      ),
      3 => 
      array (
        0 => 
        array (
          'name' => 'type',
          'comment' => '',
          'label' => 'LBL_TYPE',
        ),
      ),
      4 => 
      array (
        0 => 
        array (
          'name' => 'percent',
          'comment' => '',
          'label' => 'LBL_PERCENT',
        ),
      ),
      5 => 
      array (
        0 => 
        array (
          'name' => 'per_stirpes',
          'comment' => '',
          'label' => 'LBL_PER_STIRPES',
        ),
      ),
      6 => 
      array (
        0 => 
        array (
          'name' => 'date_verified',
          'comment' => '',
          'label' => 'LBL_DATE_VERIFIED',
        ),
      ),
      7 => 
      array (
        0 => 
        array (
          'name' => 'description',
          'comment' => 'Full text of the note',
          'label' => 'LBL_DESCRIPTION',
        ),
      ),
    ),
  ),
);
?>
