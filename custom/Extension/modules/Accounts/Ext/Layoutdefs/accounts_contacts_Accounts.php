<?php
$layout_defs["Accounts"]["subpanel_setup"]['accounts_contacts'] = array (
  'order' => 101,
  'module' => 'Contacts',
  'subpanel_name' => 'ForAccounts',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_CONTACTS_SUBPANEL_TITLE',
  'get_subpanel_data' => 'contacts',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);
