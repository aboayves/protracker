<?php
$module_name = 'av_Tax_Forms';
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
          0 => 'name',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'return_type',
            'comment' => '',
            'label' => 'LBL_RETURN_TYPE',
          ),
          1 => 
          array (
            'name' => 'residency',
            'comment' => '',
            'label' => 'LBL_RESIDENCY',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'district',
            'comment' => '',
            'label' => 'LBL_DISTRICT',
          ),
          1 => 
          array (
            'name' => 'check_payee',
            'comment' => '',
            'label' => 'LBL_CHECK_PAYEE',
          ),
        ),
        3 => 
        array (
          0 => 'description',
          1 => 
          array (
            'name' => 'check_memo',
            'comment' => '',
            'label' => 'LBL_CHECK_MEMO',
          ),
        ),
        4 => 
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
      'lbl_editview_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'government',
            'comment' => '',
            'label' => 'LBL_GOVERNMENT',
          ),
          1 => 
          array (
            'name' => 'phone_forms',
            'comment' => '',
            'label' => 'LBL_PHONE_FORMS',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'bureau_name',
            'comment' => '',
            'label' => 'LBL_BUREAU_NAME',
          ),
          1 => 
          array (
            'name' => 'phone_questions',
            'comment' => '',
            'label' => 'LBL_PHONE_QUESTIONS',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'mailing_address_street',
            'label' => 'LBL_MAILING_ADDRESS',
            'type' => 'address',
            'displayParams' => 
            array (
              'key' => 'mailing',
            ),
          ),
          1 => 
          array (
            'name' => 'phone_fax',
            'comment' => '',
            'label' => 'LBL_PHONE_FAX',
          ),
        ),
        3 => 
        array (
          0 => '',
          1 => 
          array (
            'name' => 'url',
            'comment' => '',
            'label' => 'LBL_URL',
          ),
        ),
      ),
      'lbl_editview_panel2' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'due_date',
            'comment' => '',
            'label' => 'LBL_DUE_DATE',
          ),
          1 => '',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'q1_due_date',
            'comment' => '',
            'label' => 'LBL_Q1_DUE_DATE',
          ),
          1 => '',
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'q2_due_date',
            'comment' => '',
            'label' => 'LBL_Q2_DUE_DATE',
          ),
          1 => '',
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'q3_due_date',
            'comment' => '',
            'label' => 'LBL_Q3_DUE_DATE',
          ),
          1 => '',
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'q4_due_date',
            'comment' => '',
            'label' => 'LBL_Q4_DUE_DATE',
          ),
          1 => '',
        ),
      ),
    ),
  ),
);
?>
