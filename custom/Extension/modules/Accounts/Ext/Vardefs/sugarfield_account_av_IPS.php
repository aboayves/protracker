<?php$dictionary["Account"]["fields"]["account_av_ips"] = array (	'name' => 'account_av_ips',	'type' => 'link',	'relationship' => 'account_av_ips',	'module' => 'Accounts',	'bean_name' => 'Accounts',	'source' => 'non-db',	'vname' => 'LBL_ACCOUNTS',);$dictionary["Account"]["relationships"]["account_av_ips"] = array (	'lhs_module' => 'Accounts',	'lhs_table' => 'accounts',	'lhs_key' => 'id',	'rhs_module' => 'av_IPS',	'rhs_table' => 'av_ips',	'rhs_key' => 'account_id',	'relationship_type' => 'one-to-many',);?>