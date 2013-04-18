<?php
// created: 2013-02-28 15:50:59
$subpanel_layout['list_fields'] = array (
  'name' => 
  array (
    'name' => 'name',
    'vname' => 'LBL_LIST_NAME',
    'sort_by' => 'last_name',
    'sort_order' => 'asc',
    'widget_class' => 'SubPanelDetailViewLink',
    'module' => 'Contacts',
    'width' => '23%',
    'default' => true,
  ),
  'report_salutation' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_REPORT_SALUTATION',
    'width' => '10%',
  ),
  'birthdate' => 
  array (
    'type' => 'date',
    'vname' => 'LBL_BIRTHDATE',
    'width' => '10%',
    'default' => true,
  ),
  'age' => 
  array (
    'type' => 'function',
    'studio' => 'visible',
    'vname' => 'LBL_AGE',
    'width' => '7%',
    'default' => true,
  ),
  'ssn' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_SSN',
    'width' => '12%',
  ),
  'date_modified' => 
  array (
    'type' => 'datetime',
    'vname' => 'LBL_DATE_MODIFIED',
    'width' => '10%',
    'default' => true,
  ),
  'edit_button' => 
  array (
    'vname' => 'LBL_EDIT_BUTTON',
    'widget_class' => 'SubPanelEditButton',
    'module' => 'Contacts',
    'width' => '5%',
    'default' => true,
  ),
  'remove_button' => 
  array (
    'vname' => 'LBL_REMOVE',
    'widget_class' => 'SubPanelRemoveButton',
    'module' => 'Contacts',
    'width' => '5%',
    'default' => true,
  ),
  'first_name' => 
  array (
    'name' => 'first_name',
    'usage' => 'query_only',
  ),
  'last_name' => 
  array (
    'name' => 'last_name',
    'usage' => 'query_only',
  ),
  'salutation' => 
  array (
    'name' => 'salutation',
    'usage' => 'query_only',
  ),
  'account_id' => 
  array (
    'usage' => 'query_only',
  ),
);