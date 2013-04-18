<?php
$module_name = 'av_Payments';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'current_user_only' => 
      array (
        'name' => 'current_user_only',
        'label' => 'LBL_CURRENT_USER_FILTER',
        'type' => 'bool',
        'default' => true,
        'width' => '10%',
      ),
      'favorites_only' => 
      array (
        'name' => 'favorites_only',
        'label' => 'LBL_FAVORITES_FILTER',
        'type' => 'bool',
        'default' => true,
        'width' => '10%',
      ),
      'invoice_number' => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_INVOICE_NUMBER',
        'width' => '10%',
        'name' => 'invoice_number',
      ),
      'accounts_av_payments_1_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_ACCOUNTS_AV_PAYMENTS_1_FROM_ACCOUNTS_TITLE',
        'id' => 'ACCOUNTS_AV_PAYMENTS_1ACCOUNTS_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'accounts_av_payments_1_name',
      ),
    ),
    'advanced_search' => 
    array (
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'favorites_only' => 
      array (
        'name' => 'favorites_only',
        'label' => 'LBL_FAVORITES_FILTER',
        'type' => 'bool',
        'default' => true,
        'width' => '10%',
      ),
      'assigned_user_id' => 
      array (
        'name' => 'assigned_user_id',
        'label' => 'LBL_ASSIGNED_TO',
        'type' => 'enum',
        'function' => 
        array (
          'name' => 'get_user_array',
          'params' => 
          array (
            0 => false,
          ),
        ),
        'default' => true,
        'width' => '10%',
      ),
      'invoice_number' => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_INVOICE_NUMBER',
        'width' => '10%',
        'name' => 'invoice_number',
      ),
      'reference_number' => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_REFERENCE_NUMBER',
        'width' => '10%',
        'name' => 'reference_number',
      ),
      'accounts_av_payments_1_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_ACCOUNTS_AV_PAYMENTS_1_FROM_ACCOUNTS_TITLE',
        'width' => '10%',
        'default' => true,
        'id' => 'ACCOUNTS_AV_PAYMENTS_1ACCOUNTS_IDA',
        'name' => 'accounts_av_payments_1_name',
      ),
      'amount' => 
      array (
        'type' => 'currency',
        'default' => true,
        'label' => 'LBL_AMOUNT',
        'currency_format' => true,
        'width' => '10%',
        'name' => 'amount',
      ),
      'date_paid' => 
      array (
        'type' => 'date',
        'default' => true,
        'label' => 'LBL_DATE_PAID',
        'width' => '10%',
        'name' => 'date_paid',
      ),
      'type' => 
      array (
        'type' => 'enum',
        'default' => true,
        'label' => 'LBL_TYPE',
        'width' => '10%',
        'name' => 'type',
      ),
      'description' => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_DESCRIPTION',
        'width' => '10%',
        'name' => 'description',
      ),
      'date_modified' => 
      array (
        'type' => 'datetime',
        'label' => 'LBL_DATE_MODIFIED',
        'width' => '10%',
        'default' => true,
        'name' => 'date_modified',
      ),
    ),
  ),
  'templateMeta' => 
  array (
    'maxColumns' => '3',
    'maxColumnsBasic' => '4',
    'widths' => 
    array (
      'label' => '10',
      'field' => '30',
    ),
  ),
);
?>
