<?php
// created: 2012-11-07 19:05:52
$subpanel_layout['list_fields'] = array (
  'accounts_av_goals_1_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'vname' => 'LBL_ACCOUNTS_AV_GOALS_1_FROM_ACCOUNTS_TITLE',
    'id' => 'ACCOUNTS_AV_GOALS_1ACCOUNTS_IDA',
    'width' => '10%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'Accounts',
    'target_record_key' => 'accounts_av_goals_1accounts_ida',
  ),
  'name' => 
  array (
    'vname' => 'LBL_NAME',
    'widget_class' => 'SubPanelDetailViewLink',
    'width' => '10%',
    'default' => true,
  ),
  'amount' => 
  array (
    'type' => 'currency',
    'default' => true,
    'vname' => 'LBL_AMOUNT',
    'currency_format' => true,
    'width' => '10%',
  ),
  'target_date' => 
  array (
    'type' => 'date',
    'default' => true,
    'vname' => 'LBL_TARGET_DATE',
    'width' => '10%',
  ),
  'progress' => 
  array (
    'type' => 'currency',
    'default' => true,
    'vname' => 'LBL_PROGRESS',
    'currency_format' => true,
    'width' => '10%',
  ),
  'type' => 
  array (
    'type' => 'enum',
    'default' => true,
    'vname' => 'LBL_TYPE',
    'width' => '10%',
  ),
  'description' => 
  array (
    'type' => 'text',
    'vname' => 'LBL_DESCRIPTION',
    'sortable' => false,
    'width' => '30%',
    'default' => true,
  ),
  'edit_button' => 
  array (
    'widget_class' => 'SubPanelEditButton',
    'module' => 'av_Goals',
    'width' => '4%',
    'default' => true,
  ),
  'remove_button' => 
  array (
    'widget_class' => 'SubPanelRemoveButton',
    'module' => 'av_Goals',
    'width' => '5%',
    'default' => true,
  ),
);