<?php
$layout_defs["av_Groups"]["subpanel_setup"]["av_groups_reports"] = array (
  'order' => 100,
  'module' => 'Reports',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_AV_GROUPS_REPORTS',
  'get_subpanel_data' => 'function:get_reports_subpanel_query',
  'refresh_page' =>true,
  'top_buttons' => 
  array (
  ),
);
