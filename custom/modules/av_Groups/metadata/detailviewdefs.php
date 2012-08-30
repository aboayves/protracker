<?php
$module_name = 'av_Groups';
$viewdefs [$module_name] = 
array (
  'DetailView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'buttons' => 
        array (
          0 => 'EDIT',
          1 => 'DUPLICATE',
          2 => 'DELETE',
          3 => 'FIND_DUPLICATES',
		  4 => array('customCode' => '<input class="button" onclick="window.open(\'index.php?module=av_Groups&action=MergetoWord&record={$fields.id.value}&name={$fields.name.value}&sugar_body_only=true\');" value="Merge to Word">'),
		  5 => 
		  array(
		  	'customCode' => '{$mail_to_members}',   
		  ),
		  6 => array('customCode' => '<input class="button" onclick="window.open(\'index.php?module=av_Groups&action=PrintMembershipList&record={$fields.id.value}&name={$fields.name.value}&sugar_body_only=true\');" value="Print Memberships">'),
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
      'useTabs' => true,
      'syncDetailEditViews' => true,
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 'communication_type',
          1 => 'membership_expiration_days',
        ),
        1 => 
        array (
          0 => 'delivery_method',
          1 => 'assigned_user_name',
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'rt_offices_av_groups_name',
            'studio' => 'visible',
            'label' => 'LBL_OFFICE',
          ),
          1 => 
          array (
            'name' => 'category_c',
            'studio' => 'visible',
            'label' => 'LBL_CATEGORY',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'status_c',
            'studio' => 'visible',
            'label' => 'LBL_STATUS',
          ),
          1 => 
          array (
            'name' => 'priority_c',
            'studio' => 'visible',
            'label' => 'LBL_PRIORITY',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'last_checked_c',
            'label' => 'LBL_LAST_CHECKED',
          ),
        ),
        5 => 
        array (
          0 => 'description',
        ),
      ),
    ),
  ),
);
?>
