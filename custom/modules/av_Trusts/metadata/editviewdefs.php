<?php
$module_name = 'av_Trusts';
$viewdefs [$module_name] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'enctype' => 'multipart/form-data',
        'hidden' => 
        array (
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
      'javascript' => '{sugar_getscript file="include/javascript/popup_parent_helper.js"}
	{sugar_getscript file="cache/include/javascript/sugar_grp_jsolait.js"}
	{sugar_getscript file="modules/Documents/documents.js"}',
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
          1 => 
          array (
            'name' => 'contacts_name',
            'label' => 'LBL_CONTACTS_NAME',
          ),
        ),
        1 => 
        array (
          0 => 'document_name',
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
              'onchangeSetFileNameTo' => 'document_name',
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
          1 => 'assigned_user_name',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'description',
          ),
          1 => 
          array (
            'name' => 'team_name',
            'displayParams' => 
            array (
              'required' => true,
            ),
          ),
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
