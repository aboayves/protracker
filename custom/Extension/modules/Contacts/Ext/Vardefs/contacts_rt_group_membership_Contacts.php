<?php

$dictionary["Contact"]["fields"]["contacts_rt_group_membership"] = array(
    'name' => 'contacts_rt_group_membership',
    'type' => 'link',
    'relationship' => 'contacts_rt_group_membership',
    'source' => 'non-db',
    'side' => 'left',
    'vname' => 'LBL_CONTACTS_RT_GROUP_MEMBERSHIP_TITLE',
);

$dictionary["Contact"]["relationships"]["contacts_rt_group_membership"] = array(
    'lhs_module' => 'Contacts', 
    'lhs_table' => 'contacts', 
    'lhs_key' => 'id',
    'rhs_module' => 'rt_Group_Membership', 
    'rhs_table' => 'rt_group_membership', 
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many', 
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Contacts'
);
