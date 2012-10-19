<?php
 // created: 2012-10-19 01:26:41
$layout_defs["av_Trusts"]["subpanel_setup"]['av_trusts_av_trustees_1'] = array (
  'order' => 100,
  'module' => 'av_Trustees',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_AV_TRUSTS_AV_TRUSTEES_1_FROM_AV_TRUSTEES_TITLE',
  'get_subpanel_data' => 'av_trusts_av_trustees_1',
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
