<?php
// http://192.168.1.59/protracker/index.php?entryPoint=LaserApp&module=Accounts&id=t_cgroup_405&template=contact_report.docx
// this is a registered entry point
// access via index.php?entryPoint=QuickMerge&module=MODULE_NAME&id=ID
// it changes context from /include to root /

 require_once('config.php');
if (file_exists('config_override.php')) {
	require_once('config_override.php');
}

// inputs
$module_name = $_GET['module'];
$id = $_GET['id'];

// build query for each supported module type
switch ($module_name) {
  case 'Contacts':
    $sql = "SELECT * FROM contacts where id='".$id."'";
    break;
  case 'Accounts':
    $sql = "SELECT * FROM accounts where id='".$id."'";
    break;
  default:
    exit;
}

global $sugar_config;

// connect to sugar db
$cn = mysql_connect($sugar_config['dbconfig']['db_host_name'], 
                    $sugar_config['dbconfig']['db_user_name'], 
                    $sugar_config['dbconfig']['db_password']);
$db = mysql_select_db($sugar_config['dbconfig']['db_name'],$cn);
$result = mysql_query($sql, $cn);
$row = mysql_fetch_assoc($result);

Header('Content-disposition: ' . ' inline; filename=test.lasxml'); 
Header('Content-type: ' . 'application/.vnd.las.las+xml'); 


//default parser in version 5.x
$xml = simplexml_load_string('<LADATA></LADATA>');

//create ControlData element, to configure basic behavior
$ControlElement = $xml->addChild('ControlData');
$HostElement = $ControlElement->addChild('HostName', 'Sample PHP Script');    
$DataElement = $ControlElement->addChild('DataPersistence', '0'); //set to 1 to have data "stick" based on client number.

///begin ContactRecord element to hold the primary contact data 
$ContactElement = $xml->addChild('ContactRecord');   
$temp = $ContactElement->addChild('CLIENT_ID', $id);
$temp->addAttribute("xml:space", 'preserve');  

$temp = $ContactElement->addChild('ClientFirstName', '');
$temp = $ContactElement->addChild('ClientLastName', $row['name']);
$temp = $ContactElement->addChild('ClientAddress', str_replace("&", "&amp;",$row['mailing_address_street'])); //str_replace necessary because simplexml does not handle "&" encoding properly
$temp = $ContactElement->addChild('ClientCity', str_replace("&", "&amp;",$row['mailing_address_city']));
$temp = $ContactElement->addChild('ClientState', $row['mailing_address_state']);
$temp = $ContactElement->addChild('ClientZip', $row['mailing_address_postalcode']);
$temp = $ContactElement->addChild('ClientHomePhone', '212-555-1212'); 
//we could also insert beneficiary or othe associated records here...
//do the print back

echo $xml->asXML();


// while ($row = mysql_fetch_assoc($result)) {
  // foreach($row as $key => $value) {
      // echo "$key = $value <br />";
   // }
// }



//header('Location: '.$output_path);    
?>