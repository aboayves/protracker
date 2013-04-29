<?php
$module_name = 'av_Will_Amendments';
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
          'name' => 'will_id_name',
          'label' => 'LBL_WILL_ID_NAME',
        ),
      ),
      1 => 
      array (
        0 => 
        array (
          'name' => 'document_name',
          'label' => 'LBL_DOC_NAME',
        ),
      ),
      2 => 
      array (
        0 => 
        array (
          'name' => 'amendment_number',
          'comment' => '',
          'label' => 'LBL_AMENDMENT_NUMBER',
        ),
      ),
      3 => 
      array (
        0 => 'active_date',
      ),
      4 => 
      array (
        0 => 
        array (
          'name' => 'uploadfile',
          'displayParams' => 
          array (
            'link' => 'uploadfile',
            'id' => 'id',
          ),
        ),
      ),
      5 => 
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
