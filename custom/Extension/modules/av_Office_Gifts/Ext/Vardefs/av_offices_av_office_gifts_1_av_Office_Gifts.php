<?php
// created: 2012-11-12 16:16:45
$dictionary["av_Office_Gifts"]["fields"]["av_offices_av_office_gifts_1"] = array (
  'name' => 'av_offices_av_office_gifts_1',
  'type' => 'link',
  'relationship' => 'av_offices_av_office_gifts_1',
  'source' => 'non-db',
  'vname' => 'LBL_AV_OFFICES_AV_OFFICE_GIFTS_1_FROM_AV_OFFICES_TITLE',
  'id_name' => 'av_offices_av_office_gifts_1av_offices_ida',
);
$dictionary["av_Office_Gifts"]["fields"]["av_offices_av_office_gifts_1_name"] = array (
  'name' => 'av_offices_av_office_gifts_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_AV_OFFICES_AV_OFFICE_GIFTS_1_FROM_AV_OFFICES_TITLE',
  'save' => true,
  'id_name' => 'av_offices_av_office_gifts_1av_offices_ida',
  'link' => 'av_offices_av_office_gifts_1',
  'table' => 'av_offices',
  'module' => 'av_Offices',
  'rname' => 'name',
);
$dictionary["av_Office_Gifts"]["fields"]["av_offices_av_office_gifts_1av_offices_ida"] = array (
  'name' => 'av_offices_av_office_gifts_1av_offices_ida',
  'type' => 'link',
  'relationship' => 'av_offices_av_office_gifts_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_AV_OFFICES_AV_OFFICE_GIFTS_1_FROM_AV_OFFICE_GIFTS_TITLE',
);
