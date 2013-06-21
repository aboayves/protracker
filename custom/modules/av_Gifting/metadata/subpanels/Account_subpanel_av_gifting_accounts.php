<?php
// created: 2013-06-21 14:05:09
$subpanel_layout['list_fields'] = array (
  'name' => 
  array (
    'vname' => 'LBL_NAME',
    'widget_class' => 'SubPanelDetailViewLink',
    'width' => '35%',
    'default' => true,
  ),
  'date_of_gift' => 
  array (
    'type' => 'date',
    'default' => true,
    'vname' => 'LBL_DATE_OF_GIFT',
    'width' => '10%',
  ),
  'recipient' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_RECIPIENT',
    'width' => '12%',
  ),
  'is_709_required' => 
  array (
    'type' => 'bool',
    'default' => true,
    'vname' => 'LBL_IS_709_REQUIRED',
    'width' => '5%',
  ),
  'value' => 
  array (
    'type' => 'currency',
    'default' => true,
    'vname' => 'LBL_VALUE',
    'currency_format' => true,
    'width' => '10%',
  ),
  'date_modified' => 
  array (
    'vname' => 'LBL_DATE_MODIFIED',
    'width' => '10%',
    'default' => true,
  ),
  'edit_button' => 
  array (
    'widget_class' => 'SubPanelEditButton',
    'module' => 'av_Gifting',
    'width' => '4%',
    'default' => true,
  ),
  'remove_button' => 
  array (
    'widget_class' => 'SubPanelRemoveButton',
    'module' => 'av_Gifting',
    'width' => '5%',
    'default' => true,
  ),
);