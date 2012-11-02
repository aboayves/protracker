<?php
// created: 2012-10-18 01:41:43
$dictionary["av_Beneficiaries"]["fields"]["contacts_av_beneficiaries_1"] = array (
  'name' => 'contacts_av_beneficiaries_1',
  'type' => 'link',
  'relationship' => 'contacts_av_beneficiaries_1',
  'source' => 'non-db',
  'vname' => 'LBL_CONTACTS_AV_BENEFICIARIES_1_FROM_CONTACTS_TITLE',
  'id_name' => 'contacts_av_beneficiaries_1contacts_ida',
);
$dictionary["av_Beneficiaries"]["fields"]["contacts_av_beneficiaries_1_name"] = array (
  'name' => 'contacts_av_beneficiaries_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CONTACTS_AV_BENEFICIARIES_1_FROM_CONTACTS_TITLE',
  'save' => true,
  'id_name' => 'contacts_av_beneficiaries_1contacts_ida',
  'link' => 'contacts_av_beneficiaries_1',
  'table' => 'contacts',
  'module' => 'Contacts',
  'rname' => 'name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["av_Beneficiaries"]["fields"]["contacts_av_beneficiaries_1contacts_ida"] = array (
  'name' => 'contacts_av_beneficiaries_1contacts_ida',
  'type' => 'link',
  'relationship' => 'contacts_av_beneficiaries_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_CONTACTS_AV_BENEFICIARIES_1_FROM_AV_BENEFICIARIES_TITLE',
);
