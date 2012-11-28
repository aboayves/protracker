<?php
// created: 2012-11-15 19:00:37
$subpanel_layout['list_fields'] = array (
  'name' => 
  array (
    'vname' => 'LBL_NAME',
    'widget_class' => 'SubPanelDetailViewLink',
    'width' => '45%',
    'default' => true,
  ),
  'accounts_av_net_worth_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'vname' => 'LBL_ACCOUNTS_AV_NET_WORTH_FROM_ACCOUNTS_TITLE',
    'id' => 'ACCOUNTS_AV_NET_WORTHACCOUNTS_IDA',
    'width' => '10%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'Accounts',
    'target_record_key' => 'accounts_av_net_worthaccounts_ida',
  ),
  'net_worth_date' => 
  array (
    'type' => 'date',
    'default' => true,
    'vname' => 'LBL_NET_WORTH_DATE',
    'width' => '10%',
  ),
  'grand_total' => 
  array (
    'type' => 'currency',
    'vname' => 'LBL_GRAND_TOTAL',
    'currency_format' => true,
    'width' => '10%',
    'default' => true,
  ),
  'date_modified' => 
  array (
    'vname' => 'LBL_DATE_MODIFIED',
    'width' => '45%',
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