<?php
// created: 2013-05-16 16:24:52
$subpanel_layout['list_fields'] = array (
  'net_worth_date' => 
  array (
    'type' => 'date',
    'default' => true,
    'vname' => 'LBL_NET_WORTH_DATE',
    'width' => '20%',
  ),
  'grand_total_formated' => 
  array (
    'type' => 'function',
    'studio' => 'visible',
    'vname' => 'grand_total_formated',
    'width' => '20%',
    'default' => true,
  ),
  'edit_button' => 
  array (
    'widget_class' => 'SubPanelEditButton',
    'module' => 'av_Net_Worth',
    'width' => '60%',
    'default' => true,
  ),
  'remove_button' => 
  array (
    'widget_class' => 'SubPanelRemoveButton',
    'module' => 'av_Net_Worth',
    'width' => '5%',
    'default' => true,
  ),
);