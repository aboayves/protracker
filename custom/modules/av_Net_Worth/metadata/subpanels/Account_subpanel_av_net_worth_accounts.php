<?php
// created: 2013-05-08 18:34:45
$subpanel_layout['list_fields'] = array (
  'grand_total' => 
  array (
    'type' => 'currency',
    'vname' => 'LBL_GRAND_TOTAL',
    'currency_format' => true,
    'width' => '15%',
    'default' => true,
  ),
  'grand_total_formated' => 
  array (
    'type' => 'function',
    'studio' => 'visible',
    'vname' => 'grand_total_formated',
    'width' => '15%',
    'default' => true,
  ),
  'managed_assets_c' => 
  array (
    'type' => 'currency',
    'default' => true,
    'vname' => 'LBL_MANAGED_ASSETS',
    'currency_format' => true,
    'width' => '15%',
  ),
  'net_worth_date' => 
  array (
    'type' => 'date',
    'default' => true,
    'vname' => 'LBL_NET_WORTH_DATE',
    'width' => '15%',
  ),
  'modified_by_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'vname' => 'LBL_MODIFIED_NAME',
    'id' => 'MODIFIED_USER_ID',
    'width' => '20%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'Users',
    'target_record_key' => 'modified_user_id',
  ),
  'date_modified' => 
  array (
    'vname' => 'LBL_DATE_MODIFIED',
    'width' => '12%',
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