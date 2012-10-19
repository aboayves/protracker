<?php
// created: 2012-10-19 01:35:45
$dictionary["av_Final_Arrangements"]["fields"]["contacts_av_final_arrangements_1"] = array (
  'name' => 'contacts_av_final_arrangements_1',
  'type' => 'link',
  'relationship' => 'contacts_av_final_arrangements_1',
  'source' => 'non-db',
  'vname' => 'LBL_CONTACTS_AV_FINAL_ARRANGEMENTS_1_FROM_CONTACTS_TITLE',
  'id_name' => 'contacts_av_final_arrangements_1contacts_ida',
);
$dictionary["av_Final_Arrangements"]["fields"]["contacts_av_final_arrangements_1_name"] = array (
  'name' => 'contacts_av_final_arrangements_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CONTACTS_AV_FINAL_ARRANGEMENTS_1_FROM_CONTACTS_TITLE',
  'save' => true,
  'id_name' => 'contacts_av_final_arrangements_1contacts_ida',
  'link' => 'contacts_av_final_arrangements_1',
  'table' => 'contacts',
  'module' => 'Contacts',
  'rname' => 'name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["av_Final_Arrangements"]["fields"]["contacts_av_final_arrangements_1contacts_ida"] = array (
  'name' => 'contacts_av_final_arrangements_1contacts_ida',
  'type' => 'link',
  'relationship' => 'contacts_av_final_arrangements_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_CONTACTS_AV_FINAL_ARRANGEMENTS_1_FROM_AV_FINAL_ARRANGEMENTS_TITLE',
);
