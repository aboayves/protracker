<?php
// created: 2012-08-30 20:22:51
$subpanel_layout['list_fields'] = array (
  'parent_name' => 
  array (
    'type' => 'parent',
    'studio' => 'visible',
    'vname' => 'LBL_FLEX_RELATE',
    'width' => '10%',
    'default' => true,
  ),
  'envelope' => 
  array (
    'type' => 'text',
    'vname' => 'LBL_ENVELOPE',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
  ),
  'include' => 
  array (
    'type' => 'bool',
    'default' => true,
    'vname' => 'LBL_INCLUDE',
    'width' => '5%',
  ),
  'opted_out' => 
  array (
    'type' => 'bool',
    'vname' => 'LBL_OPTED_OUT',
    'width' => '5%',
    'default' => true,
  ),
  'calc_expiration_date' => 
  array (
    'type' => 'date',
    'vname' => 'LBL_EXPIRATION_DATE',
    'width' => '10%',
    'default' => true,
  ),
  'delivery_method' => 
  array (
    'type' => 'enum',
    'vname' => 'LBL_DELIVERY_METHOD',
    'width' => '10%',
    'default' => true,
  ),
  'comments' => 
  array (
    'type' => 'text',
    'vname' => 'LBL_COMMENTS',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
  ),
  'edit_button' => 
  array (
    'widget_class' => 'SubPanelEditButton',
    'module' => 'rt_Group_Membership',
    'width' => '4%',
    'default' => true,
  ),
  'remove_button' => 
  array (
    'widget_class' => 'SubPanelRemoveButton',
    'module' => 'rt_Group_Membership',
    'width' => '5%',
    'default' => true,
  ),
);