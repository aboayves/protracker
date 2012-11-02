<?php
// created: 2012-10-19 01:26:43
$dictionary["av_Trustees"]["fields"]["av_trusts_av_trustees_1"] = array (
  'name' => 'av_trusts_av_trustees_1',
  'type' => 'link',
  'relationship' => 'av_trusts_av_trustees_1',
  'source' => 'non-db',
  'vname' => 'LBL_AV_TRUSTS_AV_TRUSTEES_1_FROM_AV_TRUSTS_TITLE',
  'id_name' => 'av_trusts_av_trustees_1av_trusts_ida',
);
$dictionary["av_Trustees"]["fields"]["av_trusts_av_trustees_1_name"] = array (
  'name' => 'av_trusts_av_trustees_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_AV_TRUSTS_AV_TRUSTEES_1_FROM_AV_TRUSTS_TITLE',
  'save' => true,
  'id_name' => 'av_trusts_av_trustees_1av_trusts_ida',
  'link' => 'av_trusts_av_trustees_1',
  'table' => 'av_trusts',
  'module' => 'av_Trusts',
  'rname' => 'document_name',
);
$dictionary["av_Trustees"]["fields"]["av_trusts_av_trustees_1av_trusts_ida"] = array (
  'name' => 'av_trusts_av_trustees_1av_trusts_ida',
  'type' => 'link',
  'relationship' => 'av_trusts_av_trustees_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_AV_TRUSTS_AV_TRUSTEES_1_FROM_AV_TRUSTEES_TITLE',
);
