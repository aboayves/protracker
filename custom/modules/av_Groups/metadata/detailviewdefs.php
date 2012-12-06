<?php
$module_name = 'av_Groups';
$viewdefs [$module_name] = 
array (
  'DetailView' => 
  array (
    'templateMeta' => 
    array (
	
	   'includes' => 
      array (
		  0 => 
		  array (
			'file' => 'custom/include/js/reportsPopupav_Groups.js',
		  ),
		),
      'form' => 
      array (
        'buttons' => 
        array (
          0 => 'EDIT',
          1 => 'DUPLICATE',
          2 => 'DELETE',
          3 => 'FIND_DUPLICATES',
		  5 => 
		  array(
		  	'customCode' => '{$mail_to_members}',   
		  ),
		  6 => 
		  array(
			'customCode' => '<input title="Print Memberships" type="button" name="printMemberships" id="printMemberships" onclick="window.open(\'index.php?module=av_Groups&action=PrintMembershipList&record={$fields.id.value}&name={$fields.name.value}&sugar_body_only=true\');" value="Print Memberships">'
		  ),
		  7 => 
		  array(
             'customCode' => '<input title="Add a document" type="button" name="addAdocument" id="addAdocument" onclick="window.location=\'index.php?module=Documents&action=EditView&attach_to_group_id={$fields.id.value}\'" value="Add a document">'
		  ),
		  8 => 
		  array(
             'customCode' => '<input title="Schedule Call" type="button" name="scheduleCall" id="scheduleCall" onclick="window.location=\'index.php?module=Calls&action=EditView&attach_to_group_id={$fields.id.value}\'" value="Schedule Call">'
		  ),
		  9 => 
		  array(
			'customCode' => '<input title="Assign Task to Members" type="button" name="assignTasks" id="assignTasks" onclick="window.location=\'index.php?module=Tasks&action=EditView&attach_to_group_id={$fields.id.value}\';" value="Assign Task to Members">'
		  ),
		  10 => 
		  array(
			'customCode' => '<input title="Purge Expired Members" type="button" name="purgeExpiredMembers" id="purgeExpiredMembers" onclick="window.location=\'index.php?module=av_Groups&action=PurgeExpiredMembers&record={$fields.id.value}&sugar_body_only=true\';" value="Purge Expired Members">'
		  ),
		  11 => 
		  array(
		  	'customCode' => '<input title="Schedule Meeting" type="button" name="scheduleMeeting" id="scheduleMeeting" onclick="window.location=\'index.php?module=Meetings&action=EditView&attach_to_group_id={$fields.id.value}\';" value="Schedule Meeting">'
		  ),
		  12 => 
		  array(
		  	'customCode' => '<input title="Add Note to Group" type="button" name="addNote2Group" id="addNote2Group" onclick="window.location=\'index.php?module=Notes&action=EditView&attach_to_group_id={$fields.id.value}\';" value="Add Note to Group">'
		  ),
		  13 => 
		  array(
		  	'customCode' => '<input title="Bulk Mail Export" type="button" name="BulkMailExport" id="BulkMailExport" onclick="window.open(\'index.php?module=av_Groups&action=BulkMailExport&record={$fields.id.value}&name={$fields.name.value}&sugar_body_only=true\');" value="Bulk Mail Export">'
		  ),
		  14 => 
		  array(
		  	'customCode' => '<input title="Mass Update" type="button" name="MassUpdate" id="MassUpdate" onclick="document.getElementById(\'massupdate_form\').style.display = \'\'; var yLoc = YAHOO.util.Dom.getY(\'massupdate_form\'); scroll(0,yLoc);" value="Mass Update">'
		  ),
		  15 => 
		  array(
		  	'customCode' => '<input title="Merge Contacts to Word" type="button" name="MergeContacts2Word" id="MergeContacts2Word" onclick="window.open(\'index.php?module=av_Groups&action=MergeContacts2Word&record={$fields.id.value}&name={$fields.name.value}&sugar_body_only=true\');" value="Merge Contacts to Word">',
		  ),
		  16 => 
		  array(
		  	'customCode' => '<input title="Merge Clients to Word" type="button" name="MergeClients2Word" id="MergeClients2Word" onclick="window.open(\'index.php?module=av_Groups&action=MergeClients2Word&record={$fields.id.value}&name={$fields.name.value}&sugar_body_only=true\');" value="Merge Clients to Word">',
		  ),
		  17 => 
		  array(
		  	'customCode' => '<input onclick="window.location=\'index.php?module=av_Workflow&action=assign&populate_parent_type=av_Groups&populate_parent=true&populate_parent_name={$fields.name.value}&populate_parent_id={$fields.id.value}\';" title="Assign Workflow" type="button" name="assignWorkflow" id="assignWorkflow" value="Assign Workflow">'
		  ),
		  18 => 
		  array(
		  	'customCode' => '<input onclick="reportPopupClient(\'{$fields.id.value}\')" title="Select Clients using Group Rules" type="button" name="reportsPopupClients" id="reportsPopupClients" value="Select Clients using Group Rules">'
		  ),
		  19 => 
		  array(
		  	'customCode' => '<input onclick="reportpopupContact(\'{$fields.id.value}\')" title="Select Contacts using Group Rules" type="button" name="reportsPopupContacts" id="reportsPopupContacts" value="Select Contacts using Group Rules">'
		  ),
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
          0 => 'delivery_method_av_group',
          1 => 'membership_expiration_days',
        ),
        1 => 
        array (
          0 => 'assigned_user_name',
          1 => 
          array (
            'name' => 'av_offices_av_groups_name',
            'studio' => 'visible',
            'label' => 'LBL_OFFICE',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'priority_c',
            'studio' => 'visible',
            'label' => 'LBL_PRIORITY',
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
          1 => 
          array (
            'name' => 'contacts_av_groups_1_name',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'contacts_av_groups_2_name',
          ),
        ),
      ),
    ),
  ),
);
?>
