<?php
// created: 2013-02-27 14:52:14
$subpanel_layout['list_fields'] = array (
  'name' => 
  array (
    'vname' => 'LBL_NAME',
    'widget_class' => 'SubPanelDetailViewLink',
    'width' => '20%',
    'default' => true,
  ),
  'description' => 
  array (
    'type' => 'text',
    'vname' => 'LBL_DESCRIPTION',
    'sortable' => false,
    'width' => '20%',
    'default' => true,
  ),
  'investment_objective' => 
  array (
    'type' => 'enum',
    'default' => true,
    'vname' => 'LBL_INVESTMENT_OBJECTIVE',
    'width' => '10%',
  ),
  'investment_experience' => 
  array (
    'type' => 'enum',
    'default' => true,
    'vname' => 'LBL_INVESTMENT_EXPERIENCE',
    'width' => '10%',
  ),
  'risk_tolerance' => 
  array (
    'type' => 'enum',
    'default' => true,
    'vname' => 'LBL_RISK_TOLERANCE',
    'width' => '10%',
  ),
  'date_modified' => 
  array (
    'vname' => 'LBL_DATE_MODIFIED',
    'width' => '10%',
    'default' => true,
  ),
  'edit_button' => 
  array (
    'widget_class' => 'SubPanelEditButton',
    'module' => 'av_Suitability',
    'width' => '4%',
    'default' => true,
  ),
  'remove_button' => 
  array (
    'widget_class' => 'SubPanelRemoveButton',
    'module' => 'av_Suitability',
    'width' => '5%',
    'default' => true,
  ),
);