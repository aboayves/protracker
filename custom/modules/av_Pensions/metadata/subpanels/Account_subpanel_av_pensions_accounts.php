<?php
// created: 2013-04-10 16:40:41
$subpanel_layout['list_fields'] = array (
  'contacts_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'vname' => 'LBL_CONTACTS_NAME',
    'id' => 'CONTACT_ID',
    'width' => '15%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'Contacts',
    'target_record_key' => 'contact_id',
  ),
  'name' => 
  array (
    'vname' => 'LBL_NAME',
    'widget_class' => 'SubPanelDetailViewLink',
    'width' => '15%',
    'default' => true,
  ),
  'benefit_start_date' => 
  array (
    'type' => 'date',
    'default' => true,
    'vname' => 'LBL_BENEFIT_START_DATE',
    'width' => '10%',
  ),
  'joint_annual_benefit' => 
  array (
    'type' => 'currency',
    'align' => 'right',
    'default' => true,
    'vname' => 'LBL_JOINT_ANNUAL_BENEFIT',
    'currency_format' => true,
    'width' => '10%',
  ),
  'single_annual_benefit' => 
  array (
    'type' => 'currency',
    'align' => 'right',
    'default' => true,
    'vname' => 'LBL_SINGLE_ANNUAL_BENEFIT',
    'currency_format' => true,
    'width' => '10%',
  ),
  'annual_increase' => 
  array (
    'type' => 'int',
    'default' => true,
    'vname' => 'LBL_ANNUAL_INCREASE',
    'width' => '10%',
  ),
  'survivor_benefits' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_SURVIVOR_BENEFITS',
    'width' => '10%',
  ),
  'date_modified' => 
  array (
    'vname' => 'LBL_DATE_MODIFIED',
    'width' => '10%',
    'default' => true,
  ),
  'edit_button' => 
  array (
    'widget_class' => 'SubPanelEditButton',
    'module' => 'av_Pensions',
    'width' => '4%',
    'default' => true,
  ),
  'remove_button' => 
  array (
    'widget_class' => 'SubPanelRemoveButton',
    'module' => 'av_Pensions',
    'width' => '5%',
    'default' => true,
  ),
);