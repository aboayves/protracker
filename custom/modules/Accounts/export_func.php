<?php

function export($type, $records = null, $members = false, $sample=false) {
  global $beanList;
  global $beanFiles;
  global $current_user;
  global $app_strings;
  global $app_list_strings;
  global $timedate;
  global $mod_strings;
  global $current_language;
  $sampleRecordNum = 5;
  $contact_fields = array(
      "id"=>"Contact ID"
      ,"lead_source"=>"Lead Source"
      ,"date_entered"=>"Date Entered"
      ,"date_modified"=>"Date Modified"
      ,"first_name"=>"First Name"
      ,"last_name"=>"Last Name"
      ,"salutation"=>"Salutation"
      ,"birthdate"=>"Lead Source"
      ,"do_not_call"=>"Do Not Call"
      ,"email_opt_out"=>"Email Opt Out"
      ,"title"=>"Title"
      ,"department"=>"Department"
      ,"birthdate"=>"Birthdate"
      ,"do_not_call"=>"Do Not Call"
      ,"phone_home"=>"Phone (Home)"
      ,"phone_mobile"=>"Phone (Mobile)"
      ,"phone_work"=>"Phone (Work)"
      ,"phone_other"=>"Phone (Other)"
      ,"phone_fax"=>"Fax"
      ,"email1"=>"Email"
      ,"email2"=>"Email (Other)"
      ,"assistant"=>"Assistant"
      ,"assistant_phone"=>"Assistant Phone"
      ,"primary_address_street"=>"Primary Address Street"
      ,"primary_address_city"=>"Primary Address City"
      ,"primary_address_state"=>"Primary Address State"
      ,"primary_address_postalcode"=>"Primary Address Postalcode"
      ,"primary_address_country"=>"Primary Address Country"
      ,"alt_address_street"=>"Other Address Street"
      ,"alt_address_city"=>"Other Address City"
      ,"alt_address_state"=>"Other Address State"
      ,"alt_address_postalcode"=>"Other Address Postalcode"
      ,"alt_address_country"=>"Other Address Country"
      ,"description"=>"Description"
      );

  $account_fields = array(
      "id"=>"Account ID",
      "name"=>"Account Name",
      "website"=>"Website",
      "industry"=>"Industry",
      "av_client_types_name"=>"Type",
      "ticker_symbol"=>"Ticker Symbol",
      "employees"=>"Employees",
      "ownership"=>"Ownership",
      "phone_office"=>"Phone",
      "phone_fax"=>"Fax",
      "phone_alternate"=>"Other Phone",
      "email1"=>"Email",
      "email2"=>"Other Email",
      "rating"=>"Rating",
      "sic_code"=>"SIC Code",
      "annual_revenue"=>"Annual Revenue",
      "billing_address_street"=>"Billing Address Street",
      "billing_address_city"=>"Billing Address City",
      "billing_address_state"=>"Billing Address State",
      "billing_address_postalcode"=>"Billing Address Postalcode",
      "billing_address_country"=>"Billing Address Country",
      "shipping_address_street"=>"Shipping Address Street",
      "shipping_address_city"=>"Shipping Address City",
      "shipping_address_state"=>"Shipping Address State",
      "shipping_address_postalcode"=>"Shipping Address Postalcode",
      "shipping_address_country"=>"Shipping Address Country",
      "description"=>"Description"
        );
  //Array of fields that should not be exported, and are only used for logic
  $remove_from_members = array("ea_deleted", "ear_deleted", "primary_address");
  $focus = 0;
  $content = '';

  $bean = $beanList[$type];
  require_once($beanFiles[$bean]);
  $focus = new $bean;
  $searchFields = array();
  $db = DBManagerFactory::getInstance();

  if($records) {
    $records = explode(',', $records);
    $records = "'" . implode("','", $records) . "'";
    $where = "{$focus->table_name}.id in ($records)";
  } elseif (isset($_REQUEST['all']) ) {
    $where = '';
  } else {
    if(!empty($_REQUEST['current_post'])) {
      $ret_array = generateSearchWhere($type, $_REQUEST['current_post']);

      $where = $ret_array['where'];
      $searchFields = $ret_array['searchFields'];
    } else {
      $where = '';
    }
  }
  $order_by = "";
  if($focus->bean_implements('ACL')){
    if(!ACLController::checkAccess($focus->module_dir, 'export', true)){
      ACLController::displayNoAccess();
      sugar_die('');
    }
    if(ACLController::requireOwner($focus->module_dir, 'export')){
      if(!empty($where)){
        $where .= ' AND ';
      }
      $where .= $focus->getOwnerWhere($current_user->id);
    }

  }
  // Export entire list was broken because the where clause already has "where" in it
  // and when the query is built, it has a "where" as well, so the query was ill-formed.
  // Eliminating the "where" here so that the query can be constructed correctly.
  // Eliminating the "where" here so that the query can be constructed correctly.
  if($members == true){
    $query = $focus->create_export_members_query($records);
  }else{
    $beginWhere = substr(trim($where), 0, 5);
    if ($beginWhere == "where")
      $where = substr(trim($where), 5, strlen($where));
    $ret_array = create_export_query_relate_link_patch($type, $searchFields, $where);
    if(!empty($ret_array['join'])) {
      $query = $focus->create_export_query($order_by,$ret_array['where'],$ret_array['join']);
    } else {
      $query = $focus->create_export_query($order_by,$ret_array['where']);
    }
  }

  $result = '';
  $populate = false;
  if($sample) {
    $result = $db->limitQuery($query, 0, $sampleRecordNum, true, $app_strings['ERR_EXPORT_TYPE'].$type.": <BR>.".$query);
    if( $focus->_get_num_rows_in_query($query)<1 ){
      $populate = true;
    }
  }
  else {
    $result = $db->query($query, true, $app_strings['ERR_EXPORT_TYPE'].$type.": <BR>.".$query);
  }


  $fields_array = $db->getFieldsArray($result,true);

  //set up the order on the header row
  $fields_array = get_field_order_mapping($focus->module_dir, $fields_array);

  //set up labels to be used for the header row
  $field_labels = array();
  foreach($fields_array as $key=>$dbname){
    //Remove fields that are only used for logic
    if($members && (in_array($dbname, $remove_from_members)))
      continue;

    //default to the db name of label does not exist
    $field_labels[$key] = translateForExport($dbname,$focus);
  }

  // setup the "header" line with proper delimiters
  $content = "\"".implode("\"".getDelimiter()."\"", array_values($field_labels))."\"\r\n";
  $pre_id = '';

  if($populate){
    //this is a sample request with no data, so create fake datarows
    $content .= returnFakeDataRow($focus,$fields_array,$sampleRecordNum);
  }else{
    //process retrieved record
    while($val = $db->fetchByAssoc($result, false)) {

      //order the values in the record array
      $val = get_field_order_mapping($focus->module_dir,$val);

      $new_arr = array();
      if(!is_admin($current_user)){
        $focus->id = (!empty($val['id']))?$val['id']:'';
        $focus->assigned_user_id = (!empty($val['assigned_user_id']))?$val['assigned_user_id']:'' ;
        $focus->created_by = (!empty($val['created_by']))?$val['created_by']:'';
        ACLField::listFilter($val, $focus->module_dir,$current_user->id, $focus->isOwner($current_user->id), true, 1, true );
      }

      if($members){
        if($pre_id == $val['id'])
          continue;
        if($val['ea_deleted']==1 || $val['ear_deleted']==1){
          $val['primary_email_address'] = '';
        }
        unset($val['ea_deleted']);
        unset($val['ear_deleted']);
        unset($val['primary_address']);
      }
      $pre_id = $val['id'];

      foreach ($val as $key => $value)
      {
        //getting content values depending on their types
        $fieldNameMapKey = $fields_array[$key];

        if (isset($focus->field_name_map[$fieldNameMapKey])  && $focus->field_name_map[$fieldNameMapKey]['type'])
        {
          $fieldType = $focus->field_name_map[$fieldNameMapKey]['type'];
          switch ($fieldType)
          {
            //if our value is a currency field, then apply the users locale
            case 'currency':
              require_once('modules/Currencies/Currency.php');
              $value = currency_format_number($value);
              break;

              //if our value is a datetime field, then apply the users locale
            case 'datetime':
            case 'datetimecombo':
              $value = $timedate->to_display_date_time($db->fromConvert($value, 'datetime'));
              $value = preg_replace('/([pm|PM|am|AM]+)/', ' \1', $value);
              break;

              //kbrill Bug #16296
            case 'date':
              $value = $timedate->to_display_date($db->fromConvert($value, 'date'), false);
              break;

              // Bug 32463 - Properly have multienum field translated into something useful for the client
            case 'multienum':
              $value = str_replace("^","",$value);
              if (isset($focus->field_name_map[$fields_array[$key]]['options']) && isset($app_list_strings[$focus->field_name_map[$fields_array[$key]]['options']]) )
              {
                $valueArray = explode(",",$value);
                foreach ($valueArray as $multikey => $multivalue )
                {
                  if (isset($app_list_strings[$focus->field_name_map[$fields_array[$key]]['options']][$multivalue]) )
                  {
                    $valueArray[$multikey] = $app_list_strings[$focus->field_name_map[$fields_array[$key]]['options']][$multivalue];
                  }
                }
                $value = implode(",",$valueArray);
              }
              break;
          }
        }

        if(isset($focus->field_name_map[$fields_array[$key]]['custom_type']) && $focus->field_name_map[$fields_array[$key]]['custom_type'] == 'teamset'){
          require_once('modules/Teams/TeamSetManager.php');
          $value = TeamSetManager::getCommaDelimitedTeams($val['team_set_id'], !empty($val['team_id']) ? $val['team_id'] : '');
        }

        //replace user_name with full name if use_real_name preference setting is enabled
        //and this is a user name field
        $useRealNames = $current_user->getPreference('use_real_names');
        if(!empty($useRealNames) && ($useRealNames &&  $useRealNames !='off' )
            && !empty($focus->field_name_map[$fields_array[$key]]['type']) && $focus->field_name_map[$fields_array[$key]]['type'] == 'relate'
            && !empty($focus->field_name_map[$fields_array[$key]]['module'])&& $focus->field_name_map[$fields_array[$key]]['module'] == 'Users'
            && !empty($focus->field_name_map[$fields_array[$key]]['rname']) && $focus->field_name_map[$fields_array[$key]]['rname'] == 'user_name'
          ){
          global $locale;
          $userFocus = new User();
          $userFocus->retrieve_by_string_fields(array('user_name' => $value ));
          if ( !empty($userFocus->id) ) {
            $value = $locale->getLocaleFormattedName($userFocus->first_name, $userFocus->last_name);
          }
        }

        array_push($new_arr, preg_replace("/\"/","\"\"", $value));
      }
      $line = implode("\"".getDelimiter()."\"", $new_arr);
      $line = "\"" .$line;
      $line .= "\"\r\n";
      $content .= $line;
    }


  }
  return $content;

}

?>
