<?php
$viewdefs ['Contracts'] = 
array (
  'DetailView' => 
  array (
    'templateMeta' => 
    array (
      'maxColumns' => '2',
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
      'lbl_contract_information' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'name',
            'label' => 'LBL_CONTRACT_NAME',
          ),
          1 => 'status',
        ),
        1 => 
        array (
          0 => 'reference_code',
          1 => 'start_date',
        ),
        2 => 
        array (
          0 => 'account_name',
          1 => 'end_date',
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'opportunity_name',
            'label' => 'LBL_OPPORTUNITY',
          ),
          1 => 
          array (
            'name' => 'parent_name',
            'comment' => 'parent_name of contract, added to prevent ability to add flex relate field to module because of relationship in linked_documentsMetaData.php',
            'label' => 'LBL_MEMBER_OF',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'type',
            'label' => 'LBL_CONTRACT_TYPE',
          ),
          1 => 'customer_signed_date',
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'currency_id',
            'comment' => 'The currency in use for the contract',
            'label' => 'LBL_CURRENCY',
          ),
          1 => 'company_signed_date',
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'total_contract_value',
            'label' => '{$MOD.LBL_TOTAL_CONTRACT_VALUE} ({$fields.currency_name.value})',
          ),
          1 => 'expiration_notice',
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'assigned_user_name',
            'label' => 'LBL_ASSIGNED_TO',
          ),
          1 => 
          array (
            'name' => 'total_contract_value_usdollar',
            'comment' => 'The overall contract value expressed in USD',
            'label' => 'LBL_TOTAL_CONTRACT_VALUE_USDOLLAR',
          ),
        ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'billing_type',
            'comment' => '',
            'label' => 'LBL_BILLING_TYPE',
          ),
          1 => '',
        ),
        9 => 
        array (
          0 => 'description',
          1 => 'team_name',
        ),
        10 => 
        array (
          0 => 
          array (
            'name' => 'date_entered',
            'customCode' => '{$fields.date_entered.value}&nbsp;{$APP.LBL_BY}&nbsp;{$fields.created_by_name.value}',
            'label' => 'LBL_DATE_ENTERED',
          ),
          1 => 
          array (
            'name' => 'date_modified',
            'customCode' => '{$fields.date_modified.value}&nbsp;{$APP.LBL_BY}&nbsp;{$fields.modified_by_name.value}',
            'label' => 'LBL_DATE_MODIFIED',
          ),
        ),
      ),
    ),
  ),
);
?>
