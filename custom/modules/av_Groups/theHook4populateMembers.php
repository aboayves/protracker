<?php
	class PopulateMembers{
		function populateMembersFunc(&$bean, $event, $arguments) {
			global $db, $timedate;
			
			$expiration = '';
			$xDays = is_numeric($bean->membership_expiration_days) ? $bean->membership_expiration_days : 0;
			if(intval($xDays) > 0){
				$expiration = date('Y-m-d', strtotime(date("Y-m-d", strtotime($timedate->nowDbDate())) ."+".$bean->membership_expiration_days. "  day"));
			}
			
			$destination_address = "";
			$name = "";
			$envelope = "";
			$email_opt_out = "";
			
			if($arguments['related_module'] == 'Accounts'){
				$account = BeanFactory::getBean('Accounts', $arguments['related_id']);

				if($bean->delivery_method == 'Home Address'){
					$destination_address = $account->billing_address_street." ".$account->billing_address_city." ".$account->billing_address_country;
				}elseif($bean->delivery_method == 'Work Address'){
					$destination_address = $account->shipping_address_street." ".$account->shipping_address_city." ".$account->shipping_address_country;
				}elseif($bean->delivery_method == 'Home Phone'){
					$destination_address = $account->phone_office;
				}elseif($bean->delivery_method == 'Work Phone'){
					$destination_address = $account->phone_fax;
				}elseif($bean->delivery_method == 'phone_alternate'){
					$destination_address = $account->phone_mobile;
				}
				
				$name = $account->name;
				$envelope = $account->envelope;
				$email_opt_out = $account->email_opt_out;
			}elseif($arguments['related_module'] == 'Contacts'){
				$contactBean = BeanFactory::getBean('Contacts', $arguments['related_id']);
					  
				if($bean->delivery_method == 'Home Address'){
					$destination_address = $contactBean->primary_address_street." ".$contactBean->primary_address_city." ".$contactBean->primary_address_country;
				}elseif($bean->delivery_method == 'Work Address'){
					$destination_address = $contactBean->alt_address_street." ".$contactBean->alt_address_city." ".$contactBean->alt_address_country;
				}elseif($bean->delivery_method == 'Home Phone'){
					$destination_address = $contactBean->phone_home;
				}elseif($bean->delivery_method == 'Work Phone'){
					$destination_address = $contactBean->phone_work;
				}elseif($bean->delivery_method == 'Home Email'){
					$destination_address = $contactBean->aux_mail;
				}elseif($bean->delivery_method == 'Work Email'){
					$destination_address = $contactBean->aux_email;
				}elseif($bean->delivery_method == 'Mobile'){
					$destination_address = $contactBean->phone_mobile;
				}
				$name = $contactBean->salutation." ".$contactBean->first_name." ".$contactBean->last_name;
				$envelope = $contactBean->envelope;
				$email_opt_out = $contactBean->email_opt_out;
			}
			
			$query = "UPDATE av_group_membership ".
					 "SET ".
					 	"name='{$name}', ".
						"delivery_method='{$bean->delivery_method}', ".
						"envelope='{$envelope}', ".
						"destination_address='{$destination_address}', ".
						"date_add_to_grp='{$timedate->nowDbDate()}', ".
						"opted_out='{$email_opt_out}', ".
						"expiration_date='{$expiration}', ".
						"date_entered='{$timedate->nowDb()}' ".
					 "WHERE ".
					 	"parent_id='{$arguments['related_id']}' ".
						"AND av_groups_id='{$bean->id}' ".
						"AND parent_type='{$arguments['related_module']}'";
			$db->query($query);
		
		}
	}
?>