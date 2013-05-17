<?php
// created: 2012-12-19 10:57:59
$dictionary["Account"]["fields"]["accounts_av_cashflow"] = array (
	'name' => 'accounts_av_cashflow',
	'type' => 'link',
	'relationship' => 'accounts_av_cashflow',
	'source' => 'non-db',
	'vname' => 'LBL_AV_CASHFLOW',
);
$dictionary["Account"]["relationships"]["accounts_av_cashflow"] = array (
	'lhs_module' => 'Accounts',
	'lhs_table' => 'accounts',
	'lhs_key' => 'id',
	'rhs_module' => 'av_Cashflow',
	'rhs_table' => 'av_cashflow',
	'rhs_key' => 'account_id',
	'relationship_type' => 'one-to-many',
);
?>
