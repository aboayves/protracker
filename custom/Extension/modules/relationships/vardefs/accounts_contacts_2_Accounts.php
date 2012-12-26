<?php
// created: 2012-11-27 22:30:52
$dictionary["Account"]["fields"]["accounts_contacts_2"] = array (
  'name' => 'accounts_contacts_2',
  'type' => 'link',
  'relationship' => 'accounts_contacts_2',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_CONTACTS_2_FROM_CONTACTS_TITLE',
  'id_name' => 'accounts_contacts_2contacts_idb',
);
$dictionary["Account"]["fields"]["accounts_contacts_2_name"] = array (
  'name' => 'accounts_contacts_2_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_CONTACTS_2_FROM_CONTACTS_TITLE',
  'save' => true,
  'id_name' => 'accounts_contacts_2contacts_idb',
  'link' => 'accounts_contacts_2',
  'table' => 'contacts',
  'module' => 'Contacts',
  'rname' => 'name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["Account"]["fields"]["accounts_contacts_2contacts_idb"] = array (
  'name' => 'accounts_contacts_2contacts_idb',
  'type' => 'link',
  'relationship' => 'accounts_contacts_2',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_ACCOUNTS_CONTACTS_2_FROM_CONTACTS_TITLE',
);
