<?php
$module_name = 'av_Account_Categories';
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
          'name' => 'description',
          'comment' => 'Full text of the note',
          'label' => 'LBL_DESCRIPTION',
        ),
      ),
      2 => 
      array (
        0 => 
        array (
          'name' => 'is_liability',
          'comment' => '',
          'label' => 'LBL_IS_LIABILITY',
        ),
      ),
      3 => 
      array (
        0 => 
        array (
          'name' => 'report_sort',
          'comment' => '',
          'label' => 'LBL_REPORT_SORT',
        ),
      ),
    ),
  ),
);
?>
