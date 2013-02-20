<?php
$module_name = 'av_Group_Membership';
$viewdefs [$module_name] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
      'includes' => 
      array (
        0 => 
        array (
          'file' => 'custom/modules/av_Group_Membership/custom_js.js',
        ),
      ),
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
          0 => 
          array (
            'name' => 'name',
            'type' => 'readonly',
          ),
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
          1 => 
          array (
            'name' => 'opted_out',
          ),
        ),
        3 => 
        array (
          0 => 'delivery_method',
          1 => 'expiration_date',
        ),
      ),
    ),
  ),
);
?>
