<?php
$module_name = 'av_Net_Worth';
$viewdefs [$module_name] = 
array (
  'QuickCreate' => 
  array (
    'templateMeta' => 
    array (
      'maxColumns' => '2',
      'form' => 
      array (
        'hidden' => 
        array (
          0 => '<input type="hidden" id="name" name="name" value="Net Worth">',
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
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'accounts_name',
            'studio' => 'visible',
            'label' => 'LBL_ACCOUNTS_NAME',
          ),
          1 => 
          array (
            'name' => 'net_worth_date',
            'comment' => '',
            'label' => 'LBL_NET_WORTH_DATE',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'grand_total',
            'label' => 'LBL_GRAND_TOTAL',
          ),
		  1 => 
          array (
            'name' => 'managed_assets',
            'label' => 'LBL_MANAGED_ASSETS',
          ),
        ),
        2 => 
        array (
          0 => 'description',
          1 => 
          array (
            'name' => 'team_name',
            'displayParams' => 
            array (
              'display' => true,
            ),
          ),
        ),
      ),
    ),
  ),
);
?>
