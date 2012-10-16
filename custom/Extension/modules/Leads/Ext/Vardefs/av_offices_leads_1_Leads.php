<?php
// created: 2012-10-14 16:47:01
$dictionary["Lead"]["fields"]["av_offices_leads_1"] = array (
  'name' => 'av_offices_leads_1',
  'type' => 'link',
  'relationship' => 'av_offices_leads_1',
  'source' => 'non-db',
  'vname' => 'LBL_AV_OFFICES_LEADS_1_FROM_AV_OFFICES_TITLE',
  'id_name' => 'av_offices_leads_1av_offices_ida',
);
$dictionary["Lead"]["fields"]["av_offices_leads_1_name"] = array (
  'name' => 'av_offices_leads_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_AV_OFFICES_LEADS_1_FROM_AV_OFFICES_TITLE',
  'save' => true,
  'id_name' => 'av_offices_leads_1av_offices_ida',
  'link' => 'av_offices_leads_1',
  'table' => 'av_offices',
  'module' => 'av_Offices',
  'rname' => 'name',
);
$dictionary["Lead"]["fields"]["av_offices_leads_1av_offices_ida"] = array (
  'name' => 'av_offices_leads_1av_offices_ida',
  'type' => 'link',
  'relationship' => 'av_offices_leads_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_AV_OFFICES_LEADS_1_FROM_LEADS_TITLE',
);
