<?php
// created: 2012-10-18 20:35:50
$dictionary["av_Estate_Amendments"]["fields"]["av_trusts_av_estate_amendments_1"] = array (
  'name' => 'av_trusts_av_estate_amendments_1',
  'type' => 'link',
  'relationship' => 'av_trusts_av_estate_amendments_1',
  'source' => 'non-db',
  'vname' => 'LBL_AV_TRUSTS_AV_ESTATE_AMENDMENTS_1_FROM_AV_TRUSTS_TITLE',
  'id_name' => 'av_trusts_av_estate_amendments_1av_trusts_ida',
);
$dictionary["av_Estate_Amendments"]["fields"]["av_trusts_av_estate_amendments_1_name"] = array (
  'name' => 'av_trusts_av_estate_amendments_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_AV_TRUSTS_AV_ESTATE_AMENDMENTS_1_FROM_AV_TRUSTS_TITLE',
  'save' => true,
  'id_name' => 'av_trusts_av_estate_amendments_1av_trusts_ida',
  'link' => 'av_trusts_av_estate_amendments_1',
  'table' => 'av_trusts',
  'module' => 'av_Trusts',
  'rname' => 'document_name',
);
$dictionary["av_Estate_Amendments"]["fields"]["av_trusts_av_estate_amendments_1av_trusts_ida"] = array (
  'name' => 'av_trusts_av_estate_amendments_1av_trusts_ida',
  'type' => 'link',
  'relationship' => 'av_trusts_av_estate_amendments_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_AV_TRUSTS_AV_ESTATE_AMENDMENTS_1_FROM_AV_ESTATE_AMENDMENTS_TITLE',
);
