<?php
class MembershipData{
	function calculateMembershipData($group_bean, $member_bean, $module_name){
		global $db, $timedate;
		$expiration = '';
		$xDays = is_numeric($group_bean->membership_expiration_days) ? $group_bean->membership_expiration_days : 0;
		if(intval($xDays) > 0){
			$expiration = date('Y-m-d', strtotime(date("Y-m-d", strtotime($timedate->nowDbDate())) ."+".$group_bean->membership_expiration_days. "  day"));
		}
		$destination_address = "";
		$name = "";
		$envelope = "";
		$opt_out_flag ='0';
		$include='1';
		if($module_name == 'Accounts'){
			$now = $timedate->nowDB();
			$updated_date = $timedate->to_display_date_time($now);
			$group_bean->lastupdated = $updated_date;
			if($group_bean->delivery_method_av_group == 'Home Address'){
				$destination_address = $member_bean->billing_address_street." ".$member_bean->billing_address_city." ".$member_bean->billing_address_country;
			}elseif($group_bean->delivery_method_av_group == 'Work Address'){
				$destination_address = $member_bean->shipping_address_street." ".$member_bean->shipping_address_city." ".$member_bean->shipping_address_country;
			}elseif($group_bean->delivery_method_av_group == 'Home Phone'){
				$destination_address = $member_bean->phone_office;
			}elseif($group_bean->delivery_method_av_group == 'Work Phone'){
				$destination_address = $member_bean->phone_fax;
			}elseif($group_bean->delivery_method_av_group == 'phone_alternate'){
				$destination_address = $member_bean->phone_mobile;
			}
			elseif($group_bean->delivery_method_av_group == 'Home Email' || $group_bean->delivery_method_av_group == 'Work Email' || $group_bean->delivery_method_av_group == 'Primary Email'){
				$opt_out_flag = $member_bean->email_opt_out;
			}
			
			$name = $member_bean->name;
			$envelope = $member_bean->client_salutation;
			if($opt_out_flag){
				$include='0';
			}
		}elseif($module_name == 'Contacts'){
			$now = $timedate->nowDB();
			$updated_date = $timedate->to_display_date_time($now);
			$group_bean->lastupdated = $updated_date;
			if($group_bean->delivery_method_av_group == 'Home Address'){
				$opt_out_flag=$member_bean->do_not_mail;
				$destination_address = $member_bean->primary_address_street." ".$member_bean->primary_address_city." ".$member_bean->primary_address_country;
			}elseif($group_bean->delivery_method_av_group == 'Work Address'){
				$opt_out_flag=$member_bean->do_not_mail;
				$destination_address = $member_bean->alt_address_street." ".$member_bean->alt_address_city." ".$member_bean->alt_address_country;
			}elseif($group_bean->delivery_method_av_group == 'Mailing Address'){
				$opt_out_flag=$member_bean->do_not_mail;
			}elseif($group_bean->delivery_method_av_group == 'Other Address'){
				$opt_out_flag=$member_bean->do_not_mail;
			}elseif($group_bean->delivery_method_av_group == 'Home Phone'){
				$opt_out_flag=$member_bean->do_not_call;
				$destination_address = $member_bean->phone_home;
			}elseif($group_bean->delivery_method_av_group == 'Work Phone'){
				$opt_out_flag=$member_bean->do_not_call;
				$destination_address = $member_bean->phone_work;
			}elseif($group_bean->delivery_method_av_group == 'Mobile'){
				$opt_out_flag=$member_bean->do_not_call;
				$destination_address = $member_bean->phone_mobile;
			}elseif($group_bean->delivery_method_av_group == 'Fax'){
				$opt_out_flag = $member_bean->do_not_call;
			}elseif($group_bean->delivery_method_av_group == 'Home Email' || $group_bean->delivery_method_av_group == 'Work Email' || $group_bean->delivery_method_av_group == 'Primary Email'){
				$opt_out_flag = $member_bean->email_opt_out;
				$destination_address = $member_bean->aux_email;
			}
			$name = $member_bean->salutation." ".$member_bean->first_name." ".$member_bean->last_name;
			$envelope = $member_bean->report_salutation;
			if($opt_out_flag){
				$include='0';
			}
		}
		$member_data = array();
		$member_data['name'] = $name;
		$member_data['delivery_method'] = $group_bean->delivery_method_av_group;
		$member_data['envelope'] = $envelope;
		$member_data['destination_address'] = $destination_address;
		$member_data['date_add_to_grp'] = $timedate->nowDbDate();
		$member_data['opted_out'] = $opt_out_flag;
		$member_data['expiration_date'] = $expiration;
		$member_data['include'] = $include;
		return $member_data;
	}
}
?>