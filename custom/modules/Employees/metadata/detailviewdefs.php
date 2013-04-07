<?php
$viewdefs ['Employees'] = 
array (
  'DetailView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'buttons' => 
        array (
          0 => 
          array (
            'customCode' => '{if $DISPLAY_EDIT}<input title="{$APP.LBL_EDIT_BUTTON_TITLE}" accessKey="{$APP.LBL_EDIT_BUTTON_KEY}" class="button" onclick="this.form.return_module.value=\'{$module}\'; this.form.return_action.value=\'DetailView\'; this.form.return_id.value=\'{$id}\'; this.form.action.value=\'EditView\'" type="submit" name="Edit" id="edit_button" value="{$APP.LBL_EDIT_BUTTON_LABEL}">{/if}',
          ),
          1 => 
          array (
            'customCode' => '{if $DISPLAY_DUPLICATE}<input title="{$APP.LBL_DUPLICATE_BUTTON_TITLE}" accessKey="{$APP.LBL_DUPLICATE_BUTTON_KEY}" class="button" onclick="this.form.return_module.value=\'{$module}\'     ; this.form.return_action.value=\'DetailView\'; this.form.return_id.value=\'{$id}\'; this.form.isDuplicate.value=true; this.form.action.value=\'EditView\'" type="submit" name="Duplicate" value="{$APP.LBL_DUPLICATE_BUTTON_LABEL}" id="duplicate_button">{/if}',
          ),
          2 => 
          array (
            'customCode' => '{if $DISPLAY_DELETE}<input title="{$APP.LBL_DELETE_BUTTON_LABEL}" accessKey="{$APP.LBL_DELETE_BUTTON_LABEL}" class="button" onclick="if( confirm(\'{$DELETE_WARNING}\') ) {ldelim} this.form.return_module.value=\'{$module}\'; this.form.return_action.value=\'index\'; this.form.return_id.value=\'{$id}\'; this.form.action.value=\'delete\'; this.form.submit();{rdelim}" type="button" name="Delete" value="{$APP.LBL_DELETE_BUTTON_LABEL}" id="delete_button">{/if}',
          ),
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
          0 => '',
          1 => '',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'first_name',
            'customCode' => '{$fields.full_name.value}',
            'label' => 'LBL_NAME',
          ),
          1 => 
          array (
            'name' => 'picture',
            'label' => 'LBL_PICTURE_FILE',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'last_name',
            'label' => 'LBL_LAST_NAME',
          ),
          1 => 'employee_status',
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'department',
            'label' => 'LBL_DEPARTMENT',
          ),
          1 => 
          array (
            'name' => 'reports_to_name',
            'customCode' => '<a href="index.php?module=Employees&action=DetailView&record={$fields.reports_to_id.value}">{$fields.reports_to_name.value}</a>',
            'label' => 'LBL_REPORTS_TO_NAME',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'phone_other',
            'label' => 'LBL_OTHER',
          ),
          1 => 
          array (
            'name' => 'relationship_listing',
            'label' => 'LBL_RELATIONSHIP_LISTING',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'title',
            'label' => 'LBL_TITLE',
          ),
          1 => 
          array (
            'name' => 'description',
            'label' => 'LBL_NOTES',
          ),
        ),
        6 => 
        array (
          0 => 
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
          1 => 
          array (
            'name' => 'show_on_employees',
            'studio' => 
            array (
              'formula' => false,
            ),
            'label' => 'LBL_SHOW_ON_EMPLOYEES',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'accept_status_name',
            'studio' => 
            array (
              'listview' => false,
              'searchview' => false,
              'formula' => false,
            ),
            'label' => 'LBL_LIST_ACCEPT_STATUS',
          ),
          1 => 
          array (
            'name' => 'is_group',
            'studio' => 
            array (
              'listview' => false,
              'searchview' => false,
              'formula' => false,
            ),
            'label' => 'LBL_GROUP_USER',
          ),
        ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'pwd_last_changed',
            'studio' => 
            array (
              'formula' => false,
            ),
            'label' => 'LBL_PSW_MODIFIED',
          ),
          1 => 
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
        ),
      ),
      'lbl_editview_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'phone_work',
            'label' => 'LBL_OFFICE_PHONE',
          ),
          1 => 
          array (
            'name' => 'phone_fax',
            'label' => 'LBL_FAX',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'phone_mobile',
            'label' => 'LBL_MOBILE_PHONE',
          ),
          1 => 
          array (
            'name' => 'messenger_type',
            'label' => 'LBL_MESSENGER_TYPE',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'phone_home',
            'label' => 'LBL_HOME_PHONE',
          ),
          1 => 
          array (
            'name' => 'messenger_id',
            'label' => 'LBL_MESSENGER_ID',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'email1',
            'label' => 'LBL_EMAIL',
          ),
          1 => '',
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'address_street',
            'label' => 'LBL_PRIMARY_ADDRESS',
          ),
          1 => '',
        ),
      ),
      'lbl_editview_panel2' => 
      array (
        0 => 
        array (
          0 => 
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
          1 => 
          array (
            'name' => 'product_level',
            'comment' => '',
            'label' => 'LBL_PRODUCT_LEVEL',
          ),
        ),
        1 => 
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
            'name' => 'is_mobile_user',
            'comment' => '',
            'label' => 'LBL_IS_MOBILE_USER',
          ),
        ),
        2 => 
        array (
          0 => '',
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
