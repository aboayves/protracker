<?php
// created: 2013-04-10 16:48:30
$subpanel_layout['list_fields'] = array (
  'description' => 
  array (
    'type' => 'text',
    'vname' => 'LBL_DESCRIPTION',
    'sortable' => false,
    'width' => '15%',
    'default' => true,
  ),
  'assets' => 
  array (
    'type' => 'currency',
    'align' => 'right',
    'default' => true,
    'vname' => 'LBL_ASSETS',
    'currency_format' => true,
    'width' => '10%',
  ),
  'annual_contributions' => 
  array (
    'type' => 'currency',
    'align' => 'right',
    'default' => true,
    'vname' => 'LBL_ANNUAL_CONTRIBUTIONS',
    'currency_format' => true,
    'width' => '8%',
  ),
  'inflation' => 
  array (
    'type' => 'int',
    'default' => true,
    'vname' => 'LBL_INFLATION',
    'width' => '6%',
  ),
  'average_annual_return' => 
  array (
    'type' => 'int',
    'default' => true,
    'vname' => 'LBL_AVERAGE_ANNUAL_RETURN',
    'width' => '6%',
  ),
  'retirement_age' => 
  array (
    'type' => 'int',
    'default' => true,
    'vname' => 'LBL_RETIREMENT_AGE',
    'width' => '6%',
  ),
  'life_expectancy' => 
  array (
    'type' => 'int',
    'default' => true,
    'vname' => 'LBL_LIFE_EXPECTANCY',
    'width' => '6%',
  ),
  'withdrawal_rate' => 
  array (
    'type' => 'int',
    'default' => true,
    'vname' => 'LBL_WITHDRAWAL_RATE',
    'width' => '6%',
  ),
  'projection_date' => 
  array (
    'type' => 'date',
    'default' => true,
    'vname' => 'LBL_PROJECTION_DATE',
    'width' => '10%',
  ),
  'edit_button' => 
  array (
    'widget_class' => 'SubPanelEditButton',
    'module' => 'av_Retirement_Projections',
    'width' => '4%',
    'default' => true,
  ),
  'remove_button' => 
  array (
    'widget_class' => 'SubPanelRemoveButton',
    'module' => 'av_Retirement_Projections',
    'width' => '5%',
    'default' => true,
  ),
);