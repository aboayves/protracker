<?php
// created: 2012-11-27 22:35:55
$dictionary["Contact"]["fields"]["accounts_contacts_3"] = array (
  'name' => 'accounts_contacts_3',
  'type' => 'link',
  'relationship' => 'accounts_contacts_3',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_CONTACTS_3_FROM_ACCOUNTS_TITLE',
  'id_name' => 'accounts_contacts_3accounts_ida',
);
$dictionary["Contact"]["fields"]["accounts_contacts_3_name"] = array (
  'name' => 'accounts_contacts_3_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_CONTACTS_3_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'accounts_contacts_3accounts_ida',
  'link' => 'accounts_contacts_3',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["Contact"]["fields"]["accounts_contacts_3accounts_ida"] = array (
  'name' => 'accounts_contacts_3accounts_ida',
  'type' => 'link',
  'relationship' => 'accounts_contacts_3',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_ACCOUNTS_CONTACTS_3_FROM_CONTACTS_TITLE',
);
