<?php

$dictionary["Contact"]["fields"]["other_address_street"] = array (
    'name' => 'other_address_street',
    'vname' => 'LBL_OTHER_ADDRESS_STREET',
    'type' => 'address',
    'dbType' => 'varchar',
    'len' => '150',
    'group' => 'other_address',
    'comment' => 'Street address for other address',
    'calculated' => false,
    'merge_filter' => 'enabled',
    'displayParams' => array (
      'key' => 'other',
      ),
    );

$dictionary["Contact"]["fields"]["other_address_city"] = array (
    'name' => 'other_address_city',
    'vname' => 'LBL_OTHER_ADDRESS_CITY',
    'type' => 'varchar',
    'len' => '100',
    'group' => 'other_address',
    'comment' => 'City for other address',
    'calculated' => false,
    'merge_filter' => 'enabled',
    );

$dictionary["Contact"]["fields"]["other_address_state"] = array (
    'name' => 'other_address_state',
    'vname' => 'LBL_OTHER_ADDRESS_STATE',
    'type' => 'varchar',
    'len' => '100',
    'group' => 'other_address',
    'comment' => 'State for other address',
    'calculated' => false,
    'merge_filter' => 'enabled',
    );

$dictionary["Contact"]["fields"]["other_address_postalcode"] = array (
    'name' => 'other_address_postalcode',
    'vname' => 'LBL_OTHER_ADDRESS_POSTALCODE',
    'type' => 'varchar',
    'len' => '20',
    'group' => 'other_address',
    'comment' => 'Postal code for other address',
    'merge_filter' => 'enabled',
    'calculated' => false,
    );

$dictionary["Contact"]["fields"]["other_address_country"] = array (
    'name' => 'other_address_country',
    'vname' => 'LBL_OTHER_ADDRESS_COUNTRY',
    'type' => 'varchar',
    'group' => 'other_address',
    'comment' => 'Country for other address',
    'merge_filter' => 'enabled',
    'calculated' => false,
    );

?>
