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
    ),
    'panels' => 
    array (
      'lbl_contact_information' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'salutation',
            'comment' => 'Contact salutation (e.g., Mr, Ms)',
            'label' => 'LBL_SALUTATION',
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
            'name' => 'title',
          ),
          1 => 
          array (
            'name' => 'nickname',
            'comment' => '',
            'label' => 'LBL_NICKNAME',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'first_name',
          ),
          1 => 
          array (
            'name' => 'accounts_contacts_1_name',
            'label' => 'LBL_ACCOUNTS_CONTACTS_1_FROM_ACCOUNTS_TITLE',
          ),
        ),
        3 => 
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
            'name' => 'phone_work',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'suffix',
            'comment' => '',
            'label' => 'LBL_SUFFIX',
          ),
          1 => 
          array (
            'name' => 'phone_mobile',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'contact_priority',
            'label' => 'LBL_CONTACT_PRIORITY',
          ),
          1 => 
          array (
            'name' => 'phone_fax',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'comments',
            'studio' => 'visible',
            'label' => 'LBL_COMMENTS',
          ),
          1 => 
          array (
            'name' => 'email1',
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
            'name' => 'work_address_street',
            'comment' => '',
            'label' => 'LBL_WORK_ADDRESS_STREET',
          ),
          1 => 
          array (
            'name' => 'other_address_street',
            'comment' => 'Street address for other address',
            'displayParams' => 
            array (
              'key' => 'other',
            ),
            'label' => 'LBL_OTHER_ADDRESS_STREET',
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
          1 => '',
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
            'name' => 'marital_status',
            'studio' => 'visible',
            'label' => 'LBL_MARITAL_STATUS',
          ),
        ),
      ),
      'lbl_editview_panel3' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'type',
            'studio' => 'visible',
            'label' => 'LBL_TYPE',
          ),
          1 => '',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'priority',
            'studio' => 'visible',
            'label' => 'LBL_PRIORITY',
          ),
          1 => 
          array (
            'name' => 'status',
            'studio' => 'visible',
            'label' => 'LBL_STATUS',
          ),
        ),
      ),
      'lbl_editview_panel4' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'account_name',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'profession',
            'studio' => 'visible',
            'label' => 'LBL_PROFESSION',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'position',
            'studio' => 'visible',
            'label' => 'LBL_POSITION',
          ),
        ),
      ),
      'LBL_PANEL_ADVANCED' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'report_to_name',
            'label' => 'LBL_REPORTS_TO',
          ),
          1 => 
          array (
            'name' => 'sync_contact',
            'comment' => 'Synch to outlook?  (Meta-Data only)',
            'studio' => 'true',
            'label' => 'LBL_SYNC_CONTACT',
          ),
        ),
        1 => 
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
        2 => 
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
        3 => 
        array (
          0 => 
          array (
            'name' => 'campaign_name',
            'comment' => 'The first campaign name for Contact (Meta-data only)',
            'label' => 'LBL_CAMPAIGN',
          ),
        ),
      ),
    ),
  ),
);
?>
