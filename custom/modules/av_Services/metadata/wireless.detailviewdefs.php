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
        ),
      ),
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
        0 => 
        array (
          'name' => 'accounts_name',
          'label' => 'LBL_ACCOUNTS_NAME',
        ),
      ),
      1 => 
      array (
        0 => 
        array (
          'name' => 'service_type',
          'comment' => '',
          'label' => 'LBL_SERVICE_TYPE',
        ),
      ),
      2 => 
      array (
        0 => 
        array (
          'name' => 'frequency',
          'comment' => '',
          'label' => 'LBL_FREQUENCY',
        ),
      ),
      3 => 
      array (
        0 => 
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
          'name' => 'report_format',
          'comment' => '',
          'label' => 'LBL_REPORT_FORMAT',
        ),
      ),
      5 => 
      array (
        0 => 
        array (
          'name' => 'hourly_rate',
          'comment' => '',
          'label' => 'LBL_HOURLY_RATE',
        ),
      ),
      6 => 
      array (
        0 => 
        array (
          'name' => 'flat_fee',
          'comment' => '',
          'label' => 'LBL_FLAT_FEE',
        ),
      ),
      7 => 
      array (
        0 => 
        array (
          'name' => 'date_start',
          'comment' => '',
          'label' => 'LBL_DATE_START',
        ),
      ),
      8 => 
      array (
        0 => 
        array (
          'name' => 'date_end',
          'comment' => '',
          'label' => 'LBL_DATE_END',
        ),
      ),
      9 => 
      array (
        0 => 
        array (
          'name' => 'description',
          'comment' => 'Full text of the note',
          'label' => 'LBL_DESCRIPTION',
        ),
      ),
    ),
  ),
);
?>
