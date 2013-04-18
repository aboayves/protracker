<?php
// created: 2012-12-14 17:27:31
$subpanel_layout['list_fields'] = array (
  'field_name' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_FIELD_NAME',
    'width' => '10%',
  ),
  'name' => 
  array (
    'vname' => 'LBL_NAME',
    'widget_class' => 'SubPanelDetailViewLink',
    'width' => '45%',
    'default' => true,
  ),
  'field_value' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_FIELD_VALUE',
    'width' => '10%',
  ),
  'description' => 
  array (
    'type' => 'text',
    'vname' => 'LBL_DESCRIPTION',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
  ),
  'date_modified' => 
  array (
    'vname' => 'LBL_DATE_MODIFIED',
    'width' => '45%',
    'default' => true,
  ),
  'edit_button' => 
  array (
    'widget_class' => 'SubPanelEditButton',
    'module' => 'av_Custom_Fields',
    'width' => '4%',
    'default' => true,
  ),
  'remove_button' => 
  array (
    'widget_class' => 'SubPanelRemoveButton',
    'module' => 'av_Custom_Fields',
    'width' => '5%',
    'default' => true,
  ),
);