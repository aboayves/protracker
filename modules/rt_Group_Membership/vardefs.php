<?php
/*********************************************************************************
 * The contents of this file are subject to the SugarCRM Master Subscription
 * Agreement ("License") which can be viewed at
 * http://www.sugarcrm.com/crm/master-subscription-agreement
 * By installing or using this file, You have unconditionally agreed to the
 * terms and conditions of the License, and You may not use this file except in
 * compliance with the License.  Under the terms of the license, You shall not,
 * among other things: 1) sublicense, resell, rent, lease, redistribute, assign
 * or otherwise transfer Your rights to the Software, and 2) use the Software
 * for timesharing or service bureau purposes such as hosting the Software for
 * commercial gain and/or for the benefit of a third party.  Use of the Software
 * may be subject to applicable fees and any use of the Software without first
 * paying applicable fees is strictly prohibited.  You do not have the right to
 * remove SugarCRM copyrights from the source code or user interface.
 *
 * All copies of the Covered Code must include on each user interface screen:
 *  (i) the "Powered by SugarCRM" logo and
 *  (ii) the SugarCRM copyright notice
 * in the same form as they appear in the distribution.  See full license for
 * requirements.
 *
 * Your Warranty, Limitations of liability and Indemnity are expressly stated
 * in the License.  Please refer to the License for the specific language
 * governing these rights and limitations under the License.  Portions created
 * by SugarCRM are Copyright (C) 2004-2012 SugarCRM, Inc.; All Rights Reserved.
 ********************************************************************************/

$dictionary['rt_Group_Membership'] = array(
	'table'=>'rt_group_membership',
	'audited'=>true,
		'duplicate_merge'=>true,
		'fields'=>array (
  'parent_name' => 
  array (
    'required' => true,
    'source' => 'non-db',
    'name' => 'parent_name',
    'vname' => 'LBL_FLEX_RELATE',
    'type' => 'parent',
    'massupdate' => 0,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => false,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'calculated' => false,
    'len' => 25,
    'size' => '20',
    'options' => 'parent_type_display_list',
    'studio' => 'visible',
    'type_name' => 'parent_type',
    'id_name' => 'parent_id',
    'parent_type' => 'record_type_display',
  ),
  'parent_type' => 
  array (
    'required' => false,
    'name' => 'parent_type',
    'vname' => 'LBL_PARENT_TYPE',
    'type' => 'parent_type',
    'massupdate' => 0,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => 0,
    'audited' => false,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'calculated' => false,
    'len' => 255,
    'size' => '20',
    'dbType' => 'varchar',
    'studio' => 'hidden',
  ),
  'parent_id' => 
  array (
    'required' => false,
    'name' => 'parent_id',
    'vname' => 'LBL_PARENT_ID',
    'type' => 'id',
    'massupdate' => 0,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => 0,
    'audited' => false,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'calculated' => false,
    'len' => 36,
    'size' => '20',
  ),
  'av_groups_name' => 
  array (
	'name' => 'av_groups_name',
	'rname' => 'name',
	'id_name' => 'av_groups_id',
	'vname' => 'LBL_GROUP',
	'type' => 'relate',
	'table' => 'av_groups',
	'isnull' => 'true',
	'module' => 'av_Groups',
	'dbType' => 'varchar',
	'len' => '255',
	'source' => 'non-db',
	'unified_search' => true,
   ),
   'av_groups_id' => 
   array (
	 'name' => 'av_groups_id',
	 'vname' => 'LBL_ACCOUNT_ID',
	 'type' => 'id',
   ),
  'include' =>
  array(
    'name' => 'include',
    'vname' => 'LBL_INCLUDE',
    'type' => 'bool',
    'default' => true,
    'comments' => 'Check Field dependent on related Contact Opted Out',
  ),
  'date_add_to_grp' =>
  array(
    'name' => 'date_add_to_grp',
	'type' => 'date',
    'vname' => 'LBL_DATE_ADD_GRP',
    'comments' => 'Date Field When the Added to Group',
  ),
  'delivery_method' => 
  array(
    'name' => 'delivery_method',
    'vname' => 'LBL_DELIVERY_METHOD',
    'type' => 'enum',
    'options' => 'grp_delivery_method_list',
    'comments' => 'Group Membership module Default Delivery Methods',
  ),
  'opted_out' =>
  array(
    'name' => 'opted_out',
    'vname' => 'LBL_OPTED_OUT',
    'type' => 'bool',
    'comments' => 'Check Field dependent on related Contact Opted Out',
  ),
  'comments' =>
  array(
    'name' => 'comments',
    'vname' => 'LBL_COMMENTS',
    'type' => 'text',
    'comments' => 'Text Area for Comments',
  ),
  'envelope' =>
  array(
    'name' => 'envelope',
    'vname' => 'LBL_ENVELOPE',
    'type' => 'text',
    'comments' => 'Text Area dependent on related Contact/Client Envelope field',
  ),
  'expiration_date' =>
  array(
    'name' => 'expiration_date',
    'vname' => 'LBL_EXPIRATION_DATE',
    'type' => 'date',
    'comments' => 'Expiration Date Dependent on Groups Memberships Expiration Days',
  ),
  'destination_address' => 
  array(
	'name' => 'destination_address',
	'vname' => 'LBL_DESTINATION_ADDRESS',
	'type' => 'text',
	'len' => '255',
	'audited'=>false,
	'required'=>false,
	'comment' => 'Destination Address'
  ),
 ),
	'relationships'=>array (
),
	'optimistic_locking'=>true,
		'unified_search'=>true,
	);
if (!class_exists('VardefManager')){
        require_once('include/SugarObjects/VardefManager.php');
}
VardefManager::createVardef('rt_Group_Membership','rt_Group_Membership', array('basic','team_security','assignable'));
