<?php
// created: 2013-01-07 17:44:31
$subpanel_layout['list_fields'] = array (
  'name' => 
  array (
    'vname' => 'LBL_NAME',
    'widget_class' => 'SubPanelDetailViewLink',
    'width' => '15%',
    'default' => true,
  ),
  'date_credit_used' => 
  array (
    'type' => 'date',
    'default' => true,
    'vname' => 'LBL_DATE_CREDIT_USED',
    'width' => '10%',
  ),
  'description' => 
  array (
    'type' => 'text',
    'vname' => 'LBL_DESCRIPTION',
    'sortable' => false,
    'width' => '40%',
    'default' => true,
  ),
  'credit_amount' => 
  array (
    'type' => 'currency',
    'default' => true,
    'vname' => 'LBL_CREDIT_AMOUNT',
    'currency_format' => true,
    'width' => '15%',
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
    'module' => 'av_Gift_Tax_Credits',
    'width' => '5%',
    'default' => true,
  ),
  'remove_button' => 
  array (
    'widget_class' => 'SubPanelRemoveButton',
    'module' => 'av_Gift_Tax_Credits',
    'width' => '5%',
    'default' => true,
  ),
);