<?php
// created: 2013-03-21 17:51:12
$subpanel_layout['list_fields'] = array (
  'object_image' => 
  array (
    'vname' => 'LBL_OBJECT_IMAGE',
    'widget_class' => 'SubPanelIcon',
    'width' => '2%',
    'image2' => 'attachment',
    'image2_url_field' => 
    array (
      'id_field' => 'id',
      'filename_field' => 'filename',
    ),
    'default' => true,
  ),
  'name' => 
  array (
    'vname' => 'LBL_LIST_SUBJECT',
    'widget_class' => 'SubPanelDetailViewLink',
    'width' => '20%',
    'default' => true,
  ),
  'contact_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'vname' => 'LBL_CONTACT_NAME',
    'id' => 'CONTACT_ID',
    'width' => '20%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'Contacts',
    'target_record_key' => 'contact_id',
  ),
  'date_modified' => 
  array (
    'type' => 'datetime',
    'vname' => 'LBL_DATE_MODIFIED',
    'width' => '12%',
    'default' => true,
  ),
  'edit_button' => 
  array (
    'vname' => 'LBL_EDIT_BUTTON',
    'widget_class' => 'SubPanelEditButton',
    'module' => 'Notes',
    'width' => '5%',
    'default' => true,
  ),
  'remove_button' => 
  array (
    'vname' => 'LBL_REMOVE',
    'widget_class' => 'SubPanelRemoveButton',
    'width' => '2%',
    'default' => true,
  ),
  'file_url' => 
  array (
    'usage' => 'query_only',
  ),
  'filename' => 
  array (
    'usage' => 'query_only',
  ),
);