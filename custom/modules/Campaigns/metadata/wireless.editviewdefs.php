<?php
$viewdefs ['Campaigns'] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
      'maxColumns' => '1',
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
      0 => 
      array (
        0 => 'name',
      ),
      1 => 
      array (
        0 => 
        array (
          'name' => 'campaign_type',
          'comment' => 'The type of campaign',
          'label' => 'LBL_CAMPAIGN_TYPE',
        ),
      ),
      2 => 
      array (
        0 => 
        array (
          'name' => 'status',
          'comment' => 'Status of the campaign',
          'label' => 'LBL_CAMPAIGN_STATUS',
        ),
      ),
      3 => 
      array (
        0 => 
        array (
          'name' => 'objective',
          'comment' => 'The objective of the campaign',
          'label' => 'LBL_CAMPAIGN_OBJECTIVE',
        ),
      ),
      4 => 
      array (
        0 => 'assigned_user_name',
      ),
      5 => 
      array (
        0 => 
        array (
          'name' => 'start_date',
          'comment' => 'Starting date of the campaign',
          'label' => 'LBL_CAMPAIGN_START_DATE',
        ),
      ),
      6 => 
      array (
        0 => 
        array (
          'name' => 'end_date',
          'comment' => 'Ending date of the campaign',
          'label' => 'LBL_CAMPAIGN_END_DATE',
        ),
      ),
      7 => 
      array (
        0 => 
        array (
          'name' => 'content',
          'comment' => 'The campaign description',
          'label' => 'LBL_CAMPAIGN_CONTENT',
        ),
      ),
    ),
  ),
);
?>
