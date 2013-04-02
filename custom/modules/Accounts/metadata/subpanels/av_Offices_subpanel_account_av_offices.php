<?php
// created: 2013-03-29 17:45:57
$subpanel_layout['list_fields'] = array (
  'name' => 
  array (
    'vname' => 'LBL_LIST_ACCOUNT_NAME',
    'widget_class' => 'SubPanelDetailViewLink',
    'width' => '45%',
    'default' => true,
  ),
  'av_client_types_name' => 
  array (
    'type' => 'relate_cstm',
    'link' => 'av_client_types',
    'vname' => 'LBL_AV_CLIENT_TYPES_NAME',
    'width' => '10%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'av_Client_Types',
    'target_record_key' => 'client_type_id',
  ),
  'phone_home' => 
  array (
    'type' => 'phone',
    'default' => true,
    'vname' => 'LBL_PHONE_HOME',
    'width' => '10%',
  ),
  'phone_work' => 
  array (
    'type' => 'phone',
    'default' => true,
    'vname' => 'LBL_PHONE_WORK',
    'width' => '10%',
  ),
  'phone_mobile' => 
  array (
    'type' => 'phone',
    'default' => true,
    'vname' => 'LBL_PHONE_MOBILE',
    'width' => '10%',
  ),
  'mailing_address_city' => 
  array (
    'type' => 'varchar',
    'vname' => 'LBL_MAILING_ADDRESS_CITY',
    'width' => '10%',
    'default' => true,
  ),
  'mailing_address_state' => 
  array (
    'type' => 'varchar',
    'vname' => 'LBL_MAILING_ADDRESS_STATE',
    'width' => '10%',
    'default' => true,
  ),
  'edit_button' => 
  array (
    'vname' => 'LBL_EDIT_BUTTON',
    'widget_class' => 'SubPanelEditButton',
    'width' => '4%',
    'default' => true,
  ),
  'remove_button' => 
  array (
    'vname' => 'LBL_REMOVE',
    'widget_class' => 'SubPanelRemoveButtonAccount',
    'width' => '4%',
    'default' => true,
  ),
);