<?php
// created: 2012-12-14 17:18:45
$subpanel_layout['list_fields'] = array (
  'account_number' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_ACCOUNT_NUMBER',
    'width' => '10%',
  ),
  'name' => 
  array (
    'vname' => 'LBL_NAME',
    'widget_class' => 'SubPanelDetailViewLink',
    'width' => '25%',
    'default' => true,
  ),
  'av_account_types_av_accounts_1_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'vname' => 'LBL_AV_ACCOUNT_TYPES_AV_ACCOUNTS_1_FROM_AV_ACCOUNT_TYPES_TITLE',
    'id' => 'AV_ACCOUNT_TYPES_AV_ACCOUNTS_1AV_ACCOUNT_TYPES_IDA',
    'width' => '10%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'av_Account_Types',
    'target_record_key' => 'av_account_types_av_accounts_1av_account_types_ida',
  ),
  'category' => 
  array (
    'type' => 'enum',
    'default' => true,
    'vname' => 'LBL_CATEGORY',
    'width' => '10%',
  ),
  'custodian' => 
  array (
    'type' => 'enum',
    'default' => true,
    'vname' => 'LBL_CUSTODIAN',
    'width' => '12%',
  ),
  'av_accounts_av_companies_1_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'vname' => 'LBL_AV_ACCOUNTS_AV_COMPANIES_1_FROM_AV_COMPANIES_TITLE',
    'id' => 'AV_ACCOUNTS_AV_COMPANIES_1AV_COMPANIES_IDB',
    'width' => '12%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'av_Companies',
    'target_record_key' => 'av_accounts_av_companies_1av_companies_idb',
  ),
  'value' => 
  array (
    'type' => 'currency',
    'vname' => 'LBL_VALUE',
    'currency_format' => true,
    'width' => '10%',
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
    'widget_class' => 'SubPanelCstmEditAccount',
    'module' => 'av_Accounts',
    'width' => '4%',
    'default' => true,
  ),
  'remove_button' => 
  array (
    'widget_class' => 'SubPanelRemoveButton',
    'module' => 'av_Accounts',
    'width' => '5%',
    'default' => true,
  ),
);