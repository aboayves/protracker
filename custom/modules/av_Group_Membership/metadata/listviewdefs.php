<?php
$module_name = 'av_Group_Membership';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '20%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'AV_GROUPS_NAME' => 
  array (
    'type' => 'relate',
    'label' => 'LBL_GROUP',
    'id' => 'AV_GROUPS_ID',
    'link' => true,
    'width' => '20%',
    'default' => true,
  ),
  'PARENT_NAME' => 
  array (
    'type' => 'parent',
    'studio' => 'visible',
    'label' => 'LBL_FLEX_RELATE',
    'width' => '10%',
    'default' => true,
  ),
  'COMMENTS' => 
  array (
    'type' => 'text',
    'label' => 'LBL_COMMENTS',
    'sortable' => false,
    'width' => '25%',
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
  'ENVELOPE' => 
  array (
    'type' => 'text',
    'label' => 'LBL_ENVELOPE',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
  ),
  'TEAM_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_TEAM',
    'default' => true,
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => true,
  ),
  'OPTED_OUT' => 
  array (
    'type' => 'bool',
    'label' => 'LBL_OPTED_OUT',
    'width' => '10%',
    'default' => false,
  ),
  'DELIVERY_METHOD' => 
  array (
    'type' => 'enum',
    'label' => 'LBL_DELIVERY_METHOD',
    'width' => '10%',
    'default' => false,
  ),
  'DATE_ADD_TO_GRP' => 
  array (
    'type' => 'date',
    'label' => 'LBL_DATE_ADD_GRP',
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
);
?>
