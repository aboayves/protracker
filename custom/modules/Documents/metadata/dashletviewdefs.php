<?php
$dashletData['DocumentsDashlet']['searchFields'] = array (
  'date_entered' => 
  array (
    'default' => '',
  ),
  'document_name' => 
  array (
    'default' => '',
  ),
  'category_id' => 
  array (
    'default' => '',
  ),
  'doc_type' => 
  array (
    'default' => '',
  ),
  'status_id' => 
  array (
    'default' => '',
  ),
  'active_date' => 
  array (
    'default' => '',
  ),
  'team_id' => 
  array (
    'default' => '',
    'label' => 'LBL_TEAMS',
  ),
  'assigned_user_id' => 
  array (
    'type' => 'assigned_user_name',
    'default' => 'Kathy Grant',
    'label' => 'LBL_ASSIGNED_TO',
  ),
);
$dashletData['DocumentsDashlet']['columns'] = array (
  'document_name' => 
  array (
    'width' => '40%',
    'label' => 'LBL_NAME',
    'link' => true,
    'default' => true,
    'name' => 'document_name',
  ),
  'av_activity_types_documents_1_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_AV_ACTIVITY_TYPES_DOCUMENTS_1_FROM_AV_ACTIVITY_TYPES_TITLE',
    'id' => 'AV_ACTIVITY_TYPES_DOCUMENTS_1AV_ACTIVITY_TYPES_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'template_type' => 
  array (
    'width' => '8%',
    'label' => 'LBL_TEMPLATE_TYPE',
    'default' => true,
    'name' => 'template_type',
  ),
  'status_id' => 
  array (
    'width' => '8%',
    'label' => 'LBL_STATUS',
    'default' => true,
    'name' => 'status_id',
  ),
  'active_date' => 
  array (
    'width' => '8%',
    'label' => 'LBL_ACTIVE_DATE',
    'default' => true,
    'name' => 'active_date',
  ),
  'status' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_DOC_STATUS',
    'width' => '10%',
    'default' => false,
  ),
  'created_by_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_CREATED',
    'id' => 'CREATED_BY',
    'width' => '10%',
    'default' => false,
  ),
  'modified_by_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_MODIFIED_NAME',
    'id' => 'MODIFIED_USER_ID',
    'width' => '10%',
    'default' => false,
  ),
  'subcategory_id' => 
  array (
    'width' => '8%',
    'label' => 'LBL_SUBCATEGORY',
    'default' => false,
    'name' => 'subcategory_id',
  ),
  'is_template' => 
  array (
    'width' => '8%',
    'label' => 'LBL_IS_TEMPLATE',
    'default' => false,
    'name' => 'is_template',
  ),
  'doc_type' => 
  array (
    'width' => '8%',
    'label' => 'LBL_DOC_TYPE',
    'default' => false,
    'name' => 'doc_type',
  ),
  'exp_date' => 
  array (
    'width' => '8%',
    'label' => 'LBL_EXPIRATION_DATE',
    'default' => false,
    'name' => 'exp_date',
  ),
  'date_entered' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_ENTERED',
    'name' => 'date_entered',
    'default' => false,
  ),
  'date_modified' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_MODIFIED',
    'name' => 'date_modified',
    'default' => false,
  ),
  'created_by' => 
  array (
    'width' => '8%',
    'label' => 'LBL_CREATED',
    'name' => 'created_by',
    'default' => false,
  ),
  'assigned_user_name' => 
  array (
    'width' => '8%',
    'label' => 'LBL_LIST_ASSIGNED_USER',
    'name' => 'assigned_user_name',
    'default' => false,
  ),
  'team_name' => 
  array (
    'width' => '15%',
    'label' => 'LBL_LIST_TEAM',
    'name' => 'team_name',
    'default' => false,
  ),
  'filename' => 
  array (
    'width' => '20%',
    'label' => 'LBL_FILENAME',
    'link' => true,
    'default' => false,
    'bold' => false,
    'displayParams' => 
    array (
      'module' => 'Documents',
    ),
    'related_fields' => 
    array (
      0 => 'document_revision_id',
      1 => 'doc_id',
      2 => 'doc_type',
      3 => 'doc_url',
    ),
    'name' => 'filename',
  ),
);
