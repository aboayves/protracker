<?php
// created: 2012-05-21 17:10:30
$dictionary["av_Groups"]["fields"]["av_groups_notes"] = array (
  'name' => 'av_groups_notes',
  'type' => 'link',
  'relationship' => 'av_groups_notes',
  'vname' => 'LBL_GROUPS_NOTES_TITLE',
  'module' => 'Notes',
  'source' => 'non-db',
);
$dictionary['av_Groups']['relationships']['av_groups_notes'] = array(
 'lhs_module'=> 'av_Groups',
 'lhs_table'=> 'av_groups',
 'lhs_key' => 'id',
 'rhs_module'=> 'Notes',
 'rhs_table'=> 'notes',
 'rhs_key' => 'av_group_id',
 'relationship_type'=>'one-to-many'
);
