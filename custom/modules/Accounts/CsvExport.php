<?php

$record_id = $_REQUEST['record'];
$account = loadBean('Accounts');
$account->retrieve($record_id);

$account->load_relationship('contacts');
$contact_id_list = $account->contacts->get();
$contact_id = array_shift($contact_id_list);

$contact = loadBean('Contacts');
$contact->retrieve($contact_id);


header('Content-Type: text/csv');
header('Cache-Control: public, must-revalidate, max-age=0');
header('Pragma: public');
header('Expires: Fri, 16 Jun 1978 16:00:00 GMT');
header('Last-Modified: ' . gmdate('D, d M Y H:i:s').' GMT');
header('Content-Disposition: inline; filename="account_info.csv";');


$header_row = array(
	'First Name',
	'Last Name',
	'Street Address',
	'City',
	'State',
	'ZIP Code',
	'Country',
);

$data_row = array(
  $contact->first_name,
  $contact->last_name,
  $account->billing_address_street,
  $account->billing_address_city,
  $account->billing_address_state,
  $account->billing_address_postalcode,
  $account->billing_address_country,
);

$csvoutput = fopen('php://output', 'w');
fputcsv($csvoutput, $header_row, ",", '"');
fputcsv($csvoutput, $data_row, ",", '"');
fclose($csvoutput);
exit;
?>
