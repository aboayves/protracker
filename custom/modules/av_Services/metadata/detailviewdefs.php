<?php
$module_name = 'av_Services';
$viewdefs [$module_name] = 
array (
  'DetailView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'buttons' => 
        array (
          0 => 'EDIT',
          1 => 'DUPLICATE',
          2 => 'DELETE',
          3 => 'FIND_DUPLICATES',
        ),
      ),
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
      'default' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'accounts_name',
            'label' => 'LBL_ACCOUNTS_NAME',
          ),
          1 => 'assigned_user_name',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'service_type',
            'comment' => '',
            'label' => 'LBL_SERVICE_TYPE',
          ),
          1 => 
          array (
            'name' => 'frequency',
            'comment' => '',
            'label' => 'LBL_FREQUENCY',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'service_group',
            'comment' => '',
            'label' => 'LBL_SERVICE_GROUP',
          ),
          1 => '',
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'report_format',
            'comment' => '',
            'label' => 'LBL_REPORT_FORMAT',
          ),
          1 => 
          array (
            'name' => 'report_name',
            'comment' => '',
            'label' => 'LBL_REPORT_NAME',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'hourly_rate',
            'comment' => '',
            'label' => 'LBL_HOURLY_RATE',
          ),
          1 => 
          array (
            'name' => 'flat_fee',
            'comment' => '',
            'label' => 'LBL_FLAT_FEE',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'date_start',
            'comment' => '',
            'label' => 'LBL_DATE_START',
          ),
          1 => 
          array (
            'name' => 'date_end',
            'comment' => '',
            'label' => 'LBL_DATE_END',
          ),
        ),
        6 => 
        array (
          0 => 'description',
          1 => 'team_name',
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'date_entered',
            'customCode' => '{$fields.date_entered.value} {$APP.LBL_BY} {$fields.created_by_name.value}',
            'label' => 'LBL_DATE_ENTERED',
          ),
          1 => 
          array (
            'name' => 'date_modified',
            'customCode' => '{$fields.date_modified.value} {$APP.LBL_BY} {$fields.modified_by_name.value}',
            'label' => 'LBL_DATE_MODIFIED',
          ),
        ),
      ),
    ),
  ),
);
?>
