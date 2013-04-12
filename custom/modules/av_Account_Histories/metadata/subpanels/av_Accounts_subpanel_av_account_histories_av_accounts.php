<?php
// created: 2013-04-10 17:36:47
$subpanel_layout['list_fields'] = array (
  'av_accounts_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'vname' => 'LBL_AV_ACCOUNTS_NAME',
    'id' => 'ASSET_ID',
    'width' => '30%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'av_Accounts',
    'target_record_key' => 'asset_id',
  ),
  'account_number' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_ACCOUNT_NUMBER',
    'width' => '15%',
  ),
  'value_date' => 
  array (
    'type' => 'date',
    'default' => true,
    'vname' => 'LBL_VALUE_DATE',
    'width' => '10%',
  ),
  'value' => 
  array (
    'type' => 'currency',
    'align' => 'right',
    'default' => true,
    'vname' => 'LBL_VALUE',
    'currency_format' => true,
    'width' => '12%',
  ),
  'date_modified' => 
  array (
    'type' => 'datetime',
    'vname' => 'LBL_DATE_MODIFIED',
    'width' => '12%',
    'default' => true,
  ),
  'edit_button' => 
  array (
    'widget_class' => 'SubPanelEditButton',
    'module' => 'av_Account_Histories',
    'width' => '4%',
    'default' => true,
  ),
  'remove_button' => 
  array (
    'widget_class' => 'SubPanelRemoveButton',
    'module' => 'av_Account_Histories',
    'width' => '5%',
    'default' => true,
  ),
);