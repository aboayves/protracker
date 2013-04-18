<?php
// created: 2013-03-02 04:35:57
$subpanel_layout['list_fields'] = array (
  'contacts_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'vname' => 'LBL_CONTACTS_NAME',
    'id' => 'BENEFICIARY_ID',
    'width' => '10%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'Contacts',
    'target_record_key' => 'beneficiary_id',
  ),
  'type' => 
  array (
    'type' => 'enum',
    'default' => true,
    'vname' => 'LBL_TYPE',
    'width' => '10%',
  ),
  'per_stirpes' => 
  array (
    'type' => 'bool',
    'default' => true,
    'vname' => 'LBL_PER_STIRPES',
    'width' => '10%',
  ),
  'percent' => 
  array (
    'type' => 'decimal',
    'default' => true,
    'vname' => 'LBL_PERCENT',
    'width' => '10%',
  ),
  'date_verified' => 
  array (
    'type' => 'date',
    'default' => true,
    'vname' => 'LBL_DATE_VERIFIED',
    'width' => '10%',
  ),
  'date_modified' => 
  array (
    'vname' => 'LBL_DATE_MODIFIED',
    'width' => '45%',
    'default' => true,
  ),
  'edit_button' => 
  array (
    'widget_class' => 'SubPanelEditButton',
    'module' => 'av_Beneficiaries',
    'width' => '4%',
    'default' => true,
  ),
  'remove_button' => 
  array (
    'widget_class' => 'SubPanelRemoveButton',
    'module' => 'av_Beneficiaries',
    'width' => '5%',
    'default' => true,
  ),
);