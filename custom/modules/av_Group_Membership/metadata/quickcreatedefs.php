<?php
$module_name = 'av_Group_Membership';
$viewdefs [$module_name] = 
array (
  'QuickCreate' => 
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
          1 => 
          array (
            'name' => 'parent_name',
            'studio' => 'visible',
            'label' => 'LBL_FLEX_RELATE',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'av_groups_name',
            'displayParams' => 
            array (
              'field_to_name_array' => 
              array (
                'id' => 'av_groups_id',
                'name' => 'av_groups_name',
                'delivery_method' => 'delivery_method',
              ),
              'additionalFields' => 
              array (
                'delivery_method' => 'delivery_method',
              ),
            ),
          ),
          1 => 'include',
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'date_add_to_grp',
            'label' => 'LBL_DATE_ADD_GRP',
          ),
          1 => 'delivery_method',
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'opted_out',
            'displayParams' => 
            array (
              'javascript' => 'onchange="return false;"',
            ),
          ),
          1 => 
          array (
            'name' => 'expiration_date',
            'label' => 'LBL_EXPIRATION_DATE',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'comments',
            'label' => 'LBL_COMMENTS',
          ),
          1 => 
          array (
            'name' => 'envelope',
            'label' => 'LBL_ENVELOPE',
          ),
        ),
        5 => 
        array (
          0 => 'description',
          1 => 
          array (
            'name' => 'destination_address',
            'comment' => 'Destination Address',
            'label' => 'LBL_DESTINATION_ADDRESS',
          ),
        ),
        6 => 
        array (
          0 => 'assigned_user_name',
          1 => '',
        ),
        7 => 
        array (
          0 => '',
          1 => '',
        ),
        8 => 
        array (
          0 => '',
          1 => 
          array (
            'name' => 'team_name',
            'displayParams' => 
            array (
              'display' => true,
            ),
          ),
        ),
        9 => 
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
