<?php
// created: 2013-02-07 18:11:01
$subpanel_layout['list_fields'] = array (
  'name' => 
  array (
    'vname' => 'LBL_LIST_NAME',
    'widget_class' => 'SubPanelDetailViewLink',
    'width' => '28%',
    'sort_by' => 'products.name',
    'default' => true,
  ),
  'status' => 
  array (
    'vname' => 'LBL_LIST_STATUS',
    'width' => '8%',
    'default' => true,
  ),
  'date_purchased' => 
  array (
    'vname' => 'LBL_LIST_DATE_PURCHASED',
    'width' => '10%',
    'default' => true,
  ),
  'discount_price' => 
  array (
    'vname' => 'LBL_LIST_DISCOUNT_PRICE',
    'width' => '10%',
    'default' => true,
  ),
  'date_support_expires' => 
  array (
    'vname' => 'LBL_LIST_SUPPORT_EXPIRES',
    'width' => '10%',
    'default' => true,
  ),
  'edit_button' => 
  array (
    'vname' => 'LBL_EDIT_BUTTON',
    'widget_class' => 'SubPanelEditButton',
    'module' => 'Products',
    'width' => '4%',
    'default' => true,
  ),
  'remove_button' => 
  array (
    'vname' => 'LBL_REMOVE',
    'widget_class' => 'SubPanelRemoveButton',
    'module' => 'Products',
    'width' => '4%',
    'default' => true,
  ),
  'discount_usdollar' => 
  array (
    'usage' => 'query_only',
  ),
);