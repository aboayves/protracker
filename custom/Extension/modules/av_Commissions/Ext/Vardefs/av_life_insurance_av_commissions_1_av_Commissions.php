<?php
// created: 2012-11-09 02:55:11
$dictionary["av_Commissions"]["fields"]["av_life_insurance_av_commissions_1"] = array (
  'name' => 'av_life_insurance_av_commissions_1',
  'type' => 'link',
  'relationship' => 'av_life_insurance_av_commissions_1',
  'source' => 'non-db',
  'vname' => 'LBL_AV_LIFE_INSURANCE_AV_COMMISSIONS_1_FROM_AV_LIFE_INSURANCE_TITLE',
  'id_name' => 'av_life_insurance_av_commissions_1av_life_insurance_ida',
);
$dictionary["av_Commissions"]["fields"]["av_life_insurance_av_commissions_1_name"] = array (
  'name' => 'av_life_insurance_av_commissions_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_AV_LIFE_INSURANCE_AV_COMMISSIONS_1_FROM_AV_LIFE_INSURANCE_TITLE',
  'save' => true,
  'id_name' => 'av_life_insurance_av_commissions_1av_life_insurance_ida',
  'link' => 'av_life_insurance_av_commissions_1',
  'table' => 'av_life_insurance',
  'module' => 'av_Life_Insurance',
  'rname' => 'document_name',
);
$dictionary["av_Commissions"]["fields"]["av_life_insurance_av_commissions_1av_life_insurance_ida"] = array (
  'name' => 'av_life_insurance_av_commissions_1av_life_insurance_ida',
  'type' => 'link',
  'relationship' => 'av_life_insurance_av_commissions_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_AV_LIFE_INSURANCE_AV_COMMISSIONS_1_FROM_AV_COMMISSIONS_TITLE',
);
