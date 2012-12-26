<?php
$module_name = 'av_Beneficiaries';
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
          0 => 
          array (
            'name' => 'av_accounts_av_beneficiaries_1_name',
            'label' => 'LBL_AV_ACCOUNTS_AV_BENEFICIARIES_1_FROM_AV_ACCOUNTS_TITLE',
          ),
          1 => 
          array (
            'name' => 'type',
            'comment' => '',
            'label' => 'LBL_TYPE',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'contacts_av_beneficiaries_1_name',
            'label' => 'LBL_CONTACTS_AV_BENEFICIARIES_1_FROM_CONTACTS_TITLE',
          ),
          1 => 'name',
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'percent',
            'comment' => '',
            'label' => 'LBL_PERCENT',
          ),
          1 => 
          array (
            'name' => 'per_stirpes',
            'comment' => '',
            'label' => 'LBL_PER_STIRPES',
          ),
        ),
        3 => 
        array (
          0 => 'description',
          1 => 
          array (
            'name' => 'date_verified',
            'comment' => '',
            'label' => 'LBL_DATE_VERIFIED',
          ),
        ),
      ),
    ),
  ),
);
?>
