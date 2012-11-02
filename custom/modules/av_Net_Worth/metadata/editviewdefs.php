<?php
$module_name = 'av_Net_Worth';
$viewdefs [$module_name] = 
array (
  'EditView' => 
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
      'syncDetailEditViews' => true,
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          1 => 'assigned_user_name',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'team_name',
            'displayParams' => 
            array (
              'display' => true,
            ),
          ),
          1 => 
          array (
            'name' => 'grand_total',
            'label' => 'LBL_GRAND_TOTAL',
          ),
        ),
        2 => 
        array (
          0 => 'description',
          1 => 
          array (
            'name' => 'managed_assets',
            'label' => 'LBL_MANAGED_ASSETS',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'av_net_worth_av_accounts_name',
            'label' => 'LBL_AV_NET_WORTH_AV_ACCOUNTS_FROM_AV_ACCOUNTS_TITLE',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'accounts_av_net_worth_name',
          ),
        ),
      ),
    ),
  ),
);
?>
