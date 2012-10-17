<?php
// created: 2012-10-14 18:51:13
$subpanel_layout['list_fields'] = array (
  'assigned_user_name' => 
  array (
    'link' => true,
    'type' => 'relate',
    'vname' => 'LBL_ASSIGNED_TO_NAME',
    'id' => 'ASSIGNED_USER_ID',
    'width' => '10%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'Users',
    'target_record_key' => 'assigned_user_id',
  ),
  'role' => 
  array (
    'type' => 'enum',
    'default' => true,
    'vname' => 'LBL_ROLE',
    'width' => '10%',
  ),
  'remove_button' => 
  array (
    'widget_class' => 'SubPanelRemoveButton',
    'module' => 'av_Service_Team',
    'width' => '5%',
    'default' => true,
  ),
  'edit_button' => 
  array (
    'widget_class' => 'SubPanelEditButton',
    'module' => 'av_Service_Team',
    'width' => '4%',
    'default' => true,
  ),
);