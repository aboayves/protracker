<?php
 // created: 2012-10-14 16:29:16
$layout_defs["Leads"]["subpanel_setup"]['leads_av_keywords_1'] = array (
  'order' => 100,
  'module' => 'av_Keywords',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_LEADS_AV_KEYWORDS_1_FROM_AV_KEYWORDS_TITLE',
  'get_subpanel_data' => 'leads_av_keywords_1',
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
