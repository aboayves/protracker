<?php
// created: 2013-04-10 16:35:40
$subpanel_layout['list_fields'] = array (
  'contacts_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'vname' => 'LBL_CONTACTS_NAME',
    'id' => 'CONTACT_ID',
    'width' => '12%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'Contacts',
    'target_record_key' => 'contact_id',
  ),
  'year_of_estimate' => 
  array (
    'type' => 'int',
    'default' => true,
    'vname' => 'LBL_YEAR_OF_ESTIMATE',
    'width' => '6%',
  ),
  'retirement_at_age_62' => 
  array (
    'type' => 'currency',
    'align' => 'right',
    'default' => true,
    'vname' => 'LBL_RETIREMENT_AT_AGE_62',
    'currency_format' => true,
    'width' => '10%',
  ),
  'retirement_at_age_67' => 
  array (
    'type' => 'currency',
    'align' => 'right',
    'default' => true,
    'vname' => 'LBL_RETIREMENT_AT_AGE_67',
    'currency_format' => true,
    'width' => '10%',
  ),
  'retirement_at_age_70' => 
  array (
    'type' => 'currency',
    'align' => 'right',
    'default' => true,
    'vname' => 'LBL_RETIREMENT_AT_AGE_70',
    'currency_format' => true,
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
    'module' => 'av_Social_Security',
    'width' => '4%',
    'default' => true,
  ),
  'remove_button' => 
  array (
    'widget_class' => 'SubPanelRemoveButton',
    'module' => 'av_Social_Security',
    'width' => '5%',
    'default' => true,
  ),
);