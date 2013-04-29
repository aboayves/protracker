<?php
// created: 2013-04-16 19:10:06
$subpanel_layout['list_fields'] = array (
  'accounts_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'vname' => 'LBL_ACCOUNTS_NAME',
    'id' => 'ACCOUNT_ID',
    'width' => '10%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'Accounts',
    'target_record_key' => 'account_id',
  ),
  'service_type' => 
  array (
    'type' => 'enum',
    'default' => true,
    'vname' => 'LBL_SERVICE_TYPE',
    'width' => '10%',
    'link' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => NULL,
    'target_record_key' => NULL,
  ),
  'service_group' => 
  array (
    'type' => 'enum',
    'default' => true,
    'vname' => 'LBL_SERVICE_GROUP',
    'width' => '10%',
  ),
  'frequency' => 
  array (
    'type' => 'enum',
    'default' => true,
    'vname' => 'LBL_FREQUENCY',
    'width' => '10%',
  ),
  'report_name' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_REPORT_NAME',
    'width' => '10%',
  ),
  'edit_button' => 
  array (
    'widget_class' => 'SubPanelEditButton',
    'module' => 'av_Services',
    'width' => '4%',
    'default' => true,
  ),
  'remove_button' => 
  array (
    'widget_class' => 'SubPanelRemoveButton',
    'module' => 'av_Services',
    'width' => '5%',
    'default' => true,
  ),
);