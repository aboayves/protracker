<?php
// created: 2013-03-02 04:37:13
$subpanel_layout['list_fields'] = array (
  'transaction_date' => 
  array (
    'type' => 'date',
    'default' => true,
    'vname' => 'LBL_TRANSACTION_DATE',
    'width' => '10%',
  ),
  'type' => 
  array (
    'type' => 'enum',
    'default' => true,
    'vname' => 'LBL_TYPE',
    'width' => '10%',
  ),
  'amount' => 
  array (
    'type' => 'currency',
    'align' => 'right',
    'default' => true,
    'vname' => 'LBL_AMOUNT',
    'currency_format' => true,
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
    'module' => 'av_Transactions',
    'width' => '4%',
    'default' => true,
  ),
  'remove_button' => 
  array (
    'widget_class' => 'SubPanelRemoveButton',
    'module' => 'av_Transactions',
    'width' => '5%',
    'default' => true,
  ),
);