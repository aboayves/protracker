<?php$dictionary["Account"]["fields"]["account_av_trusts"] = array (	'name' => 'account_av_trusts',	'type' => 'link',	'relationship' => 'account_av_trusts',	'module' => 'Accounts',	'bean_name' => 'Accounts',	'source' => 'non-db',	'vname' => 'LBL_ACCOUNTS',);$dictionary["Account"]["relationships"]["account_av_trusts"] = array (	'lhs_module' => 'Accounts',	'lhs_table' => 'accounts',	'lhs_key' => 'id',	'rhs_module' => 'av_Trusts',	'rhs_table' => 'av_trusts',	'rhs_key' => 'account_id',	'relationship_type' => 'one-to-many',);?>