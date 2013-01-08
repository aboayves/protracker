<?php
// created: 2013-01-07 15:43:15
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
    'attachment_image_only' => true,
    'default' => true,
  ),
  'document_name' => 
  array (
    'name' => 'document_name',
    'vname' => 'LBL_LIST_DOCUMENT_NAME',
    'widget_class' => 'SubPanelDetailViewLink',
    'width' => '20%',
    'default' => true,
  ),
  'filename' => 
  array (
    'name' => 'filename',
    'vname' => 'LBL_LIST_FILENAME',
    'width' => '20%',
    'module' => 'Documents',
    'sortable' => false,
    'displayParams' => 
    array (
      'module' => 'Documents',
    ),
    'default' => true,
  ),
  'av_activity_types_documents_1_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'vname' => 'LBL_AV_ACTIVITY_TYPES_DOCUMENTS_1_FROM_AV_ACTIVITY_TYPES_TITLE',
    'id' => 'AV_ACTIVITY_TYPES_DOCUMENTS_1AV_ACTIVITY_TYPES_IDA',
    'width' => '10%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => NULL,
    'target_record_key' => NULL,
  ),
  'doc_type' => 
  array (
    'name' => 'doc_type',
    'vname' => 'LBL_LIST_DOC_TYPE',
    'width' => '10%',
    'default' => true,
  ),
  'active_date' => 
  array (
    'name' => 'active_date',
    'vname' => 'LBL_LIST_ACTIVE_DATE',
    'width' => '10%',
    'default' => true,
  ),
  'date_modified' => 
  array (
    'type' => 'datetime',
    'vname' => 'LBL_DATE_MODIFIED',
    'width' => '8%',
    'default' => true,
  ),
  'get_latest' => 
  array (
    'widget_class' => 'SubPanelGetLatestButton',
    'module' => 'Documents',
    'width' => '5%',
    'default' => true,
  ),
  'load_signed' => 
  array (
    'widget_class' => 'SubPanelLoadSignedButton',
    'module' => 'Documents',
    'width' => '5%',
    'default' => true,
  ),
  'edit_button' => 
  array (
    'vname' => 'LBL_EDIT_BUTTON',
    'widget_class' => 'SubPanelEditButton',
    'module' => 'Documents',
    'width' => '5%',
    'default' => true,
  ),
  'remove_button' => 
  array (
    'vname' => 'LBL_REMOVE',
    'widget_class' => 'SubPanelRemoveButton',
    'module' => 'Documents',
    'width' => '5%',
    'default' => true,
  ),
  'document_revision_id' => 
  array (
    'name' => 'document_revision_id',
    'usage' => 'query_only',
  ),
);