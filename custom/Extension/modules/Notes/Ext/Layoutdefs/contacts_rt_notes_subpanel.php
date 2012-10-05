<?php  // created: 2012-07-19 06:30:34 
$layout_defs["Notes"]["subpanel_setup"]['contacts_rt_notes'] = array (
   'order' => 100,
   'module' => 'Contacts',
   'subpanel_name' => 'default',
   'sort_order' => 'asc',
      'sort_by' => 'id', 
	    'title_key' => 'LBL_NOTES_RT_CONTACTS_TITLE',  
		 'get_subpanel_data' => 'contacts_notes', 
		   'top_buttons' =>    array (    
			    0 =>      array (       'widget_class' => 'SubPanelTopButtonQuickCreate',     ),  
			   	1 =>      array (       'widget_class' => 'SubPanelTopSelectButton',       'mode' => 'MultiSelect',     ),   ), );