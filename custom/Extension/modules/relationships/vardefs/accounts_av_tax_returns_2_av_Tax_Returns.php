<?php
// created: 2012-10-18 19:15:14
$dictionary["av_Tax_Returns"]["fields"]["accounts_av_tax_returns_2"] = array (
  'name' => 'accounts_av_tax_returns_2',
  'type' => 'link',
  'relationship' => 'accounts_av_tax_returns_2',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_AV_TAX_RETURNS_2_FROM_ACCOUNTS_TITLE',
  'id_name' => 'accounts_av_tax_returns_2accounts_ida',
);
$dictionary["av_Tax_Returns"]["fields"]["accounts_av_tax_returns_2_name"] = array (
  'name' => 'accounts_av_tax_returns_2_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_AV_TAX_RETURNS_2_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'accounts_av_tax_returns_2accounts_ida',
  'link' => 'accounts_av_tax_returns_2',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["av_Tax_Returns"]["fields"]["accounts_av_tax_returns_2accounts_ida"] = array (
  'name' => 'accounts_av_tax_returns_2accounts_ida',
  'type' => 'link',
  'relationship' => 'accounts_av_tax_returns_2',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_ACCOUNTS_AV_TAX_RETURNS_2_FROM_AV_TAX_RETURNS_TITLE',
);
