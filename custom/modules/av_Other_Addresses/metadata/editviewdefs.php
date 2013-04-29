<?php
$module_name = 'av_Other_Addresses';
$viewdefs [$module_name] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
      'maxColumns' => '2',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'useTabs' => false,
      'syncDetailEditViews' => true,
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'contact_id_name',
            'label' => 'LBL_CONTACT_ID_NAME',
          ),
          1 => 
          array (
            'name' => 'other_address_descr',
            'comment' => '',
            'label' => 'LBL_OTHER_ADDRESS_DESCR',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'other_address_street',
            'comment' => '',
            'label' => 'LBL_OTHER_ADDRESS_STREET',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'other_address_city',
            'comment' => '',
            'label' => 'LBL_OTHER_ADDRESS_CITY',
          ),
          1 => 
          array (
            'name' => 'other_address_state',
            'comment' => '',
            'label' => 'LBL_OTHER_ADDRESS_STATE',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'other_address_postalcode',
            'comment' => '',
            'label' => 'LBL_OTHER_ADDRESS_POSTALCODE',
          ),
          1 => 
          array (
            'name' => 'other_address_country',
            'comment' => '',
            'label' => 'LBL_OTHER_ADDRESS_COUNTRY',
          ),
        ),
        4 => 
        array (
          0 => 'description',
        ),
      ),
    ),
  ),
);
?>
