<?php
// created: 2012-11-27 21:15:06
$dictionary["Contact"]["fields"]["av_accounts_contacts_1"] = array (
  'name' => 'av_accounts_contacts_1',
  'type' => 'link',
  'relationship' => 'av_accounts_contacts_1',
  'source' => 'non-db',
  'vname' => 'LBL_AV_ACCOUNTS_CONTACTS_1_FROM_AV_ACCOUNTS_TITLE',
  'id_name' => 'av_accounts_contacts_1av_accounts_ida',
);
$dictionary["Contact"]["fields"]["av_accounts_contacts_1_name"] = array (
  'name' => 'av_accounts_contacts_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_AV_ACCOUNTS_CONTACTS_1_FROM_AV_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'av_accounts_contacts_1av_accounts_ida',
  'link' => 'av_accounts_contacts_1',
  'table' => 'av_accounts',
  'module' => 'av_Accounts',
  'rname' => 'name',
);
$dictionary["Contact"]["fields"]["av_accounts_contacts_1av_accounts_ida"] = array (
  'name' => 'av_accounts_contacts_1av_accounts_ida',
  'type' => 'link',
  'relationship' => 'av_accounts_contacts_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_AV_ACCOUNTS_CONTACTS_1_FROM_AV_ACCOUNTS_TITLE',
);
