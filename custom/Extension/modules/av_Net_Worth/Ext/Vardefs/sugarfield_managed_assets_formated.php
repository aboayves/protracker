<?php
 // created: 2012-04-25 23:28:01
$dictionary['av_Net_Worth']['fields']['managed_assets_formated']= array(
  'required' => false,
  'name' => 'managed_assets_formated',
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
  'function_name' => 'formatManagedAssets',
  'function_params' => array('id'),
  'function_params_source' => 'this',
  'function_require' => 'custom/modules/av_Net_Worth/format_currency_fields.php',
  'comment' => 'Formate the fields.',
  'enforced' => true,
  'dependency' => '',
  'enable_range_search' => false,
  'studio' => 'visible',
);

 ?>