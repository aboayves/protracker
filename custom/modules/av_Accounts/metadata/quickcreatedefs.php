<?php
$module_name = 'av_Accounts';
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
          0 => '<input type="hidden" id="name" name="name" value="Account">',
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
            'name' => 'value',
            'label' => 'LBL_VALUE',
          ),
        ),
        8 => 
        array (
          0 => 'description',
        ),
        9 => 
        array (
          0 => 
          array (
            'name' => 'accounts_av_accounts_name',
            'label' => 'LBL_ACCOUNTS_AV_ACCOUNTS_FROM_ACCOUNTS_TITLE',
          ),
          1 => 
          array (
            'name' => 'av_net_worth_av_accounts_name',
            'label' => 'LBL_AV_NET_WORTH_AV_ACCOUNTS_FROM_AV_NET_WORTH_TITLE',
          ),
        ),
      ),
    ),
  ),
);
?>
