<?php$dictionary["Account"]["fields"]["account_av_ird"] = array (	'name' => 'account_av_ird',	'type' => 'link',	'relationship' => 'account_av_ird',	'module' => 'Accounts',	'source' => 'non-db',	'vname' => 'LBL_ACCOUNTS',);$dictionary["Account"]["relationships"]["account_av_ird"] = array (	'lhs_module' => 'Accounts',	'lhs_table' => 'accounts',	'lhs_key' => 'id',	'rhs_module' => 'av_IRD',	'rhs_table' => 'av_ird',	'rhs_key' => 'account_id',	'relationship_type' => 'one-to-many',);?>