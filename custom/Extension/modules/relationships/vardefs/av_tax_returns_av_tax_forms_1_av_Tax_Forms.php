<?php
// created: 2012-11-09 20:11:11
$dictionary["av_Tax_Forms"]["fields"]["av_tax_returns_av_tax_forms_1"] = array (
  'name' => 'av_tax_returns_av_tax_forms_1',
  'type' => 'link',
  'relationship' => 'av_tax_returns_av_tax_forms_1',
  'source' => 'non-db',
  'vname' => 'LBL_AV_TAX_RETURNS_AV_TAX_FORMS_1_FROM_AV_TAX_RETURNS_TITLE',
  'id_name' => 'av_tax_returns_av_tax_forms_1av_tax_returns_ida',
);
$dictionary["av_Tax_Forms"]["fields"]["av_tax_returns_av_tax_forms_1_name"] = array (
  'name' => 'av_tax_returns_av_tax_forms_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_AV_TAX_RETURNS_AV_TAX_FORMS_1_FROM_AV_TAX_RETURNS_TITLE',
  'save' => true,
  'id_name' => 'av_tax_returns_av_tax_forms_1av_tax_returns_ida',
  'link' => 'av_tax_returns_av_tax_forms_1',
  'table' => 'av_tax_returns',
  'module' => 'av_Tax_Returns',
  'rname' => 'name',
);
$dictionary["av_Tax_Forms"]["fields"]["av_tax_returns_av_tax_forms_1av_tax_returns_ida"] = array (
  'name' => 'av_tax_returns_av_tax_forms_1av_tax_returns_ida',
  'type' => 'link',
  'relationship' => 'av_tax_returns_av_tax_forms_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_AV_TAX_RETURNS_AV_TAX_FORMS_1_FROM_AV_TAX_RETURNS_TITLE',
);
