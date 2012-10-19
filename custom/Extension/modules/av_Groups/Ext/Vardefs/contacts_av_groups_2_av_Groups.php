<?php
// created: 2012-10-19 18:21:22
$dictionary["av_Groups"]["fields"]["contacts_av_groups_2"] = array (
  'name' => 'contacts_av_groups_2',
  'type' => 'link',
  'relationship' => 'contacts_av_groups_2',
  'source' => 'non-db',
  'vname' => 'LBL_CONTACTS_AV_GROUPS_2_FROM_CONTACTS_TITLE',
  'id_name' => 'contacts_av_groups_2contacts_ida',
);
$dictionary["av_Groups"]["fields"]["contacts_av_groups_2_name"] = array (
  'name' => 'contacts_av_groups_2_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CONTACTS_AV_GROUPS_2_FROM_CONTACTS_TITLE',
  'save' => true,
  'id_name' => 'contacts_av_groups_2contacts_ida',
  'link' => 'contacts_av_groups_2',
  'table' => 'contacts',
  'module' => 'Contacts',
  'rname' => 'name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["av_Groups"]["fields"]["contacts_av_groups_2contacts_ida"] = array (
  'name' => 'contacts_av_groups_2contacts_ida',
  'type' => 'link',
  'relationship' => 'contacts_av_groups_2',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_CONTACTS_AV_GROUPS_2_FROM_AV_GROUPS_TITLE',
);
