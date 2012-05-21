<?php

class checkChange {
  function checkChange($bean, $event, $arguments) {
    $key_fields = array_keys($bean->fetched_row);
    $exempt_fields = array("date_entered");
    foreach($exempt_fields as $exempt){
      $exempt_pos = array_search($exempt, $key_fields);
      unset($key_fields[$exempt_pos]);
    }
    $changed_fields = array();
    foreach($key_fields as $key_field){
        if($bean->$key_field != $bean->fetched_row[$key_field]){
          array_push($changed_fields, 1);
        }
    }
    if (array_sum($changed_fields) > 0) {
      require_once("modules/av_Account_Histories/av_Account_Histories.php");
      require_once("data/SugarBean.php");
      $history = new av_Account_Histories();
      foreach($key_fields as $key_field){
        $history->$key_field = $bean->fetched_row[$key_field];
      }
      $history->id = create_guid();
      $history->load_relationship('av_accounts_av_account_histories');
      $history->av_accounts_av_account_histories->add($bean->id);
      $history->db->insert($history);
      $history->save(FALSE);
      $GLOBALS['log']->info("History save called");
    }
  }
}

?>
