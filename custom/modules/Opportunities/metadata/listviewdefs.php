<?php
$listViewDefs ['Opportunities'] = 
array (
  'DATE_CLOSED' => 
  array (
    'width' => '10%',
    'label' => 'LBL_LIST_DATE_CLOSED',
    'default' => true,
  ),
  'NAME' => 
  array (
    'width' => '20%',
    'label' => 'LBL_LIST_OPPORTUNITY_NAME',
    'link' => true,
    'default' => true,
  ),
  'ACCOUNT_NAME' => 
  array (
    'width' => '12%',
    'label' => 'LBL_LIST_ACCOUNT_NAME',
    'id' => 'ACCOUNT_ID',
    'module' => 'Accounts',
    'link' => true,
    'default' => true,
    'sortable' => true,
    'ACLTag' => 'ACCOUNT',
    'contextMenu' => 
    array (
      'objectType' => 'sugarAccount',
      'metaData' => 
      array (
        'return_module' => 'Contacts',
        'return_action' => 'ListView',
        'module' => 'Accounts',
        'parent_id' => '{$ACCOUNT_ID}',
        'parent_name' => '{$ACCOUNT_NAME}',
        'account_id' => '{$ACCOUNT_ID}',
        'account_name' => '{$ACCOUNT_NAME}',
      ),
    ),
    'related_fields' => 
    array (
      0 => 'account_id',
    ),
  ),
  'SALES_STAGE' => 
  array (
    'width' => '10%',
    'label' => 'LBL_LIST_SALES_STAGE',
    'default' => true,
  ),
  'PROBABILITY' => 
  array (
    'width' => '10%',
    'label' => 'LBL_PROBABILITY',
    'default' => true,
  ),
  'AMOUNT_USDOLLAR' => 
  array (
    'width' => '10%',
    'label' => 'LBL_LIST_AMOUNT_USDOLLAR',
    'align' => 'right',
    'default' => true,
    'currency_format' => true,
  ),
  'DATE_MODIFIED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_MODIFIED',
    'width' => '10%',
    'default' => false,
  ),
  'OPPORTUNITY_TYPE' => 
  array (
    'width' => '15%',
    'label' => 'LBL_TYPE',
    'default' => false,
  ),
  'COMPETITORS' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_COMPETITORS',
    'width' => '10%',
  ),
  'DESCRIPTION' => 
  array (
    'type' => 'text',
    'label' => 'LBL_DESCRIPTION',
    'sortable' => false,
    'width' => '10%',
    'default' => false,
  ),
  'LEAD_SOURCE' => 
  array (
    'width' => '15%',
    'label' => 'LBL_LEAD_SOURCE',
    'default' => false,
  ),
  'CAMPAIGN_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_CAMPAIGN',
    'id' => 'CAMPAIGN_ID',
    'width' => '10%',
    'default' => false,
  ),
  'NEXT_STEP' => 
  array (
    'width' => '10%',
    'label' => 'LBL_NEXT_STEP',
    'default' => false,
  ),
  'AMOUNT' => 
  array (
    'type' => 'currency',
    'label' => 'LBL_AMOUNT',
    'currency_format' => true,
    'width' => '10%',
    'default' => false,
  ),
  'DATE_ENTERED' => 
  array (
    'width' => '10%',
    'label' => 'LBL_DATE_ENTERED',
    'default' => false,
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '5%',
    'label' => 'LBL_LIST_ASSIGNED_USER',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => false,
  ),
  'CREATED_BY_NAME' => 
  array (
    'width' => '10%',
    'label' => 'LBL_CREATED',
    'default' => false,
  ),
  'TEAM_NAME' => 
  array (
    'width' => '5%',
    'label' => 'LBL_LIST_TEAM',
    'default' => false,
  ),
  'MODIFIED_BY_NAME' => 
  array (
    'width' => '5%',
    'label' => 'LBL_MODIFIED',
    'default' => false,
  ),
);
?>
