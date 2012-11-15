<?php
// created: 2012-11-09 20:14:31
$dictionary["av_Tax_Estimates"]["fields"]["av_tax_estimates_av_tax_forms_1"] = array (
  'name' => 'av_tax_estimates_av_tax_forms_1',
  'type' => 'link',
  'relationship' => 'av_tax_estimates_av_tax_forms_1',
  'source' => 'non-db',
  'vname' => 'LBL_AV_TAX_ESTIMATES_AV_TAX_FORMS_1_FROM_AV_TAX_FORMS_TITLE',
  'id_name' => 'av_tax_estimates_av_tax_forms_1av_tax_forms_idb',
);
$dictionary["av_Tax_Estimates"]["fields"]["av_tax_estimates_av_tax_forms_1_name"] = array (
  'name' => 'av_tax_estimates_av_tax_forms_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_AV_TAX_ESTIMATES_AV_TAX_FORMS_1_FROM_AV_TAX_FORMS_TITLE',
  'save' => true,
  'id_name' => 'av_tax_estimates_av_tax_forms_1av_tax_forms_idb',
  'link' => 'av_tax_estimates_av_tax_forms_1',
  'table' => 'av_tax_forms',
  'module' => 'av_Tax_Forms',
  'rname' => 'name',
);
$dictionary["av_Tax_Estimates"]["fields"]["av_tax_estimates_av_tax_forms_1av_tax_forms_idb"] = array (
  'name' => 'av_tax_estimates_av_tax_forms_1av_tax_forms_idb',
  'type' => 'link',
  'relationship' => 'av_tax_estimates_av_tax_forms_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_AV_TAX_ESTIMATES_AV_TAX_FORMS_1_FROM_AV_TAX_FORMS_TITLE',
);
