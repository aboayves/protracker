<?php
// created: 2013-04-10 13:54:26
$viewdefs['av_Account_Histories']['DetailView'] = array (
  'templateMeta' => 
  array (
    'form' => 
    array (
      'buttons' => 
      array (
        0 => 'EDIT',
        1 => 'DUPLICATE',
        2 => 'DELETE',
        3 => 'FIND_DUPLICATES',
      ),
    ),
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
    'syncDetailEditViews' => true,
    'tabDefs' => 
    array (
      'DEFAULT' => 
      array (
        'newTab' => false,
        'panelDefault' => 'expanded',
      ),
    ),
  ),
  'panels' => 
  array (
    'default' => 
    array (
      0 => 
      array (
        0 => 'name',
        1 => 'assigned_user_name',
      ),
      1 => 
      array (
        0 => 
        array (
          'name' => 'dependent_dropdown',
          'label' => 'LBL_DEPENDENT_DROPDOWN',
        ),
        1 => 
        array (
          'name' => 'value',
          'label' => 'LBL_VALUE',
        ),
      ),
      2 => 
      array (
        0 => '',
        1 => 'description',
      ),
      3 => 
      array (
        0 => 
        array (
          'name' => 'av_accounts_av_account_histories_name',
        ),
      ),
    ),
  ),
);