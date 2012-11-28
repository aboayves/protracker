<?php
$module_name = 'av_Groups';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '20%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '10%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => true,
  ),
  'DESCRIPTION' => 
  array (
    'type' => 'text',
    'label' => 'LBL_DESCRIPTION',
    'sortable' => false,
    'width' => '20%',
    'default' => true,
  ),
  'BROADCAST_GROUP_C' => 
  array (
    'type' => 'bool',
    'default' => true,
    'label' => 'LBL_BROADCAST_GROUP',
    'width' => '5%',
  ),
  'DELIVERY_METHOD' => 
  array (
    'type' => 'enum',
    'default' => true,
    'label' => 'LBL_DELIVERY_METHOD',
    'width' => '10%',
  ),
  'CONTACTS_AV_GROUPS_1_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_CONTACTS_AV_GROUPS_1_FROM_CONTACTS_TITLE',
    'id' => 'CONTACTS_AV_GROUPS_1CONTACTS_IDA',
    'width' => '15%',
    'default' => true,
  ),
  'CONTACTS_AV_GROUPS_2_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_CONTACTS_AV_GROUPS_2_FROM_CONTACTS_TITLE',
    'id' => 'CONTACTS_AV_GROUPS_2CONTACTS_IDA',
    'width' => '15%',
    'default' => true,
  ),
  'AV_OFFICES_AV_GROUPS_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_RT_OFFICES_AV_GROUPS_FROM_RT_OFFICES_TITLE',
    'id' => 'AV_OFFICES_AV_GROUPSAV_OFFICES_IDA',
    'width' => '15%',
    'default' => true,
  ),
  'STATUS' => 
  array (
    'type' => 'enum',
    'default' => true,
    'label' => 'LBL_STATUS',
    'width' => '10%',
  ),
  'COMMUNICATION_TYPE' => 
  array (
    'type' => 'enum',
    'label' => 'LBL_COMMUNICATION_TYPE',
    'width' => '10%',
    'default' => false,
  ),
  'MEMBERSHIP_EXPIRATION_DAYS' => 
  array (
    'type' => 'int',
    'default' => false,
    'label' => 'LBL_MEMBERSHIP_EXPIRATION_DAYS',
    'width' => '10%',
  ),
  'ENVELOPE' => 
  array (
    'type' => 'text',
    'label' => 'LBL_ENVELOPE',
    'sortable' => false,
    'width' => '10%',
    'default' => false,
  ),
  'INCLUDE' => 
  array (
    'type' => 'bool',
    'default' => false,
    'label' => 'LBL_INCLUDE',
    'width' => '10%',
  ),
  'COMMENTS' => 
  array (
    'type' => 'text',
    'label' => 'LBL_COMMENTS',
    'sortable' => false,
    'width' => '10%',
    'default' => false,
  ),
  'OPTED_OUT' => 
  array (
    'type' => 'bool',
    'label' => 'LBL_OPTED_OUT',
    'width' => '10%',
    'default' => false,
  ),
  'PRIORITY' => 
  array (
    'type' => 'enum',
    'default' => false,
    'label' => 'LBL_PRIORITY',
    'width' => '10%',
  ),
  'EXPIRATION_DATE' => 
  array (
    'type' => 'date',
    'label' => 'LBL_EXPIRATION_DATE',
    'width' => '10%',
    'default' => false,
  ),
  'TEAM_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_TEAM',
    'default' => false,
  ),
);
?>
