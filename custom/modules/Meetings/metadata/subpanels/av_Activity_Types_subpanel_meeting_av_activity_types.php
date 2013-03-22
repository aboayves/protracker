<?php
// created: 2013-03-21 17:49:12
$subpanel_layout['list_fields'] = array (
  'name' => 
  array (
    'name' => 'name',
    'vname' => 'LBL_LIST_SUBJECT',
    'widget_class' => 'SubPanelDetailViewLink',
    'width' => '20%',
    'default' => true,
  ),
  'date_start' => 
  array (
    'name' => 'date_start',
    'vname' => 'LBL_LIST_DATE',
    'width' => '12%',
    'default' => true,
  ),
  'duration_hours' => 
  array (
    'type' => 'int',
    'vname' => 'LBL_DURATION_HOURS',
    'width' => '8%',
    'default' => true,
  ),
  'duration_minutes' => 
  array (
    'type' => 'int',
    'vname' => 'LBL_DURATION_MINUTES',
    'width' => '8%',
    'default' => true,
  ),
  'location' => 
  array (
    'type' => 'varchar',
    'vname' => 'LBL_LOCATION',
    'width' => '15%',
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