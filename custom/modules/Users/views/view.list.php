<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

require_once('modules/Users/views/view.list.php');

class CustomUsersViewList extends UsersViewList {

 	public function listViewProcess()
 	{
 		$this->processSearchForm();
		$this->lv->searchColumns = $this->searchForm->searchColumns;

		if(!$this->headers)
			return;
		if(empty($_REQUEST['search_form_only']) || $_REQUEST['search_form_only'] == false){
			$this->lv->ss->assign("SEARCH",true);
			if(!empty($this->where)){
					$this->where .= " AND";
			}
			
		if(isset($_REQUEST['show_all']) && $_REQUEST['show_all']=='true')
		{
			$this->where .= " (users.status !='Reserved' or users.status is null)";
		}
		else
		{
			$this->where .=" (users.status != 'Reserved' OR users.status IS NULL)
							  AND users.id
							  IN (								  
									SELECT users.id
									FROM users
									RIGHT JOIN acl_roles_users ON ( acl_roles_users.user_id = users.id AND acl_roles_users.deleted =0 )
									RIGHT JOIN acl_roles ON ( acl_roles.id = acl_roles_users.role_id AND acl_roles.deleted =0 
								  )
							  )";		
		}			
			$this->lv->setup($this->seed, 'include/ListView/ListViewGeneric.tpl', $this->where, $this->params);
			$savedSearchName = empty($_REQUEST['saved_search_select_name']) ? '' : (' - ' . $_REQUEST['saved_search_select_name']);
			echo $this->lv->display();
		}
 	}
}