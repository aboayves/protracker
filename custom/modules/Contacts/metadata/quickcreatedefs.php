<?php
$viewdefs ['Contacts'] = 
array (
  'QuickCreate' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'hidden' => 
        array (
          0 => '<input type="hidden" name="opportunity_id" value="{$smarty.request.opportunity_id}">',
          1 => '<input type="hidden" name="case_id" value="{$smarty.request.case_id}">',
          2 => '<input type="hidden" name="bug_id" value="{$smarty.request.bug_id}">',
          3 => '<input type="hidden" name="email_id" value="{$smarty.request.email_id}">',
          4 => '<input type="hidden" name="inbound_email_id" value="{$smarty.request.inbound_email_id}">',
          5 => '{if !empty($smarty.request.contact_id)}<input type="hidden" name="reports_to_id" value="{$smarty.request.contact_id}">{/if}',
          6 => '{if !empty($smarty.request.contact_name)}<input type="hidden" name="report_to_name" value="{$smarty.request.contact_name}">{/if}',
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
      'useTabs' => true,
      'tabDefs' => 
      array (
        'LBL_CONTACT_INFORMATION' => 
        array (
          'newTab' => true,
          'panelDefault' => 'collapsed',
        ),
        'LBL_EDITVIEW_PANEL5' => 
        array (
          'newTab' => true,
          'panelDefault' => 'collapsed',
        ),
        'LBL_EDITVIEW_PANEL2' => 
        array (
          'newTab' => true,
          'panelDefault' => 'collapsed',
        ),
        'LBL_PANEL_ADVANCED' => 
        array (
          'newTab' => true,
          'panelDefault' => 'collapsed',
        ),
      ),
    ),
    'panels' => 
    array (
      'lbl_contact_information' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'prefix',
            'comment' => '',
            'label' => 'LBL_PREFIX',
          ),
          1 => 
          array (
            'name' => 'picture',
            'comment' => 'Picture file',
            'label' => 'LBL_PICTURE_FILE',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'first_name',
          ),
          1 => 'report_salutation',
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'last_name',
            'displayParams' => 
            array (
              'required' => true,
            ),
          ),
          1 => 
          array (
            'name' => 'gender',
            'comment' => '',
            'label' => 'LBL_GENDER',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'suffix',
            'comment' => '',
            'label' => 'LBL_SUFFIX',
          ),
          1 => 
          array (
            'name' => 'account_name',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'comments',
            'studio' => 'visible',
            'label' => 'LBL_COMMENTS',
          ),
        ),
      ),
      'lbl_editview_panel5' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'primary_address_street',
            'comment' => 'Street address for primary address',
            'label' => 'LBL_PRIMARY_ADDRESS_STREET',
          ),
          1 => 
          array (
            'name' => 'home_address_street',
            'comment' => '',
            'label' => 'LBL_HOME_ADDRESS_STREET',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'phone_mobile',
          ),
          1 => 
          array (
            'name' => 'phone_home',
            'comment' => 'Home phone number of the contact',
            'label' => 'LBL_HOME_PHONE',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'email1',
          ),
        ),
      ),
      'lbl_editview_panel2' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'birthdate',
            'comment' => 'The birthdate of the contact',
            'label' => 'LBL_BIRTHDATE',
          ),
          1 => 
          array (
            'name' => 'age',
            'studio' => 'visible',
            'label' => 'LBL_AGE',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'ssn',
            'label' => 'LBL_SSN',
          ),
          1 => 
          array (
            'name' => 'marital_status',
            'studio' => 'visible',
            'label' => 'LBL_MARITAL_STATUS',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'citizenship',
            'label' => 'LBL_CITIZENSHIP',
          ),
          1 => 
          array (
            'name' => 'children',
            'comment' => '',
            'label' => 'LBL_CHILDREN',
          ),
        ),
      ),
      'LBL_PANEL_ADVANCED' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'lead_source',
          ),
          1 => 
          array (
            'name' => 'do_not_call',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'assigned_user_name',
          ),
          1 => 
          array (
            'name' => 'team_name',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'campaign_name',
            'comment' => 'The first campaign name for Contact (Meta-data only)',
            'label' => 'LBL_CAMPAIGN',
          ),
          1 => 
          array (
            'name' => 'referral_name',
            'label' => 'LBL_REFERRAL_NAME',
          ),
        ),
      ),
    ),
  ),
);
?>
