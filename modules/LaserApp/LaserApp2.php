<?php
if (isset($_POST['action']) && $_POST['action'] == 'submitted') {
///////////////////////////////////////////////////////
// A POST request is received. Normally we can now construct the 
// XML document and print back to Laser App.
///////////////////////////////////////////////////////
   
   ///make a random contact ID. If datapersistence=1 then this would add a new record each time.
   srand((double)microtime()*1000000); 
   $number = rand(1,9999999); 
   
   // set the content type so the browser uses Laser App to open the XML
   Header('Content-disposition: ' . ' inline; filename=test.lasxml'); 
   Header('Content-type: ' . 'application/.vnd.las.las+xml'); 

   //handle xml creation differently depending on php version...
   if (version_compare(phpversion(), "5.0.0", ">=")) {
   
   //default parser in version 5.x
    $xml = simplexml_load_string('<LADATA></LADATA>');
	
	//create ControlData element, to configure basic behavior
	$ControlElement = $xml->addChild('ControlData');
    $HostElement = $ControlElement->addChild('HostName', 'Sample PHP Script');    
    $DataElement = $ControlElement->addChild('DataPersistence', '0'); //set to 1 to have data "stick" based on client number.
	
    ///begin ContactRecord element to hold the primary contact data 
	$ContactElement = $xml->addChild('ContactRecord');   
	$temp = $ContactElement->addChild('CLIENT_ID', $number);
    $temp->addAttribute("xml:space", 'preserve');  

	$temp = $ContactElement->addChild('ClientFirstName', $_POST['firstname']);
    $temp = $ContactElement->addChild('ClientLastName', $_POST['lastname']);
    $temp = $ContactElement->addChild('ClientAddress', str_replace("&", "&amp;",$_POST['address'])); //str_replace necessary because simplexml does not handle "&" encoding properly
    $temp = $ContactElement->addChild('ClientCity', str_replace("&", "&amp;",$_POST['city']));
    $temp = $ContactElement->addChild('ClientState', $_POST['state']);
    $temp = $ContactElement->addChild('ClientZip', $_POST['zip']);
    $temp = $ContactElement->addChild('ClientHomePhone', $_POST['phone']); 
	//we could also insert beneficiary or othe associated records here...
	//do the print back
	
	echo $xml->asXML();
   } //is php 5.x
   else {
    //php 4 default parser
    $xml = domxml_new_doc('1.0');
    $root = $xml->create_element('LADATA');
    $root = $xml->append_child($root);
	$ControlElement = $xml->create_element('ControlData');
    $ControlElement = $root->append_child($ControlElement);
    $HostElement = $xml->create_element('HostName');
    $HostElement = $ControlElement->append_child($HostElement);
    $temp = $xml->create_text_node('PHP Example');
    $temp = $HostElement->append_child($temp);
    $DataElement = $xml->create_element('DataPersistence');
    $DataElement = $ControlElement->append_child($DataElement);
    $temp = $xml->create_text_node('0');
    $temp = $DataElement->append_child($temp);
	///begin contact data record... 
	$ContactElement = $xml->create_element('ContactRecord');
    $ContactElement = $root->append_child($ContactElement);
	$CDataElement = $xml->create_element('CLIENT_ID');
    $CDataElement = $ContactElement->append_child($CDataElement);
    $CDataElement->set_attribute('xml:space', 'preserve');
    $temp = $xml->create_text_node($number);
    $temp = $CDataElement->append_child($temp);
	$CDataElement = $xml->create_element('ClientFirstName');
    $CDataElement = $ContactElement->append_child($CDataElement);
    $temp = $xml->create_text_node($_POST['firstname']);
    $temp = $CDataElement->append_child($temp);
    $CDataElement = $xml->create_element('ClientLastName');
    $CDataElement = $ContactElement->append_child($CDataElement);
    $temp = $xml->create_text_node($_POST['lastname']);
    $temp = $CDataElement->append_child($temp);
    $CDataElement = $xml->create_element('ClientAddress');
    $CDataElement = $ContactElement->append_child($CDataElement);
    $temp = $xml->create_text_node($_POST['address']);
    $temp = $CDataElement->append_child($temp);
    $CDataElement = $xml->create_element('ClientCity');
    $CDataElement = $ContactElement->append_child($CDataElement);
    $temp = $xml->create_text_node($_POST['city']);
    $temp = $CDataElement->append_child($temp);
    $CDataElement = $xml->create_element('ClientState');
    $CDataElement = $ContactElement->append_child($CDataElement);
    $temp = $xml->create_text_node($_POST['state']);
    $temp = $CDataElement->append_child($temp);
    $CDataElement = $xml->create_element('ClientZip');
    $CDataElement = $ContactElement->append_child($CDataElement);
    $temp = $xml->create_text_node($_POST['zip']);
    $temp = $CDataElement->append_child($temp);
    $CDataElement = $xml->create_element('ClientHomePhone');
    $CDataElement = $ContactElement->append_child($CDataElement);
    $temp = $xml->create_text_node($_POST['phone']);
    $temp = $CDataElement->append_child($temp);
	//we could also insert beneficiary or othe associated records here...
	
	//do the print back
	echo $xml->dump_mem(true);
   }//is php 4.x
  
} else {
///////////////////////////////////////////////////////
//Print a simple form as a sample "data source" when request 
//is "GET"
///////////////////////////////////////////////////////
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Laser App PHP Sample Script</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<body>
<h3>This PHP script demonstrates a simple launch of Laser App with contact data 
  using the <a href="http://www.laserapp.com/dev/dtd/ladata.xsd" target="_blank">LADATA</a> document 
  type.</h3>
<em>In the &quot;real world&quot; data would come from a database with hundreds 
of available fields to set.</em> 
<!-- Print a simple form for a sample data source -->
<form action="launch_laserapp.php" method="post">
  <table width="500" border="0" cellspacing="2" cellpadding="2">
    <tr> 
      <td colspan="2"><strong>Please enter some contact data:<br>
        </strong></td>
    </tr>
    <tr> 
      <td width="200"><div align="right">First Name:</div></td>
      <td width="67%"><input name="firstname" type="text" value="Joe"></td>
    </tr>
    <tr> 
      <td><div align="right">Last Name:</div></td>
      <td><input name="lastname" type="text" value="Script"></td>
    </tr>
    <tr> 
      <td><div align="right">Address:</div></td>
      <td><input name="address" type="text" value="123 Sample N. Sample Script Blvd." size="45" maxlength="60"></td>
    </tr>
    <tr> 
      <td><div align="right">City:</div></td>
      <td><input name="city" type="text" value="TestCity"></td>
    </tr>
    <tr> 
      <td><div align="right">State:</div></td>
      <td><input name="state" type="text" value="CA" size="5" maxlength="2"></td>
    </tr>
    <tr> 
      <td><div align="right">Zip:</div></td>
      <td><input name="zip" type="text" value="90210" size="15" maxlength="10"></td>
    </tr>
    <tr> 
      <td><div align="right">Phone:</div></td>
      <td><input name="phone" type="text" value="909-555-1212" size="15" maxlength="14"></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="hidden" name="action" value="submitted" /> <input type="submit" name="submit" value="Launch Laser App" /> 
      </td>
    </tr>
  </table>
  <p><br/>
    <br/>
  </p>
  </form>
</body>
</html>

<?php
}
?> 
