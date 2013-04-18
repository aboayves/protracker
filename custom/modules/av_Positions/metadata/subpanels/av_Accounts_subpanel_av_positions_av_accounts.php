<?php
// created: 2013-03-02 04:36:35
$subpanel_layout['list_fields'] = array (
  'name' => 
  array (
    'vname' => 'LBL_NAME',
    'widget_class' => 'SubPanelDetailViewLink',
    'width' => '45%',
    'default' => true,
  ),
  'type' => 
  array (
    'type' => 'enum',
    'default' => true,
    'vname' => 'LBL_TYPE',
    'width' => '10%',
  ),
  'symbol' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_SYMBOL',
    'width' => '10%',
  ),
  'value' => 
  array (
    'type' => 'currency',
    'align' => 'right',
    'default' => true,
    'vname' => 'LBL_VALUE',
    'currency_format' => true,
    'width' => '10%',
  ),
  'position_date' => 
  array (
    'type' => 'date',
    'default' => true,
    'vname' => 'LBL_POSITION_DATE',
    'width' => '10%',
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
    'module' => 'av_Positions',
    'width' => '4%',
    'default' => true,
  ),
  'remove_button' => 
  array (
    'widget_class' => 'SubPanelRemoveButton',
    'module' => 'av_Positions',
    'width' => '5%',
    'default' => true,
  ),
);