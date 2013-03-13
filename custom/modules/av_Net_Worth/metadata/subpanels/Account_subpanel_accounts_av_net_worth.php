<?php
// created: 2013-02-28 18:52:40
$subpanel_layout['list_fields'] = array (
  'grand_total_formated' => 
  array (
    'vname' => 'LBL_GRAND_TOTAL',
    'width' => '15%',
    'default' => true,
  ),
  'net_worth_date' => 
  array (
    'type' => 'date',
    'default' => true,
    'vname' => 'LBL_NET_WORTH_DATE',
    'width' => '15%',
  ),
  'managed_assets_formated' => 
  array (
    'vname' => 'LBL_MANAGED_ASSETS',
    'width' => '20%',
    'default' => true,
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
    'width' => '10%',
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