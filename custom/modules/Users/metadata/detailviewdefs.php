<?php
// created: 2013-04-10 13:54:10
$viewdefs['Users']['DetailView'] = array (
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
    'form' => 
    array (
      'headerTpl' => 'modules/Users/tpls/DetailViewHeader.tpl',
      'footerTpl' => 'modules/Users/tpls/DetailViewFooter.tpl',
    ),
    'useTabs' => false,
    'syncDetailEditViews' => true,
  ),
  'panels' => 
  array (
    'LBL_USER_INFORMATION' => 
    array (
      0 => 
      array (
        0 => 'user_name',
        1 => 
        array (
          'name' => 'first_name',
          'label' => 'LBL_FIRST_NAME',
        ),
      ),
      1 => 
      array (
        0 => 'status',
        1 => 
        array (
          'name' => 'last_name',
          'label' => 'LBL_LAST_NAME',
        ),
      ),
      2 => 
      array (
        0 => 
        array (
          'name' => 'UserType',
          'customCode' => '{$USER_TYPE_READONLY}',
        ),
        1 => 
        array (
          'name' => 'relationship_listing',
          'label' => 'LBL_RELATIONSHIP_LISTING',
        ),
      ),
      3 => 
      array (
        0 => 'picture',
      ),
    ),
    'LBL_EMPLOYEE_INFORMATION' => 
    array (
      0 => 
      array (
        0 => 'employee_status',
        1 => 'show_on_employees',
      ),
      1 => 
      array (
        0 => 'title',
        1 => 'phone_work',
      ),
      2 => 
      array (
        0 => 'department',
        1 => 'phone_mobile',
      ),
      3 => 
      array (
        0 => 'reports_to_name',
        1 => 'phone_other',
      ),
      4 => 
      array (
        0 => '',
        1 => 'phone_fax',
      ),
      5 => 
      array (
        0 => '',
        1 => 'phone_home',
      ),
      6 => 
      array (
        0 => 'messenger_type',
        1 => 'messenger_id',
      ),
      7 => 
      array (
        0 => 'address_street',
        1 => 'address_city',
      ),
      8 => 
      array (
        0 => 'address_state',
        1 => 'address_postalcode',
      ),
      9 => 
      array (
        0 => 'address_country',
      ),
      10 => 
      array (
        0 => 'description',
      ),
    ),
  ),
);