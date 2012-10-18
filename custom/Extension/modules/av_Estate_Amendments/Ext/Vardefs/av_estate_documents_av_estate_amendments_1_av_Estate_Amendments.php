<?php
// created: 2012-10-18 20:36:51
$dictionary["av_Estate_Amendments"]["fields"]["av_estate_documents_av_estate_amendments_1"] = array (
  'name' => 'av_estate_documents_av_estate_amendments_1',
  'type' => 'link',
  'relationship' => 'av_estate_documents_av_estate_amendments_1',
  'source' => 'non-db',
  'vname' => 'LBL_AV_ESTATE_DOCUMENTS_AV_ESTATE_AMENDMENTS_1_FROM_AV_ESTATE_DOCUMENTS_TITLE',
  'id_name' => 'av_estate_96d1cuments_ida',
);
$dictionary["av_Estate_Amendments"]["fields"]["av_estate_documents_av_estate_amendments_1_name"] = array (
  'name' => 'av_estate_documents_av_estate_amendments_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_AV_ESTATE_DOCUMENTS_AV_ESTATE_AMENDMENTS_1_FROM_AV_ESTATE_DOCUMENTS_TITLE',
  'save' => true,
  'id_name' => 'av_estate_96d1cuments_ida',
  'link' => 'av_estate_documents_av_estate_amendments_1',
  'table' => 'av_estate_documents',
  'module' => 'av_Estate_Documents',
  'rname' => 'document_name',
);
$dictionary["av_Estate_Amendments"]["fields"]["av_estate_96d1cuments_ida"] = array (
  'name' => 'av_estate_96d1cuments_ida',
  'type' => 'link',
  'relationship' => 'av_estate_documents_av_estate_amendments_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_AV_ESTATE_DOCUMENTS_AV_ESTATE_AMENDMENTS_1_FROM_AV_ESTATE_AMENDMENTS_TITLE',
);
