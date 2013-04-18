<?php
// created: 2013-02-07 18:06:36
$subpanel_layout['list_fields'] = array (
  'quote_num' => 
  array (
    'type' => 'int',
    'vname' => 'LBL_QUOTE_NUM',
    'width' => '5%',
    'default' => true,
  ),
  'name' => 
  array (
    'vname' => 'LBL_LIST_QUOTE_NAME',
    'widget_class' => 'SubPanelDetailViewLink',
    'width' => '25%',
    'default' => true,
  ),
  'total_usdollar' => 
  array (
    'vname' => 'LBL_LIST_AMOUNT_USDOLLAR',
    'width' => '15%',
    'default' => true,
  ),
  'date_quote_expected_closed' => 
  array (
    'name' => 'date_quote_expected_closed',
    'vname' => 'LBL_LIST_DATE_QUOTE_EXPECTED_CLOSED',
    'width' => '10%',
    'default' => true,
  ),
  'date_entered' => 
  array (
    'type' => 'datetime',
    'vname' => 'LBL_DATE_ENTERED',
    'width' => '10%',
    'default' => true,
  ),
  'date_modified' => 
  array (
    'type' => 'datetime',
    'vname' => 'LBL_DATE_MODIFIED',
    'width' => '10%',
    'default' => true,
  ),
  'assigned_user_name' => 
  array (
    'name' => 'assigned_user_name',
    'vname' => 'LBL_LIST_ASSIGNED_TO_NAME',
    'widget_class' => 'SubPanelDetailViewLink',
    'target_record_key' => 'assigned_user_id',
    'target_module' => 'Employees',
    'width' => '10%',
    'default' => true,
  ),
  'edit_button' => 
  array (
    'vname' => 'LBL_EDIT_BUTTON',
    'widget_class' => 'SubPanelEditButton',
    'module' => 'Quotes',
    'width' => '4%',
    'default' => true,
  ),
  'currency_id' => 
  array (
    'usage' => 'query_only',
  ),
);