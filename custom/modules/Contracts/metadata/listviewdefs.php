<?php
$listViewDefs ['Contracts'] = 
array (
  'NAME' => 
  array (
    'width' => '40%',
    'label' => 'LBL_LIST_CONTRACT_NAME',
    'link' => true,
    'default' => true,
  ),
  'DESCRIPTION' => 
  array (
    'type' => 'text',
    'label' => 'LBL_DESCRIPTION',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
  ),
  'TYPE' => 
  array (
    'type' => 'enum',
    'label' => 'LBL_TYPE',
    'width' => '10%',
    'default' => true,
  ),
  'ACCOUNT_NAME' => 
  array (
    'width' => '20%',
    'label' => 'LBL_LIST_ACCOUNT_NAME',
    'module' => 'Accounts',
    'id' => 'ACCOUNT_ID',
    'link' => true,
    'default' => true,
    'ACLTag' => 'ACCOUNT',
    'related_fields' => 
    array (
      0 => 'account_id',
    ),
  ),
  'STATUS' => 
  array (
    'width' => '10%',
    'label' => 'LBL_STATUS',
    'link' => false,
    'default' => true,
  ),
  'START_DATE' => 
  array (
    'width' => '15%',
    'label' => 'LBL_LIST_START_DATE',
    'link' => false,
    'default' => true,
  ),
  'END_DATE' => 
  array (
    'width' => '15%',
    'label' => 'LBL_LIST_END_DATE',
    'link' => false,
    'default' => true,
  ),
  'TOTAL_CONTRACT_VALUE_USDOLLAR' => 
  array (
    'type' => 'currency',
    'label' => 'LBL_TOTAL_CONTRACT_VALUE_USDOLLAR',
    'currency_format' => true,
    'width' => '10%',
    'default' => true,
  ),
  'DATE_MODIFIED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_MODIFIED',
    'width' => '10%',
    'default' => false,
  ),
  'MODIFIED_BY_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_MODIFIED_NAME',
    'id' => 'MODIFIED_USER_ID',
    'width' => '10%',
    'default' => false,
  ),
  'OPPORTUNITY_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_OPPORTUNITY_NAME',
    'id' => 'OPPORTUNITY_ID',
    'width' => '10%',
    'default' => false,
  ),
  'TOTAL_CONTRACT_VALUE' => 
  array (
    'type' => 'currency',
    'label' => 'LBL_TOTAL_CONTRACT_VALUE',
    'currency_format' => true,
    'width' => '10%',
    'default' => false,
  ),
  'BILLING_TYPE' => 
  array (
    'type' => 'enum',
    'default' => false,
    'label' => 'LBL_BILLING_TYPE',
    'width' => '10%',
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '2%',
    'label' => 'LBL_LIST_ASSIGNED_TO_USER',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => false,
  ),
  'PARENT_NAME' => 
  array (
    'type' => 'relate',
    'label' => 'LBL_MEMBER_OF',
    'id' => '',
    'link' => true,
    'width' => '10%',
    'default' => false,
  ),
  'COMPANY_SIGNED_DATE' => 
  array (
    'type' => 'date',
    'label' => 'LBL_COMPANY_SIGNED_DATE',
    'width' => '10%',
    'default' => false,
  ),
  'CUSTOMER_SIGNED_DATE' => 
  array (
    'type' => 'date',
    'label' => 'LBL_CUSTOMER_SIGNED_DATE',
    'width' => '10%',
    'default' => false,
  ),
  'DATE_ENTERED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_ENTERED',
    'width' => '10%',
    'default' => false,
  ),
  'CONTRACT_TERM' => 
  array (
    'type' => 'int',
    'label' => 'LBL_CONTRACT_TERM',
    'width' => '10%',
    'default' => false,
  ),
  'TEAM_NAME' => 
  array (
    'width' => '2%',
    'label' => 'LBL_LIST_TEAM',
    'default' => false,
    'related_fields' => 
    array (
      0 => 'team_id',
    ),
  ),
);
?>
