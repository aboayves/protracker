<?php
$module_name = 'av_Reviews';
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
        0 => 'name',
      ),
      1 => 
      array (
        0 => 
        array (
          'name' => 'accounts_name',
          'label' => 'LBL_ACCOUNTS_NAME',
        ),
      ),
      2 => 
      array (
        0 => 
        array (
          'name' => 'type',
          'comment' => '',
          'label' => 'LBL_TYPE',
        ),
      ),
      3 => 
      array (
        0 => 
        array (
          'name' => 'review_date',
          'comment' => '',
          'label' => 'LBL_REVIEW_DATE',
        ),
      ),
      4 => 
      array (
        0 => 
        array (
          'name' => 'score',
          'comment' => '',
          'label' => 'LBL_SCORE',
        ),
      ),
      5 => 
      array (
        0 => 'assigned_user_name',
      ),
    ),
  ),
);
?>
