<?php
$viewdefs ['Leads'] = 
array (
  'DetailView' => 
  array (
    'templateMeta' => 
    array (
      'maxColumns' => '1',
      'widths' => 
      array (
        0 => 
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
          'name' => 'first_name',
          'customCode' => '{html_options name="salutation" options=$fields.salutation.options selected=$fields.salutation.value}&nbsp;<input name="first_name" size="25" maxlength="25" type="text" value="{$fields.first_name.value}">',
          'displayParams' => 
          array (
            'wireless_edit_only' => true,
          ),
        ),
      ),
      1 => 
      array (
        0 => 
        array (
          'name' => 'last_name',
          'displayParams' => 
          array (
            'wireless_edit_only' => true,
          ),
        ),
      ),
      2 => 
      array (
        0 => 
        array (
          'name' => 'campaign_name',
          'label' => 'LBL_CAMPAIGN',
        ),
      ),
      3 => 
      array (
        0 => 
        array (
          'name' => 'lead_source',
          'comment' => 'Lead source (ex: Web, print)',
          'label' => 'LBL_LEAD_SOURCE',
        ),
      ),
      4 => 
      array (
        0 => 'status',
      ),
      5 => 
      array (
        0 => 'account_name',
      ),
      6 => 
      array (
        0 => 'phone_mobile',
      ),
      7 => 
      array (
        0 => 
        array (
          'name' => 'phone_home',
          'comment' => 'Home phone number of the contact',
          'label' => 'LBL_HOME_PHONE',
        ),
      ),
      8 => 
      array (
        0 => 'phone_work',
      ),
      9 => 
      array (
        0 => 'email1',
      ),
      10 => 
      array (
        0 => 
        array (
          'name' => 'do_not_call',
          'comment' => 'An indicator of whether contact can be called',
          'label' => 'LBL_DO_NOT_CALL',
        ),
      ),
      11 => 
      array (
        0 => 
        array (
          'name' => 'refered_by',
          'comment' => 'Identifies who refered the lead',
          'label' => 'LBL_REFERED_BY',
        ),
      ),
      12 => 
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
