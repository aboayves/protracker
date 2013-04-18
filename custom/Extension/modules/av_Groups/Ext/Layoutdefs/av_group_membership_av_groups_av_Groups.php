<?php
 // created: 2012-08-09 15:46:02
$layout_defs["av_Groups"]["subpanel_setup"]['av_groups_accounts'] = array (
  'order' => 100,
  'module' => 'Accounts',
  'subpanel_name' => 'forGroups',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_AV_GROUPS_ACCOUNTS_FROM_ACCOUNTS_TITLE',
  'get_subpanel_data' => 'av_groups_accounts',
  'refresh_page' =>true,
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
    2 => array (
      'widget_class' => 'SubPanelTopSelectFromReportButton',
    ),
	3 => array (
      'widget_class' => 'SubPanelTopMergeToAccounts',
    ),
	4 => array (
      'widget_class' => 'SubPanelTopMultiDelete',
    ),
  ),
);
$layout_defs["av_Groups"]["subpanel_setup"]['av_groups_contacts'] = array (
  'order' => 110,
  'module' => 'Contacts',
  'subpanel_name' => 'forGroups',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_AV_GROUPS_CONTACTS_FROM_CONTACTS_TITLE',
  'get_subpanel_data' => 'av_groups_contacts',
  'refresh_page' =>true,
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
    2 => array (
      'widget_class' => 'SubPanelTopSelectFromReportButton',
    ),
	3 => array (
      'widget_class' => 'SubPanelTopMergeToContacts',
    ),
	4 => array (
      'widget_class' => 'SubPanelTopMultiDelete',
    ),
  ),
);