<?php
$dictionary["Contact"]["fields"]["age"] = array (
  'required' => false,
  'name' => 'age',
  'vname' => 'LBL_AGE',
  'type' => 'function',
  'massupdate' => 0,
  'comments' => '',
  'help' => '',
  'importable' => 'false',
  'duplicate_merge' => 'disabled',
  'duplicate_merge_dom_value' => '0',
  'audited' => false,
  'reportable' => true,
  'len' => 26,
  'size' => '20',
  'source' => 'function',
  'function_name' => 'get_age',
  'function_params' => array('birthdate'),
  'function_params_source' => 'this',
  'function_require' => 'custom/modules/Contacts/calc_age_and_year_end_age.php',
  'enforced' => true,
  'dependency' => '',
  'enable_range_search' => false,
  'studio' => 'visible',
);