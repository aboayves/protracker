<?php
// created: 2013-02-21 21:44:52
$subpanel_layout['list_fields'] = array (
  'review_date' => 
  array (
    'type' => 'date',
    'default' => true,
    'vname' => 'LBL_REVIEW_DATE',
    'width' => '10%',
  ),
  'type' => 
  array (
    'type' => 'enum',
    'default' => true,
    'vname' => 'LBL_TYPE',
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
  'edit_button' => 
  array (
    'widget_class' => 'SubPanelEditButton',
    'module' => 'av_Reviews',
    'width' => '4%',
    'default' => true,
  ),
  'remove_button' => 
  array (
    'widget_class' => 'SubPanelRemoveButton',
    'module' => 'av_Reviews',
    'width' => '5%',
    'default' => true,
  ),
);