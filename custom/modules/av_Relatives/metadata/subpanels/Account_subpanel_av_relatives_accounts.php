<?php
// created: 2013-04-08 00:17:56
$subpanel_layout['list_fields'] = array (
  'contacts_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'vname' => 'LBL_CONTACTS_NAME',
    'id' => 'RELATIVE_ID',
    'width' => '10%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'Contacts',
    'target_record_key' => 'relative_id',
  ),
  'type' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_TYPE',
    'width' => '10%',
  ),
  'ok_to_speak_to' => 
  array (
    'type' => 'bool',
    'default' => true,
    'vname' => 'LBL_OK_TO_SPEAK_TO',
    'width' => '10%',
  ),
  'edit_button' => 
  array (
    'widget_class' => 'SubPanelEditButton',
    'module' => 'av_Relatives',
    'width' => '4%',
    'default' => true,
  ),
  'remove_button' => 
  array (
    'widget_class' => 'SubPanelRemoveButton',
    'module' => 'av_Relatives',
    'width' => '5%',
    'default' => true,
  ),
);