<?php
// created: 2012-10-15 00:58:42
$dictionary["av_Cashflow_Items"]["fields"]["av_cashflow_av_cashflow_items_1"] = array (
  'name' => 'av_cashflow_av_cashflow_items_1',
  'type' => 'link',
  'relationship' => 'av_cashflow_av_cashflow_items_1',
  'source' => 'non-db',
  'vname' => 'LBL_AV_CASHFLOW_AV_CASHFLOW_ITEMS_1_FROM_AV_CASHFLOW_TITLE',
  'id_name' => 'av_cashflow_av_cashflow_items_1av_cashflow_ida',
);
$dictionary["av_Cashflow_Items"]["fields"]["av_cashflow_av_cashflow_items_1_name"] = array (
  'name' => 'av_cashflow_av_cashflow_items_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_AV_CASHFLOW_AV_CASHFLOW_ITEMS_1_FROM_AV_CASHFLOW_TITLE',
  'save' => true,
  'id_name' => 'av_cashflow_av_cashflow_items_1av_cashflow_ida',
  'link' => 'av_cashflow_av_cashflow_items_1',
  'table' => 'av_cashflow',
  'module' => 'av_Cashflow',
  'rname' => 'name',
);
$dictionary["av_Cashflow_Items"]["fields"]["av_cashflow_av_cashflow_items_1av_cashflow_ida"] = array (
  'name' => 'av_cashflow_av_cashflow_items_1av_cashflow_ida',
  'type' => 'link',
  'relationship' => 'av_cashflow_av_cashflow_items_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_AV_CASHFLOW_AV_CASHFLOW_ITEMS_1_FROM_AV_CASHFLOW_ITEMS_TITLE',
);
