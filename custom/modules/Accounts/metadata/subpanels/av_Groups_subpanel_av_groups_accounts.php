<?php
// created: 2013-01-07 15:28:15
$subpanel_layout['list_fields'] = array (
  'delete_multiple_check' => 
  array (
    'vname' => 'LBL_DELETE_MULTIPLE_CHECK',
    'width' => '5%',
    'sortable' => false,
    'default' => true,
  ),
  'name' => 
  array (
    'vname' => 'LBL_LIST_ACCOUNT_NAME',
    'widget_class' => 'SubPanelDetailViewLink',
    'width' => '20%',
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
    'vname' => 'LBL_REMOVE',
    'widget_class' => 'SubPanelRemoveButtonAccount',
    'width' => '5%',
    'default' => true,
  ),
  'av_groups_fields' => 
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