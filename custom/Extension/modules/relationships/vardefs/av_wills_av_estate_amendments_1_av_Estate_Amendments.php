<?php
// created: 2012-10-18 20:34:52
$dictionary["av_Estate_Amendments"]["fields"]["av_wills_av_estate_amendments_1"] = array (
  'name' => 'av_wills_av_estate_amendments_1',
  'type' => 'link',
  'relationship' => 'av_wills_av_estate_amendments_1',
  'source' => 'non-db',
  'vname' => 'LBL_AV_WILLS_AV_ESTATE_AMENDMENTS_1_FROM_AV_WILLS_TITLE',
  'id_name' => 'av_wills_av_estate_amendments_1av_wills_ida',
);
$dictionary["av_Estate_Amendments"]["fields"]["av_wills_av_estate_amendments_1_name"] = array (
  'name' => 'av_wills_av_estate_amendments_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_AV_WILLS_AV_ESTATE_AMENDMENTS_1_FROM_AV_WILLS_TITLE',
  'save' => true,
  'id_name' => 'av_wills_av_estate_amendments_1av_wills_ida',
  'link' => 'av_wills_av_estate_amendments_1',
  'table' => 'av_wills',
  'module' => 'av_Wills',
  'rname' => 'document_name',
);
$dictionary["av_Estate_Amendments"]["fields"]["av_wills_av_estate_amendments_1av_wills_ida"] = array (
  'name' => 'av_wills_av_estate_amendments_1av_wills_ida',
  'type' => 'link',
  'relationship' => 'av_wills_av_estate_amendments_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_AV_WILLS_AV_ESTATE_AMENDMENTS_1_FROM_AV_ESTATE_AMENDMENTS_TITLE',
);
