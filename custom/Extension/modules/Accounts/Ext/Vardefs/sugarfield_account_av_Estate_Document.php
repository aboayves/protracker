<?php$dictionary["Account"]["fields"]["account_av_estate_documents"] = array (	'name' => 'account_av_estate_documents',	'type' => 'link',	'relationship' => 'account_av_estate_documents',	'module' => 'Accounts',	'bean_name' => 'Accounts',	'source' => 'non-db',	'vname' => 'LBL_ACCOUNTS',);$dictionary["Account"]["relationships"]["account_av_estate_documents"] = array (	'lhs_module' => 'Accounts',	'lhs_table' => 'accounts',	'lhs_key' => 'id',	'rhs_module' => 'av_Estate_Documents',	'rhs_table' => 'av_estate_documents',	'rhs_key' => 'account_id',	'relationship_type' => 'one-to-many',);?>