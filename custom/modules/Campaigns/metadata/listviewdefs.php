<?php
$listViewDefs ['Campaigns'] = 
array (
  'TRACK_CAMPAIGN' => 
  array (
    'width' => '1',
    'label' => '&nbsp;',
    'link' => true,
    'customCode' => ' <a title="{$TRACK_CAMPAIGN_TITLE}" href="index.php?action=TrackDetailView&module=Campaigns&record={$ID}"><!--not_in_theme!--><img border="0" src="{$TRACK_CAMPAIGN_IMAGE}" alt="{$TRACK_VIEW_ALT_TEXT}"></a> ',
    'default' => true,
    'studio' => false,
    'nowrap' => true,
    'sortable' => false,
  ),
  'LAUNCH_WIZARD' => 
  array (
    'width' => '1',
    'label' => '&nbsp;',
    'link' => true,
    'customCode' => ' <a title="{$LAUNCH_WIZARD_TITLE}" href="index.php?action=WizardHome&module=Campaigns&record={$ID}"><!--not_in_theme!--><img border="0" src="{$LAUNCH_WIZARD_IMAGE}"  alt="{$LAUNCH_WIZ_ALT_TEXT}"></a>  ',
    'default' => true,
    'studio' => false,
    'nowrap' => true,
    'sortable' => false,
  ),
  'NAME' => 
  array (
    'width' => '20%',
    'label' => 'LBL_LIST_CAMPAIGN_NAME',
    'link' => true,
    'default' => true,
  ),
  'CONTENT' => 
  array (
    'type' => 'text',
    'label' => 'LBL_CAMPAIGN_CONTENT',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
  ),
  'FREQUENCY' => 
  array (
    'type' => 'enum',
    'label' => 'LBL_CAMPAIGN_FREQUENCY',
    'width' => '10%',
    'default' => true,
  ),
  'BUDGET' => 
  array (
    'type' => 'currency',
    'label' => 'LBL_CAMPAIGN_BUDGET',
    'currency_format' => true,
    'width' => '10%',
    'default' => true,
  ),
  'STATUS' => 
  array (
    'width' => '10%',
    'label' => 'LBL_LIST_STATUS',
    'default' => true,
  ),
  'CAMPAIGN_TYPE' => 
  array (
    'width' => '10%',
    'label' => 'LBL_LIST_TYPE',
    'default' => true,
  ),
  'START_DATE' => 
  array (
    'type' => 'date',
    'label' => 'LBL_CAMPAIGN_START_DATE',
    'width' => '10%',
    'default' => true,
  ),
  'END_DATE' => 
  array (
    'width' => '10%',
    'label' => 'LBL_LIST_END_DATE',
    'default' => true,
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '8%',
    'label' => 'LBL_LIST_ASSIGNED_USER',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => true,
  ),
  'DATE_ENTERED' => 
  array (
    'width' => '10%',
    'label' => 'LBL_DATE_ENTERED',
    'default' => true,
  ),
  'DATE_MODIFIED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_MODIFIED',
    'width' => '10%',
    'default' => false,
  ),
  'TRACKER_KEY' => 
  array (
    'type' => 'int',
    'studio' => 
    array (
      'editview' => false,
    ),
    'label' => 'LBL_TRACKER_KEY',
    'width' => '10%',
    'default' => false,
  ),
  'TRACKER_COUNT' => 
  array (
    'type' => 'int',
    'default' => false,
    'label' => 'LBL_TRACKER_COUNT',
    'width' => '10%',
  ),
  'CREATED_BY_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_CREATED',
    'id' => 'CREATED_BY',
    'width' => '10%',
    'default' => false,
  ),
  'EXPECTED_COST' => 
  array (
    'type' => 'currency',
    'label' => 'LBL_CAMPAIGN_EXPECTED_COST',
    'currency_format' => true,
    'width' => '10%',
    'default' => false,
  ),
  'REFER_URL' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_REFER_URL',
    'width' => '10%',
  ),
  'IMPRESSIONS' => 
  array (
    'type' => 'int',
    'default' => false,
    'label' => 'LBL_CAMPAIGN_IMPRESSIONS',
    'width' => '10%',
  ),
  'TRACKER_TEXT' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_TRACKER_TEXT',
    'width' => '10%',
    'default' => false,
  ),
  'ACTUAL_COST' => 
  array (
    'type' => 'currency',
    'label' => 'LBL_CAMPAIGN_ACTUAL_COST',
    'currency_format' => true,
    'width' => '10%',
    'default' => false,
  ),
  'EXPECTED_REVENUE' => 
  array (
    'type' => 'currency',
    'label' => 'LBL_CAMPAIGN_EXPECTED_REVENUE',
    'currency_format' => true,
    'width' => '10%',
    'default' => false,
  ),
  'OBJECTIVE' => 
  array (
    'type' => 'text',
    'label' => 'LBL_CAMPAIGN_OBJECTIVE',
    'sortable' => false,
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
  'DESCRIPTION' => 
  array (
    'type' => 'none',
    'label' => 'description',
    'width' => '10%',
    'default' => false,
  ),
  'TEAM_NAME' => 
  array (
    'width' => '15%',
    'label' => 'LBL_LIST_TEAM',
    'default' => false,
  ),
);
?>
