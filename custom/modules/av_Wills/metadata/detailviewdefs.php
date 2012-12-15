<?php
$module_name = 'av_Wills';
$_object_name = 'av_wills';
$viewdefs [$module_name] = 
array (
  'DetailView' => 
  array (
    'templateMeta' => 
    array (
      'maxColumns' => '2',
      'form' => 
      array (
      ),
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
            'name' => 'document_name',
            'label' => 'LBL_DOC_NAME',
          ),
        ),
        1 => 
        array (
          0 => 'active_date',
          1 => 
          array (
            'name' => 'uploadfile',
            'displayParams' => 
            array (
              'link' => 'uploadfile',
              'id' => 'id',
            ),
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'state_law',
            'comment' => '',
            'label' => 'LBL_STATE_LAW',
          ),
          1 => 
          array (
            'name' => 'on_file',
            'comment' => '',
            'label' => 'LBL_ON_FILE',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'self_proving',
            'comment' => '',
            'label' => 'LBL_SELF_PROVING',
          ),
          1 => 
          array (
            'name' => 'organ_donor',
            'comment' => '',
            'label' => 'LBL_ORGAN_DONOR',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'homestead_declaration',
            'comment' => '',
            'label' => 'LBL_HOMESTEAD_DECLARATION',
          ),
          1 => 
          array (
            'name' => 'homestead_on_file',
            'comment' => '',
            'label' => 'LBL_HOMESTEAD_ON_FILE',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'date_entered',
            'comment' => 'Date record created',
            'label' => 'LBL_DATE_ENTERED',
          ),
          1 => 
          array (
            'name' => 'date_modified',
            'comment' => 'Date record last modified',
            'label' => 'LBL_DATE_MODIFIED',
          ),
        ),
      ),
      'lbl_editview_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'attorney',
            'comment' => '',
            'label' => 'LBL_ATTORNEY',
          ),
          1 => 
          array (
            'name' => 'guardian_required',
            'comment' => '',
            'label' => 'LBL_GUARDIAN_REQUIRED',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'executor',
            'comment' => '',
            'label' => 'LBL_EXECUTOR',
          ),
          1 => 
          array (
            'name' => 'guardian',
            'comment' => '',
            'label' => 'LBL_GUARDIAN',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'guardian_backup',
            'comment' => '',
            'label' => 'LBL_GUARDIAN_BACKUP',
          ),
        ),
      ),
      'lbl_editview_panel2' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'provisions',
            'comment' => '',
            'label' => 'LBL_PROVISIONS',
          ),
          1 => 
          array (
            'name' => 'description',
            'label' => 'LBL_DOC_DESCRIPTION',
          ),
        ),
      ),
    ),
  ),
);
?>
