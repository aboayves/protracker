<?php
$listViewDefs ['Contacts'] = 
array (
  'FULL_NAME' => 
  array (
    'type' => 'fullname',
    'studio' => 
    array (
      'listview' => false,
    ),
    'label' => 'LBL_NAME',
    'width' => '20%',
    'default' => false,
  ),
  'NAME' => 
  array (
    'width' => '20%',
    'label' => 'LBL_LIST_NAME',
    'link' => true,
    'contextMenu' => 
    array (
      'objectType' => 'sugarPerson',
      'metaData' => 
      array (
        'contact_id' => '{$ID}',
        'module' => 'Contacts',
        'return_action' => 'ListView',
        'contact_name' => '{$FULL_NAME}',
        'parent_id' => '{$ACCOUNT_ID}',
        'parent_name' => '{$ACCOUNT_NAME}',
        'return_module' => 'Contacts',
        'parent_type' => 'Account',
        'notes_parent_type' => 'Account',
      ),
    ),
    'orderBy' => 'name',
    'default' => true,
    'related_fields' => 
    array (
      0 => 'first_name',
      1 => 'last_name',
      2 => 'salutation',
      3 => 'account_name',
      4 => 'account_id',
    ),
  ),
  'ACCOUNT_NAME' => 
  array (
    'width' => '20%',
    'label' => 'LBL_LIST_ACCOUNT_NAME',
    'module' => 'Accounts',
    'id' => 'ACCOUNT_ID',
    'link' => true,
    'contextMenu' => 
    array (
      'objectType' => 'sugarAccount',
      'metaData' => 
      array (
        'return_module' => 'Contacts',
        'return_action' => 'ListView',
        'module' => 'Accounts',
        'parent_id' => '{$ACCOUNT_ID}',
        'parent_name' => '{$ACCOUNT_NAME}',
        'account_id' => '{$ACCOUNT_ID}',
        'account_name' => '{$ACCOUNT_NAME}',
      ),
    ),
    'default' => true,
    'sortable' => true,
    'ACLTag' => 'ACCOUNT',
    'related_fields' => 
    array (
      0 => 'account_id',
    ),
  ),
  'STATUS' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_STATUS',
    'width' => '10%',
  ),
  'EMAIL1' => 
  array (
    'width' => '15%',
    'label' => 'LBL_LIST_EMAIL_ADDRESS',
    'sortable' => false,
    'link' => true,
    'customCode' => '{$EMAIL1_LINK}{$EMAIL1}</a>',
    'default' => true,
  ),
  'PHONE_WORK' => 
  array (
    'width' => '15%',
    'label' => 'LBL_OFFICE_PHONE',
    'default' => true,
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '10%',
    'label' => 'LBL_LIST_ASSIGNED_USER',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => true,
  ),
  'DATE_MODIFIED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_MODIFIED',
    'width' => '10%',
    'default' => true,
  ),
  'FIRST_NAME' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_FIRST_NAME',
    'width' => '10%',
    'default' => false,
  ),
  'LAST_NAME' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_LAST_NAME',
    'width' => '10%',
    'default' => false,
  ),
  'TYPE' => 
  array (
    'type' => 'enum',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_TYPE',
    'width' => '10%',
  ),
  'SALUTATION' => 
  array (
    'type' => 'enum',
    'label' => 'LBL_SALUTATION',
    'width' => '10%',
    'default' => false,
  ),
  'TITLE' => 
  array (
    'width' => '15%',
    'label' => 'LBL_LIST_TITLE',
    'default' => false,
  ),
  'EMAIL_AND_NAME1' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_NAME',
    'width' => '10%',
    'default' => false,
  ),
  'SSN' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_SSN',
    'width' => '10%',
  ),
  'BIRTHDATE' => 
  array (
    'type' => 'date',
    'label' => 'LBL_BIRTHDATE',
    'width' => '10%',
    'default' => false,
  ),
  'MARITAL_STATUS' => 
  array (
    'type' => 'enum',
    'default' => false,
    'label' => 'LBL_MARITAL_STATUS',
    'width' => '10%',
  ),
  'ANNIVERSARY_DATE' => 
  array (
    'type' => 'date',
    'default' => false,
    'label' => 'LBL_ANNIVERSARY_DATE',
    'width' => '10%',
  ),
  'ANNUAL_INCOME' => 
  array (
    'type' => 'currency',
    'default' => false,
    'label' => 'LBL_ANNUAL_INCOME',
    'currency_format' => true,
    'width' => '10%',
  ),
  'EIN' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_EIN',
    'width' => '10%',
  ),
  'DO_NOT_MAIL' => 
  array (
    'type' => 'bool',
    'default' => false,
    'label' => 'LBL_DO_NOT_MAIL',
    'width' => '10%',
  ),
  'GENDER' => 
  array (
    'type' => 'enum',
    'default' => false,
    'label' => 'LBL_GENDER',
    'width' => '10%',
  ),
  'LEAD_SOURCE' => 
  array (
    'type' => 'enum',
    'label' => 'LBL_LEAD_SOURCE',
    'width' => '10%',
    'default' => false,
  ),
  'CAMPAIGN_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_CAMPAIGN',
    'id' => 'CAMPAIGN_ID',
    'width' => '10%',
    'default' => false,
  ),
  'DEPARTMENT' => 
  array (
    'width' => '10%',
    'label' => 'LBL_DEPARTMENT',
    'default' => false,
  ),
  'DO_NOT_CALL' => 
  array (
    'width' => '10%',
    'label' => 'LBL_DO_NOT_CALL',
    'default' => false,
  ),
  'PHONE_HOME' => 
  array (
    'width' => '10%',
    'label' => 'LBL_HOME_PHONE',
    'default' => false,
  ),
  'PHONE_MOBILE' => 
  array (
    'width' => '10%',
    'label' => 'LBL_MOBILE_PHONE',
    'default' => false,
  ),
  'PHONE_OTHER' => 
  array (
    'width' => '10%',
    'label' => 'LBL_OTHER_PHONE',
    'default' => false,
  ),
  'PHONE_FAX' => 
  array (
    'width' => '10%',
    'label' => 'LBL_FAX_PHONE',
    'default' => false,
  ),
  'EMAIL2' => 
  array (
    'width' => '15%',
    'label' => 'LBL_LIST_EMAIL_ADDRESS',
    'sortable' => false,
    'customCode' => '{$EMAIL2_LINK}{$EMAIL2}</a>',
    'default' => false,
  ),
  'DELIVERY_METHOD' => 
  array (
    'type' => 'enum',
    'label' => 'LBL_DELIVERY_METHOD',
    'width' => '10%',
    'default' => false,
  ),
  'ENVELOPE' => 
  array (
    'type' => 'text',
    'label' => 'LBL_ENVELOPE',
    'sortable' => false,
    'width' => '10%',
    'default' => false,
  ),
  'PRIMARY_ADDRESS_STREET' => 
  array (
    'width' => '10%',
    'label' => 'LBL_PRIMARY_ADDRESS_STREET',
    'default' => false,
  ),
  'PRIMARY_ADDRESS_CITY' => 
  array (
    'width' => '10%',
    'label' => 'LBL_PRIMARY_ADDRESS_CITY',
    'default' => false,
  ),
  'PRIMARY_ADDRESS_STATE' => 
  array (
    'width' => '10%',
    'label' => 'LBL_PRIMARY_ADDRESS_STATE',
    'default' => false,
  ),
  'PRIMARY_ADDRESS_POSTALCODE' => 
  array (
    'width' => '10%',
    'label' => 'LBL_PRIMARY_ADDRESS_POSTALCODE',
    'default' => false,
  ),
  'WORK_ADDRESS_STATE' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_WORK_ADDRESS_STATE',
    'width' => '10%',
  ),
  'ALT_ADDRESS_COUNTRY' => 
  array (
    'width' => '10%',
    'label' => 'LBL_ALT_ADDRESS_COUNTRY',
    'default' => false,
  ),
  'DATE_ENTERED' => 
  array (
    'width' => '10%',
    'label' => 'LBL_DATE_ENTERED',
    'default' => false,
  ),
  'ALT_ADDRESS_STREET' => 
  array (
    'width' => '10%',
    'label' => 'LBL_ALT_ADDRESS_STREET',
    'default' => false,
  ),
  'ALT_ADDRESS_CITY' => 
  array (
    'width' => '10%',
    'label' => 'LBL_ALT_ADDRESS_CITY',
    'default' => false,
  ),
  'ALT_ADDRESS_STATE' => 
  array (
    'width' => '10%',
    'label' => 'LBL_ALT_ADDRESS_STATE',
    'default' => false,
  ),
  'ALT_ADDRESS_POSTALCODE' => 
  array (
    'width' => '10%',
    'label' => 'LBL_ALT_ADDRESS_POSTALCODE',
    'default' => false,
  ),
  'CREATED_BY_NAME' => 
  array (
    'width' => '10%',
    'label' => 'LBL_CREATED',
    'default' => false,
  ),
  'TEAM_NAME' => 
  array (
    'width' => '10%',
    'label' => 'LBL_LIST_TEAM',
    'default' => false,
  ),
  'PRIORITY' => 
  array (
    'type' => 'enum',
    'default' => false,
    'label' => 'LBL_PRIORITY',
    'width' => '10%',
  ),
  'MODIFIED_BY_NAME' => 
  array (
    'width' => '10%',
    'label' => 'LBL_MODIFIED',
    'default' => false,
  ),
  'SYNC_CONTACT' => 
  array (
    'type' => 'bool',
    'label' => 'LBL_SYNC_CONTACT',
    'width' => '10%',
    'default' => false,
    'sortable' => false,
  ),
  'SEND_ADV_OFFER' => 
  array (
    'type' => 'bool',
    'default' => false,
    'label' => 'LBL_SEND_ADV_OFFER',
    'width' => '10%',
  ),
  'SEND_PRIVACY_NOTICE' => 
  array (
    'type' => 'bool',
    'default' => false,
    'label' => 'LBL_SEND_PRIVACY_NOTICE',
    'width' => '10%',
  ),
  'IS_SEC_RELATED' => 
  array (
    'type' => 'bool',
    'default' => false,
    'label' => 'LBL_IS_SEC_RELATED',
    'width' => '10%',
  ),
  'DESCRIPTION' => 
  array (
    'type' => 'text',
    'label' => 'LBL_DESCRIPTION',
    'sortable' => false,
    'width' => '10%',
    'default' => false,
  ),
  'SEND_BIRTHDAY_CARD' => 
  array (
    'type' => 'bool',
    'default' => false,
    'label' => 'LBL_SEND_BIRTHDAY_CARD',
    'width' => '10%',
  ),
  'SEND_HOLIDAY_GIFT' => 
  array (
    'type' => 'bool',
    'default' => false,
    'label' => 'LBL_SEND_HOLIDAY_GIFT',
    'width' => '10%',
  ),
  'SEND_ANNIVERSARY_CARD' => 
  array (
    'type' => 'bool',
    'default' => false,
    'label' => 'LBL_SEND_ANNIVERSARY_CARD',
    'width' => '10%',
  ),
  'SEND_NEWSLETTER_MAIL' => 
  array (
    'type' => 'bool',
    'default' => false,
    'label' => 'LBL_SEND_NEWSLETTER_MAIL',
    'width' => '10%',
  ),
  'SEND_NEWSLETTER_EMAIL' => 
  array (
    'type' => 'bool',
    'default' => false,
    'label' => 'LBL_SEND_NEWSLETTER_EMAIL',
    'width' => '10%',
  ),
  'PROFESSION' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_PROFESSION',
    'width' => '10%',
  ),
  'REFERRED_BY' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_REFERRED_BY',
    'width' => '10%',
  ),
  'RETIREMENT_DATE' => 
  array (
    'type' => 'date',
    'default' => false,
    'label' => 'LBL_RETIREMENT_DATE',
    'width' => '10%',
  ),
  'AGE' => 
  array (
    'type' => 'function',
    'studio' => 'visible',
    'label' => 'LBL_AGE',
    'width' => '10%',
    'default' => false,
  ),
  'CITIZENSHIP' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_CITIZENSHIP',
    'width' => '10%',
  ),
  'AV_CONTACT_TYPES_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_AV_CONTACT_TYPES_NAME',
    'id' => 'CONTACT_TYPE_ID',
    'width' => '10%',
    'default' => false,
  ),
  'DATE_OF_DEATH' => 
  array (
    'type' => 'date',
    'default' => false,
    'label' => 'LBL_DATE_OF_DEATH',
    'width' => '10%',
  ),
  'DOCUMENT_PATH' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_DOCUMENT_PATH',
    'width' => '10%',
  ),
  'EMPLOYER' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_EMPLOYER',
    'width' => '10%',
  ),
  'EMPLOYMENT_STATUS' => 
  array (
    'type' => 'enum',
    'default' => false,
    'label' => 'LBL_EMPLOYMENT_STATUS',
    'width' => '10%',
  ),
  'SOURCE_DATE' => 
  array (
    'type' => 'date',
    'default' => false,
    'label' => 'LBL_SOURCE_DATE',
    'width' => '10%',
  ),
  'SPOUSE_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_SPOUSE_NAME',
    'id' => 'SPOUSE_ID',
    'width' => '10%',
    'default' => false,
  ),
  'EMAIL_OPT_OUT' => 
  array (
    'width' => '10%',
    'label' => 'LBL_EMAIL_OPT_OUT',
    'default' => false,
  ),
);
?>
