<?php
$module_name = 'av_Estate_Documents';
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
          'name' => 'contacts_name',
          'label' => 'LBL_CONTACTS_NAME',
        ),
      ),
      2 => 
      array (
        0 => 
        array (
          'name' => 'document_name',
          'label' => 'LBL_DOC_NAME',
        ),
      ),
      3 => 
      array (
        0 => 
        array (
          'name' => 'type',
          'comment' => '',
          'label' => 'LBL_TYPE',
        ),
      ),
      4 => 
      array (
        0 => 'active_date',
      ),
      5 => 
      array (
        0 => 
        array (
          'name' => 'date_recorded',
          'comment' => '',
          'label' => 'LBL_DATE_RECORDED',
        ),
      ),
      6 => 
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
      7 => 
      array (
        0 => 
        array (
          'name' => 'attorney',
          'comment' => '',
          'label' => 'LBL_ATTORNEY',
        ),
      ),
      8 => 
      array (
        0 => 
        array (
          'name' => 'agent',
          'comment' => '',
          'label' => 'LBL_AGENT',
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
