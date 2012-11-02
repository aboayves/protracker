<?php
// created: 2012-10-19 01:37:49
$dictionary["av_Trusts"]["fields"]["contacts_av_trusts_1"] = array (
  'name' => 'contacts_av_trusts_1',
  'type' => 'link',
  'relationship' => 'contacts_av_trusts_1',
  'source' => 'non-db',
  'vname' => 'LBL_CONTACTS_AV_TRUSTS_1_FROM_CONTACTS_TITLE',
  'id_name' => 'contacts_av_trusts_1contacts_ida',
);
$dictionary["av_Trusts"]["fields"]["contacts_av_trusts_1_name"] = array (
  'name' => 'contacts_av_trusts_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CONTACTS_AV_TRUSTS_1_FROM_CONTACTS_TITLE',
  'save' => true,
  'id_name' => 'contacts_av_trusts_1contacts_ida',
  'link' => 'contacts_av_trusts_1',
  'table' => 'contacts',
  'module' => 'Contacts',
  'rname' => 'name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["av_Trusts"]["fields"]["contacts_av_trusts_1contacts_ida"] = array (
  'name' => 'contacts_av_trusts_1contacts_ida',
  'type' => 'link',
  'relationship' => 'contacts_av_trusts_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_CONTACTS_AV_TRUSTS_1_FROM_AV_TRUSTS_TITLE',
);
