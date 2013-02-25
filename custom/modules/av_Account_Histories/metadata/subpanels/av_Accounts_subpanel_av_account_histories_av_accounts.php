<?php
// created: 2013-02-25 18:12:42
$subpanel_layout['list_fields'] = array (
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
    'width' => '10%',
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