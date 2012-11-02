<?php
// created: 2012-10-18 19:15:47
$dictionary["Contact"]["fields"]["av_tax_returns_contacts_1"] = array (
  'name' => 'av_tax_returns_contacts_1',
  'type' => 'link',
  'relationship' => 'av_tax_returns_contacts_1',
  'source' => 'non-db',
  'vname' => 'LBL_AV_TAX_RETURNS_CONTACTS_1_FROM_AV_TAX_RETURNS_TITLE',
  'id_name' => 'av_tax_returns_contacts_1av_tax_returns_ida',
);
$dictionary["Contact"]["fields"]["av_tax_returns_contacts_1_name"] = array (
  'name' => 'av_tax_returns_contacts_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_AV_TAX_RETURNS_CONTACTS_1_FROM_AV_TAX_RETURNS_TITLE',
  'save' => true,
  'id_name' => 'av_tax_returns_contacts_1av_tax_returns_ida',
  'link' => 'av_tax_returns_contacts_1',
  'table' => 'av_tax_returns',
  'module' => 'av_Tax_Returns',
  'rname' => 'name',
);
$dictionary["Contact"]["fields"]["av_tax_returns_contacts_1av_tax_returns_ida"] = array (
  'name' => 'av_tax_returns_contacts_1av_tax_returns_ida',
  'type' => 'link',
  'relationship' => 'av_tax_returns_contacts_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_AV_TAX_RETURNS_CONTACTS_1_FROM_CONTACTS_TITLE',
);
