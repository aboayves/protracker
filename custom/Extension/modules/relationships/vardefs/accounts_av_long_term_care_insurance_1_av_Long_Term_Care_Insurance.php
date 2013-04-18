<?php
// created: 2012-10-22 02:39:12
$dictionary["av_Long_Term_Care_Insurance"]["fields"]["accounts_av_long_term_care_insurance_1"] = array (
  'name' => 'accounts_av_long_term_care_insurance_1',
  'type' => 'link',
  'relationship' => 'accounts_av_long_term_care_insurance_1',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_AV_LONG_TERM_CARE_INSURANCE_1_FROM_ACCOUNTS_TITLE',
  'id_name' => 'accounts_av_long_term_care_insurance_1accounts_ida',
);
$dictionary["av_Long_Term_Care_Insurance"]["fields"]["accounts_av_long_term_care_insurance_1_name"] = array (
  'name' => 'accounts_av_long_term_care_insurance_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_AV_LONG_TERM_CARE_INSURANCE_1_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'accounts_av_long_term_care_insurance_1accounts_ida',
  'link' => 'accounts_av_long_term_care_insurance_1',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["av_Long_Term_Care_Insurance"]["fields"]["accounts_av_long_term_care_insurance_1accounts_ida"] = array (
  'name' => 'accounts_av_long_term_care_insurance_1accounts_ida',
  'type' => 'link',
  'relationship' => 'accounts_av_long_term_care_insurance_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_ACCOUNTS_AV_LONG_TERM_CARE_INSURANCE_1_FROM_AV_LONG_TERM_CARE_INSURANCE_TITLE',
);
