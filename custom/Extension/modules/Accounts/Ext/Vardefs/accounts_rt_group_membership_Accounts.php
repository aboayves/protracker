<?php

$dictionary["Account"]["fields"]["accounts_rt_group_membership"] = array(
    'name' => 'accounts_rt_group_membership',
    'type' => 'link',
    'relationship' => 'accounts_rt_group_membership',
    'source' => 'non-db',
    'side' => 'left',
    'vname' => 'LBL_ACCOUNTS_RT_GROUP_MEMBERSHIP_TITLE',
);

$dictionary["Account"]["relationships"]["accounts_rt_group_membership"] = array(
    'lhs_module' => 'Accounts', 
    'lhs_table' => 'accounts', 
    'lhs_key' => 'id',
    'rhs_module' => 'rt_Group_Membership', 
    'rhs_table' => 'rt_group_membership', 
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many', 
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Accounts'
);
