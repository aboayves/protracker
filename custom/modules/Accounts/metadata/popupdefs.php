<?php
$popupMeta = array (
    'moduleMain' => 'Account',
    'varName' => 'ACCOUNT',
    'orderBy' => 'name',
    'whereClauses' => array (
  'name' => 'accounts.name',
  'email' => 'accounts.email',
  'assigned_user_id' => 'accounts.assigned_user_id',
  'av_client_types_name' => 'accounts.av_client_types_name',
),
    'searchInputs' => array (
  0 => 'name',
  3 => 'email',
  4 => 'assigned_user_id',
  5 => 'av_client_types_name',
),
    'create' => array (
  'formBase' => 'AccountFormBase.php',
  'formBaseClass' => 'AccountFormBase',
  'getFormBodyParams' => 
  array (
    0 => '',
    1 => '',
    2 => 'AccountSave',
  ),
  'createButton' => 'LNK_NEW_ACCOUNT',
),
    'searchdefs' => array (
  'name' => 
  array (
    'name' => 'name',
    'width' => '10%',
  ),
  'av_client_types_name' => 
  array (
    'type' => 'relate_cstm',
    'link' => 'av_client_types',
    'label' => 'LBL_AV_CLIENT_TYPES_NAME',
    'width' => '10%',
    'name' => 'av_client_types_name',
  ),
  'email' => 
  array (
    'name' => 'email',
    'width' => '10%',
  ),
  'assigned_user_id' => 
  array (
    'name' => 'assigned_user_id',
    'label' => 'LBL_ASSIGNED_TO',
    'type' => 'enum',
    'function' => 
    array (
      'name' => 'get_user_array',
      'params' => 
      array (
        0 => false,
      ),
    ),
    'width' => '10%',
  ),
),
    'listviewdefs' => array (
  'NAME' => 
  array (
    'width' => '40%',
    'label' => 'LBL_LIST_ACCOUNT_NAME',
    'link' => true,
    'default' => true,
    'name' => 'name',
  ),
  'AV_CLIENT_TYPES_NAME' => 
  array (
    'type' => 'relate_cstm',
    'link' => 'av_client_types',
    'label' => 'LBL_AV_CLIENT_TYPES_NAME',
    'width' => '10%',
    'default' => true,
  ),
  'PRIMARY_CONTACT_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_PRIMARY_CONTACT_NAME',
    'id' => 'PRIMARY_CONTACT_ID',
    'width' => '10%',
    'default' => true,
  ),
  'SECONDARY_CONTACT_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_CO_CLIENT_CONTACT_NAME',
    'id' => 'SECONDARY_CONTACT_ID',
    'width' => '10%',
    'default' => true,
  ),
  'EMAIL1' => 
  array (
    'type' => 'varchar',
    'studio' => 
    array (
      'editField' => true,
      'searchview' => false,
    ),
    'label' => 'LBL_EMAIL',
    'width' => '10%',
    'default' => true,
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '2%',
    'label' => 'LBL_LIST_ASSIGNED_USER',
    'default' => true,
    'name' => 'assigned_user_name',
  ),
),
);
