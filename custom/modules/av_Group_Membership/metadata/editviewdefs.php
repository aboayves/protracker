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
      'useTabs' => false,
      'syncDetailEditViews' => true,
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
          array (
            'name' => 'date_add_to_grp',
            'customCode' => '{$fields.date_add_to_grp.value}',
          ),
          1 => 'delivery_method',
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'opted_out',
          ),
          1 => 'expiration_date',
        ),
        4 => 
        array (
          0 => 'comments',
          1 => 
          array (
            'name' => 'envelope',
            'type' => 'readOnly',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'description',
            'comment' => 'Full text of the note',
            'label' => 'LBL_DESCRIPTION',
          ),
          1 => 
          array (
            'name' => 'destination_address',
            'comment' => 'Destination Address',
            'label' => 'LBL_DESTINATION_ADDRESS',
            'type' => 'readOnly',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'assigned_user_name',
            'label' => 'LBL_ASSIGNED_TO_NAME',
          ),
          1 => 
          array (
            'name' => 'team_name',
            'label' => 'LBL_TEAMS',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'date_entered',
            'comment' => 'Date record created',
            'label' => 'LBL_DATE_ENTERED',
          ),
          1 => 
          array (
            'name' => 'date_modified',
            'comment' => 'Date record last modified',
            'label' => 'LBL_DATE_MODIFIED',
          ),
        ),
      ),
    ),
  ),
);
?>
