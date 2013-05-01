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
        1 => 
        array (
          'file' => 'custom/include/js/jquery/jquery.blockUI.js',
        ),
        2 => 
        array (
          'file' => 'custom/modules/av_Groups/custom_js.js',
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
          4 => 
          array (
            'customCode' => '{$mail_to_members}',
          ),
          5 => 
          array (
            'customCode' => '<input title="Print Memberships" type="button" name="printMemberships" id="printMemberships" onclick="window.open(\'index.php?module=av_Groups&action=PrintMembershipList&record={$fields.id.value}&name={$fields.name.value}&sugar_body_only=true\');" value="Print Memberships">',
          ),
          6 => 
          array (
            'customCode' => '<input title="Add a document" type="button" name="addAdocument" id="addAdocument" onclick="window.location=\'index.php?module=Documents&action=EditView&attach_to_group_id={$fields.id.value}\'" value="Add a document">',
          ),
          7 => 
          array (
            'customCode' => '<input title="Schedule Call" type="button" name="scheduleCall" id="scheduleCall" onclick="window.location=\'index.php?module=Calls&action=EditView&attach_to_group_id={$fields.id.value}\'" value="Schedule Call">',
          ),
          8 => 
          array (
            'customCode' => '<input title="Assign Task to Members" type="button" name="assignTasks" id="assignTasks" onclick="window.location=\'index.php?module=Tasks&action=EditView&attach_to_group_id={$fields.id.value}\';" value="Assign Task to Members">',
          ),
          9 => 
          array (
            'customCode' => '<input title="Purge Expired Members" type="button" name="purgeExpiredMembers" id="purgeExpiredMembers" onclick="window.location=\'index.php?module=av_Groups&action=PurgeExpiredMembers&record={$fields.id.value}&sugar_body_only=true\';" value="Purge Expired Members">',
          ),
          10 => 
          array (
            'customCode' => '<input title="Schedule Meeting" type="button" name="scheduleMeeting" id="scheduleMeeting" onclick="window.location=\'index.php?module=Meetings&action=EditView&attach_to_group_id={$fields.id.value}\';" value="Schedule Meeting">',
          ),
          11 => 
          array (
            'customCode' => '<input title="Add Note to Group" type="button" name="addNote2Group" id="addNote2Group" onclick="window.location=\'index.php?module=Notes&action=EditView&attach_to_group_id={$fields.id.value}\';" value="Add Note to Group">',
          ),
          12 => 
          array (
            'customCode' => '<input title="Bulk Mail Export" type="button" name="BulkMailExport" id="BulkMailExport" onclick="window.open(\'index.php?module=av_Groups&action=BulkMailExport&record={$fields.id.value}&name={$fields.name.value}&sugar_body_only=true\');" value="Bulk Mail Export">',
          ),
          13 => 
          array (
            'customCode' => '<input title="Mass Update" type="button" name="MassUpdate" id="MassUpdate" onclick="document.getElementById(\'massupdate_form\').style.display = \'\'; var yLoc = YAHOO.util.Dom.getY(\'massupdate_form\'); scroll(0,yLoc);" value="Mass Update">',
          ),
          14 => 
          array (
            'customCode' => '<input title="Merge Contacts to Word" type="button" name="MergeContacts2Word" id="MergeContacts2Word" onclick="window.open(\'index.php?module=av_Groups&action=MergeContacts2Word&record={$fields.id.value}&name={$fields.name.value}&sugar_body_only=true\');" value="Merge Contacts to Word">',
          ),
          15 => 
          array (
            'customCode' => '<input title="Merge Clients to Word" type="button" name="MergeClients2Word" id="MergeClients2Word" onclick="window.open(\'index.php?module=av_Groups&action=MergeClients2Word&record={$fields.id.value}&name={$fields.name.value}&sugar_body_only=true\');" value="Merge Clients to Word">',
          ),
          16 => 
          array (
            'customCode' => '<input onclick="window.location=\'index.php?module=av_Workflow&action=assign&populate_parent_type=av_Groups&populate_parent=true&populate_parent_name={$fields.name.value}&populate_parent_id={$fields.id.value}\';" title="Assign Workflow" type="button" name="assignWorkflow" id="assignWorkflow" value="Assign Workflow">',
          ),
          17 => 
          array (
            'customCode' => '<input onclick="reportPopupClient(\'{$fields.id.value}\')" title="Select Clients from Reports" type="button" name="reportsPopupClients" id="reportsPopupClients" value="Select Clients from Reports">',
          ),
          18 => 
          array (
            'customCode' => '<input onclick="reportpopupContact(\'{$fields.id.value}\')" title="Select Contacts from Reports" type="button" name="reportsPopupContacts" id="reportsPopupContacts" value="Select Contacts from Reports">',
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
      'lbl_editview_panel1' => 
      array (
        0 => 
        array (
          0 => 'name',
          1 => 'assigned_user_name',
        ),
        1 => 
        array (
          0 => 'delivery_method_av_group',
          1 => 
          array (
            'name' => 'av_offices_name',
            'label' => 'LBL_AV_OFFICES_NAME',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'status',
            'comment' => '',
            'label' => 'LBL_STATUS',
          ),
          1 => 
          array (
            'name' => 'priority',
            'comment' => '',
            'label' => 'LBL_PRIORITY',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'delivery_method',
            'comment' => '',
            'label' => 'LBL_DELIVERY_METHOD',
          ),
          1 => 'membership_expiration_days',
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'lastupdated',
            'customCode' => '<span id="lastupdated">{$fields.lastupdated.value}</span> <img src="custom/themes/default/images/refresh.jpg" style="cursor:pointer;" height="20px" width="20px" onclick="if(confirm(\'This will remove all the existing members and will run the associated reports to rebuild the group. Continue?\')) rebuildGroup(); " />',
          ),
          1 => 
          array (
            'name' => 'date_checked',
            'comment' => '',
            'label' => 'LBL_DATE_CHECKED',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'document_path',
            'comment' => '',
            'label' => 'LBL_DOCUMENT_PATH',
          ),
        ),
        6 => 
        array (
          0 => 'description',
          1 => 'team_name',
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'date_entered',
            'customCode' => '{$fields.date_entered.value} {$APP.LBL_BY} {$fields.created_by_name.value}',
            'label' => 'LBL_DATE_ENTERED',
          ),
          1 => 
          array (
            'name' => 'date_modified',
            'customCode' => '{$fields.date_modified.value} {$APP.LBL_BY} {$fields.modified_by_name.value}',
            'label' => 'LBL_DATE_MODIFIED',
          ),
        ),
      ),
    ),
  ),
);
?>
