<?php
// created: 2012-12-12 14:23:59
$subpanel_layout['list_fields'] = array (
  'year_of_estimate' => 
  array (
    'type' => 'int',
    'default' => true,
    'vname' => 'LBL_YEAR_OF_ESTIMATE',
    'width' => '8%',
  ),
  'name' => 
  array (
    'vname' => 'LBL_NAME',
    'widget_class' => 'SubPanelDetailViewLink',
    'width' => '1%',
    'default' => true,
  ),
  'retirement_at_age_62' => 
  array (
    'type' => 'currency',
    'default' => true,
    'vname' => 'LBL_RETIREMENT_AT_AGE_62',
    'currency_format' => true,
    'width' => '10%',
  ),
  'retirement_at_age_67' => 
  array (
    'type' => 'currency',
    'default' => true,
    'vname' => 'LBL_RETIREMENT_AT_AGE_67',
    'currency_format' => true,
    'width' => '10%',
  ),
  'retirement_at_age_70' => 
  array (
    'type' => 'currency',
    'default' => true,
    'vname' => 'LBL_RETIREMENT_AT_AGE_70',
    'currency_format' => true,
    'width' => '10%',
  ),
  'date_modified' => 
  array (
    'vname' => 'LBL_DATE_MODIFIED',
    'width' => '8%',
    'default' => true,
  ),
  'edit_button' => 
  array (
    'widget_class' => 'SubPanelEditButton',
    'module' => 'av_Social_Security',
    'width' => '4%',
    'default' => true,
  ),
  'remove_button' => 
  array (
    'widget_class' => 'SubPanelRemoveButton',
    'module' => 'av_Social_Security',
    'width' => '5%',
    'default' => true,
  ),
);