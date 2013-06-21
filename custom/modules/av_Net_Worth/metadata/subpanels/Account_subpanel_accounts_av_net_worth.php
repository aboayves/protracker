<?php
// created: 2013-06-19 19:14:33
$subpanel_layout['list_fields'] = array (
  'grand_total' => 
  array (
    'vname' => 'LBL_GRAND_TOTAL',
    'width' => '10%',
    'sortable' => true,
    'default' => true,
    'align' => 'right',
  ),
  'net_worth_date' => 
  array (
    'type' => 'date',
    'default' => true,
    'vname' => 'LBL_NET_WORTH_DATE',
    'width' => '15%',
  ),
  'managed_assets' => 
  array (
    'vname' => 'LBL_MANAGED_ASSETS',
    'width' => '10%',
    'sortable' => true,
    'default' => true,
    'align' => 'right',
  ),
  'description' => 
  array (
    'type' => 'text',
    'vname' => 'LBL_DESCRIPTION',
    'sortable' => false,
    'width' => '30%',
    'default' => true,
  ),
  'date_modified' => 
  array (
    'vname' => 'LBL_DATE_MODIFIED',
    'width' => '13%',
    'default' => true,
  ),
  'edit_button' => 
  array (
    'widget_class' => 'SubPanelEditButton',
    'module' => 'av_Net_Worth',
    'width' => '4%',
    'default' => true,
  ),
  'remove_button' => 
  array (
    'widget_class' => 'SubPanelRemoveButton',
    'module' => 'av_Net_Worth',
    'width' => '5%',
    'default' => true,
  ),
);