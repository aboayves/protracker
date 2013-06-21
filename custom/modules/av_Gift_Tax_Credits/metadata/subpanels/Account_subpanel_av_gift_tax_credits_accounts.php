<?php
// created: 2013-06-21 14:08:18
$subpanel_layout['list_fields'] = array (
  'name' => 
  array (
    'vname' => 'LBL_NAME',
    'widget_class' => 'SubPanelDetailViewLink',
    'width' => '35%',
    'default' => true,
  ),
  'date_credit_used' => 
  array (
    'type' => 'date',
    'default' => true,
    'vname' => 'LBL_DATE_CREDIT_USED',
    'width' => '12%',
  ),
  'credit_amount' => 
  array (
    'type' => 'currency',
    'default' => true,
    'vname' => 'LBL_CREDIT_AMOUNT',
    'currency_format' => true,
    'width' => '12%',
  ),
  'description' => 
  array (
    'type' => 'text',
    'vname' => 'LBL_DESCRIPTION',
    'sortable' => false,
    'width' => '20%',
    'default' => true,
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