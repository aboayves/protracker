<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 * By installing or using this file, you are confirming on behalf of the entity
 * subscribed to the SugarCRM Inc. product ("Company") that Company is bound by
 * the SugarCRM Inc. Master Subscription Agreement (“MSA”), which is viewable at:
 * http://www.sugarcrm.com/master-subscription-agreement
 *
 * If Company is not bound by the MSA, then by installing or using this file
 * you are agreeing unconditionally that Company will be bound by the MSA and
 * certifying that you have authority to bind Company accordingly.
 *
 * Copyright (C) 2004-2013 SugarCRM Inc.  All rights reserved.
 ********************************************************************************/

/*********************************************************************************

 * Description:
 ********************************************************************************/







// ProductType is used to store customer information.
class ProductType extends SugarBean {
	// Stored fields
	var $id;
	var $deleted;
	var $date_entered;
	var $date_modified;
	var $modified_user_id;
	var $created_by;
	var $created_by_name;
	var $modified_by_name;
	var $name;
	var $description;

	var $table_name = "product_types";
	var $rel_products = "products";
	var $module_dir = 'ProductTypes';
	var $object_name = "ProductType";

	var $new_schema = true;

	var $importable = true;
	// This is used to retrieve related fields from form posts.
	var $additional_column_fields = Array();

	function ProductType() {
		parent::SugarBean();
		$this->disable_row_level_security =true;
	}

	

	function get_summary_text()
	{
		return "$this->name";
	}

	function get_product_types($add_blank=false)
	{
		$query = "SELECT id, name FROM $this->table_name where deleted=0 order by list_order asc";
		$result = $this->db->query($query, false);
		$GLOBALS['log']->debug("get_product_types: result is ".print_r($result,true));

		$list = array();
		if ($add_blank) {
			$list['']='';
		}
		//if($this->db->getRowCount($result) > 0){
			// We have some data.
			while (($row = $this->db->fetchByAssoc($result)) != null) {
			//while ($row = $this->db->fetchByAssoc($result)) {
				$list[$row['id']] = $row['name'];
				$GLOBALS['log']->debug("row id is:".$row['id']);
				$GLOBALS['log']->debug("row name is:".$row['name']);
			}
		//}
		return $list;
	}

	function save_relationship_changes($is_update)
    {

    }

	function clear_product_producttype_relationship($producttype_id)
	{
		$query = "UPDATE $this->rel_products set type_id='' where (type_id='$producttype_id') and deleted=0";
		$this->db->query($query,true,"Error clearing producttype to producttype relationship: ");
	}

	function mark_relationships_deleted($id)
	{
		$this->clear_product_producttype_relationship($id);
	}

	function fill_in_additional_list_fields()
	{
		$this->fill_in_additional_detail_fields();
	}

	function fill_in_additional_detail_fields() {

	}

	function get_list_view_data(){
		$temp_array = $this->get_list_view_array();
        $temp_array["ENCODED_NAME"]=$this->name;
//    	$temp_array["ENCODED_NAME"]=htmlspecialchars($this->name, ENT_QUOTES);
    	return $temp_array;

	}
	/**
		builds a generic search based on the query string using or
		do not include any $this-> because this is called on without having the class instantiated
	*/
	function build_generic_where_clause ($the_query_string) {
	$where_clauses = Array();
	$the_query_string = $GLOBALS['db']->quote($the_query_string);
	array_push($where_clauses, "name like '$the_query_string%'");

	$the_where = "";
	foreach($where_clauses as $clause)
	{
		if($the_where != "") $the_where .= " or ";
		$the_where .= $clause;
	}


	return $the_where;
}


}

?>