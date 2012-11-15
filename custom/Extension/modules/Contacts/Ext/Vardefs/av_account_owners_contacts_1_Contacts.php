<?php
// created: 2012-11-04 03:04:29
$dictionary["Contact"]["fields"]["av_account_owners_contacts_1"] = array (
  'name' => 'av_account_owners_contacts_1',
  'type' => 'link',
  'relationship' => 'av_account_owners_contacts_1',
  'source' => 'non-db',
  'vname' => 'LBL_AV_ACCOUNT_OWNERS_CONTACTS_1_FROM_AV_ACCOUNT_OWNERS_TITLE',
  'id_name' => 'av_account_owners_contacts_1av_account_owners_ida',
);
$dictionary["Contact"]["fields"]["av_account_owners_contacts_1_name"] = array (
  'name' => 'av_account_owners_contacts_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_AV_ACCOUNT_OWNERS_CONTACTS_1_FROM_AV_ACCOUNT_OWNERS_TITLE',
  'save' => true,
  'id_name' => 'av_account_owners_contacts_1av_account_owners_ida',
  'link' => 'av_account_owners_contacts_1',
  'table' => 'av_account_owners',
  'module' => 'av_Account_Owners',
  'rname' => 'name',
);
$dictionary["Contact"]["fields"]["av_account_owners_contacts_1av_account_owners_ida"] = array (
  'name' => 'av_account_owners_contacts_1av_account_owners_ida',
  'type' => 'link',
  'relationship' => 'av_account_owners_contacts_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_AV_ACCOUNT_OWNERS_CONTACTS_1_FROM_AV_ACCOUNT_OWNERS_TITLE',
);
