<?php
// created: 2013-03-03 03:54:22
$subpanel_layout['list_fields'] = array (
  'object_image' => 
  array (
    'vname' => 'LBL_OBJECT_IMAGE',
    'widget_class' => 'SubPanelIcon',
    'width' => '2%',
    'default' => true,
  ),
  'name' => 
  array (
    'vname' => 'LBL_LIST_SUBJECT',
    'widget_class' => 'SubPanelDetailViewLink',
    'width' => '30%',
    'default' => true,
  ),
  'parent_name' => 
  array (
    'vname' => 'LBL_LIST_RELATED_TO',
    'width' => '22%',
    'target_record_key' => 'parent_id',
    'target_module_key' => 'parent_type',
    'widget_class' => 'SubPanelDetailViewLink',
    'sortable' => false,
    'default' => true,
  ),
  'status' => 
  array (
    'widget_class' => 'SubPanelActivitiesStatusField',
    'vname' => 'LBL_LIST_STATUS',
    'width' => '15%',
    'default' => true,
  ),
  'priority' => 
  array (
    'type' => 'enum',
    'vname' => 'LBL_PRIORITY',
    'width' => '10%',
    'default' => true,
  ),
  'date_due' => 
  array (
    'type' => 'datetimecombo',
    'studio' => 
    array (
      'required' => true,
      'no_duplicate' => true,
    ),
    'vname' => 'LBL_DUE_DATE',
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
  'parent_id' => 
  array (
    'usage' => 'query_only',
  ),
  'parent_type' => 
  array (
    'usage' => 'query_only',
  ),
  'filename' => 
  array (
    'usage' => 'query_only',
    'force_exists' => true,
  ),
);