<?php$dictionary["Account"]["fields"]["account_av_professionals"] = array (	'name' => 'account_av_professionals',	'type' => 'link',	'relationship' => 'account_av_professionals',	'module' => 'Accounts',	'bean_name' => 'Accounts',	'source' => 'non-db',	'vname' => 'LBL_ACCOUNTS',);$dictionary["Account"]["relationships"]["account_av_professionals"] = array (	'lhs_module' => 'Accounts',	'lhs_table' => 'accounts',	'lhs_key' => 'id',	'rhs_module' => 'av_Professionals',	'rhs_table' => 'av_professionals',	'rhs_key' => 'account_id',	'relationship_type' => 'one-to-many',);?>