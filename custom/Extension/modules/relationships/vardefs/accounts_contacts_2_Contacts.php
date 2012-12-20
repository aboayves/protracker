<?php
// created: 2012-11-27 22:30:52
$dictionary["Contact"]["fields"]["accounts_contacts_2"] = array (
  'name' => 'accounts_contacts_2',
  'type' => 'link',
  'relationship' => 'accounts_contacts_2',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_CONTACTS_2_FROM_ACCOUNTS_TITLE',
  'id_name' => 'accounts_contacts_2accounts_ida',
);
$dictionary["Contact"]["fields"]["accounts_contacts_2_name"] = array (
  'name' => 'accounts_contacts_2_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_CONTACTS_2_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'accounts_contacts_2accounts_ida',
  'link' => 'accounts_contacts_2',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["Contact"]["fields"]["accounts_contacts_2accounts_ida"] = array (
  'name' => 'accounts_contacts_2accounts_ida',
  'type' => 'link',
  'relationship' => 'accounts_contacts_2',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_ACCOUNTS_CONTACTS_2_FROM_ACCOUNTS_TITLE',
);
