<?php
// created: 2012-11-27 22:03:21
$dictionary["Account"]["fields"]["accounts_contacts_1"] = array (
  'name' => 'accounts_contacts_1',
  'type' => 'link',
  'relationship' => 'accounts_contacts_1',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_CONTACTS_1_FROM_CONTACTS_TITLE',
  'id_name' => 'accounts_contacts_1contacts_idb',
);
$dictionary["Account"]["fields"]["accounts_contacts_1_name"] = array (
  'name' => 'accounts_contacts_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_CONTACTS_1_FROM_CONTACTS_TITLE',
  'save' => true,
  'id_name' => 'accounts_contacts_1contacts_idb',
  'link' => 'accounts_contacts_1',
  'table' => 'contacts',
  'module' => 'Contacts',
  'rname' => 'name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["Account"]["fields"]["accounts_contacts_1contacts_idb"] = array (
  'name' => 'accounts_contacts_1contacts_idb',
  'type' => 'link',
  'relationship' => 'accounts_contacts_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_ACCOUNTS_CONTACTS_1_FROM_CONTACTS_TITLE',
);
