<?php
// created: 2013-03-02 04:37:43
$subpanel_layout['list_fields'] = array (
  'name' => 
  array (
    'vname' => 'LBL_NAME',
    'widget_class' => 'SubPanelDetailViewLink',
    'width' => '45%',
    'default' => true,
  ),
  'transaction_type' => 
  array (
    'type' => 'enum',
    'default' => true,
    'vname' => 'LBL_TRANSACTION_TYPE',
    'width' => '10%',
  ),
  'transaction_frequency' => 
  array (
    'type' => 'int',
    'default' => true,
    'vname' => 'LBL_TRANSACTION_FREQUENCY',
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
    'module' => 'av_Transaction_Schedule',
    'width' => '4%',
    'default' => true,
  ),
  'remove_button' => 
  array (
    'widget_class' => 'SubPanelRemoveButton',
    'module' => 'av_Transaction_Schedule',
    'width' => '5%',
    'default' => true,
  ),
);