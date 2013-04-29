<?php
// created: 2013-04-19 12:48:16
$dictionary["av_Will_Amendments"]["fields"]["will_id"] = array (
	'name' => 'will_id',
	'rname' => 'id',
	'vname' => 'LBL_WILL_ID',
	'type' => 'id',
	'table' => 'av_wills',
	'isnull' => 'true',
	'module' => 'av_Wills',
	'dbtype' => 'id',
	'required' => false,
	'massupdate' => false,
	'reportable' => false,
	'importable' => false,
	'duplicate_merge' => 'disabled',
);
$dictionary["av_Will_Amendments"]["fields"]["will_id_name"] = array (
	'required' => false,
	'source' => 'non-db',
	'name' => 'will_id_name',
	'vname' => 'LBL_WILL_ID_NAME',
	'type' => 'relate',
	'rname' => 'name',
	'id_name' => 'will_id',
	'join_name' => 'av_wills',
	'link' => 'will_id_av_wills',
	'table' => 'av_wills',
	'isnull' => 'true',
	'module' => 'av_Wills',
);
$dictionary["av_Will_Amendments"]["fields"]["av_wills_will_id"] = array (
	'name' => 'av_wills_will_id',
	'type' => 'link',
	'relationship' => 'will_id_av_wills',
	'module' => 'av_Wills',
	'bean_name' => 'av_Wills',
	'source' => 'non-db',
	'vname' => 'LBL_AV_WILLS',
);
$dictionary["av_Will_Amendments"]["relationships"]["will_id_av_wills"] = array (
	'lhs_module' => 'av_Will_Amendments',
	'lhs_table' => 'av_will_amendments',
	'lhs_key' => 'will_id',
	'rhs_module' => 'av_Wills',
	'rhs_table' => 'av_wills',
	'rhs_key' => 'id',
	'relationship_type' => 'one-to-many',
);
?>
