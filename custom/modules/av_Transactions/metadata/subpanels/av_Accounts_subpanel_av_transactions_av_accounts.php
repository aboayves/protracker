<?php
// created: 2013-04-07 02:56:37
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
  'related_account' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_RELATED_ACCOUNT',
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
  'net_amount' => 
  array (
    'type' => 'currency',
    'align' => 'right',
    'default' => true,
    'vname' => 'LBL_NET_AMOUNT',
    'currency_format' => true,
    'width' => '10%',
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