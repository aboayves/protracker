<?php
$viewdefs ['Users'] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
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
	  'includes' => 
      array (
		  0 => 
		  array (
			'file' => 'custom/modules/Users/populate_email.js',
		  ),
		),
      'form' => 
      array (
        'headerTpl' => 'modules/Users/tpls/EditViewHeader.tpl',
        'footerTpl' => 'modules/Users/tpls/EditViewFooter.tpl',
      ),
      'useTabs' => false,
      'syncDetailEditViews' => true,
    ),
    'panels' => 
    array (
      'LBL_USER_INFORMATION' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'user_name',
            'displayParams' => 
            array (
              'required' => true,
            ),
			'customCode' => '<input type="text" name="user_name" value="{$fields.user_name.value}"><span style="color:red">&nbsp; This username has to be an email address.</span>',
          ),
          1 => 'first_name',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'status',
            'customCode' => '{if $IS_ADMIN}@@FIELD@@{else}{$STATUS_READONLY}{/if}',
            'displayParams' => 
            array (
              'required' => true,
            ),
          ),
          1 => 'last_name',
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'UserType',
            'customCode' => '{if $IS_ADMIN}{$USER_TYPE_DROPDOWN}{else}{$USER_TYPE_READONLY}{/if}',
          ),
          1 => 
          array (
            'name' => 'relationship_listing',
            'label' => 'LBL_RELATIONSHIP_LISTING',
          ),
        ),
        3 => 
        array (
          0 => 'picture',
          1 => 
          array (
            'name' => 'default_team',
            'studio' => 
            array (
              'listview' => false,
              'searchview' => false,
              'formula' => false,
            ),
            'label' => 'LBL_DEFAULT_TEAM',
          ),
        ),
        4 => 
        array (
          0 => '',
          1 => '',
        ),
      ),
      'LBL_EMPLOYEE_INFORMATION' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'employee_status',
            'customCode' => '{if $IS_ADMIN}@@FIELD@@{else}{$EMPLOYEE_STATUS_READONLY}{/if}',
          ),
          1 => 'show_on_employees',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'title',
            'customCode' => '{if $IS_ADMIN}@@FIELD@@{else}{$TITLE_READONLY}{/if}',
          ),
          1 => 'phone_work',
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'department',
            'customCode' => '{if $IS_ADMIN}@@FIELD@@{else}{$DEPT_READONLY}{/if}',
          ),
          1 => 'phone_mobile',
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'reports_to_name',
            'customCode' => '{if $IS_ADMIN}@@FIELD@@{else}{$REPORTS_TO_READONLY}{/if}',
          ),
          1 => 'phone_other',
        ),
        4 => 
        array (
          0 => 'phone_home',
          1 => 'phone_fax',
        ),
        5 => 
        array (
          0 => 'messenger_type',
          1 => 'messenger_id',
        ),
        6 => 
        array (
          0 => 'address_street',
        ),
        7 => 
        array (
          0 => 'description',
        ),
      ),
      'lbl_editview_panel2' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'product_level',
            'comment' => '',
            'label' => 'LBL_PRODUCT_LEVEL',
          ),
          1 => 
          array (
            'name' => 'authenticate_id',
            'studio' => 
            array (
              'listview' => false,
              'searchview' => false,
              'related' => false,
            ),
            'label' => 'LBL_AUTHENTICATE_ID',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'user_hash',
            'studio' => 
            array (
              'no_duplicate' => true,
              'listview' => false,
              'searchview' => false,
              'related' => false,
              'formula' => false,
              'rollup' => false,
            ),
            'label' => 'LBL_USER_HASH',
          ),
          1 => 
          array (
            'name' => 'pwd_last_changed',
            'studio' => 
            array (
              'formula' => false,
            ),
            'label' => 'LBL_PSW_MODIFIED',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'is_admin',
            'studio' => 
            array (
              'listview' => false,
              'searchview' => false,
              'related' => false,
            ),
            'label' => 'LBL_IS_ADMIN',
          ),
          1 => 
          array (
            'name' => 'sugar_login',
            'studio' => 
            array (
              'listview' => false,
              'searchview' => false,
              'formula' => false,
            ),
            'label' => 'LBL_SUGAR_LOGIN',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'external_auth_only',
            'studio' => 
            array (
              'listview' => false,
              'searchview' => false,
              'related' => false,
            ),
            'label' => 'LBL_EXT_AUTHENTICATE',
          ),
          1 => 
          array (
            'name' => 'portal_only',
            'studio' => 
            array (
              'listview' => false,
              'searchview' => false,
              'formula' => false,
            ),
            'label' => 'LBL_PORTAL_ONLY_USER',
          ),
        ),
      ),
    ),
  ),
);
?>
