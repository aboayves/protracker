<?php
// created: 2012-08-25 10:40:35
$dictionary["Contact"]["fields"]["rt_offices_contacts_1"] = array (
  'name' => 'rt_offices_contacts_1',
  'type' => 'link',
  'relationship' => 'rt_offices_contacts_1',
  'source' => 'non-db',
  'vname' => 'LBL_RT_OFFICES_CONTACTS_1_FROM_RT_OFFICES_TITLE',
  'id_name' => 'rt_offices_contacts_1rt_offices_ida',
);
$dictionary["Contact"]["fields"]["rt_offices_contacts_1_name"] = array (
  'name' => 'rt_offices_contacts_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_RT_OFFICES_CONTACTS_1_FROM_RT_OFFICES_TITLE',
  'save' => true,
  'id_name' => 'rt_offices_contacts_1rt_offices_ida',
  'link' => 'rt_offices_contacts_1',
  'table' => 'rt_offices',
  'module' => 'rt_Offices',
  'rname' => 'name',
);
$dictionary["Contact"]["fields"]["rt_offices_contacts_1rt_offices_ida"] = array (
  'name' => 'rt_offices_contacts_1rt_offices_ida',
  'type' => 'link',
  'relationship' => 'rt_offices_contacts_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_RT_OFFICES_CONTACTS_1_FROM_CONTACTS_TITLE',
);
