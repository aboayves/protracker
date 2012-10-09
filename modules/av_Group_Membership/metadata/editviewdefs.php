<?php
$module_name = 'av_Group_Membership';
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
	  'javascript' => '
	  	<script type="text/javascript">
			document.getElementById(\'opted_out\').setAttribute(\'onclick\',\'return false\');
		</script>
	  ',
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 'name',
          1 => 'parent_name',
        ),
        1 => 
        array (
          0 => 'av_groups_name',
          1 => 'include',
        ),
        2 => 
        array (
          0 => 
		  array(
		  	'name' => 'date_add_to_grp',
			'customCode' => '{$fields.date_add_to_grp.value}',
		  ),
          1 => 'delivery_method',
        ),
        3 => 
        array (
          0 => 
		  array(
		  	'name' => 'opted_out',
		  ),
          1 => 'expiration_date',
        ),
        4 => 
        array (
          0 => 'comments',
          1 => 
		  array(
		  	'name' => 'envelope',
			'type' => 'readOnly',
		  ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'destination_address',
            'comment' => 'Destination Address',
            'label' => 'LBL_DESTINATION_ADDRESS',
			'type' => 'readOnly',
          ),
          1 => '',
        ),
      ),
    ),
  ),
);
?>