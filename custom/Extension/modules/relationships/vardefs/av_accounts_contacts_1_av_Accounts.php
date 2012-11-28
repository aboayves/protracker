<?php
// created: 2012-11-27 21:15:06
$dictionary["av_Accounts"]["fields"]["av_accounts_contacts_1"] = array (
  'name' => 'av_accounts_contacts_1',
  'type' => 'link',
  'relationship' => 'av_accounts_contacts_1',
  'source' => 'non-db',
  'vname' => 'LBL_AV_ACCOUNTS_CONTACTS_1_FROM_CONTACTS_TITLE',
  'id_name' => 'av_accounts_contacts_1contacts_idb',
);
$dictionary["av_Accounts"]["fields"]["av_accounts_contacts_1_name"] = array (
  'name' => 'av_accounts_contacts_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_AV_ACCOUNTS_CONTACTS_1_FROM_CONTACTS_TITLE',
  'save' => true,
  'id_name' => 'av_accounts_contacts_1contacts_idb',
  'link' => 'av_accounts_contacts_1',
  'table' => 'contacts',
  'module' => 'Contacts',
  'rname' => 'name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["av_Accounts"]["fields"]["av_accounts_contacts_1contacts_idb"] = array (
  'name' => 'av_accounts_contacts_1contacts_idb',
  'type' => 'link',
  'relationship' => 'av_accounts_contacts_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_AV_ACCOUNTS_CONTACTS_1_FROM_CONTACTS_TITLE',
);
