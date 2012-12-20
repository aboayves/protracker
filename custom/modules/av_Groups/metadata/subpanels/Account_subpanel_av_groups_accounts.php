<?php
// created: 2012-12-18 18:31:03
$subpanel_layout['list_fields'] = array (
  'name' => 
  array (
    'vname' => 'LBL_NAME',
    'widget_class' => 'SubPanelDetailViewLink',
    'width' => '30%',
    'default' => true,
  ),
  'include' => 
  array (
    'type' => 'bool',
    'default' => true,
    'vname' => 'LBL_INCLUDE',
    'width' => '10%',
  ),
  'opted_out' => 
  array (
    'type' => 'bool',
    'vname' => 'LBL_OPTED_OUT',
    'width' => '10%',
    'default' => true,
  ),
  'expiration_date' => 
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
    'vname' => 'LBL_EDIT_BUTTON',
    'widget_class' => 'SubPanelCstmEditRoleButton',
    'target' => 'av_Group_Membership',
    'action' => 'EditView',
    'id_field' => 'membership_id',
    'width' => '5%',
    'default' => true,
  ),
  'remove_button' => 
  array (
    'widget_class' => 'SubPanelRemoveButton',
    'module' => 'av_Groups',
    'width' => '5%',
    'default' => true,
  ),
  'accounts_fields' => 
  array (
    'vname' => 'LBL_JOIN_FIELD',
    'usage' => 'query_only',
  ),
  'membership_id' => 
  array (
    'vname' => 'LBL_ID',
    'usage' => 'query_only',
  ),
);