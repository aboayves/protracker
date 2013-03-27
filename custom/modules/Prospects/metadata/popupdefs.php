<?php
$popupMeta = array (
    'moduleMain' => 'Prospect',
    'varName' => 'PROSPECT',
    'orderBy' => 'prospects.last_name, prospects.first_name',
    'whereClauses' => array (
  'first_name' => 'prospects.first_name',
  'last_name' => 'prospects.last_name',
  'phone' => 'prospects.phone',
  'email' => 'prospects.email',
),
    'searchInputs' => array (
  0 => 'first_name',
  1 => 'last_name',
  2 => 'phone',
  3 => 'email',
),
    'create' => array (
  'formBase' => 'ProspectFormBase.php',
  'formBaseClass' => 'ProspectFormBase',
  'getFormBodyParams' => 
  array (
    0 => '',
    1 => '',
    2 => 'ProspectSave',
  ),
  'createButton' => 'LNK_NEW_PROSPECT',
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
),
);
