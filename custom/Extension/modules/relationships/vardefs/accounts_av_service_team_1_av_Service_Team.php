<?php
// created: 2012-10-14 18:44:30
$dictionary["av_Service_Team"]["fields"]["accounts_av_service_team_1"] = array (
  'name' => 'accounts_av_service_team_1',
  'type' => 'link',
  'relationship' => 'accounts_av_service_team_1',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_AV_SERVICE_TEAM_1_FROM_ACCOUNTS_TITLE',
  'id_name' => 'accounts_av_service_team_1accounts_ida',
);
$dictionary["av_Service_Team"]["fields"]["accounts_av_service_team_1_name"] = array (
  'name' => 'accounts_av_service_team_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_AV_SERVICE_TEAM_1_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'accounts_av_service_team_1accounts_ida',
  'link' => 'accounts_av_service_team_1',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["av_Service_Team"]["fields"]["accounts_av_service_team_1accounts_ida"] = array (
  'name' => 'accounts_av_service_team_1accounts_ida',
  'type' => 'link',
  'relationship' => 'accounts_av_service_team_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_ACCOUNTS_AV_SERVICE_TEAM_1_FROM_AV_SERVICE_TEAM_TITLE',
);
