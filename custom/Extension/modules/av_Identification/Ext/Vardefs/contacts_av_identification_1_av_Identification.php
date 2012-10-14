<?php
// created: 2012-10-14 15:39:20
$dictionary["av_Identification"]["fields"]["contacts_av_identification_1"] = array (
  'name' => 'contacts_av_identification_1',
  'type' => 'link',
  'relationship' => 'contacts_av_identification_1',
  'source' => 'non-db',
  'vname' => 'LBL_CONTACTS_AV_IDENTIFICATION_1_FROM_CONTACTS_TITLE',
  'id_name' => 'contacts_av_identification_1contacts_ida',
);
$dictionary["av_Identification"]["fields"]["contacts_av_identification_1_name"] = array (
  'name' => 'contacts_av_identification_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CONTACTS_AV_IDENTIFICATION_1_FROM_CONTACTS_TITLE',
  'save' => true,
  'id_name' => 'contacts_av_identification_1contacts_ida',
  'link' => 'contacts_av_identification_1',
  'table' => 'contacts',
  'module' => 'Contacts',
  'rname' => 'name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["av_Identification"]["fields"]["contacts_av_identification_1contacts_ida"] = array (
  'name' => 'contacts_av_identification_1contacts_ida',
  'type' => 'link',
  'relationship' => 'contacts_av_identification_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_CONTACTS_AV_IDENTIFICATION_1_FROM_AV_IDENTIFICATION_TITLE',
);
