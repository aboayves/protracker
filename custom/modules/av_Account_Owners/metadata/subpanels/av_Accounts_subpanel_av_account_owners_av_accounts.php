<?php
// created: 2013-03-02 04:35:18
$subpanel_layout['list_fields'] = array (
  'contacts_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'vname' => 'LBL_CONTACTS_NAME',
    'id' => 'OWNER_ID',
    'width' => '10%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'Contacts',
    'target_record_key' => 'owner_id',
  ),
  'ownership_percent' => 
  array (
    'type' => 'decimal',
    'default' => true,
    'vname' => 'LBL_OWNERSHIP_PERCENT',
    'width' => '10%',
  ),
  'description' => 
  array (
    'type' => 'text',
    'vname' => 'LBL_DESCRIPTION',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
  ),
  'edit_button' => 
  array (
    'widget_class' => 'SubPanelEditButton',
    'module' => 'av_Account_Owners',
    'width' => '4%',
    'default' => true,
  ),
  'remove_button' => 
  array (
    'widget_class' => 'SubPanelRemoveButton',
    'module' => 'av_Account_Owners',
    'width' => '5%',
    'default' => true,
  ),
);