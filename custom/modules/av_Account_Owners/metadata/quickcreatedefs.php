<?php
$module_name = 'av_Account_Owners';
$viewdefs [$module_name] = 
array (
  'QuickCreate' => 
  array (
    'templateMeta' => 
    array (
      'maxColumns' => '2',
	  'form' => array(
	    'hidden' => 
        array (
			'<input type="hidden" name="ownership_added" id ="ownership_added" value="{$fields.ownership_added.value}">',
        ),
	  ),
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'useTabs' => false,
	  'includes' => 
      array (
		0 => 
        array (
          'file' => 'custom/modules/av_Account_Owners/calculate_ownership_percent.js',
        ),
      ),
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'av_accounts_name',
            'label' => 'LBL_AV_ACCOUNTS_NAME',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'contacts_name',
            'label' => 'LBL_CONTACTS_NAME',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'ownership_percent',
            'comment' => '',
            'label' => 'LBL_OWNERSHIP_PERCENT',
			'customCode' => '<input id="ownership_percent" name="ownership_percent" type="text" value="{$fields.ownership_percent.value}"><span id="ownership_percent_errors" style="display:none;color:red;">Ownership Total for this Account can not exceed 100%.</span>'
          ),
        ),
        3 => 
        array (
          0 => 'description',
        ),
      ),
    ),
  ),
);
?>
