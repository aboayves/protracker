<?php
// created: 2013-04-08 00:18:12
$subpanel_layout['list_fields'] = array (
  'contacts_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'vname' => 'LBL_CONTACTS_NAME',
    'id' => 'PROFESSIONAL_ID',
    'width' => '15%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'Contacts',
    'target_record_key' => 'professional_id',
  ),
  'type' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_TYPE',
    'width' => '15%',
  ),
  'edit_button' => 
  array (
    'widget_class' => 'SubPanelEditButton',
    'module' => 'av_Professionals',
    'width' => '4%',
    'default' => true,
  ),
  'remove_button' => 
  array (
    'widget_class' => 'SubPanelRemoveButton',
    'module' => 'av_Professionals',
    'width' => '5%',
    'default' => true,
  ),
);