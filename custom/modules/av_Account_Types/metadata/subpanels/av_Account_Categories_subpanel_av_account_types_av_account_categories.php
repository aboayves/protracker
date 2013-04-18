<?php
// created: 2013-02-25 16:10:03
$subpanel_layout['list_fields'] = array (
  'name' => 
  array (
    'vname' => 'LBL_NAME',
    'widget_class' => 'SubPanelDetailViewLink',
    'width' => '45%',
    'default' => true,
  ),
  'description' => 
  array (
    'type' => 'text',
    'vname' => 'LBL_DESCRIPTION',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
  ),
  'is_beneficiary_required' => 
  array (
    'type' => 'bool',
    'default' => true,
    'vname' => 'LBL_IS_BENEFICIARY_REQUIRED',
    'width' => '10%',
  ),
  'retirement_plan_type' => 
  array (
    'type' => 'enum',
    'default' => true,
    'vname' => 'LBL_RETIREMENT_PLAN_TYPE',
    'width' => '10%',
  ),
  'edit_button' => 
  array (
    'widget_class' => 'SubPanelEditButton',
    'module' => 'av_Account_Types',
    'width' => '4%',
    'default' => true,
  ),
  'remove_button' => 
  array (
    'widget_class' => 'SubPanelRemoveButton',
    'module' => 'av_Account_Types',
    'width' => '5%',
    'default' => true,
  ),
);