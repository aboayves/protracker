<?php
// created: 2013-04-08 14:52:39
$subpanel_layout['list_fields'] = array (
  'accounts_name' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'vname' => 'LBL_ACCOUNTS_AV_ACCOUNTS_FROM_ACCOUNTS_TITLE',
    'id' => 'account_id',
    'link' => true,
    'width' => '10%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'Accounts',
    'target_record_key' => 'account_id',
  ),
  'name' => 
  array (
    'vname' => 'LBL_NAME',
    'widget_class' => 'SubPanelDetailViewLink',
    'width' => '45%',
    'default' => true,
  ),
);