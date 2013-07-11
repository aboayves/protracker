<?php
$module_name = 'av_Trusts';
$_object_name = 'av_trusts';
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
      'tabDefs' => 
      array (
        'LBL_EDITVIEW_PANEL3' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL1' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL2' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
    ),
    'panels' => 
    array (
      'lbl_editview_panel3' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'accounts_name',
            'label' => 'LBL_ACCOUNTS_NAME',
          ),
          1 => 
          array (
            'name' => 'contacts_name',
            'label' => 'LBL_CONTACTS_NAME',
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
            'name' => 'type',
            'comment' => '',
            'label' => 'LBL_TYPE',
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
        4 => 
        array (
          0 => 
          array (
            'name' => 'date_recorded',
            'comment' => '',
            'label' => 'LBL_DATE_RECORDED',
          ),
          1 => 
          array (
            'name' => 'birth_certificate_on_file',
            'comment' => '',
            'label' => 'LBL_BIRTH_CERTIFICATE_ON_FILE',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'tax_id',
            'comment' => '',
            'label' => 'LBL_TAX_ID',
          ),
          1 => 
          array (
            'name' => 'is_AB_trust',
            'comment' => '',
            'label' => 'LBL_IS_AB_TRUST',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'bill_of_sale_date',
            'comment' => '',
            'label' => 'LBL_BILL_OF_SALE_DATE',
          ),
          1 => 'exp_date',
        ),
      ),
      'lbl_editview_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'drafting_attorney',
            'comment' => '',
            'label' => 'LBL_DRAFTING_ATTORNEY',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'trustee1',
            'comment' => '',
            'label' => 'LBL_TRUSTEE1',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'trustee2',
            'comment' => '',
            'label' => 'LBL_TRUSTEE2',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'trustee3',
            'comment' => '',
            'label' => 'LBL_TRUSTEE3',
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
            'name' => 'assigned_user_name',
            'label' => 'LBL_ASSIGNED_TO',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'description',
            'label' => 'LBL_DOC_DESCRIPTION',
          ),
          1 => 'team_name',
        ),
        2 => 
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
    ),
  ),
);
?>
