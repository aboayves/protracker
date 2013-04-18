<?php
require_once('modules/Home/QuickSearch.php');

class quicksearchQueryCustom extends quicksearchQuery{
    protected function getUserArray($condition)
    {
        return (showFullName())
            // utils.php, if system is configured to show full name
            ? getUserArrayFromFullName($condition, true)
            : get_user_array(
					false, 
					'Active', 
					'', 
					false, 
					$condition,
					' AND portal_only=0  AND users.id
							  IN (								  
									SELECT users.id
									FROM users
									RIGHT JOIN acl_roles_users ON ( acl_roles_users.user_id = users.id AND acl_roles_users.deleted =0 )
									RIGHT JOIN acl_roles ON ( acl_roles.id = acl_roles_users.role_id AND acl_roles.deleted =0 
								  )
							  )',
					false
				);
    }
}
?>