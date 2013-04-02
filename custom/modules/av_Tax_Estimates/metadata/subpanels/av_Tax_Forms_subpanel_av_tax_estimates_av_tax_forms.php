<?php
// created: 2013-04-02 18:34:09
$subpanel_layout['list_fields'] = array (
  'tax_year' => 
  array (
    'type' => 'int',
    'default' => true,
    'vname' => 'LBL_TAX_YEAR',
    'width' => '10%',
  ),
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
  'edit_button' => 
  array (
    'widget_class' => 'SubPanelEditButton',
    'module' => 'av_Tax_Estimates',
    'width' => '4%',
    'default' => true,
  ),
  'remove_button' => 
  array (
    'widget_class' => 'SubPanelRemoveButton',
    'module' => 'av_Tax_Estimates',
    'width' => '5%',
    'default' => true,
  ),
);