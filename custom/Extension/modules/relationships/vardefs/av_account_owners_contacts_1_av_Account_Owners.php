<?php
// created: 2012-11-04 03:04:29
$dictionary["av_Account_Owners"]["fields"]["av_account_owners_contacts_1"] = array (
  'name' => 'av_account_owners_contacts_1',
  'type' => 'link',
  'relationship' => 'av_account_owners_contacts_1',
  'source' => 'non-db',
  'vname' => 'LBL_AV_ACCOUNT_OWNERS_CONTACTS_1_FROM_CONTACTS_TITLE',
  'id_name' => 'av_account_owners_contacts_1contacts_idb',
);
$dictionary["av_Account_Owners"]["fields"]["av_account_owners_contacts_1_name"] = array (
  'name' => 'av_account_owners_contacts_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_AV_ACCOUNT_OWNERS_CONTACTS_1_FROM_CONTACTS_TITLE',
  'save' => true,
  'id_name' => 'av_account_owners_contacts_1contacts_idb',
  'link' => 'av_account_owners_contacts_1',
  'table' => 'contacts',
  'module' => 'Contacts',
  'rname' => 'name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["av_Account_Owners"]["fields"]["av_account_owners_contacts_1contacts_idb"] = array (
  'name' => 'av_account_owners_contacts_1contacts_idb',
  'type' => 'link',
  'relationship' => 'av_account_owners_contacts_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_AV_ACCOUNT_OWNERS_CONTACTS_1_FROM_CONTACTS_TITLE',
);
