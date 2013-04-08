<?php
$popupMeta = array (
    'moduleMain' => 'Employees',
    'varName' => 'Employee',
    'orderBy' => 'employees.first_name, employees.last_name',
    'whereClauses' => array (
  'first_name' => 'employees.first_name',
  'last_name' => 'employees.last_name',
  'phone' => 'employees.phone',
  'email' => 'employees.email',
  'address_street' => 'employees.address_street',
),
    'searchInputs' => array (
  0 => 'first_name',
  1 => 'last_name',
  2 => 'phone',
  3 => 'email',
  4 => 'address_street',
),
    'searchdefs' => array (
  'first_name' => 
  array (
    'name' => 'first_name',
    'width' => '10%',
  ),
  'last_name' => 
  array (
    'name' => 'last_name',
    'width' => '10%',
  ),
  'phone' => 
  array (
    'name' => 'phone',
    'label' => 'LBL_ANY_PHONE',
    'type' => 'name',
    'width' => '10%',
  ),
  'email' => 
  array (
    'name' => 'email',
    'label' => 'LBL_ANY_EMAIL',
    'type' => 'name',
    'width' => '10%',
  ),
  'address_street' => 
  array (
    'name' => 'address_street',
    'label' => 'LBL_ANY_ADDRESS',
    'type' => 'name',
    'width' => '10%',
  ),
),
    'listviewdefs' => array (
  'NAME' => 
  array (
    'width' => '20%',
    'label' => 'LBL_LIST_NAME',
    'link' => true,
    'related_fields' => 
    array (
      0 => 'last_name',
      1 => 'first_name',
    ),
    'orderBy' => 'last_name',
    'default' => true,
    'name' => 'name',
  ),
  'DEPARTMENT' => 
  array (
    'width' => '10%',
    'label' => 'LBL_DEPARTMENT',
    'link' => true,
    'default' => true,
    'name' => 'department',
  ),
  'REPORTS_TO_NAME' => 
  array (
    'width' => '15%',
    'label' => 'LBL_LIST_REPORTS_TO_NAME',
    'link' => true,
    'sortable' => false,
    'default' => true,
    'name' => 'reports_to_name',
  ),
  'EMAIL1' => 
  array (
    'width' => '15%',
    'label' => 'LBL_LIST_EMAIL',
    'link' => true,
    'customCode' => '{$EMAIL1_LINK}{$EMAIL1}</a>',
    'default' => true,
    'sortable' => false,
    'name' => 'email1',
  ),
  'PHONE_WORK' => 
  array (
    'width' => '10%',
    'label' => 'LBL_LIST_PHONE',
    'link' => true,
    'default' => true,
    'name' => 'phone_work',
  ),
  'EMPLOYEE_STATUS' => 
  array (
    'width' => '10%',
    'label' => 'LBL_LIST_EMPLOYEE_STATUS',
    'link' => false,
    'default' => true,
    'name' => 'employee_status',
  ),
),
);
