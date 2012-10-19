<?php
// created: 2012-10-19 02:06:51
$dictionary["av_Estate_Documents"]["fields"]["accounts_av_estate_documents_1"] = array (
  'name' => 'accounts_av_estate_documents_1',
  'type' => 'link',
  'relationship' => 'accounts_av_estate_documents_1',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_AV_ESTATE_DOCUMENTS_1_FROM_ACCOUNTS_TITLE',
  'id_name' => 'accounts_av_estate_documents_1accounts_ida',
);
$dictionary["av_Estate_Documents"]["fields"]["accounts_av_estate_documents_1_name"] = array (
  'name' => 'accounts_av_estate_documents_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_AV_ESTATE_DOCUMENTS_1_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'accounts_av_estate_documents_1accounts_ida',
  'link' => 'accounts_av_estate_documents_1',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["av_Estate_Documents"]["fields"]["accounts_av_estate_documents_1accounts_ida"] = array (
  'name' => 'accounts_av_estate_documents_1accounts_ida',
  'type' => 'link',
  'relationship' => 'accounts_av_estate_documents_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_ACCOUNTS_AV_ESTATE_DOCUMENTS_1_FROM_AV_ESTATE_DOCUMENTS_TITLE',
);
