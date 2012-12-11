<?php
	class PopulateMembers{
		function populateMembersFunc($bean, $event, $arguments) {
			global $db, $timedate;
			
			$expiration = '';
			$xDays = is_numeric($bean->membership_expiration_days) ? $bean->membership_expiration_days : 0;
			if(intval($xDays) > 0){
				$expiration = date('Y-m-d', strtotime(date("Y-m-d", strtotime($timedate->nowDbDate())) ."+".$bean->membership_expiration_days. "  day"));
			}
			
			$destination_address = "";
			$name = "";
			$envelope = "";
			$opt_out_flag ='0';
			$include='1';
			if($arguments['related_module'] == 'Accounts'){
				$account = BeanFactory::getBean('Accounts', $arguments['related_id']);

				if($bean->delivery_method_av_group == 'Home Address'){
					$destination_address = $account->billing_address_street." ".$account->billing_address_city." ".$account->billing_address_country;
				}elseif($bean->delivery_method_av_group == 'Work Address'){
					$destination_address = $account->shipping_address_street." ".$account->shipping_address_city." ".$account->shipping_address_country;
				}elseif($bean->delivery_method_av_group == 'Home Phone'){
					$destination_address = $account->phone_office;
				}elseif($bean->delivery_method_av_group == 'Work Phone'){
					$destination_address = $account->phone_fax;
				}elseif($bean->delivery_method_av_group == 'phone_alternate'){
					$destination_address = $account->phone_mobile;
				}
				elseif($bean->delivery_method_av_group == 'Home Email' || $bean->delivery_method_av_group == 'Work Email' || $bean->delivery_method_av_group == 'Primary Email'){
					$opt_out_flag = $account->email_opt_out;
				}
				
				$name = $account->name;
				$envelope = $account->envelope;
				if($opt_out_flag){
					$include='0';
				}
				
			}elseif($arguments['related_module'] == 'Contacts'){
				$contactBean = BeanFactory::getBean('Contacts', $arguments['related_id']);
				if($bean->delivery_method_av_group == 'Home Address'){
					$opt_out_flag=$contactBean->do_not_mail;
					$destination_address = $contactBean->primary_address_street." ".$contactBean->primary_address_city." ".$contactBean->primary_address_country;
				}elseif($bean->delivery_method_av_group == 'Work Address'){
					$opt_out_flag=$contactBean->do_not_mail;
					$destination_address = $contactBean->alt_address_street." ".$contactBean->alt_address_city." ".$contactBean->alt_address_country;
				}elseif($bean->delivery_method_av_group == 'Mailing Address'){
					$opt_out_flag=$contactBean->do_not_mail;
				}elseif($bean->delivery_method_av_group == 'Other Address'){
					$opt_out_flag=$contactBean->do_not_mail;
				}elseif($bean->delivery_method_av_group == 'Home Phone'){
					$opt_out_flag=$contactBean->do_not_call;
					$destination_address = $contactBean->phone_home;
				}elseif($bean->delivery_method_av_group == 'Work Phone'){
					$opt_out_flag=$contactBean->do_not_call;
					$destination_address = $contactBean->phone_work;
				}elseif($bean->delivery_method_av_group == 'Mobile'){
					$opt_out_flag=$contactBean->do_not_call;
					$destination_address = $contactBean->phone_mobile;
				}elseif($bean->delivery_method_av_group == 'Fax'){
					$opt_out_flag = $contactBean->do_not_call;
				}elseif($bean->delivery_method_av_group == 'Home Email' || $bean->delivery_method_av_group == 'Work Email' || $bean->delivery_method_av_group == 'Primary Email'){
					$opt_out_flag = $contactBean->email_opt_out;
					$destination_address = $contactBean->aux_email;
				}
				$name = $contactBean->salutation." ".$contactBean->first_name." ".$contactBean->last_name;
				$envelope = $contactBean->envelope;
				if($opt_out_flag){
					$include='0';
				}
			}
			
			$query = "
					UPDATE av_group_membership 
					SET 
						name = '{$name}', 
						delivery_method = '{$bean->delivery_method_av_group}', 
						envelope = '{$envelope}', 
						destination_address = '{$destination_address}', 
						date_add_to_grp = '{$timedate->nowDbDate()}', 
						opted_out = '{$opt_out_flag}', 
						expiration_date = '{$expiration}', 
						date_entered = '{$timedate->nowDb()}',
						include = '{$include}'
					WHERE 
						parent_id = '{$arguments['related_id']}' 
						AND av_groups_id = '{$bean->id}' 
						AND parent_type = '{$arguments['related_module']}'
						AND deleted = 0;
					";
			$db->query($query);
		
		}
		function populateReportsSubpanelFunc($bean, $event, $arguments) {
			if (isset($_REQUEST['return_type']) && $_REQUEST['return_type'] == 'report'){
				global $db, $timedate;
				$newID=create_guid();
				$date_modified=$timedate->nowDb();
				$sql = "SELECT * from av_groups_reports where av_groups_id = '{$bean->id}' AND reports_id = '{$_REQUEST['subpanel_id']}'";
				$result = $db->query($sql);
				if($db->getRowCount($result) == 0){
					$sql="INSERT INTO av_groups_reports(id, date_modified, av_groups_id, reports_id)
						  VALUES('{$newID}', '{$date_modified}', '{$bean->id}', '{$_REQUEST['subpanel_id']}')";
					$db->query($sql, true);
				}
			}
		}
	}
?>