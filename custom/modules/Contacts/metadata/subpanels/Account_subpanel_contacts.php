<?php
// created: 2013-06-19 18:01:23
$subpanel_layout['list_fields'] = array (
  'name' => 
  array (
    'name' => 'name',
    'vname' => 'LBL_LIST_NAME',
    'sort_by' => 'last_name',
    'sort_order' => 'asc',
    'widget_class' => 'SubPanelDetailViewLink',
    'module' => 'Contacts',
    'width' => '18%',
    'default' => true,
  ),
  'report_salutation' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_REPORT_SALUTATION',
    'width' => '8%',
  ),
  'email1' => 
  array (
    'width' => '30%',
    'sortable' => false,
    'vname' => 'LBL_LIST_EMAIL',
    'default' => true,
    'widget_class' => 'SubPanelEmailLink',
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
    'width' => '5%',
    'default' => true,
  ),
  'ssn' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_SSN',
    'width' => '8%',
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