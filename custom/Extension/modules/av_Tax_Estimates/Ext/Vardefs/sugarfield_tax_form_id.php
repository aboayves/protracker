<?php
// created: 2012-12-19 11:35:15
$dictionary["av_Tax_Estimates"]["fields"]["tax_form_id"] = array (
	'name' => 'tax_form_id',
	'rname' => 'id',
	'vname' => 'LBL_TAX_FORM_ID',
	'type' => 'id',
	'table' => 'av_tax_forms',
	'isnull' => 'true',
	'module' => 'av_Tax_Forms',
	'dbtype' => 'id',
	'required' => false,
	'massupdate' => false,
	'reportable' => false,
	'importable' => false,
	'duplicate_merge' => 'disabled',
);
$dictionary["av_Tax_Estimates"]["fields"]["av_Tax_Forms_name"] = array (
	'required' => false,
	'source' => 'non-db',
	'name' => 'av_Tax_Forms_name',
	'vname' => 'LBL_AV_TAX_FORMS_NAME',
	'type' => 'relate',
	'rname' => 'name',
	'id_name' => 'tax_form_id',
	'join_name' => 'av_tax_forms',
	'link' => 'av_tax_forms',
	'table' => 'av_tax_forms',
	'isnull' => 'true',
	'module' => 'av_Tax_Forms',
);
$dictionary["av_Tax_Estimates"]["fields"]["av_tax_forms"] = array (
	'name' => 'av_tax_forms',
	'type' => 'link',
	'relationship' => 'av_tax_estimates_av_tax_forms',
	'module' => 'av_Tax_Forms',
	'bean_name' => 'av_Tax_Forms',
	'source' => 'non-db',
	'vname' => 'LBL_AV_TAX_FORMS',
);
$dictionary["av_Tax_Estimates"]["relationships"]["av_tax_estimates_av_tax_forms"] = array (
	'lhs_module' => 'av_Tax_Estimates',
	'lhs_table' => 'av_tax_estimates',
	'lhs_key' => 'tax_form_id',
	'rhs_module' => 'av_Tax_Forms',
	'rhs_table' => 'av_tax_forms',
	'rhs_key' => 'id',
	'relationship_type' => 'one-to-many',
);
?>
