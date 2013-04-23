<?php
// created: 2013-04-10 16:30:07
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
  'claim_number' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_CLAIM_NUMBER',
    'width' => '12%',
  ),
  'part_a_effective_date' => 
  array (
    'type' => 'date',
    'default' => true,
    'vname' => 'LBL_PART_A_EFFECTIVE_DATE',
    'width' => '10%',
  ),
  'part_b_effective_date' => 
  array (
    'type' => 'date',
    'default' => true,
    'vname' => 'LBL_PART_B_EFFECTIVE_DATE',
    'width' => '10%',
  ),
  'monthly_premium' => 
  array (
    'type' => 'currency',
    'align' => 'right',
    'default' => true,
    'vname' => 'LBL_MONTHLY_PREMIUM',
    'currency_format' => true,
    'width' => '8%',
  ),
  'drug_coverage' => 
  array (
    'type' => 'enum',
    'default' => true,
    'vname' => 'LBL_DRUG_COVERAGE',
    'width' => '10%',
  ),
  'prescription_plan' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_PRESCRIPTION_PLAN',
    'width' => '10%',
  ),
  'date_modified' => 
  array (
    'vname' => 'LBL_DATE_MODIFIED',
    'width' => '8%',
    'default' => true,
  ),
  'edit_button' => 
  array (
    'widget_class' => 'SubPanelEditButton',
    'module' => 'av_Medicare',
    'width' => '4%',
    'default' => true,
  ),
  'remove_button' => 
  array (
    'widget_class' => 'SubPanelRemoveButton',
    'module' => 'av_Medicare',
    'width' => '5%',
    'default' => true,
  ),
);