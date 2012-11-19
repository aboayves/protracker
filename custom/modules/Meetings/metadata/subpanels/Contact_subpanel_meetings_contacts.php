<?php
// created: 2012-11-15 21:24:27
$subpanel_layout['list_fields'] = array (
  'name' => 
  array (
    'name' => 'name',
    'vname' => 'LBL_LIST_SUBJECT',
    'widget_class' => 'SubPanelDetailViewLink',
    'width' => '50%',
    'default' => true,
  ),
  'date_start' => 
  array (
    'name' => 'date_start',
    'vname' => 'LBL_LIST_DATE',
    'width' => '25%',
    'default' => true,
  ),
  'date_end' => 
  array (
    'name' => 'date_end',
    'vname' => 'LBL_DATE_END',
    'width' => '25%',
    'default' => true,
  ),
  'description' => 
  array (
    'type' => 'text',
    'vname' => 'LBL_DESCRIPTION',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
  ),
  'type' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 
    array (
      'wirelesseditview' => false,
      'wirelessdetailview' => false,
      'wirelesslistview' => false,
      'wireless_basic_search' => false,
    ),
    'vname' => 'LBL_TYPE',
    'width' => '10%',
  ),
  'status' => 
  array (
    'type' => 'enum',
    'default' => true,
    'vname' => 'LBL_STATUS',
    'width' => '10%',
  ),
  'location' => 
  array (
    'type' => 'varchar',
    'vname' => 'LBL_LOCATION',
    'width' => '10%',
    'default' => true,
  ),
  'edit_button' => 
  array (
    'vname' => 'LBL_EDIT_BUTTON',
    'widget_class' => 'SubPanelEditButton',
    'width' => '2%',
    'default' => true,
  ),
  'remove_button' => 
  array (
    'vname' => 'LBL_REMOVE',
    'widget_class' => 'SubPanelRemoveButton',
    'width' => '2%',
    'default' => true,
  ),
  'recurring_source' => 
  array (
    'usage' => 'query_only',
  ),
);