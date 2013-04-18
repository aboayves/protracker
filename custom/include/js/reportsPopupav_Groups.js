// JavaScript Document

function reportPopupClient(record)
{
	  open_popup('Reports', 600, 400, '&module_name=Accounts', true, true, {
		  'call_back_function': 'set_return_and_save_background',
		  'form_name': 'DetailView',
		  'field_to_name_array': {
			  'id': 'subpanel_id'
		  },
		  'passthru_data': {
			  'child_field': 'av_groups_accounts',
			  'return_url': 'index.php?module=av_Groups&action=SubPanelViewer&subpanel=av_groups_accounts&record='+record+'&sugar_body_only=1',
			  'link_field_name': 'av_groups_accounts',
			  'module_name': 'av_groups_accounts',
			  'refresh_page': '1',
			  'return_type': 'report'
		  }
	  }, 'Single', true);
}

function reportpopupContact(record)
{
		open_popup('Reports', 600, 400, '&module_name=Contacts', true, true, {
			'call_back_function': 'set_return_and_save_background',
			'form_name': 'DetailView',
			'field_to_name_array': {
				'id': 'subpanel_id'
			},
			'passthru_data': {
				'child_field': 'av_groups_contacts',
				'return_url': 'index.php?module=av_Groups&action=SubPanelViewer&subpanel=av_groups_contacts&record='+record+'&sugar_body_only=1',
				'link_field_name': 'av_groups_contacts',
				'module_name': 'av_groups_contacts',
				'refresh_page': '1',
				'return_type': 'report'
			}
		}, 'Single', true);
}